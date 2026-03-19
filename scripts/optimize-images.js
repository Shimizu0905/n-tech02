import { fileURLToPath } from 'url';
import { dirname, resolve } from 'path';
import { rm, mkdir } from 'fs/promises';
import { optimizeAllImages } from './lib/image-optimizer.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const projectRoot = resolve(__dirname, '..');
const srcDir = resolve(projectRoot, 'src/images');
const destDir = resolve(projectRoot, 'assets/images');

(async () => {
  try {
    await rm(destDir, { recursive: true, force: true });
    await mkdir(destDir, { recursive: true });

    console.log('画像最適化を開始...');
    const results = await optimizeAllImages(srcDir, destDir);

    const totalOriginal = results.reduce((sum, r) => sum + r.originalSize, 0);
    const totalSaved = results.reduce((sum, r) => sum + r.savedBytes, 0);
    const pct = totalOriginal > 0
      ? ((totalSaved / totalOriginal) * 100).toFixed(1)
      : '0.0';

    console.log(`画像最適化完了: ${results.length}ファイル処理 (合計${pct}%削減)`);
  } catch (error) {
    console.error('画像最適化エラー:', error);
    process.exit(1);
  }
})();
