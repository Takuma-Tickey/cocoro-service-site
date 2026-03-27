<?php if ( is_home() ) : ?>
<?php elseif ( is_front_page() ) : ?>
    <?php if ( ! is_page_template('template-full-width.php') ) : ?>
        <?php if ( jinr__home_column_style() == 't--home-one-column') : ?>
            <?php if ( jinr_isset_widets( 'sidepr', true ) ) : ?>
            <aside id="sidePR" class="o--widget-area">
                <div id="sidePRWidget">
                    <?php dynamic_sidebar( 'sidepr' ); ?>
                </div>
            </aside>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php elseif( is_page() || is_single() ): ?>
    <?php if ( jinr__post_column_style() == 't--post-one-column') : ?>
        <?php if ( jinr_isset_widets( 'sidepr', true ) ) : ?>
        <aside id="sidePR" class="o--widget-area">
            <div id="sidePRWidget">
                <?php dynamic_sidebar( 'sidepr' ); ?>
            </div>
        </aside>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>