#!/bin/bash
# 本番用テーマZIPを作成（不要ファイルを除外）

THEME_DIR="$(cd "$(dirname "$0")/.." && pwd)"
THEME_NAME="$(basename "$THEME_DIR")"
OUTPUT="$THEME_DIR/../${THEME_NAME}.zip"

# 既存ZIPを削除
rm -f "$OUTPUT"

cd "$THEME_DIR/.."

zip -r "$OUTPUT" "$THEME_NAME" \
  -x "${THEME_NAME}/node_modules/*" \
  -x "${THEME_NAME}/src/*" \
  -x "${THEME_NAME}/scripts/*" \
  -x "${THEME_NAME}/.config/*" \
  -x "${THEME_NAME}/.git/*" \
  -x "${THEME_NAME}/.claude/*" \
  -x "${THEME_NAME}/.vscode/*" \
  -x "${THEME_NAME}/claude set/*" \
  -x "${THEME_NAME}/coding-md/*" \
  -x "${THEME_NAME}/xd-file/*" \
  -x "${THEME_NAME}/.gitignore" \
  -x "${THEME_NAME}/.editorconfig" \
  -x "${THEME_NAME}/.mcp.json" \
  -x "${THEME_NAME}/package.json" \
  -x "${THEME_NAME}/package-lock.json" \
  -x "${THEME_NAME}/*.md" \
  -x "${THEME_NAME}/.DS_Store" \
  -x "*/.DS_Store"

echo ""
echo "✓ 作成完了: $OUTPUT"
echo "  サイズ: $(du -h "$OUTPUT" | cut -f1)"
