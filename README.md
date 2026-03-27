# cocoro-service-site

`cocoro.faag.co.jp` の保守運用向け WordPress リポジトリです。  
企業公式サイトの継続運用を想定し、テスト環境で検証してから本番へ反映します。

## サイト情報

- 本番: `https://cocoro.faag.co.jp`
- テスト: `http://cocoro.faag.co.jp.testrs.jp`
- サーバーパス（本番）: `/home/r0259205/public_html/cocoro.faag.co.jp`
- サーバーパス（テスト）: `/home/r0259205/public_html/cocoro.faag.co.jp.testrs.jp`

## 技術スタック

- CMS: WordPress
- 親テーマ: `wp-content/themes/jinr`
- 子テーマ: `wp-content/themes/jinr-child`

## 運用方針（決定版）

今後の標準フローは以下です。

1. 修正を `main` にコミット・push
2. コマンドで GitHub Actions の `staging` デプロイを実行
3. テスト環境で確認
4. 問題なければコマンドで GitHub Actions の `production` デプロイを実行

この運用により、GitHub Actions 上に「誰が・いつ・どのコミットを・どこへ反映したか」が残ります。

## Git 管理ルール

このリポジトリは Private 前提です。  
機密情報と重い生成物は `.gitignore` で除外します。

主な除外対象:

- `wp-config.php`
- `phpinfo.php`
- `wp-content/uploads/`
- `wp-content/ewww/`
- `wp-content/cache/`
- `wp-content/languages/`
- `wp-content/w3tc-config/`

## GitHub Actions デプロイ設定

ワークフロー:

- `.github/workflows/deploy-onamae.yml`

### Environment Secrets（GitHub画面）

`Settings` → `Environments` の `staging` / `production` に以下を登録します。

- `SFTP_HOST` 例: `www65.onamae.ne.jp`
- `SFTP_PORT` 例: `8022`
- `SFTP_USERNAME` 例: `r0259205`
- `SFTP_REMOTE_PATH`
  - staging: `/home/r0259205/public_html/cocoro.faag.co.jp.testrs.jp`
  - production: `/home/r0259205/public_html/cocoro.faag.co.jp`

認証方式:

- 鍵認証を推奨: `SFTP_PRIVATE_KEY` を登録
- パスワード認証を使う場合: `SFTP_PASSWORD` を登録
- どちらか片方があれば動作

## デプロイ実行（コマンド）

### 事前確認

```bash
gh auth status -h github.com
```

ログイン切れの場合:

```bash
gh auth login -h github.com --git-protocol https --web --skip-ssh-key
```

### staging デプロイ

```bash
gh workflow run deploy-onamae.yml --ref main -f target=staging -f ref=main
```

### production デプロイ

```bash
gh workflow run deploy-onamae.yml --ref main -f target=production -f ref=main
```

### 実行状況の確認

```bash
gh run list --workflow deploy-onamae.yml --limit 5
gh run view <RUN_ID>
gh run watch <RUN_ID> --exit-status
```

## 監査ログ（Actions側）

`deploy-onamae.yml` は以下を記録します。

- 実行名: `target / actor / ref`
- 実コミットSHA
- 実行者（GitHubユーザー）
- 実行時刻（UTC）
- Commit URL / Run URL
- `rsync --itemize-changes` による反映差分ログ

## 重要な注意点

- デプロイは「上書き反映」です（サーバー上の不要ファイル削除はしません）
- `wp-config.php` と `uploads` など重い/機密ディレクトリは除外しています
- Contact Form 7 設定など DB 保存データは Git で管理されません

### URL リダイレクト事故の再発防止

本番とテストで DB 設定が干渉しないよう、サーバー側 `wp-config.php` で環境ごとに固定します。

- 本番: `WP_HOME` / `WP_SITEURL` = `https://cocoro.faag.co.jp`
- テスト: `WP_HOME` / `WP_SITEURL` = `http://cocoro.faag.co.jp.testrs.jp`

## ログイン周りの注意

`SiteGuard` 利用時はログイン URL が `wp-login.php` から変更される場合があります。  
ログインできない場合は以下を確認します。

1. `wp-content/plugins/siteguard` を一時リネームして切り分け
2. `.htaccess` の `SITEGUARD_RENAME_LOGIN` 設定を確認
3. `WP_HOME` / `WP_SITEURL` が環境に合っているか確認

## 初回・再セットアップ

```bash
cd "/Users/tickeykinugawa/Desktop/cocoroサービスサイト/cocoro-service-site"
git status
```

## コミット例

```bash
git add .
git commit -m "fix: お問い合わせフォーム文言を修正"
git push origin main
```

## バックアップ方針

- 大きな改修前は必ずファイルと DB をバックアップ
- 反映は「テスト確認済み」の差分のみ実施

## 補足

このリポジトリには WordPress 本体ファイルも含まれています。  
将来的には運用負荷を下げるため、テーマ・カスタム実装中心の管理へ段階的に整理する余地があります。
