<?php
/**
 * Template Name: CoCoRo Survey LP (Spot)
 * Template Post Type: page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$supported_languages = array( 'ja', 'en' );
$current_lang        = isset( $_GET['lang'] ) ? sanitize_key( wp_unslash( $_GET['lang'] ) ) : 'ja';
if ( ! in_array( $current_lang, $supported_languages, true ) ) {
	$current_lang = 'ja';
}

$base_url    = get_permalink() ? get_permalink() : home_url( '/' );
$ja_url      = add_query_arg( 'lang', 'ja', $base_url );
$en_url      = add_query_arg( 'lang', 'en', $base_url );
$contact_url = home_url( '/contact/' );
$docs_url    = home_url( '/resources/' );
$service_url = home_url( '/' );

$copy = array(
	'ja' => array(
		'meta_title'       => 'CoCoRo調査LP｜宿泊施設におけるデジタルチップの実態調査',
		'meta_description' => '平均3,242円、チェックアウト前後に72.4%が集中。CoCoRo蓄積データから、宿泊業界における感謝の可視化を読み解く調査レポートLP。',
		'hero_badge'       => 'CoCoRo Research Report 2026',
		'hero_title'       => '宿泊施設におけるデジタルチップの実態調査',
		'hero_subtitle'    => '平均3,242円。チェックアウト前後に72.4%が集中。',
		'hero_lead'        => 'サービス評価にとどまらず、体験全体に対する感謝が表現される傾向を、CoCoRoの蓄積データから可視化しました。',
		'lang_label'       => 'Language',
		'cta_primary'      => 'お問い合わせ',
		'cta_secondary'    => '資料請求',
		'cta_tertiary'     => 'デモ相談',
		'microcopy_1'      => '所要時間1分で簡単',
		'microcopy_2'      => '導入相談・初期検討は無料',
		'microcopy_3'      => '翌営業日以内に返信',
		'sections'         => array(
			'summary'      => '調査サマリー',
			'findings'     => 'Key Findings',
			'overview'     => '調査概要',
			'interactive'  => 'Interactive Data Visualizations',
			'insights'     => 'What This Means for Hospitality',
			'comments'     => '利用者コメント（一部抜粋）',
			'about'        => 'CoCoRoについて',
			'company'      => '会社概要・引用注記',
			'final_cta'    => '感謝を、組織成長のデータへ。',
		),
		'summary_points' => array(
			'平均チップ単価は3,242円。1円〜2,999円が61.8%を占める一方、1万円以上の高額チップも12.3%。',
			'旅館は平均4,094円・発生割合69.3%、ホテルは平均1,617円・30.7%。',
			'チップ発生はチェックアウト前後（7〜10時）に72.4%が集中。',
			'対象は「宿泊施設全体」が71.6%。部門・チーム17.2%、個人11.2%。',
			'メッセージ言語は英語75.8%、日本語21.0%で、訪日客の利用が中心。',
		),
		'overview_rows' => array(
			array( 'label' => '調査主体', 'value' => 'faag株式会社' ),
			array( 'label' => '調査方法', 'value' => '自社サービス「CoCoRo」管理画面の蓄積データ分析' ),
			array( 'label' => '調査対象', 'value' => 'チップ送付データ 251件（2026年3月時点）' ),
			array( 'label' => '調査項目', 'value' => 'チップ金額、送付タイミング、対象、メッセージ内容、感情アイコン等' ),
		),
		'finding_cards' => array(
			array( 'value' => '¥3,242', 'label' => '平均チップ単価', 'note' => '中価格帯が中心ながら高額帯も確認' ),
			array( 'value' => '72.4%', 'label' => '7〜10時の発生比率', 'note' => 'チェックアウト前後に感謝が集中' ),
			array( 'value' => '¥4,094', 'label' => '旅館の平均単価', 'note' => 'ホテル平均（¥1,617）を上回る' ),
			array( 'value' => '75.8%', 'label' => '英語メッセージ比率', 'note' => 'インバウンド接点として機能' ),
		),
		'tab_labels' => array(
			'amount'   => '金額帯',
			'facility' => '施設タイプ比較',
			'timing'   => '時間帯',
			'target'   => '付与対象',
			'language' => 'メッセージ言語',
			'emotion'  => '感情アイコン',
		),
		'chart_notes' => array(
			'amount'   => '平均チップ単価は3,242円。1円〜2,999円が過半数を占める一方、1万円以上の高額チップも確認。',
			'facility' => '旅館タイプが平均単価・発生割合ともに高い結果。',
			'timing'   => 'チェックアウト前後（7〜10時）の平均単価は3,425円、その他時間帯は2,397円。',
			'target'   => '個人単位よりも施設全体への感謝が多く、体験全体評価の傾向が見られる。',
			'language' => '英語が75.8%。訪日ゲストとのコミュニケーション補完として有効。',
			'emotion'  => 'JOYが最多。HELPFULは平均単価4,042円と高め。MOVEDやHELPFULでは高単価傾向。',
		),
		'insights' => array(
			array(
				'title' => 'チップは「サービス中」より「体験後」に生まれる',
				'body'  => '発生がチェックアウト前後に集中していることから、チップは対価というより、滞在体験全体への感謝として表現される傾向が示唆されます。',
			),
			array(
				'title' => '感謝の可視化が現場改善の解像度を上げる',
				'body'  => '金額・対象・言語・感情アイコンを横断して見ることで、レビューだけでは捉えにくい改善ヒントを抽出できます。',
			),
			array(
				'title' => '個人評価だけでなく、チーム・施設評価へ接続',
				'body'  => '施設全体への付与比率が高いことは、組織横断の体験価値が評価されていることを示し、従業員エンゲージメント向上にもつながります。',
			),
			array(
				'title' => 'インバウンド時代の感謝接点として有効',
				'body'  => '英語メッセージ比率の高さは、多言語環境での「ありがとう」を取りこぼさない仕組みとしての有効性を示しています。',
			),
		),
		'comments' => array(
			array(
				'quote' => '“Our stay was magical, the staff was delightful, the accommodations were perfection.”',
				'trans' => '私たちの滞在は夢のような体験でした。スタッフは素晴らしく、宿泊施設も完璧でした。',
			),
			array(
				'quote' => '“This has been the best service we have ever had.”',
				'trans' => 'これは私たちがこれまで受けた中で最高のサービスでした。',
			),
			array(
				'quote' => '“Thank you for such a joyful, relaxed and moving experience. We will be back!”',
				'trans' => '楽しく、リラックスできて、感動的な体験をありがとうございました。また来ます。',
			),
			array(
				'quote' => '“Thank you for the amazing hospitality. All the staff were friendly, helpful and kind.”',
				'trans' => '素晴らしいおもてなしをありがとうございました。スタッフの皆さんは親切で協力的でした。',
			),
			array(
				'quote' => '“Thank you for an unforgettable experience!”',
				'trans' => '忘れられない体験をありがとうございました。',
			),
			array(
				'quote' => '“We absolutely loved our stay here. Doumo arigatou gozaimasu!”',
				'trans' => '私たちはここでの滞在を心から楽しみました。どうもありがとうございました。',
			),
			array(
				'quote' => '“Everyone was friendly and kind. We had a truly relaxing stay.”',
				'trans' => '皆親切でフレンドリーでした。本当にリラックスできる滞在でした。',
			),
			array(
				'quote' => '「心を尽くしたおもてなしをありがとうございました。本当に素晴らしい時間を過ごすことができました。」',
				'trans' => 'Thank you for your wholehearted hospitality. We had a truly wonderful time.',
			),
			array(
				'quote' => '「スタッフの温かい心遣いのおかげで、思い出深い旅になりました。」',
				'trans' => 'Your warm care made this trip unforgettable.',
			),
			array(
				'quote' => '「料理もサービスも素晴らしく、またぜひ訪れたいと思います。」',
				'trans' => 'The cuisine and service were both excellent. We would love to come back.',
			),
		),
		'about' => array(
			'text' => 'CoCoRoは、宿泊施設やサービス現場における「感謝」を可視化するデジタルチップサービスです。QRコードを通じて、利用者はスタッフや施設に感謝のメッセージとオンライン心付けを送ることができます。',
			'values' => array(
				'Guest appreciation made visible（感謝の可視化）',
				'Employee engagement support（やりがい・貢献意欲の向上）',
				'Service quality insights（改善示唆の抽出）',
				'Built for inbound hospitality（多言語・訪日文脈との親和性）',
			),
			'flow' => array(
				'館内でQR案内（滞在中の自然な接点づくり）',
				'チェックアウト前後にゲストが感謝を送信',
				'管理画面で金額・メッセージ・感情を可視化',
				'現場改善・育成・チーム運用に展開',
			),
		),
		'citation_note' => '本調査はfaag株式会社が自社サービス管理画面に蓄積されたデータを分析した自主調査です。掲載・引用時は「faag株式会社調べ」または「faag(株)調べ」と表記してください。',
		'contact_info' => '調査結果やサービスに関するお問い合わせ：info@cocoro.faag.co.jp',
		'company' => array(
			array( 'label' => '会社名', 'value' => 'faag株式会社' ),
			array( 'label' => '代表者', 'value' => '代表取締役 村田 陽二' ),
			array( 'label' => '所在地', 'value' => '千葉県いすみ市上布施1165番地2' ),
			array( 'label' => '設立', 'value' => '2018年9月' ),
			array( 'label' => '企業HP', 'value' => 'https://faag.co.jp/' ),
			array( 'label' => 'サービスサイト', 'value' => 'https://cocoro.faag.co.jp/' ),
		),
		'final_copy' => 'プレスリリース流入後の理解促進から、導入検討まで。調査データをもとに、貴施設での活用イメージをご案内します。',
	),
	'en' => array(
		'meta_title'       => 'CoCoRo Survey LP | Digital Tipping Trends in Hospitality',
		'meta_description' => 'Average tip value is JPY 3,242, with 72.4% of tipping events concentrated around checkout. A CoCoRo data report for hospitality operators.',
		'hero_badge'       => 'CoCoRo Research Report 2026',
		'hero_title'       => 'Digital Tipping Trends in Hospitality',
		'hero_subtitle'    => 'Average tip: JPY 3,242. 72.4% occurs around checkout.',
		'hero_lead'        => 'Based on accumulated CoCoRo data, this report shows how guest gratitude is shifting from point-service feedback to appreciation of the overall stay experience.',
		'lang_label'       => 'Language',
		'cta_primary'      => 'Contact Us',
		'cta_secondary'    => 'Download Materials',
		'cta_tertiary'     => 'Book a Demo',
		'microcopy_1'      => 'Takes only 1 minute',
		'microcopy_2'      => 'Consultation and initial setup are free',
		'microcopy_3'      => 'Response within 1 business day',
		'sections'         => array(
			'summary'      => 'Survey Summary',
			'findings'     => 'Key Findings',
			'overview'     => 'Survey Overview',
			'interactive'  => 'Interactive Data Visualizations',
			'insights'     => 'What This Means for Hospitality',
			'comments'     => 'Guest Comments (Excerpt)',
			'about'        => 'About CoCoRo',
			'company'      => 'Company & Citation Notes',
			'final_cta'    => 'Turn gratitude into operational growth.',
		),
		'summary_points' => array(
			'Average tip value is JPY 3,242. While 61.8% are in the JPY 1-2,999 range, 12.3% exceed JPY 10,000.',
			'Ryokan records higher values at JPY 4,094 and 69.3% share; hotels are JPY 1,617 and 30.7%.',
			'72.4% of tips occur between 7:00 and 10:00 AM, around checkout.',
			'Tips are directed mainly to the property as a whole (71.6%), followed by teams (17.2%) and individuals (11.2%).',
			'Message language is primarily English (75.8%), indicating strong inbound usage.',
		),
		'overview_rows' => array(
			array( 'label' => 'Research owner', 'value' => 'faag Inc.' ),
			array( 'label' => 'Method', 'value' => 'Analysis of accumulated records in CoCoRo admin console' ),
			array( 'label' => 'Sample', 'value' => '251 tipping records (as of March 2026)' ),
			array( 'label' => 'Scope', 'value' => 'Tip amount, timing, recipient, message content, emotional icon, etc.' ),
		),
		'finding_cards' => array(
			array( 'value' => 'JPY 3,242', 'label' => 'Average Tip Value', 'note' => 'Mid-range dominates, high-value tips also observed' ),
			array( 'value' => '72.4%', 'label' => '7-10 AM Concentration', 'note' => 'Most events occur around checkout' ),
			array( 'value' => 'JPY 4,094', 'label' => 'Ryokan Average', 'note' => 'Higher than hotel average (JPY 1,617)' ),
			array( 'value' => '75.8%', 'label' => 'English Messages', 'note' => 'Strong fit with inbound hospitality' ),
		),
		'tab_labels' => array(
			'amount'   => 'Amount Bands',
			'facility' => 'Facility Comparison',
			'timing'   => 'Time Window',
			'target'   => 'Recipients',
			'language' => 'Message Language',
			'emotion'  => 'Emotional Icons',
		),
		'chart_notes' => array(
			'amount'   => 'Average tip is JPY 3,242. Most tips are in the lower band, but high-value tipping also exists.',
			'facility' => 'Ryokan outperforms hotels in both average value and share.',
			'timing'   => 'Average is JPY 3,425 around checkout versus JPY 2,397 in other hours.',
			'target'   => 'Appreciation is often directed to the full property, not only specific individuals.',
			'language' => 'English dominates at 75.8%, confirming strong inbound relevance.',
			'emotion'  => 'JOY is most selected; HELPFUL shows a high average tip value (JPY 4,042). MOVED/HELPFUL trends are high-value.',
		),
		'insights' => array(
			array(
				'title' => 'Tipping peaks after the experience, not during service',
				'body'  => 'The checkout concentration indicates that digital tips are often a post-stay expression of gratitude for the total experience.',
			),
			array(
				'title' => 'Visible gratitude improves operational clarity',
				'body'  => 'Combining amount, timing, recipient and emotional context reveals practical service-improvement signals.',
			),
			array(
				'title' => 'Recognition extends beyond individuals to teams and properties',
				'body'  => 'The distribution suggests broad organizational impact, supporting staff engagement and pride.',
			),
			array(
				'title' => 'Strong fit for inbound guest communication',
				'body'  => 'High English usage supports multilingual guest journeys while preserving warm hospitality.',
			),
		),
		'comments' => array(
			array(
				'quote' => '“Our stay was magical, the staff was delightful, the accommodations were perfection.”',
				'trans' => 'Our stay felt magical; both staff and property exceeded expectations.',
			),
			array(
				'quote' => '“This has been the best service we have ever had.”',
				'trans' => 'A strong statement of outstanding service quality.',
			),
			array(
				'quote' => '“Thank you for such a joyful, relaxed and moving experience. We will be back!”',
				'trans' => 'Emotion-rich feedback directly linked to revisit intent.',
			),
			array(
				'quote' => '“Thank you for the amazing hospitality. All the staff were friendly, helpful and kind.”',
				'trans' => 'Hospitality is recognized as a team-level experience.',
			),
			array(
				'quote' => '“Thank you for an unforgettable experience!”',
				'trans' => 'Short but powerful expression of memorable value.',
			),
			array(
				'quote' => '“We absolutely loved our stay here. Doumo arigatou gozaimasu!”',
				'trans' => 'Mixed-language appreciation reflects inbound context.',
			),
			array(
				'quote' => '“Everyone was friendly and kind. We had a truly relaxing stay.”',
				'trans' => 'Guest comfort and emotional outcomes are clearly visible.',
			),
			array(
				'quote' => '“Thank you for your wholehearted hospitality. We had a truly wonderful time.”',
				'trans' => 'Japanese comment translated into English.',
			),
			array(
				'quote' => '“Your warm care made this trip unforgettable.”',
				'trans' => 'Japanese comment translated into English.',
			),
			array(
				'quote' => '“The cuisine and service were both excellent. We would love to come back.”',
				'trans' => 'Japanese comment translated into English.',
			),
		),
		'about' => array(
			'text' => 'CoCoRo is a digital tipping platform that visualizes guest appreciation in hospitality settings. Via QR, guests can send appreciation messages and online tipping to staff or properties.',
			'values' => array(
				'Guest appreciation made visible',
				'Employee engagement support',
				'Service quality insight',
				'Built for inbound hospitality',
			),
			'flow' => array(
				'Introduce via QR touchpoints during stay',
				'Guests send gratitude around checkout',
				'Visualize data in admin dashboard',
				'Apply insights to operations and training',
			),
		),
		'citation_note' => 'This is an independent analysis conducted by faag Inc. using data accumulated in its own service. When quoting, please cite “Source: faag Inc.”',
		'contact_info' => 'For report or service inquiries: info@cocoro.faag.co.jp',
		'company' => array(
			array( 'label' => 'Company', 'value' => 'faag Inc.' ),
			array( 'label' => 'Representative', 'value' => 'Yoji Murata, CEO' ),
			array( 'label' => 'Address', 'value' => '1165-2 Kamifuse, Isumi, Chiba, Japan' ),
			array( 'label' => 'Founded', 'value' => 'September 2018' ),
			array( 'label' => 'Corporate site', 'value' => 'https://faag.co.jp/' ),
			array( 'label' => 'Service site', 'value' => 'https://cocoro.faag.co.jp/' ),
		),
		'final_copy' => 'From press-release interest to implementation discussion, we can walk through the report findings and rollout options for your property.',
	),
);

$stats = array(
	'amount' => array(
		array(
			'label' => array( 'ja' => '1円〜2,999円', 'en' => 'JPY 1-2,999' ),
			'value' => 61.8,
		),
		array(
			'label' => array( 'ja' => '3,000円〜9,999円', 'en' => 'JPY 3,000-9,999' ),
			'value' => 25.9,
		),
		array(
			'label' => array( 'ja' => '10,000円以上', 'en' => 'JPY 10,000+' ),
			'value' => 12.3,
		),
	),
	'facility' => array(
		array(
			'label' => array( 'ja' => 'ホテル', 'en' => 'Hotel' ),
			'share' => 30.7,
			'avg'   => 1617,
		),
		array(
			'label' => array( 'ja' => '旅館', 'en' => 'Ryokan' ),
			'share' => 69.3,
			'avg'   => 4094,
		),
	),
	'timing' => array(
		array(
			'label' => array( 'ja' => '7〜10時', 'en' => '7-10 AM' ),
			'share' => 72.4,
			'avg'   => 3425,
		),
		array(
			'label' => array( 'ja' => 'その他時間帯', 'en' => 'Other hours' ),
			'share' => 27.6,
			'avg'   => 2397,
		),
	),
	'target' => array(
		array(
			'label' => array( 'ja' => '宿泊施設全体', 'en' => 'Entire property' ),
			'value' => 71.6,
		),
		array(
			'label' => array( 'ja' => '部門・チーム名', 'en' => 'Department / Team' ),
			'value' => 17.2,
		),
		array(
			'label' => array( 'ja' => '個人名', 'en' => 'Individual staff' ),
			'value' => 11.2,
		),
	),
	'language' => array(
		array(
			'label' => array( 'ja' => '英語', 'en' => 'English' ),
			'value' => 75.8,
		),
		array(
			'label' => array( 'ja' => '日本語', 'en' => 'Japanese' ),
			'value' => 21.0,
		),
		array(
			'label' => array( 'ja' => 'その他', 'en' => 'Other' ),
			'value' => 3.2,
		),
	),
	'emotion' => array(
		array(
			'label' => 'JOY',
			'share' => 39.7,
			'avg'   => 3102,
		),
		array(
			'label' => 'RELAX',
			'share' => 26.2,
			'avg'   => 3190,
		),
		array(
			'label' => 'HELPFUL',
			'share' => 24.3,
			'avg'   => 4042,
		),
		array(
			'label' => 'MOVED',
			'share' => null,
			'avg'   => null,
		),
	),
);

$t = $copy[ $current_lang ];

$target_colors   = array( '#d83a3a', '#008db7', '#f5c278' );
$language_colors = array( '#d83a3a', '#008db7', '#b8c3cc' );

$target_start   = 0;
$target_stops   = array();
foreach ( $stats['target'] as $i => $item ) {
	$target_end    = $target_start + (float) $item['value'];
	$target_stops[] = $target_colors[ $i ] . ' ' . $target_start . '% ' . $target_end . '%';
	$target_start   = $target_end;
}
$target_gradient = 'conic-gradient(' . implode( ',', $target_stops ) . ')';

$lang_start   = 0;
$lang_stops   = array();
foreach ( $stats['language'] as $i => $item ) {
	$lang_end    = $lang_start + (float) $item['value'];
	$lang_stops[] = $language_colors[ $i ] . ' ' . $lang_start . '% ' . $lang_end . '%';
	$lang_start   = $lang_end;
}
$lang_gradient = 'conic-gradient(' . implode( ',', $lang_stops ) . ')';

$locale = ( 'ja' === $current_lang ) ? 'ja_JP' : 'en_US';
?>
<!doctype html>
<html lang="<?php echo esc_attr( $current_lang ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo esc_html( $t['meta_title'] ); ?></title>
	<meta name="description" content="<?php echo esc_attr( $t['meta_description'] ); ?>">
	<meta name="robots" content="noindex,nofollow">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo esc_attr( $t['meta_title'] ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $t['meta_description'] ); ?>">
	<meta property="og:locale" content="<?php echo esc_attr( $locale ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $base_url ); ?>">
	<meta property="og:site_name" content="CoCoRo">
	<meta name="twitter:card" content="summary_large_image">
	<link rel="alternate" hreflang="ja" href="<?php echo esc_url( $ja_url ); ?>">
	<link rel="alternate" hreflang="en" href="<?php echo esc_url( $en_url ); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
		:root {
			--lp-red: #d83a3a;
			--lp-red-strong: #b82929;
			--lp-blue: #008db7;
			--lp-blue-soft: #e6f7fc;
			--lp-ink: #1c1c1c;
			--lp-muted: #55626d;
			--lp-line: #e3e8ed;
			--lp-bg: #f8fafc;
			--lp-card: #ffffff;
			--lp-gold: #caad5f;
			--lp-shadow: 0 16px 36px rgba(28, 28, 28, 0.08);
			--lp-shadow-heavy: 0 24px 52px rgba(28, 28, 28, 0.14);
		}

		html, body {
			margin: 0;
			padding: 0;
			background: var(--lp-bg);
			color: var(--lp-ink);
			font-family: 'Open Sans', 'Noto Sans JP', sans-serif;
			overflow-x: hidden;
		}

		body.cocoro-survey-lp-page {
			background:
				radial-gradient(900px 500px at 105% -15%, rgba(0, 141, 183, 0.15), transparent 70%),
				radial-gradient(800px 440px at -10% -20%, rgba(216, 58, 58, 0.14), transparent 70%),
				linear-gradient(180deg, #fbfcfe 0%, #f6f9fc 60%, #f8fafc 100%);
		}

		#wpadminbar {
			position: fixed;
		}

		.lp-progress {
			position: fixed;
			top: 0;
			left: 0;
			z-index: 9999;
			width: 100%;
			height: 4px;
			background: rgba(0, 0, 0, 0.06);
		}

		.lp-progress span {
			display: block;
			height: 100%;
			width: 0;
			background: linear-gradient(90deg, var(--lp-blue), var(--lp-red));
			transition: width 0.1s linear;
		}

		.cocoro-survey-lp {
			position: relative;
			max-width: 1200px;
			margin: 0 auto;
			padding: 26px 20px 140px;
		}

		.lp-orb {
			position: fixed;
			border-radius: 999px;
			filter: blur(64px);
			opacity: 0.38;
			pointer-events: none;
			z-index: 0;
			animation: drift 14s ease-in-out infinite alternate;
		}

		.lp-orb--red {
			width: 340px;
			height: 340px;
			top: 10%;
			left: -120px;
			background: rgba(216, 58, 58, 0.35);
		}

		.lp-orb--blue {
			width: 300px;
			height: 300px;
			bottom: 14%;
			right: -110px;
			background: rgba(0, 141, 183, 0.3);
			animation-delay: 0.9s;
		}

		@keyframes drift {
			0% {
				transform: translate3d(0, 0, 0) scale(1);
			}
			100% {
				transform: translate3d(18px, -14px, 0) scale(1.06);
			}
		}

		.lp-topbar {
			display: flex;
			justify-content: flex-end;
			align-items: center;
			gap: 10px;
			position: relative;
			z-index: 2;
			font-size: 13px;
			color: var(--lp-muted);
			margin-bottom: 10px;
		}

		.lp-lang-btn {
			border: 1px solid var(--lp-line);
			padding: 7px 12px;
			border-radius: 999px;
			text-decoration: none;
			color: var(--lp-muted);
			background: rgba(255, 255, 255, 0.85);
			font-weight: 600;
			transition: transform 0.2s ease, box-shadow 0.2s ease;
		}

		.lp-lang-btn:hover {
			transform: translateY(-1px);
			box-shadow: 0 4px 14px rgba(28, 28, 28, 0.08);
		}

		.lp-lang-btn[aria-current='true'] {
			background: var(--lp-ink);
			color: #fff;
			border-color: var(--lp-ink);
		}

		.lp-hero {
			position: relative;
			padding: 34px;
			border-radius: 26px;
			overflow: hidden;
			color: #fff;
			background:
				linear-gradient(130deg, rgba(28, 28, 28, 0.96), rgba(28, 28, 28, 0.84)),
				linear-gradient(160deg, rgba(0, 141, 183, 0.38), rgba(216, 58, 58, 0.5));
			box-shadow: var(--lp-shadow-heavy);
			z-index: 2;
			isolation: isolate;
		}

		.lp-hero::before,
		.lp-hero::after {
			content: '';
			position: absolute;
			pointer-events: none;
			z-index: -1;
		}

		.lp-hero::before {
			width: 420px;
			height: 420px;
			right: -110px;
			top: -180px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(216, 58, 58, 0.52), transparent 70%);
			animation: pulse 6s ease-in-out infinite;
		}

		.lp-hero::after {
			width: 300px;
			height: 300px;
			left: -90px;
			bottom: -110px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(0, 141, 183, 0.5), transparent 70%);
			animation: pulse 7s ease-in-out infinite reverse;
		}

		@keyframes pulse {
			0%,
			100% {
				transform: scale(0.95);
				opacity: 0.7;
			}
			50% {
				transform: scale(1.08);
				opacity: 1;
			}
		}

		.lp-badge {
			display: inline-flex;
			padding: 8px 12px;
			border-radius: 999px;
			font-size: 12px;
			letter-spacing: 0.06em;
			text-transform: uppercase;
			background: rgba(255, 255, 255, 0.14);
			border: 1px solid rgba(255, 255, 255, 0.3);
		}

		.lp-title {
			margin: 16px 0 8px;
			font-size: clamp(30px, 4.8vw, 58px);
			line-height: 1.14;
			font-family: 'Noto Sans JP', sans-serif;
			font-weight: 800;
			letter-spacing: 0.01em;
		}

		.lp-subtitle {
			margin: 0;
			font-size: clamp(18px, 2.1vw, 26px);
			line-height: 1.5;
			font-weight: 600;
			max-width: 820px;
		}

		.lp-lead {
			margin: 12px 0 0;
			max-width: 820px;
			line-height: 1.75;
			color: rgba(255, 255, 255, 0.9);
		}

		.lp-actions {
			display: flex;
			gap: 10px;
			flex-wrap: wrap;
			margin-top: 20px;
		}

		.lp-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 12px 18px;
			border-radius: 999px;
			font-size: 14px;
			font-weight: 700;
			text-decoration: none;
			transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
		}

		.lp-btn:hover {
			transform: translateY(-1px);
		}

		.lp-btn--solid {
			background: linear-gradient(140deg, var(--lp-red), var(--lp-red-strong));
			color: #fff;
			box-shadow: 0 8px 20px rgba(216, 58, 58, 0.35);
		}

		.lp-btn--ghost {
			border: 1px solid rgba(255, 255, 255, 0.5);
			color: #fff;
			background: rgba(255, 255, 255, 0.06);
		}

		.lp-microcopy {
			display: flex;
			flex-wrap: wrap;
			gap: 8px;
			margin-top: 14px;
		}

		.lp-microcopy span {
			font-size: 12px;
			font-weight: 700;
			color: #fff;
			background: rgba(255, 255, 255, 0.15);
			border: 1px solid rgba(255, 255, 255, 0.28);
			padding: 7px 11px;
			border-radius: 999px;
		}

		.lp-hero-kpis {
			display: grid;
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 10px;
			margin-top: 20px;
		}

		.lp-kpi {
			padding: 13px;
			border-radius: 14px;
			background: rgba(255, 255, 255, 0.11);
			border: 1px solid rgba(255, 255, 255, 0.26);
			backdrop-filter: blur(3px);
		}

		.lp-kpi small {
			display: block;
			font-size: 11px;
			opacity: 0.9;
			text-transform: uppercase;
			letter-spacing: 0.06em;
		}

		.lp-kpi strong {
			display: block;
			margin-top: 5px;
			font-size: clamp(23px, 3.2vw, 34px);
			line-height: 1.1;
		}

		.lp-section {
			position: relative;
			z-index: 2;
			margin-top: 58px;
		}

		.lp-heading {
			font-size: clamp(26px, 3.2vw, 40px);
			line-height: 1.2;
			margin: 0 0 16px;
			font-family: 'Noto Sans JP', sans-serif;
			font-weight: 800;
		}

		.lp-subheading {
			margin: 0 0 18px;
			line-height: 1.75;
			color: var(--lp-muted);
		}

		.lp-summary-grid {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 12px;
		}

		.lp-summary-item {
			background: var(--lp-card);
			border: 1px solid var(--lp-line);
			border-left: 4px solid var(--lp-red);
			border-radius: 14px;
			padding: 14px 16px;
			line-height: 1.7;
			box-shadow: var(--lp-shadow);
			transition: transform 0.26s ease;
		}

		.lp-summary-item:hover {
			transform: translateY(-3px);
		}

		.lp-finding-grid {
			display: grid;
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 12px;
		}

		.lp-card {
			background: var(--lp-card);
			border: 1px solid var(--lp-line);
			border-radius: 18px;
			padding: 18px;
			box-shadow: var(--lp-shadow);
			position: relative;
			overflow: hidden;
		}

		.lp-card::after {
			content: '';
			position: absolute;
			right: -18px;
			top: -22px;
			width: 84px;
			height: 84px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(0, 141, 183, 0.18), transparent 72%);
		}

		.lp-finding-value {
			font-size: clamp(24px, 3.2vw, 36px);
			font-weight: 800;
			line-height: 1.1;
			color: var(--lp-red);
			font-family: 'Noto Sans JP', sans-serif;
		}

		.lp-finding-label {
			display: block;
			margin-top: 6px;
			font-weight: 700;
		}

		.lp-finding-note {
			margin: 8px 0 0;
			line-height: 1.65;
			color: var(--lp-muted);
			font-size: 14px;
		}

		.lp-overview {
			display: grid;
			gap: 10px;
		}

		.lp-overview-row {
			display: grid;
			grid-template-columns: 220px 1fr;
			gap: 12px;
			align-items: start;
			padding: 14px 16px;
			background: #fff;
			border: 1px solid var(--lp-line);
			border-radius: 14px;
		}

		.lp-overview-row dt {
			font-weight: 700;
			color: var(--lp-ink);
		}

		.lp-overview-row dd {
			margin: 0;
			color: var(--lp-muted);
			line-height: 1.7;
		}

		.lp-tabs {
			display: flex;
			gap: 8px;
			flex-wrap: wrap;
			margin: 0 0 14px;
		}

		.lp-tab {
			border: 1px solid var(--lp-line);
			background: #fff;
			color: var(--lp-muted);
			border-radius: 999px;
			padding: 9px 14px;
			font-weight: 700;
			font-size: 13px;
			cursor: pointer;
			transition: all 0.2s ease;
		}

		.lp-tab:hover {
			transform: translateY(-1px);
		}

		.lp-tab[aria-selected='true'] {
			background: linear-gradient(130deg, var(--lp-red), var(--lp-blue));
			border-color: transparent;
			color: #fff;
		}

		.lp-panel {
			display: none;
			background: #fff;
			border: 1px solid var(--lp-line);
			border-radius: 18px;
			padding: 20px;
			box-shadow: var(--lp-shadow);
		}

		.lp-panel.is-active {
			display: block;
			animation: fadeInUp 0.4s ease;
		}

		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(8px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.lp-note {
			margin: 0 0 16px;
			line-height: 1.7;
			color: var(--lp-muted);
			font-size: 14px;
		}

		.lp-bars {
			display: grid;
			gap: 12px;
		}

		.lp-bar-head {
			display: flex;
			justify-content: space-between;
			gap: 10px;
			font-size: 14px;
			margin-bottom: 6px;
		}

		.lp-bar-track {
			height: 12px;
			border-radius: 999px;
			background: #eef3f7;
			overflow: hidden;
		}

		.lp-bar-fill {
			display: block;
			height: 100%;
			width: 0;
			border-radius: inherit;
			background: linear-gradient(90deg, var(--lp-blue), var(--lp-red));
			transition: width 0.9s cubic-bezier(0.2, 0.8, 0.2, 1);
		}

		.lp-panel.is-active .lp-bar-fill {
			width: calc(var(--value) * 1%);
		}

		.lp-panel-split {
			display: grid;
			grid-template-columns: 1.05fr 0.95fr;
			gap: 18px;
			align-items: center;
		}

		.lp-donut {
			width: 260px;
			height: 260px;
			border-radius: 50%;
			margin: 0 auto;
			position: relative;
			box-shadow: inset 0 0 0 16px rgba(255, 255, 255, 0.55);
		}

		.lp-donut::after {
			content: '';
			position: absolute;
			inset: 31%;
			border-radius: 50%;
			background: #fff;
			box-shadow: 0 0 0 1px rgba(227, 232, 237, 0.7);
		}

		.lp-legend {
			display: grid;
			gap: 10px;
		}

		.lp-legend-item {
			display: grid;
			grid-template-columns: 12px 1fr auto;
			gap: 10px;
			align-items: center;
			font-size: 14px;
			background: #fbfdff;
			border: 1px solid var(--lp-line);
			border-radius: 10px;
			padding: 8px 10px;
		}

		.lp-dot {
			width: 12px;
			height: 12px;
			border-radius: 50%;
		}

		.lp-facility-toggle {
			display: inline-flex;
			gap: 8px;
			margin-bottom: 12px;
		}

		.lp-facility-toggle button {
			border: 1px solid var(--lp-line);
			background: #fff;
			color: var(--lp-muted);
			border-radius: 999px;
			padding: 7px 12px;
			font-size: 12px;
			font-weight: 700;
			cursor: pointer;
		}

		.lp-facility-toggle button.is-active {
			background: var(--lp-ink);
			color: #fff;
			border-color: var(--lp-ink);
		}

		.lp-emotion-grid {
			display: grid;
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 12px;
		}

		.lp-emotion-card {
			padding: 14px;
			border-radius: 14px;
			background: #fff;
			border: 1px solid var(--lp-line);
			box-shadow: var(--lp-shadow);
			transform-style: preserve-3d;
			transition: transform 0.25s ease, box-shadow 0.25s ease;
		}

		.lp-emotion-card:hover {
			transform: translateY(-2px) rotateX(2deg) rotateY(-2deg);
			box-shadow: 0 14px 32px rgba(28, 28, 28, 0.12);
		}

		.lp-emotion-card h4 {
			margin: 0 0 8px;
			font-size: 15px;
			letter-spacing: 0.04em;
		}

		.lp-emotion-meta {
			display: grid;
			gap: 4px;
			font-size: 13px;
			color: var(--lp-muted);
		}

		.lp-emotion-meta strong {
			color: var(--lp-ink);
			font-size: 15px;
		}

		.lp-insight-grid {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 12px;
		}

		.lp-insight-card h3 {
			margin: 0 0 8px;
			font-size: 19px;
			font-family: 'Noto Sans JP', sans-serif;
		}

		.lp-insight-card p {
			margin: 0;
			line-height: 1.75;
			color: var(--lp-muted);
		}

		.lp-comments-wrap {
			position: relative;
			overflow: hidden;
		}

		.lp-comments-track {
			display: grid;
			grid-auto-flow: column;
			grid-auto-columns: minmax(320px, 1fr);
			gap: 12px;
			transition: transform 0.55s cubic-bezier(0.2, 0.8, 0.2, 1);
		}

		.lp-comment-card {
			background: #fff;
			border: 1px solid var(--lp-line);
			border-radius: 16px;
			padding: 16px;
			box-shadow: var(--lp-shadow);
			min-height: 180px;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		.lp-comment-card blockquote {
			margin: 0;
			font-size: 15px;
			line-height: 1.8;
			font-weight: 600;
		}

		.lp-comment-card p {
			margin: 10px 0 0;
			font-size: 13px;
			line-height: 1.7;
			color: var(--lp-muted);
		}

		.lp-carousel-nav {
			display: flex;
			justify-content: flex-end;
			gap: 8px;
			margin-top: 10px;
		}

		.lp-carousel-btn {
			width: 36px;
			height: 36px;
			border-radius: 50%;
			border: 1px solid var(--lp-line);
			background: #fff;
			cursor: pointer;
			font-size: 15px;
			font-weight: 700;
			color: var(--lp-muted);
		}

		.lp-about-grid {
			display: grid;
			grid-template-columns: 1.05fr 0.95fr;
			gap: 14px;
		}

		.lp-list {
			margin: 10px 0 0;
			padding: 0;
			list-style: none;
			display: grid;
			gap: 8px;
		}

		.lp-list li {
			padding: 10px 12px;
			border-radius: 10px;
			background: #fbfdff;
			border: 1px solid var(--lp-line);
			line-height: 1.65;
		}

		.lp-citation {
			margin-top: 12px;
			padding: 14px;
			background: #fff7f7;
			border: 1px solid rgba(216, 58, 58, 0.26);
			border-radius: 12px;
			line-height: 1.75;
		}

		.lp-company {
			display: grid;
			gap: 8px;
		}

		.lp-company-row {
			display: grid;
			grid-template-columns: 150px 1fr;
			gap: 10px;
			padding: 10px 12px;
			background: #fff;
			border: 1px solid var(--lp-line);
			border-radius: 10px;
		}

		.lp-company-row dt {
			font-weight: 700;
		}

		.lp-company-row dd {
			margin: 0;
			color: var(--lp-muted);
		}

		.lp-company-row a {
			color: var(--lp-blue);
		}

		.lp-final-cta {
			position: relative;
			padding: 28px;
			border-radius: 20px;
			background: linear-gradient(135deg, #1c1c1c, #313840);
			color: #fff;
			box-shadow: var(--lp-shadow-heavy);
			overflow: hidden;
		}

		.lp-final-cta::after {
			content: '';
			position: absolute;
			right: -90px;
			top: -70px;
			width: 260px;
			height: 260px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(216, 58, 58, 0.45), transparent 70%);
		}

		.lp-final-cta p {
			max-width: 760px;
			line-height: 1.8;
			color: rgba(255, 255, 255, 0.9);
		}

		.lp-reveal {
			opacity: 0;
			transform: translateY(14px);
			transition: opacity 0.65s ease, transform 0.65s ease;
		}

		.lp-reveal.is-visible {
			opacity: 1;
			transform: translateY(0);
		}

		.lp-sticky-cta {
			position: fixed;
			left: 50%;
			bottom: 14px;
			transform: translateX(-50%);
			z-index: 9998;
			width: min(1080px, calc(100% - 20px));
			background: rgba(28, 28, 28, 0.95);
			border: 1px solid rgba(255, 255, 255, 0.16);
			border-radius: 14px;
			padding: 10px 12px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 10px;
			backdrop-filter: blur(10px);
			box-shadow: 0 12px 30px rgba(0, 0, 0, 0.28);
		}

		.lp-sticky-copy {
			display: flex;
			flex-direction: column;
			gap: 5px;
			min-width: 0;
		}

		.lp-sticky-copy strong {
			color: #fff;
			font-size: 14px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.lp-sticky-badges {
			display: flex;
			gap: 6px;
			flex-wrap: wrap;
		}

		.lp-sticky-badges span {
			font-size: 11px;
			padding: 5px 8px;
			border-radius: 999px;
			font-weight: 700;
			background: rgba(255, 255, 255, 0.12);
			color: rgba(255, 255, 255, 0.92);
			border: 1px solid rgba(255, 255, 255, 0.2);
		}

		.lp-sticky-actions {
			display: flex;
			gap: 8px;
			flex-shrink: 0;
		}

		.lp-sticky-actions a {
			text-decoration: none;
			padding: 10px 14px;
			border-radius: 999px;
			font-size: 12px;
			font-weight: 800;
		}

		.lp-sticky-actions .is-primary {
			background: linear-gradient(145deg, var(--lp-red), var(--lp-red-strong));
			color: #fff;
		}

		.lp-sticky-actions .is-secondary {
			background: rgba(255, 255, 255, 0.14);
			color: #fff;
			border: 1px solid rgba(255, 255, 255, 0.2);
		}

		@media (max-width: 1080px) {
			.lp-finding-grid {
				grid-template-columns: repeat(2, minmax(0, 1fr));
			}

			.lp-emotion-grid {
				grid-template-columns: repeat(2, minmax(0, 1fr));
			}
		}

		@media (max-width: 860px) {
			.cocoro-survey-lp {
				padding: 18px 14px 160px;
			}

			.lp-hero {
				padding: 22px;
			}

			.lp-hero-kpis {
				grid-template-columns: repeat(2, minmax(0, 1fr));
			}

			.lp-summary-grid,
			.lp-insight-grid,
			.lp-about-grid,
			.lp-panel-split {
				grid-template-columns: 1fr;
			}

			.lp-overview-row,
			.lp-company-row {
				grid-template-columns: 1fr;
			}

			.lp-donut {
				width: 220px;
				height: 220px;
			}
		}

		@media (max-width: 640px) {
			.lp-finding-grid,
			.lp-emotion-grid {
				grid-template-columns: 1fr;
			}

			.lp-comments-track {
				grid-auto-columns: calc(100vw - 46px);
			}

			.lp-sticky-cta {
				flex-direction: column;
				align-items: stretch;
				gap: 8px;
			}

			.lp-sticky-actions {
				width: 100%;
			}

			.lp-sticky-actions a {
				flex: 1;
				text-align: center;
			}
		}
	</style>
</head>
<body class="cocoro-survey-lp-page">
<?php wp_body_open(); ?>

<div class="lp-progress" aria-hidden="true">
	<span id="lp-progress-bar"></span>
</div>

<div class="lp-orb lp-orb--red" aria-hidden="true"></div>
<div class="lp-orb lp-orb--blue" aria-hidden="true"></div>

<main id="mainContent" class="cocoro-survey-lp" lang="<?php echo esc_attr( $current_lang ); ?>">
	<div class="lp-topbar">
		<span><?php echo esc_html( $t['lang_label'] ); ?></span>
		<a class="lp-lang-btn" href="<?php echo esc_url( $ja_url ); ?>" aria-current="<?php echo ( 'ja' === $current_lang ) ? 'true' : 'false'; ?>">日本語</a>
		<a class="lp-lang-btn" href="<?php echo esc_url( $en_url ); ?>" aria-current="<?php echo ( 'en' === $current_lang ) ? 'true' : 'false'; ?>">English</a>
	</div>

	<section class="lp-hero lp-reveal" id="hero">
		<span class="lp-badge"><?php echo esc_html( $t['hero_badge'] ); ?></span>
		<h1 class="lp-title"><?php echo esc_html( $t['hero_title'] ); ?></h1>
		<p class="lp-subtitle"><?php echo esc_html( $t['hero_subtitle'] ); ?></p>
		<p class="lp-lead"><?php echo esc_html( $t['hero_lead'] ); ?></p>
		<div class="lp-actions">
			<a class="lp-btn lp-btn--solid" href="<?php echo esc_url( $contact_url ); ?>"><?php echo esc_html( $t['cta_primary'] ); ?></a>
			<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( $docs_url ); ?>"><?php echo esc_html( $t['cta_secondary'] ); ?></a>
			<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( $contact_url ); ?>"><?php echo esc_html( $t['cta_tertiary'] ); ?></a>
		</div>
		<div class="lp-microcopy" aria-label="microcopy">
			<span><?php echo esc_html( $t['microcopy_1'] ); ?></span>
			<span><?php echo esc_html( $t['microcopy_2'] ); ?></span>
			<span><?php echo esc_html( $t['microcopy_3'] ); ?></span>
		</div>
		<div class="lp-hero-kpis">
			<div class="lp-kpi">
				<small>Average Tip</small>
				<strong class="js-count" data-format="yen" data-value="3242">¥3,242</strong>
			</div>
			<div class="lp-kpi">
				<small>Checkout Share</small>
				<strong class="js-count" data-format="percent" data-value="72.4">72.4%</strong>
			</div>
			<div class="lp-kpi">
				<small>English Messages</small>
				<strong class="js-count" data-format="percent" data-value="75.8">75.8%</strong>
			</div>
			<div class="lp-kpi">
				<small>Sample</small>
				<strong class="js-count" data-format="int" data-value="251">251</strong>
			</div>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="summary">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['summary'] ); ?></h2>
		<div class="lp-summary-grid">
			<?php foreach ( $t['summary_points'] as $point ) : ?>
				<article class="lp-summary-item"><?php echo esc_html( $point ); ?></article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="findings">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['findings'] ); ?></h2>
		<div class="lp-finding-grid">
			<?php foreach ( $t['finding_cards'] as $item ) : ?>
				<article class="lp-card">
					<div class="lp-finding-value"><?php echo esc_html( $item['value'] ); ?></div>
					<span class="lp-finding-label"><?php echo esc_html( $item['label'] ); ?></span>
					<p class="lp-finding-note"><?php echo esc_html( $item['note'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="overview">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['overview'] ); ?></h2>
		<dl class="lp-overview">
			<?php foreach ( $t['overview_rows'] as $row ) : ?>
				<div class="lp-overview-row">
					<dt><?php echo esc_html( $row['label'] ); ?></dt>
					<dd><?php echo esc_html( $row['value'] ); ?></dd>
				</div>
			<?php endforeach; ?>
		</dl>
	</section>

	<section class="lp-section lp-reveal" id="interactive">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['interactive'] ); ?></h2>
		<p class="lp-subheading">Tap / click で表示を切り替えられます。</p>

		<div class="lp-tabs" role="tablist">
			<?php foreach ( $t['tab_labels'] as $key => $label ) : ?>
				<button class="lp-tab" type="button" role="tab" data-tab="<?php echo esc_attr( $key ); ?>" aria-selected="<?php echo ( 'amount' === $key ) ? 'true' : 'false'; ?>"><?php echo esc_html( $label ); ?></button>
			<?php endforeach; ?>
		</div>

		<div class="lp-panel is-active" data-panel="amount">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['amount'] ); ?></p>
			<div class="lp-bars">
				<?php foreach ( $stats['amount'] as $item ) : ?>
					<div>
						<div class="lp-bar-head">
							<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
							<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
						</div>
						<div class="lp-bar-track"><span class="lp-bar-fill" style="--value:<?php echo esc_attr( $item['value'] ); ?>"></span></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="lp-panel" data-panel="facility">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['facility'] ); ?></p>
			<div class="lp-facility-toggle" role="group" aria-label="facility metric">
				<button type="button" class="is-active" data-metric="share"><?php echo ( 'ja' === $current_lang ) ? '発生割合' : 'Share'; ?></button>
				<button type="button" data-metric="avg"><?php echo ( 'ja' === $current_lang ) ? '平均単価' : 'Average value'; ?></button>
			</div>
			<div class="lp-bars js-facility-bars">
				<?php foreach ( $stats['facility'] as $item ) : ?>
					<div>
						<div class="lp-bar-head">
							<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
							<strong class="js-facility-value" data-share="<?php echo esc_attr( $item['share'] ); ?>" data-avg="<?php echo esc_attr( $item['avg'] ); ?>"><?php echo esc_html( number_format_i18n( $item['share'], 1 ) ); ?>%</strong>
						</div>
						<div class="lp-bar-track"><span class="lp-bar-fill js-facility-fill" style="--value:<?php echo esc_attr( $item['share'] ); ?>" data-share="<?php echo esc_attr( $item['share'] ); ?>" data-avg="<?php echo esc_attr( $item['avg'] ); ?>"></span></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="lp-panel" data-panel="timing">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['timing'] ); ?></p>
			<div class="lp-bars">
				<?php foreach ( $stats['timing'] as $item ) : ?>
					<div>
						<div class="lp-bar-head">
							<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
							<strong><?php echo esc_html( number_format_i18n( $item['share'], 1 ) ); ?>%</strong>
						</div>
						<div class="lp-bar-track"><span class="lp-bar-fill" style="--value:<?php echo esc_attr( $item['share'] ); ?>"></span></div>
						<div class="lp-bar-head" style="margin-top:8px;">
							<span><?php echo ( 'ja' === $current_lang ) ? '平均チップ単価' : 'Average tip'; ?></span>
							<strong>¥<?php echo esc_html( number_format_i18n( $item['avg'] ) ); ?></strong>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="lp-panel" data-panel="target">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['target'] ); ?></p>
			<div class="lp-panel-split">
				<div class="lp-donut" style="background: <?php echo esc_attr( $target_gradient ); ?>;"></div>
				<div class="lp-legend">
					<?php foreach ( $stats['target'] as $idx => $item ) : ?>
						<div class="lp-legend-item">
							<span class="lp-dot" style="background:<?php echo esc_attr( $target_colors[ $idx ] ); ?>;"></span>
							<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
							<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="lp-panel" data-panel="language">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['language'] ); ?></p>
			<div class="lp-panel-split">
				<div class="lp-donut" style="background: <?php echo esc_attr( $lang_gradient ); ?>;"></div>
				<div class="lp-legend">
					<?php foreach ( $stats['language'] as $idx => $item ) : ?>
						<div class="lp-legend-item">
							<span class="lp-dot" style="background:<?php echo esc_attr( $language_colors[ $idx ] ); ?>;"></span>
							<span><?php echo esc_html( $item['label'][ $current_lang ] ); ?></span>
							<strong><?php echo esc_html( number_format_i18n( $item['value'], 1 ) ); ?>%</strong>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="lp-panel" data-panel="emotion">
			<p class="lp-note"><?php echo esc_html( $t['chart_notes']['emotion'] ); ?></p>
			<div class="lp-emotion-grid">
				<?php foreach ( $stats['emotion'] as $item ) : ?>
					<article class="lp-emotion-card">
						<h4><?php echo esc_html( $item['label'] ); ?></h4>
						<div class="lp-emotion-meta">
							<?php if ( null !== $item['share'] ) : ?>
								<span><?php echo ( 'ja' === $current_lang ) ? '選択率' : 'Selection rate'; ?> <strong><?php echo esc_html( number_format_i18n( $item['share'], 1 ) ); ?>%</strong></span>
							<?php else : ?>
								<span><?php echo ( 'ja' === $current_lang ) ? '選択率' : 'Selection rate'; ?> <strong><?php echo ( 'ja' === $current_lang ) ? '公開値なし' : 'Not disclosed'; ?></strong></span>
							<?php endif; ?>
							<?php if ( null !== $item['avg'] ) : ?>
								<span><?php echo ( 'ja' === $current_lang ) ? '平均チップ単価' : 'Average tip'; ?> <strong>¥<?php echo esc_html( number_format_i18n( $item['avg'] ) ); ?></strong></span>
							<?php else : ?>
								<span><?php echo ( 'ja' === $current_lang ) ? '平均チップ単価' : 'Average tip'; ?> <strong><?php echo ( 'ja' === $current_lang ) ? '定量未公表' : 'Not quantified'; ?></strong></span>
							<?php endif; ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="insights">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['insights'] ); ?></h2>
		<div class="lp-insight-grid">
			<?php foreach ( $t['insights'] as $insight ) : ?>
				<article class="lp-card lp-insight-card">
					<h3><?php echo esc_html( $insight['title'] ); ?></h3>
					<p><?php echo esc_html( $insight['body'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="comments">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['comments'] ); ?></h2>
		<div class="lp-comments-wrap">
			<div class="lp-comments-track" id="lp-comments-track">
				<?php foreach ( $t['comments'] as $comment ) : ?>
					<article class="lp-comment-card">
						<blockquote><?php echo esc_html( $comment['quote'] ); ?></blockquote>
						<p><?php echo esc_html( $comment['trans'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="lp-carousel-nav">
			<button type="button" class="lp-carousel-btn" id="lp-comment-prev" aria-label="Previous">←</button>
			<button type="button" class="lp-carousel-btn" id="lp-comment-next" aria-label="Next">→</button>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="about">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['about'] ); ?></h2>
		<div class="lp-about-grid">
			<article class="lp-card">
				<p class="lp-subheading" style="margin-bottom:0;"><?php echo esc_html( $t['about']['text'] ); ?></p>
				<ul class="lp-list">
					<?php foreach ( $t['about']['values'] as $value ) : ?>
						<li><?php echo esc_html( $value ); ?></li>
					<?php endforeach; ?>
				</ul>
			</article>
			<article class="lp-card">
				<ul class="lp-list">
					<?php foreach ( $t['about']['flow'] as $step ) : ?>
						<li><?php echo esc_html( $step ); ?></li>
					<?php endforeach; ?>
				</ul>
			</article>
		</div>
	</section>

	<section class="lp-section lp-reveal" id="company">
		<h2 class="lp-heading"><?php echo esc_html( $t['sections']['company'] ); ?></h2>
		<article class="lp-citation">
			<?php echo esc_html( $t['citation_note'] ); ?><br>
			<?php echo esc_html( $t['contact_info'] ); ?>
		</article>
		<dl class="lp-company" style="margin-top:12px;">
			<?php foreach ( $t['company'] as $row ) : ?>
				<div class="lp-company-row">
					<dt><?php echo esc_html( $row['label'] ); ?></dt>
					<dd>
						<?php if ( 0 === strpos( $row['value'], 'http' ) ) : ?>
							<a href="<?php echo esc_url( $row['value'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $row['value'] ); ?></a>
						<?php else : ?>
							<?php echo esc_html( $row['value'] ); ?>
						<?php endif; ?>
					</dd>
				</div>
			<?php endforeach; ?>
		</dl>
	</section>

	<section class="lp-section lp-reveal" id="final-cta">
		<div class="lp-final-cta">
			<h2 class="lp-heading" style="color:#fff;margin-top:0;position:relative;z-index:1;"><?php echo esc_html( $t['sections']['final_cta'] ); ?></h2>
			<p style="position:relative;z-index:1;"><?php echo esc_html( $t['final_copy'] ); ?></p>
			<div class="lp-actions" style="position:relative;z-index:1;">
				<a class="lp-btn lp-btn--solid" href="<?php echo esc_url( $contact_url ); ?>"><?php echo esc_html( $t['cta_primary'] ); ?></a>
				<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( $docs_url ); ?>"><?php echo esc_html( $t['cta_secondary'] ); ?></a>
				<a class="lp-btn lp-btn--ghost" href="<?php echo esc_url( $service_url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo ( 'ja' === $current_lang ) ? 'サービスサイトを見る' : 'Visit Service Site'; ?></a>
			</div>
		</div>
	</section>
</main>

<div class="lp-sticky-cta" id="lp-sticky-cta" aria-label="sticky cta">
	<div class="lp-sticky-copy">
		<strong><?php echo esc_html( $t['sections']['final_cta'] ); ?></strong>
		<div class="lp-sticky-badges">
			<span><?php echo esc_html( $t['microcopy_1'] ); ?></span>
			<span><?php echo esc_html( $t['microcopy_2'] ); ?></span>
		</div>
	</div>
	<div class="lp-sticky-actions">
		<a class="is-primary" href="<?php echo esc_url( $contact_url ); ?>"><?php echo esc_html( $t['cta_primary'] ); ?></a>
		<a class="is-secondary" href="<?php echo esc_url( $docs_url ); ?>"><?php echo esc_html( $t['cta_secondary'] ); ?></a>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var progressBar = document.getElementById('lp-progress-bar');
		var sticky = document.getElementById('lp-sticky-cta');
		var finalCta = document.getElementById('final-cta');

		var setProgress = function () {
			var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			var max = document.documentElement.scrollHeight - window.innerHeight;
			var ratio = max > 0 ? (scrollTop / max) * 100 : 0;
			progressBar.style.width = Math.min(100, Math.max(0, ratio)) + '%';

			if (finalCta) {
				var finalRect = finalCta.getBoundingClientRect();
				sticky.style.opacity = finalRect.top < window.innerHeight - 120 ? '0' : '1';
				sticky.style.pointerEvents = finalRect.top < window.innerHeight - 120 ? 'none' : 'auto';
			}
		};

		setProgress();
		window.addEventListener('scroll', setProgress, { passive: true });
		window.addEventListener('resize', setProgress);

		var reveals = document.querySelectorAll('.lp-reveal');
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
				}
			});
		}, { threshold: 0.14 });
		reveals.forEach(function (el) { revealObserver.observe(el); });

		var countEls = document.querySelectorAll('.js-count');
		countEls.forEach(function (el) {
			var target = parseFloat(el.dataset.value || '0');
			var format = el.dataset.format || 'int';
			var started = false;

			var obs = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (!entry.isIntersecting || started) return;
					started = true;
					var start = performance.now();
					var duration = 1200;

					var animate = function (now) {
						var p = Math.min((now - start) / duration, 1);
						var eased = 1 - Math.pow(1 - p, 3);
						var current = target * eased;
						if (format === 'yen') {
							el.textContent = '¥' + Math.round(current).toLocaleString();
						} else if (format === 'percent') {
							el.textContent = current.toFixed(1) + '%';
						} else {
							el.textContent = Math.round(current).toLocaleString();
						}
						if (p < 1) requestAnimationFrame(animate);
					};

					requestAnimationFrame(animate);
				});
			}, { threshold: 0.45 });

			obs.observe(el);
		});

		var tabs = document.querySelectorAll('.lp-tab');
		var panels = document.querySelectorAll('.lp-panel');
		tabs.forEach(function (tab) {
			tab.addEventListener('click', function () {
				var target = tab.getAttribute('data-tab');
				tabs.forEach(function (btn) {
					btn.setAttribute('aria-selected', btn === tab ? 'true' : 'false');
				});
				panels.forEach(function (panel) {
					panel.classList.toggle('is-active', panel.getAttribute('data-panel') === target);
				});
			});
		});

		var facilityButtons = document.querySelectorAll('.lp-facility-toggle button');
		var facilityValues = document.querySelectorAll('.js-facility-value');
		var facilityFills = document.querySelectorAll('.js-facility-fill');
		facilityButtons.forEach(function (btn) {
			btn.addEventListener('click', function () {
				var metric = btn.getAttribute('data-metric');
				facilityButtons.forEach(function (other) {
					other.classList.toggle('is-active', other === btn);
				});

				facilityValues.forEach(function (el) {
					if (metric === 'avg') {
						var avg = parseFloat(el.getAttribute('data-avg') || '0');
						el.textContent = '¥' + Math.round(avg).toLocaleString();
					} else {
						var share = parseFloat(el.getAttribute('data-share') || '0');
						el.textContent = share.toFixed(1) + '%';
					}
				});

				facilityFills.forEach(function (el) {
					if (metric === 'avg') {
						var avg = parseFloat(el.getAttribute('data-avg') || '0');
						var scaled = Math.min(100, (avg / 4094) * 100);
						el.style.setProperty('--value', scaled.toFixed(1));
					} else {
						var share = parseFloat(el.getAttribute('data-share') || '0');
						el.style.setProperty('--value', share.toFixed(1));
					}
				});
			});
		});

		var track = document.getElementById('lp-comments-track');
		var prev = document.getElementById('lp-comment-prev');
		var next = document.getElementById('lp-comment-next');
		if (track && prev && next) {
			var index = 0;
			var cards = track.children.length;
			var step = function () {
				var card = track.querySelector('.lp-comment-card');
				if (!card) return 0;
				var style = window.getComputedStyle(track);
				var gap = parseFloat(style.columnGap || style.gap || '0');
				return card.getBoundingClientRect().width + gap;
			};
			var move = function () {
				track.style.transform = 'translateX(' + (-index * step()) + 'px)';
			};
			prev.addEventListener('click', function () {
				index = (index - 1 + cards) % cards;
				move();
			});
			next.addEventListener('click', function () {
				index = (index + 1) % cards;
				move();
			});
			window.addEventListener('resize', move);
			setInterval(function () {
				index = (index + 1) % cards;
				move();
			}, 4200);
		}

		var hero = document.getElementById('hero');
		if (hero) {
			hero.addEventListener('mousemove', function (event) {
				var rect = hero.getBoundingClientRect();
				var x = (event.clientX - rect.left) / rect.width;
				var y = (event.clientY - rect.top) / rect.height;
				var tx = (x - 0.5) * 6;
				var ty = (y - 0.5) * 6;
				hero.style.transform = 'perspective(900px) rotateX(' + (-ty * 0.3) + 'deg) rotateY(' + (tx * 0.3) + 'deg)';
			});
			hero.addEventListener('mouseleave', function () {
				hero.style.transform = 'none';
			});
		}
	});
</script>

<?php wp_footer(); ?>
</body>
</html>
