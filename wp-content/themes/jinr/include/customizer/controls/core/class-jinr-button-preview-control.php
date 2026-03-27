<?php

/**
 * ボタンプレビュー
 *
 * @package JIN:R
 */

/**
 * ボタンプレビュークラス
 */
class Jinr_Button_Preview_Control extends WP_Customize_Control
{

	/**
	 * ID
	 *
	 * @var string
	 */
	public $preview_id = 'JinrColor1';


	/**
	 * コンストラクタ
	 *
	 * @param WP_Customize_Manager $manager インスタンス.
	 * @param string               $id ID.
	 * @param array                $args 引数.
	 */
	public function __construct($manager, $id, $args)
	{
		parent::__construct($manager, $id, $args);
		$this->preview_id = $args['preview_id'];
	}

	/**
	 * コンテント出力
	 */
	public function render_content()
	{
		switch ($this->type) {
			case 'text':
?>
				<div class="jinr-preview-container">
					<div id="<?php echo esc_html($this->preview_id); ?>" class="jinr-preview-button"><span>サンプルテキスト</span></div>
				</div>
			<?php
				break;
			case 'fukidashi':
			?>

				<div id="<?php echo esc_html($this->preview_id); ?>">
					<div class="jinr-preview-container">
						<div class="o--jinr-fukidashi">
							<div class="c--fukidashi-img-box">
								<div class="a--fukidashi-img"><img src="#" alt=""></div>
								<span class="a--fukidashi-icon-name"></span>
							</div>
							<div class="c--fukidashi-contents">
								<div class="o--fukidashi-inner">
									<p>サンプルテキスト</p>
								</div>
								<span class="a--fukidashi-parts-after"></span>
								<span class="a--fukidashi-parts-before"></span>
							</div>
						</div>
					</div>
				</div>
<?php
				break;
		}
	}
}
