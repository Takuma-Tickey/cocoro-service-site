<?php
function info_add_classes(){
    $sp_display = jinr__info_display_sp() == false ? 'd--informationbar-display-none-sp' : '';
    $gradation = jinr__info_bgcolor_type() == 'gradation' ? jinr__info_bg_gradation_select() : '';
    $classes = 'class="o--informationbar'.' '.jinr__info_type().' '.jinr__info_display_position().' '.$sp_display.' '.$gradation.'"';
    $color = "";
    if( jinr__info_bgcolor_type() == "gradation" ){
        $style = 'style="color:'.jinr__info_textcolor().';"';
    }else{
        $color = jinr__info_bgcolor();
        $style = 'style="color:'.jinr__info_textcolor().'; background-color:'.$color.';"';
    }
    echo $classes . " " . $style;
}
?>
<?php if( jinr__info_type() == "d--information-type-textonlywithlink"): ?>
    <div <?php info_add_classes(); ?>>
        <a href="<?php echo jinr__info_url();?>">
            <div class="c--informationbar">
                <?php if( ! jinr__info_text1()== "" ): ?>
                    <span class="a--infomationbar-text1 <?php echo jinr__info_text1_size(); ?> <?php echo jinr__info_text1_size() !== 'd--information-text-small' ? 'd--bold-sp' : '';?>"><?php echo jinr__info_text1(); ?></span>
                <?php endif; ?>
                <?php if( ! jinr__info_text2()== "" ): ?>
                    <span class="a--infomationbar-text2 <?php echo jinr__info_text2_size(); ?> <?php echo  jinr__info_text2_size() !== 'd--information-text-small' ? 'd--bold-sp' : '';?>"><?php echo jinr__info_text2(); ?></span>
                <?php endif; ?>
            </div>
        </a>
    </div>
<?php else: ?>
    <div <?php info_add_classes(); ?>>
        <div class="c--informationbar">
            <?php if( ! jinr__info_text1()== "" ): ?>
                <span class="a--infomationbar-text1 <?php echo jinr__info_text1_size(); ?> <?php echo jinr__info_text1_size() !== 'd--information-text-small' ? 'd--bold-sp' : '';?>"><?php echo jinr__info_text1(); ?></span>
            <?php endif; ?>
            <div class="b--jinr-block b--jinr-button js--scr-animation d--bold-sp">
				<?php echo do_shortcode('[jinr_button' . jinr__info_button_design_select() . ' href="' . jinr__info_url() . '"]' . jinr__info_button_text() . '[/jinr_button' . jinr__info_button_design_select() . ']'); ?>
			</div>
        </div>
    </div>
<?php endif; ?>