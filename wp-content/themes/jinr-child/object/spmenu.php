<?php if ( ! jinr__sp_menu1_label() == '' || ! jinr__sp_menu2_label() == '' || ! jinr__sp_menu3_label() == '' || ! jinr__sp_menu4_label() == '' ) : ?>
    <div id="headerSpMenu">
        <ul id="headerSpMenuList">
        <?php

            $array = array();

            for ( $i = 1; $i <= 4; $i++ ) {

                ${'jinr__sp_menu' . $i . '_label' } = 'jinr__sp_menu' . $i . '_label';
                $label = ${'jinr__sp_menu' . $i . '_label' }();

                ${'jinr__sp_menu' . $i . '_link' } = 'jinr__sp_menu' . $i . '_link';
                $link= ${'jinr__sp_menu' . $i . '_link' }();

                ${'jinr__sp_menu_icon_display'.$i } = 'jinr__sp_menu_icon_display'.$i;
                $icon_display= ${'jinr__sp_menu_icon_display'.$i }();

                ${'jinr__sp_menu_icon_name'.$i } = 'jinr__sp_menu_icon_name'.$i;
                $icon_name= ${'jinr__sp_menu_icon_name'.$i }();

                if( ! empty($label) ){
                    $array[] = [
                        "label" => $label,
                        "link" => $link,
                        "icon_display" => $icon_display,
                        "icon_name" => $icon_name
                    ];
                }
            }

            if(isset($array)){
                $menu_item_count = count($array);

                for ( $i = 0; $i < $menu_item_count; $i++ ) {
                    if( $array[$i]["label"] == '' ){
                        echo "";
                    }else{
                        if( $array[$i]["icon_display"] == 'd--icon-need' ){
                            echo '<li class="c--spmenu-item ef" style="width:calc( 100% / '.$menu_item_count.');"><a class="a--spmenu-item-link" href="'.$array[$i]["link"] .'"><span class="a--spmenu-item-icon"><i class="jif jin-ifont-'.$array[$i]["icon_name"].'" aria-hidden="true"></i></span><span class="a--spmenu-item-label">'.$array[$i]["label"].'</span></a></li>';
                        }else{
                            echo '<li class="c--spmenu-item ef" style="width:calc( 100% / '.$menu_item_count.');"><a class="a--spmenu-item-link" href="'.$array[$i]["link"] .'"><span class="a--spmenu-item-label">'.$array[$i]["label"].'</span></a></li>';
                        }
                    }
                }
            }
        ?>
        </ul>
    </div>
<?php endif; ?>