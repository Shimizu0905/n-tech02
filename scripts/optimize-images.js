import { fileURLToPath } from 'url';
import { dirname, resolve, relative } from 'path';
import { mkdir, stat, readdir } from 'fs/promises';
import { optimizeImage } from './lib/image-optimizer.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const projectRoot = resolve(__dirname, '..');
const srcDir = resolve(projectRoot, 'src/images');
const destDir = resolve(projectRoot, 'assets/images');

const IMAGE_EXTS = new Set(['.png', '.jpg', '.jpeg', '.svg']);

async function getFiles(dir) {
  const entries = await readdir(dir, { withFileTypes: true });
  const files = [];
  for (const entry of entries) {
    const fullPath = resolve(dir, entry.name);
    if (entry.isDirectory()) {
      files.push(...(await getFiles(fullPath)));
    } else if (IMAGE_EXTS.has(entry.name.substring(entry.name.lastIndexOf('.')))) {
      files.push(fullPath);
    }
  }
  return files;
}

async function needsUpdate(srcPath, destPath) {
  try {
    const [srcStat, destStat] = await Promise.all([
      stat(srcPath),
      stat(destPath),
    ]);
    return srcStat.mtimeMs > destStat.mtimeMs;
  } catch {
    // 出力先が存在しない場合は更新が必要
    return true;
  }
}

(async () => {
  try {
    await mkdir(destDir, { recursive: true });

    console.log('画像最適化を開始（差分チェック）...');
    const srcFiles = await getFiles(srcDir);

    let processed = 0;
    let skipped = 0;
    let totalSaved = 0;
    let totalOriginal = 0;

    for (const srcPath of srcFiles) {
      const relPath = relative(srcDir, srcPath);
      const destPath = resolve(destDir, relPath);

      if (!(await needsUpdate(srcPath, destPath))) {
        skipped++;
        continue;
      }

      try {
        const result = await optimizeImage(srcPath, srcDir, destDir);
        totalOriginal += result.originalSize;
        totalSaved += result.savedBytes;
        processed++;
        const pct = result.originalSize > 0
          ? ((result.savedBytes / result.originalSize) * 100).toFixed(1)
          : '0.0';
        console.log(`  圧縮: ${relPath} (${pct}%削減)`);
      } catch (err) {
        console.error(`  エラー: ${relPath}`, err.message);
      }
    }

    const pct = totalOriginal > 0
      ? ((totalSaved / totalOriginal) * 100).toFixed(1)
      : '0.0';

    console.log(`画像最適化完了: ${processed}ファイル処理, ${skipped}ファイルスキップ (合計${pct}%削減)`);
  } catch (error) {
    console.error('画像最適化エラー:', error);
    process.exit(1);
  }
})();
