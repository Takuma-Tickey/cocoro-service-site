<?php
/**
 * アイコンジェネレータ
 *
 * @package JIN:R
 */

/**
 * アイコン生成クラス
 */
class Jinr_Control_Icon extends WP_Customize_Control {

	/**
	 * エンキュー
	 */
	public function enqueue() {
		wp_enqueue_script( 'jinr-icon-generater', get_template_directory_uri() . '/include/customizer/controls/icon-generater.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), JINR_THEME_VERSION, true );
		wp_enqueue_style( 'jinr-icon-generater', get_template_directory_uri() . '/include/customizer/controls/icon-generater.css', array(), JINR_THEME_VERSION );
	}

	/**
	 * コンテント出力
	 */
	protected function render_content() {

		$this->get_icon_list();
	}

	/**
	 * アイコン一覧取得
	 */
	protected function get_icon_list() {
		$icons = include wp_normalize_path( 'fontawesome.php' );
		if ( $icons ) {
			?>
		<input type="font" name="" value="fab fa-affiliatetheme" data-field="font">
		<div class="font-awesome-list-template">
			<div class="font-awesome-list">
			<button type="button" id="close">close</button>
				<ul class="font-group">
					<?php
					foreach ( $icons as $font ) {
						echo '<li data-font="' . esc_attr( $font ) . '"><i class="' . esc_attr( $font ) . '"></i></li>';
					}
					?>
				</ul>
			</div>
		</div>
			<?php
		}
	}
}
