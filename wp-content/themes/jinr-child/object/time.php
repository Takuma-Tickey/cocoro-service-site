<?php if ( jinr__pub_mod_setting() == "both" ) : ?>
	<?php if ( jinr_get_modtime( 'c' ) == null ) : ?>
		<div class="c--jinr-post-date"><i class="jif jin-ifont-calendar" aria-hidden="true"></i><time class="entry-date date published updated" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time></div>
	<?php endif; ?>
	<?php if ( jinr_get_modtime( 'c' ) != null ) : ?>
		<div class="c--jinr-post-date">
			<time class="a--entry-date date published" datetime="<?php the_time( 'c' ); ?>">
				<?php echo '<i class="jif jin-ifont-calendar" aria-hidden="true"></i>'; ?><?php the_time( 'Y.m.d' ); ?>
			</time>
			<span class="a--time-separator"></span>
			<time class="a--entry-date date updated" datetime="<?php echo jinr_get_modtime( 'c' ); ?>">
				<?php echo '<span class="cps-post-date"><i class="jif jin-ifont-reload" aria-hidden="true"></i>' . jinr_get_modtime('Y.m.d').'</span>'; ?>
			</time>
		</div>
	<?php endif; ?>
<?php elseif ( jinr__pub_mod_setting() == "pub" ) : ?>
	<div class="c--jinr-post-date"><i class="jif jin-ifont-calendar" aria-hidden="true"></i><time class="entry-date date published updated" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time></div>
<?php elseif ( jinr__pub_mod_setting() == "mod" ) : ?>
	<?php if ( get_the_modified_time('Y.m.d') == get_the_time('Y.m.d') ) : ?>
	<div class="c--jinr-post-date">
		<time class="a--entry-date date published" datetime="<?php the_time( 'c' ); ?>">
			<span class="cps-post-date"><i class="jif jin-ifont-calendar" aria-hidden="true"></i><?php the_time('Y.m.d') ;?></span>
		</time>
	</div>
	<?php else : ?>
	<div class="c--jinr-post-date">
		<time class="a--entry-date date updated" datetime="<?php echo jinr_get_modtime( 'c' ); ?>">
			<?php echo '<span class="cps-post-date"><i class="jif jin-ifont-reload" aria-hidden="true"></i>' . jinr_get_modtime('Y.m.d').'</span>'; ?>
		</time>
	</div>
	<?php endif; ?>
<?php else : ?>
	<div style="display: none;">
		<?php if ( jinr_get_modtime( 'c' ) == null ) : ?>
			<div class="c--jinr-post-date"><i class="jif jin-ifont-calendar" aria-hidden="true"></i><time class="entry-date date published updated" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time></div>
		<?php endif; ?>
		<?php if ( jinr_get_modtime( 'c' ) != null ) : ?>
			<div class="c--jinr-post-date">
				<time class="a--entry-date date published" datetime="<?php the_time( 'c' ); ?>">
					<?php echo '<i class="jif jin-ifont-calendar" aria-hidden="true"></i>'; ?><?php the_time( 'Y.m.d' ); ?>
				</time>
				<span class="a--time-separator"></span>
				<time class="a--entry-date date updated" datetime="<?php echo jinr_get_modtime( 'c' ); ?>">
					<?php echo '<span class="cps-post-date"><i class="jif jin-ifont-reload" aria-hidden="true"></i>' . jinr_get_modtime('Y.m.d').'</span>'; ?>
				</time>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
