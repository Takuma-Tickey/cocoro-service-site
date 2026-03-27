# cocoro-service-site

`cocoro.faag.co.jp` の保守運用向け WordPress リポジトリです。  
企業公式サイトの継続運用を想定し、テスト環境で検証してから本番へ反映します。

## サイト情報

- 本番: `https://cocoro.faag.co.jp`
- テスト: `http://cocoro.faag.co.jp.testrs.jp` （必要に応じて `https` も利用）
- サーバーパス（本番）: `/home/r0259205/public_html/cocoro.faag.co.jp`
- サーバーパス（テスト）: `/home/r0259205/public_html/cocoro.faag.co.jp.testrs.jp`

## 技術スタック

- CMS: WordPress
- 親テーマ: `wp-content/themes/jinr`
- 子テーマ: `wp-content/themes/jinr-child`

## Git 管理ルール

このリポジトリは Private 前提です。  
機密情報と重い生成物は `.gitignore` で除外しています。

主な除外対象:

- `wp-config.php`
- `phpinfo.php`
- `wp-content/uploads/`
- `wp-content/ewww/`
- `wp-content/cache/`
- `wp-content/languages/`
- `wp-content/w3tc-config/`

## 日常運用フロー（推奨）

1. ローカルで修正
2. テスト環境へ反映して確認
3. 問題なければ Git にコミット
4. GitHub へ Push
5. 本番へ反映

## テスト環境への反映

基本方針:

- 先にテスト環境 (`cocoro.faag.co.jp.testrs.jp`) に反映
- 本番とテストで `wp-config.php` は分けて運用

反映時の注意:

- `wp-config.php` は上書きしない
- `uploads` は容量が大きいため、必要時のみ同期
- 反映後にキャッシュプラグインをクリア

## ログイン周りの注意

`SiteGuard` 利用時はログイン URL が `wp-login.php` から変更されることがあります。  
ログインできない場合は以下を確認します。

1. `wp-content/plugins/siteguard` を一時リネームして切り分け
2. `.htaccess` の `SITEGUARD_RENAME_LOGIN` 設定を確認
3. テスト環境で本番へリダイレクトされる場合は `WP_HOME` / `WP_SITEURL` をテストドメインに設定

## 初回・再セットアップ

```bash
cd "/Users/tickeykinugawa/Desktop/cocoroサービスサイト/cocoro-service-site"
git status
```

## コミット例

```bash
git add .
git commit -m "fix: お問い合わせフォーム文言を修正"
git push
```

## バックアップ方針

- 大きな改修前は必ずファイルと DB をバックアップ
- 反映は「テスト確認済み」の差分のみ実施

## 補足

このリポジトリには WordPress 本体ファイルも含まれています。  
将来的には運用負荷を下げるため、テーマ・カスタム実装中心の管理へ段階的に整理する余地があります。
