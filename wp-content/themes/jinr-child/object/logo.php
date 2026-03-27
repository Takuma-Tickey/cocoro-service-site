<?php 
	function jinr_logo_url_for_sp() {
	
		//オリジナルロゴ画像の読み込み
		if( ! jinr__header_logo_url() == '' ){
			$logo_url = jinr__header_logo_url();
		}
	
		//拡張子の前と後で分割 (jpeg/jpg/png/gif/webpのみ対応)正規表現を使う
		$extension = strrchr($logo_url, '.');
		$file_name_url = explode($extension, $logo_url);
	
		$jinr_logo_sp_url = $file_name_url[0].'-320x180'.$extension;
		
		//画像が存在するかどうかチェック
		if ( file_exists( $jinr_logo_sp_url ) ) {
			return $jinr_logo_sp_url;
		} else {
			return $logo_url;
		}
	}
?>
<div id="headerLogo">
	<?php if ( ! jinr__header_logo_url() == '' ) : ?>
		<a id="headerLogoLink" href='<?php echo home_url( '/' ); ?>' title='<?php echo get_bloginfo( 'name', 'display' ); ?>' rel='home'><img id="headerLogoImage"
		width="160" height="90" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo( 'name', 'display' ); ?>" /></a>
	<?php else : ?>
		<?php if ( jinr__title_text() == '' ) : ?>
			<a id="headerLogoLink" class="ef" href='<?php echo home_url( '/' ); ?>' title='<?php echo get_bloginfo( 'name', 'display' ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
		<?php else : ?>
			<a id="headerLogoLink" class="ef" href='<?php echo home_url( '/' ); ?>' title='<?php echo get_bloginfo( 'name', 'display' ); ?>' rel='home'><?php echo jinr__title_text(); ?></a>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ( ! jinr__title_subtext() == '' ) : ?>
		<div id="SiteSubCopy" class="ef <?php echo jinr__header_subtitle_display_sp() == false ? 'd--display-none-sp' : '' ; ?> <?php echo jinr__header_subtitle_display() == false ? 'd--display-none-pc' : '' ; ?>"><?php echo jinr__title_subtext(); ?></div>
	<?php else : ?>
		<div id="SiteSubCopy" class="ef <?php echo jinr__header_subtitle_display_sp() == false ? 'd--display-none-sp' : '' ; ?> <?php echo jinr__header_subtitle_display() == false ? 'd--display-none-pc' : '' ; ?>"><?php echo preg_replace('{&lt;br/&gt;}','<br/>',get_bloginfo( 'description' )); ?></div>
	<?php endif; ?>
</div>