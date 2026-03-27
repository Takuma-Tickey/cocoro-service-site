<?php
/**
 * Template Name: CoCoRo Survey LP (Spot)
 * Template Post Type: page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$supported_languages = array( 'ja', 'en' );
$current_lang = isset( $_GET['lang'] ) ? sanitize_key( wp_unslash( $_GET['lang'] ) ) : 'ja';
if ( ! in_array( $current_lang, $supported_languages, true ) ) {
	$current_lang = 'ja';
}

$copy = array(
	'ja' => array(
		'badge'        => 'Hospitality Survey 2026',
		'title'        => '宿泊施設におけるデジタルチップの実態調査',
		'subtitle'     => '平均3,242円。チェックアウト前後に72.4%が集中し、感謝は「体験全体」へ向かう。',
		'lead'         => 'CoCoRoの蓄積データを分析し、宿泊業界における感謝の可視化とインバウンド対応の新しい示唆を整理しました。',
		'cta_primary'  => 'お問い合わせ',
		'cta_secondary'=> '資料請求',
		'cta_tertiary' => 'デモ相談',
		'lang_label'   => 'Language',
		'section_findings' => 'Key Findings',
		'section_overview' => 'Survey Overview',
		'section_charts'   => 'Interactive Data Visualizations',
		'section_insights' => 'What This Means for Hospitality',
		'section_about'    => 'About CoCoRo',
		'section_why'      => 'Why CoCoRo',
		'section_cta'      => 'CoCoRoで、感謝を組織成長の力へ。',
		'overview' => array(
			array( 'label' => '調査主体', 'value' => 'faag株式会社' ),
			array( 'label' => '調査方法', 'value' => '自社サービス「CoCoRo」管理画面の蓄積データ分析' ),
			array( 'label' => '調査対象', 'value' => 'チップ送付データ 251件（2026年3月時点）' ),
			array( 'label' => '調査項目', 'value' => 'チップ金額、送付タイミング、対象、メッセージ内容、感情アイコン' ),
		),
		'findings' => array(
			array( 'value' => '¥3,242', 'label' => '平均チップ単価', 'note' => '1〜2,999円が61.8%、1万円以上も12.3%' ),
			array( 'value' => '72.4%', 'label' => '7〜10時に集中', 'note' => 'チェックアウト前後に感謝が発生' ),
			array( 'value' => '¥4,094', 'label' => '旅館の平均単価', 'note' => 'ホテル平均（¥1,617）を大きく上回る' ),
			array( 'value' => '75.8%', 'label' => '英語メッセージ比率', 'note' => 'インバウンド利用が中心' ),
		),
		'insights' => array(
			array( 'title' => '感謝の可視化が、改善の解像度を上げる', 'body' => '体験後に届くメッセージと金額データは、レビュー以上に具体的な改善のヒントになります。' ),
			array( 'title' => '従業員エンゲージメントを支える新しい指標', 'body' => '個人だけでなく、チーム・施設全体への感謝が多く、現場の誇りと連携を高める文脈が見えます。' ),
			array( 'title' => 'インバウンド文脈でのコミュニケーション補完', 'body' => '英語メッセージの高比率は、言語差を越えた感謝接点としての有効性を示しています。' ),
		),
		'about' => 'CoCoRoは、QRコードを通じてゲストがスタッフ・チーム・施設へ感謝メッセージとオンライン心付けを送れる、宿泊業界向けデジタルチップサービスです。',
		'flow'  => array(
			'チェックイン〜滞在中に案内',
			'チェックアウト前後に感謝を送信',
			'組織で可視化し、サービス改善に活用',
		),
		'why' => array(
			array( 'title' => 'Guest Appreciation, Made Visible', 'body' => '感謝を“見えるデータ”に変え、現場と経営の共通言語に。' ),
			array( 'title' => 'Employee Engagement Support', 'body' => 'やりがいの可視化が、現場のモチベーション維持に寄与。' ),
			array( 'title' => 'Service Quality Insight', 'body' => '体験後の評価から、改善優先度を明確化。' ),
			array( 'title' => 'Built for Inbound Hospitality', 'body' => '訪日ゲストとの接点を自然に増やし、体験価値を強化。' ),
		),
		'cta_body' => '調査結果の詳細、導入イメージ、運用設計についてお気軽にご相談ください。',
		'footer_note' => '調査結果を掲載・引用する場合は「faag株式会社調べ」と明記してください。',
		'tabs' => array(
			'amount' => '金額帯',
			'facility' => '施設タイプ比較',
			'timing' => '時間帯',
			'target' => '対象',
			'language' => 'メッセージ言語',
		),
	),
	'en' => array(
		'badge'        => 'Hospitality Survey 2026',
		'title'        => 'Digital Tipping in Hospitality: A CoCoRo Data Report',
		'subtitle'     => 'Average tip value: JPY 3,242. 72.4% of tipping activity occurs around checkout.',
		'lead'         => 'Using CoCoRo data, this page highlights how guest appreciation connects to service quality, engagement, and inbound hospitality.',
		'cta_primary'  => 'Contact Us',
		'cta_secondary'=> 'Request Materials',
		'cta_tertiary' => 'Book a Demo',
		'lang_label'   => 'Language',
		'section_findings' => 'Key Findings',
		'section_overview' => 'Survey Overview',
		'section_charts'   => 'Interactive Data Visualizations',
		'section_insights' => 'What This Means for Hospitality',
		'section_about'    => 'About CoCoRo',
		'section_why'      => 'Why CoCoRo',
		'section_cta'      => 'Turn guest gratitude into a growth engine.',
		'overview' => array(
			array( 'label' => 'Research owner', 'value' => 'faag Inc.' ),
			array( 'label' => 'Method', 'value' => 'Analysis of data accumulated in the CoCoRo admin console' ),
			array( 'label' => 'Sample', 'value' => '251 tipping records (as of March 2026)' ),
			array( 'label' => 'Scope', 'value' => 'Amount, timing, recipient, message language, emotional icon' ),
		),
		'findings' => array(
			array( 'value' => 'JPY 3,242', 'label' => 'Average tip amount', 'note' => '61.8% are below JPY 3,000, while 12.3% exceed JPY 10,000' ),
			array( 'value' => '72.4%', 'label' => 'Concentrated at 7-10 AM', 'note' => 'Most tipping happens around checkout' ),
			array( 'value' => 'JPY 4,094', 'label' => 'Ryokan average', 'note' => 'Significantly higher than hotels (JPY 1,617)' ),
			array( 'value' => '75.8%', 'label' => 'English messages', 'note' => 'Strong alignment with inbound guest journeys' ),
		),
		'insights' => array(
			array( 'title' => 'Visible gratitude creates actionable insight', 'body' => 'Post-stay tipping data captures practical signals for improving the guest experience.' ),
			array( 'title' => 'A practical driver of employee engagement', 'body' => 'Appreciation is directed not only to individuals, but also teams and entire properties.' ),
			array( 'title' => 'A natural fit for inbound hospitality', 'body' => 'The high share of English messages highlights value in multilingual guest communication.' ),
		),
		'about' => 'CoCoRo is a digital tipping platform for hospitality where guests can send appreciation messages and online tipping to staff, teams, or properties via QR.',
		'flow'  => array(
			'Introduce CoCoRo during stay',
			'Guests send appreciation around checkout',
			'Teams use insights to improve service and engagement',
		),
		'why' => array(
			array( 'title' => 'Guest Appreciation, Made Visible', 'body' => 'Turn gratitude into operationally useful signals.' ),
			array( 'title' => 'Employee Engagement Support', 'body' => 'Reinforce frontline motivation with direct guest feedback.' ),
			array( 'title' => 'Service Quality Insight', 'body' => 'Use post-experience signals to prioritize improvements.' ),
			array( 'title' => 'Built for Inbound Hospitality', 'body' => 'Bridge language gaps while preserving warm hospitality.' ),
		),
		'cta_body' => 'Talk with us about the full report, implementation approach, and rollout options.',
		'footer_note' => 'If you cite this research, please credit: "Source: faag Inc."',
		'tabs' => array(
			'amount' => 'Amount Bands',
			'facility' => 'Facility Type',
			'timing' => 'Time Window',
			'target' => 'Recipients',
			'language' => 'Message Language',
		),
	),
);

$stats = array(
	'amount_bands' => array(
		array( 'label' => array( 'ja' => '1円〜2,999円', 'en' => 'JPY 1-2,999' ), 'value' => 61.8 ),
		array( 'label' => array( 'ja' => '3,000円〜9,999円', 'en' => 'JPY 3,000-9,999' ), 'value' => 25.9 ),
		array( 'label' => array( 'ja' => '10,000円以上', 'en' => 'JPY 10,000+' ), 'value' => 12.3 ),
	),
	'facility' => array(
		array( 'label' => array( 'ja' => 'ホテル', 'en' => 'Hotels' ), 'share' => 30.7, 'avg' => 1617 ),
		array( 'label' => array( 'ja' => '旅館', 'en' => 'Ryokan' ), 'share' => 69.3, 'avg' => 4094 ),
	),
	'timing' => array(
		array( 'label' => array( 'ja' => '7-10時（チェックアウト前後）', 'en' => '7-10 AM (around checkout)' ), 'share' => 72.4, 'avg' => 3425 ),
		array( 'label' => array( 'ja' => 'その他時間帯', 'en' => 'Other hours' ), 'share' => 27.6, 'avg' => 2397 ),
	),
	'target' => array(
		array( 'label' => array( 'ja' => '宿泊施設全体', 'en' => 'Entire property' ), 'value' => 71.6 ),
		array( 'label' => array( 'ja' => '部門・チーム', 'en' => 'Team / department' ), 'value' => 17.2 ),
		array( 'label' => array( 'ja' => '個人スタッフ', 'en' => 'Individual staff' ), 'value' => 11.2 ),
	),
	'language' => array(
		array( 'label' => array( 'ja' => '英語', 'en' => 'English' ), 'value' => 75.8 ),
		array( 'label' => array( 'ja' => '日本語', 'en' => 'Japanese' ), 'value' => 21.0 ),
		array( 'label' => array( 'ja' => 'その他', 'en' => 'Other' ), 'value' => 3.2 ),
	),
	'emotions' => array(
		array( 'label' => 'JOY', 'value' => 39.7, 'avg' => 3102 ),
		array( 'label' => 'RELAX', 'value' => 26.2, 'avg' => 3190 ),
		array( 'label' => 'HELPFUL', 'value' => 24.3, 'avg' => 4042 ),
		array( 'label' => 'OTHER', 'value' => 9.8, 'avg' => null ),
	),
);

$t = $copy[ $current_lang ];
$base_url = get_permalink();
$ja_url = add_query_arg( 'lang', 'ja', $base_url );
$en_url = add_query_arg( 'lang', 'en', $base_url );

$meta_title = ( 'ja' === $current_lang )
	? 'CoCoRo調査 | 宿泊施設におけるデジタルチップの実態'
	: 'CoCoRo Survey | Digital Tipping in Hospitality';
$meta_description = ( 'ja' === $current_lang )
	? 'CoCoRo蓄積データをもとに、宿泊施設におけるデジタルチップの金額帯・発生タイミング・対象・言語傾向を可視化。'
	: 'A CoCoRo data report on tipping amount bands, timing, recipients, and language trends in hospitality.';

add_action(
	'wp_head',
	function () use ( $meta_title, $meta_description, $current_lang, $ja_url, $en_url ) {
		$locale = ( 'ja' === $current_lang ) ? 'ja_JP' : 'en_US';
		echo "\n<meta name=\"robots\" content=\"noindex,nofollow\" />\n";
		echo '<meta property="og:title" content="' . esc_attr( $meta_title ) . '" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $meta_description ) . '" />' . "\n";
		echo '<meta property="og:locale" content="' . esc_attr( $locale ) . '" />' . "\n";
		echo '<meta property="og:type" content="article" />' . "\n";
		echo '<meta name="description" content="' . esc_attr( $meta_description ) . '" />' . "\n";
		echo '<link rel="alternate" hreflang="ja" href="' . esc_url( $ja_url ) . '" />' . "\n";
		echo '<link rel="alternate" hreflang="en" href="' . esc_url( $en_url ) . '" />' . "\n";
	},
	1
);

get_header();
?>

<main id="mainContent" class="cocoro-survey-lp" lang="<?php echo esc_attr( $current_lang ); ?>">
	<style>
		.cocoro-survey-lp {
			--lp-ink: #0f172a;
			--lp-muted: #52607a;
			--lp-soft: #e2e8f0;
			--lp-line: #dbe4ef;
			--lp-surface: #ffffff;
			--lp-accent: #1f8ecf;
			--lp-accent-strong: #11557d;
			--lp-gold: #b88646;
			--lp-navy: #0e1f3b;
			--lp-glow: rgba(31, 142, 207, 0.14);
			font-family: "Avenir Next", "Noto Sans JP", "Hiragino Kaku Gothic ProN", sans-serif;
			color: var(--lp-ink);
			background:
				radial-gradient(1200px 500px at 0% -10%, rgba(31, 142, 207, 0.18), transparent 60%),
				radial-gradient(900px 440px at 100% -20%, rgba(184, 134, 70, 0.14), transparent 65%),
				linear-gradient(180deg, #f7fbff 0%, #f4f7fb 55%, #f8fafc 100%);
		}
		.cocoro-survey-lp__inner {
			max-width: 1180px;
			margin: 0 auto;
			padding: 28px 20px 96px;
		}
		.lp-lang {
			display: flex;
			justify-content: flex-end;
			align-items: center;
			gap: 10px;
			font-size: 13px;
			margin-bottom: 14px;
			color: var(--lp-muted);
		}
		.lp-lang__link {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 7px 11px;
			border-radius: 999px;
			text-decoration: none;
			border: 1px solid var(--lp-line);
			color: var(--lp-muted);
			background: rgba(255, 255, 255, 0.72);
		}
		.lp-lang__link[aria-current="true"] {
			background: var(--lp-navy);
			color: #fff;
			border-color: var(--lp-navy);
		}
		.lp-hero {
			position: relative;
			padding: 34px;
			border-radius: 24px;
			background: linear-gradient(150deg, rgba(14, 31, 59, 0.98), rgba(20, 58, 96, 0.95));
			color: #fff;
			overflow: hidden;
			box-shadow: 0 24px 44px rgba(10, 26, 50, 0.22);
		}
		.lp-hero::after {
			content: "";
			position: absolute;
			inset: auto -90px -110px auto;
			width: 300px;
			height: 300px;
			background: radial-gradient(circle, rgba(31, 142, 207, 0.5), transparent 68%);
			pointer-events: none;
		}
		.lp-badge {
			display: inline-flex;
			padding: 7px 12px;
			border-radius: 999px;
			font-size: 12px;
			letter-spacing: 0.08em;
			text-transform: uppercase;
			background: rgba(255, 255, 255, 0.16);
			border: 1px solid rgba(255, 255, 255, 0.34);
		}
		.lp-title {
			font-size: clamp(30px, 5vw, 52px);
			line-height: 1.16;
			margin: 16px 0 12px;
			font-weight: 700;
			letter-spacing: 0.01em;
		}
		.lp-subtitle {
			font-size: clamp(17px, 2.1vw, 23px);
			line-height: 1.5;
			max-width: 840px;
			margin: 0 0 14px;
		}
		.lp-lead {
			margin: 0;
			line-height: 1.74;
			color: rgba(255, 255, 255, 0.88);
			max-width: 860px;
		}
		.lp-hero__meta {
			display: grid;
			grid-template-columns: repeat(3, minmax(0, 1fr));
			gap: 12px;
			margin-top: 24px;
		}
		.lp-kpi {
			padding: 14px 16px;
			border-radius: 14px;
			background: rgba(255, 255, 255, 0.12);
			border: 1px solid rgba(255, 255, 255, 0.26);
		}
		.lp-kpi__label {
			display: block;
			font-size: 12px;
			opacity: 0.9;
		}
		.lp-kpi__value {
			display: block;
			margin-top: 6px;
			font-size: clamp(24px, 3.6vw, 34px);
			font-weight: 700;
		}
		.lp-section {
			margin-top: 54px;
		}
		.lp-heading {
			font-size: clamp(25px, 3.2vw, 36px);
			line-height: 1.2;
			margin: 0 0 18px;
			color: var(--lp-navy);
		}
		.lp-grid-4 {
			display: grid;
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 14px;
		}
		.lp-card {
			padding: 20px;
			border-radius: 18px;
			background: var(--lp-surface);
			border: 1px solid var(--lp-line);
			box-shadow: 0 8px 20px rgba(15, 23, 42, 0.05);
		}
		.lp-card__value {
			font-size: clamp(24px, 3vw, 34px);
			font-weight: 700;
			line-height: 1.1;
			color: var(--lp-accent-strong);
		}
		.lp-card__label {
			display: block;
			margin-top: 7px;
			font-weight: 600;
		}
		.lp-card__note {
			margin: 8px 0 0;
			color: var(--lp-muted);
			line-height: 1.6;
			font-size: 14px;
		}
		.lp-overview {
			background: var(--lp-surface);
			border: 1px solid var(--lp-line);
			border-radius: 18px;
			overflow: hidden;
		}
		.lp-overview__row {
			display: grid;
			grid-template-columns: 220px 1fr;
			gap: 12px;
			padding: 14px 18px;
			border-bottom: 1px solid var(--lp-line);
		}
		.lp-overview__row:last-child { border-bottom: 0; }
		.lp-overview__label { font-weight: 700; color: var(--lp-navy); }
		.lp-overview__value { color: var(--lp-muted); line-height: 1.6; }
		.lp-tabs {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
			margin-bottom: 16px;
		}
		.lp-tab {
			padding: 10px 14px;
			border-radius: 999px;
			border: 1px solid var(--lp-line);
			background: #fff;
			color: var(--lp-muted);
			font-weight: 600;
			cursor: pointer;
		}
		.lp-tab[aria-selected="true"] {
			background: linear-gradient(135deg, var(--lp-accent), var(--lp-accent-strong));
			border-color: transparent;
			color: #fff;
		}
		.lp-panel {
			display: none;
			background: #fff;
			border: 1px solid var(--lp-line);
			border-radius: 18px;
			padding: 20px;
		}
		.lp-panel.is-active { display: block; }
		.lp-bars { display: grid; gap: 14px; }
		.lp-bar__head {
			display: flex;
			justify-content: space-between;
			gap: 10px;
			font-size: 14px;
			margin-bottom: 7px;
		}
		.lp-bar__track {
			height: 12px;
			border-radius: 999px;
			background: #edf2f7;
			overflow: hidden;
		}
		.lp-bar__fill {
			height: 100%;
			width: 0;
			border-radius: 999px;
			background: linear-gradient(90deg, #3eaadf, #1471a5);
			transition: width .9s cubic-bezier(.2,.8,.2,1);
		}
		.lp-panel.is-active .lp-bar__fill { width: calc(var(--value) * 1%); }
		.lp-two-col {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 18px;
		}
		.lp-donut {
			width: 220px;
			height: 220px;
			border-radius: 50%;
			position: relative;
			margin: 2px auto 8px;
			box-shadow: inset 0 0 0 16px rgba(255,255,255,.52);
		}
		.lp-donut::after {
			content: "";
			position: absolute;
			inset: 32%;
			border-radius: 50%;
			background: #fff;
		}
		.lp-legend {
			display: grid;
			gap: 10px;
		}
		.lp-legend__item {
			display: grid;
			grid-template-columns: 12px 1fr auto;
			gap: 10px;
			align-items: center;
			font-size: 14px;
		}
		.lp-dot {
			width: 12px;
			height: 12px;
			border-radius: 50%;
		}
		.lp-insights, .lp-why {
			display: grid;
			grid-template-columns: repeat(3, minmax(0, 1fr));
			gap: 14px;
		}
		.lp-about {
			display: grid;
			grid-template-columns: 1.1fr .9fr;
			gap: 16px;
		}
		.lp-flow { display: grid; gap: 10px; margin: 0; padding: 0; list-style: none; }
		.lp-flow li {
			background: #f8fbff;
			border: 1px solid var(--lp-line);
			border-radius: 14px;
			padding: 12px 14px;
			line-height: 1.6;
		}
		.lp-cta {
			background: linear-gradient(145deg, #0f233f, #13365e);
			border-radius: 22px;
			padding: 32px;
			color: #fff;
			box-shadow: 0 20px 36px rgba(11, 31, 55, 0.2);
		}
		.lp-cta p { margin: 0 0 16px; line-height: 1.7; color: rgba(255,255,255,.88); }
		.lp-actions {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
			margin-top: 14px;
		}
		.lp-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 11px 16px;
			border-radius: 999px;
			text-decoration: none;
			font-weight: 700;
			font-size: 14px;
			border: 1px solid transparent;
		}
		.lp-btn--solid {
			background: linear-gradient(145deg, #4bb3e6, #1f8ecf);
			color: #fff;
		}
		.lp-btn--ghost {
			background: transparent;
			border-color: rgba(255,255,255,.5);
			color: #fff;
		}
		.lp-footer {
			margin-top: 26px;
			font-size: 13px;
			color: var(--lp-muted);
			line-height: 1.6;
		}
		.lp-reveal {
			opacity: 0;
			transform: translateY(14px);
			transition: opacity .6s ease, transform .6s ease;
		}
		.lp-reveal.is-visible {
			opacity: 1;
			transform: translateY(0);
		}
		@media (max-width: 980px) {
			.lp-grid-4 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
			.lp-insights, .lp-why { grid-template-columns: 1fr; }
			.lp-about { grid-template-columns: 1fr; }
			.lp-two-col { grid-template-columns: 1fr; }
			.lp-overview__row { grid-template-columns: 1fr; gap: 6px; }
		}
		@media (max-width: 680px) {
			.cocoro-survey-lp__inner { padding: 18px 14px 72px; }
			.lp-hero { padding: 22px; border-radius: 18px; }
			.lp-title { font-size: 30px; }
			.lp-hero__meta { grid-template-columns: 1fr; }
			.lp-grid-4 { grid-template-columns: 1fr; }
			.lp-cta { padding: 24px 20px; }
			.lp-donut { width: 190px; height: 190px; }
		}
	</style>

	<div class="cocoro-survey-lp__inner">
		<div class="lp-lang">
			<span><?php echo esc_html( $t['lang_label'] ); ?></span>
			<a class="lp-lang__link" href="<?php echo esc_url( $ja_url ); ?>" aria-current="<?php echo ( 'ja' === $current_lang ) ? 'true' : 'false'; ?>">日本語</a>
			<a class="lp-lang__link" href="<?php echo esc_url( $en_url ); ?>" aria-current="<?php echo ( 'en' === $current_lang ) ? 'true' : 'false'; ?>">English</a>
		</div>

		<section class="lp-hero lp-reveal">
			<span class="lp-badge"><?php echo esc_html( $t['badge'] ); ?></span>
			<h1 class="lp-title"><?php echo esc_html( $t['title'] ); ?></h1>
			<p class="lp-subtitle"><?php echo esc_html( $t['subtitle'] ); ?></p>
			<p class="lp-lead"><?php echo esc_html( $t['lead'] ); ?></p>
			<div class="lp-actions">
				<a class="lp-btn lp-btn--solid" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $t['cta_primary'] ); ?></a>
				<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php echo esc_html( $t['cta_secondary'] ); ?></a>
				<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $t['cta_tertiary'] ); ?></a>
			</div>
			<div class="lp-hero__meta">
				<div class="lp-kpi">
					<span class="lp-kpi__label">Average Tip</span>
					<span class="lp-kpi__value js-count" data-format="yen" data-value="3242">¥3,242</span>
				</div>
				<div class="lp-kpi">
					<span class="lp-kpi__label">Checkout Window Share</span>
					<span class="lp-kpi__value js-count" data-format="percent" data-value="72.4">72.4%</span>
				</div>
				<div class="lp-kpi">
					<span class="lp-kpi__label">Sample Size</span>
					<span class="lp-kpi__value js-count" data-format="int" data-value="251">251</span>
				</div>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="findings">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_findings'] ); ?></h2>
			<div class="lp-grid-4">
				<?php foreach ( $t['findings'] as $item ) : ?>
					<article class="lp-card">
						<div class="lp-card__value"><?php echo esc_html( $item['value'] ); ?></div>
						<span class="lp-card__label"><?php echo esc_html( $item['label'] ); ?></span>
						<p class="lp-card__note"><?php echo esc_html( $item['note'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="overview">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_overview'] ); ?></h2>
			<div class="lp-overview">
				<?php foreach ( $t['overview'] as $row ) : ?>
					<div class="lp-overview__row">
						<div class="lp-overview__label"><?php echo esc_html( $row['label'] ); ?></div>
						<div class="lp-overview__value"><?php echo esc_html( $row['value'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="charts">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_charts'] ); ?></h2>
			<div class="lp-tabs" role="tablist">
				<?php foreach ( $t['tabs'] as $id => $label ) : ?>
					<button class="lp-tab" role="tab" data-tab="<?php echo esc_attr( $id ); ?>" aria-selected="<?php echo ( 'amount' === $id ) ? 'true' : 'false'; ?>"><?php echo esc_html( $label ); ?></button>
				<?php endforeach; ?>
			</div>

			<div class="lp-panel is-active" data-panel="amount">
				<div class="lp-bars">
					<?php foreach ( $stats['amount_bands'] as $item ) : ?>
						<div class="lp-bar">
							<div class="lp-bar__head">
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
								<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
							</div>
							<div class="lp-bar__track"><div class="lp-bar__fill" style="--value:<?php echo esc_attr( $item['value'] ); ?>"></div></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="lp-panel" data-panel="facility">
				<div class="lp-bars">
					<?php foreach ( $stats['facility'] as $item ) : ?>
						<div class="lp-bar">
							<div class="lp-bar__head">
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?> / Share</span>
								<strong><?php echo esc_html( number_format_i18n( $item['share'], 1 ) ); ?>%</strong>
							</div>
							<div class="lp-bar__track"><div class="lp-bar__fill" style="--value:<?php echo esc_attr( $item['share'] ); ?>"></div></div>
							<div class="lp-bar__head" style="margin-top:8px;">
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?> / Avg tip</span>
								<strong>¥<?php echo esc_html( number_format_i18n( $item['avg'] ) ); ?></strong>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="lp-panel" data-panel="timing">
				<div class="lp-bars">
					<?php foreach ( $stats['timing'] as $item ) : ?>
						<div class="lp-bar">
							<div class="lp-bar__head">
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
								<strong><?php echo esc_html( number_format_i18n( $item['share'], 1 ) ); ?>%</strong>
							</div>
							<div class="lp-bar__track"><div class="lp-bar__fill" style="--value:<?php echo esc_attr( $item['share'] ); ?>"></div></div>
							<div class="lp-bar__head" style="margin-top:8px;">
								<span><?php echo ( 'ja' === $current_lang ) ? '平均チップ単価' : 'Average tip value'; ?></span>
								<strong>¥<?php echo esc_html( number_format_i18n( $item['avg'] ) ); ?></strong>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="lp-panel" data-panel="target">
				<?php $target_style = 'conic-gradient(#1f8ecf 0 71.6%, #4fb6de 71.6% 88.8%, #90d3ea 88.8% 100%)'; ?>
				<div class="lp-two-col">
					<div class="lp-donut" style="background: <?php echo esc_attr( $target_style ); ?>;"></div>
					<div class="lp-legend">
						<?php $target_colors = array( '#1f8ecf', '#4fb6de', '#90d3ea' ); ?>
						<?php foreach ( $stats['target'] as $index => $item ) : ?>
							<div class="lp-legend__item">
								<span class="lp-dot" style="background: <?php echo esc_attr( $target_colors[ $index ] ); ?>;"></span>
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
								<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<div class="lp-panel" data-panel="language">
				<?php $lang_style = 'conic-gradient(#0e1f3b 0 75.8%, #1f8ecf 75.8% 96.8%, #b5d7ea 96.8% 100%)'; ?>
				<div class="lp-two-col">
					<div class="lp-donut" style="background: <?php echo esc_attr( $lang_style ); ?>;"></div>
					<div class="lp-legend">
						<?php $language_colors = array( '#0e1f3b', '#1f8ecf', '#b5d7ea' ); ?>
						<?php foreach ( $stats['language'] as $index => $item ) : ?>
							<div class="lp-legend__item">
								<span class="lp-dot" style="background: <?php echo esc_attr( $language_colors[ $index ] ); ?>;"></span>
								<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
								<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="insights">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_insights'] ); ?></h2>
			<div class="lp-insights">
				<?php foreach ( $t['insights'] as $item ) : ?>
					<article class="lp-card">
						<h3 style="margin:0 0 8px; font-size:19px; line-height:1.4; color:var(--lp-navy);"><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="lp-card__note" style="margin-top:0;"><?php echo esc_html( $item['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="about">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_about'] ); ?></h2>
			<div class="lp-about">
				<article class="lp-card">
					<p class="lp-card__note" style="margin-top:0; font-size:16px;"><?php echo esc_html( $t['about'] ); ?></p>
				</article>
				<article class="lp-card">
					<ul class="lp-flow">
						<?php foreach ( $t['flow'] as $step ) : ?>
							<li><?php echo esc_html( $step ); ?></li>
						<?php endforeach; ?>
					</ul>
				</article>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="why">
			<h2 class="lp-heading"><?php echo esc_html( $t['section_why'] ); ?></h2>
			<div class="lp-why">
				<?php foreach ( $t['why'] as $item ) : ?>
					<article class="lp-card">
						<h3 style="margin:0 0 8px; font-size:19px; line-height:1.4; color:var(--lp-navy);"><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="lp-card__note" style="margin-top:0;"><?php echo esc_html( $item['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="lp-section lp-reveal" id="cta">
			<div class="lp-cta">
				<h2 class="lp-heading" style="color:#fff; margin-top:0;"><?php echo esc_html( $t['section_cta'] ); ?></h2>
				<p><?php echo esc_html( $t['cta_body'] ); ?></p>
				<div class="lp-actions">
					<a class="lp-btn lp-btn--solid" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $t['cta_primary'] ); ?></a>
					<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php echo esc_html( $t['cta_secondary'] ); ?></a>
					<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $t['cta_tertiary'] ); ?></a>
				</div>
			</div>
			<p class="lp-footer"><?php echo esc_html( $t['footer_note'] ); ?></p>
		</section>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var observer = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
					}
				});
			}, { threshold: 0.16 });
			document.querySelectorAll('.lp-reveal').forEach(function (el) { observer.observe(el); });

			document.querySelectorAll('.js-count').forEach(function (el) {
				var target = parseFloat(el.dataset.value || '0');
				var format = el.dataset.format || 'int';
				var shown = false;

				var countObserver = new IntersectionObserver(function (entries) {
					entries.forEach(function (entry) {
						if (!entry.isIntersecting || shown) { return; }
						shown = true;
						var start = performance.now();
						var duration = 1000;

						var tick = function (now) {
							var p = Math.min((now - start) / duration, 1);
							var current = target * (1 - Math.pow(1 - p, 3));
							if (format === 'yen') {
								el.textContent = '¥' + Math.round(current).toLocaleString();
							} else if (format === 'percent') {
								el.textContent = current.toFixed(1) + '%';
							} else {
								el.textContent = Math.round(current).toLocaleString();
							}
							if (p < 1) { requestAnimationFrame(tick); }
						};
						requestAnimationFrame(tick);
					});
				}, { threshold: 0.5 });

				countObserver.observe(el);
			});

			var tabs = document.querySelectorAll('.lp-tab');
			var panels = document.querySelectorAll('.lp-panel');
			tabs.forEach(function (tab) {
				tab.addEventListener('click', function () {
					var id = tab.getAttribute('data-tab');
					tabs.forEach(function (btn) {
						btn.setAttribute('aria-selected', btn === tab ? 'true' : 'false');
					});
					panels.forEach(function (panel) {
						panel.classList.toggle('is-active', panel.getAttribute('data-panel') === id);
					});
				});
			});
		});
	</script>
</main>

<?php get_footer(); ?>
