import imagemin from 'imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminSvgo from 'imagemin-svgo';
import { readFile, writeFile, mkdir, copyFile } from 'fs/promises';
import { dirname, relative, join, extname } from 'path';
import { glob } from 'glob';

const SUPPORTED_EXTENSIONS = new Set(['.png', '.jpg', '.jpeg', '.svg', '.webp']);
const COPY_ONLY_EXTENSIONS = new Set(['.webp']);

function getPlugins() {
  return [
    imageminMozjpeg({ quality: 75 }),
    imageminPngquant({ quality: [0.5, 0.7], speed: 1 }),
    imageminSvgo({
      plugins: [{ name: 'removeViewBox', active: false }],
    }),
  ];
}

function isImageFile(filePath) {
  return SUPPORTED_EXTENSIONS.has(extname(filePath).toLowerCase());
}

/**
 * 単一画像を圧縮して出力する
 * @param {string} srcPath  - ソース画像の絶対パス
 * @param {string} srcDir   - src/images ルートディレクトリ
 * @param {string} destDir  - assets/images ルートディレクトリ
 */
async function optimizeImage(srcPath, srcDir, destDir) {
  const relPath = relative(srcDir, srcPath);
  const destPath = join(destDir, relPath);

  await mkdir(dirname(destPath), { recursive: true });

  const srcBuffer = await readFile(srcPath);
  const optimizedBuffer = await imagemin.buffer(srcBuffer, {
    plugins: getPlugins(),
  });

  await writeFile(destPath, optimizedBuffer);

  const savedBytes = srcBuffer.length - optimizedBuffer.length;
  return { srcPath, destPath, savedBytes, originalSize: srcBuffer.length };
}

/**
 * webp など最適化不要な画像をそのままコピーする
 */
async function copyImage(srcPath, srcDir, destDir) {
  const relPath = relative(srcDir, srcPath);
  const destPath = join(destDir, relPath);

  await mkdir(dirname(destPath), { recursive: true });
  await copyFile(srcPath, destPath);

  return { srcPath, destPath, savedBytes: 0, originalSize: 0 };
}

/**
 * srcDir 内の全画像を圧縮して destDir に出力する
 */
async function optimizeAllImages(srcDir, destDir) {
  const pattern = join(srcDir, '**/*.{png,jpg,jpeg,svg,webp}').replace(/\\/g, '/');
  const files = await glob(pattern);

  const results = [];
  for (const file of files) {
    try {
      const ext = extname(file).toLowerCase();
      const isCopyOnly = COPY_ONLY_EXTENSIONS.has(ext);

      if (isCopyOnly) {
        const result = await copyImage(file, srcDir, destDir);
        console.log(`  コピー: ${relative(srcDir, file)}`);
        results.push(result);
      } else {
        const result = await optimizeImage(file, srcDir, destDir);
        const pct = result.originalSize > 0
          ? ((result.savedBytes / result.originalSize) * 100).toFixed(1)
          : '0.0';
        console.log(`  圧縮: ${relative(srcDir, file)} (${pct}% 削減)`);
        results.push(result);
      }
    } catch (err) {
      console.error(`  エラー: ${relative(srcDir, file)} - ${err.message}`);
    }
  }

  return results;
}

export { optimizeImage, optimizeAllImages, isImageFile, SUPPORTED_EXTENSIONS };
