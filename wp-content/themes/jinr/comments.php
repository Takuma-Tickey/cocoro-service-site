<section id="jinrComment">
	<div id="jinrCommentField">
		<?php
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$comments_args = array(
				'title_reply' => '',
				'label_submit' => '送 信',
				'comment_field' => '<div class="c--comment-text"><textarea id="commentText" class="t--round" name="comment" aria-required="true" placeholder="この記事にコメントする"></textarea></div>',
				'fields' => array(
					'author' => '<div class="c--comment-name">'.
									'<input id="commentAuthor" class="t--round" placeholder="ハンドルネーム" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
					'email'  => '<div class="c--comment-email">' .
									'<input id="commentEmail" class="t--round" placeholder="メールアドレス（公開されません）" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
					'url'    => '',
					'cookies'    => '',
				),
			);
			comment_form($comments_args);
		?>
	</div>
	<?php if(have_comments()): ?>
		<div id="jinrCommentList">
			<ol class="o--comment-list">
				<?php wp_list_comments('callback=jinr_comment_callback');?>
			</ol>
		</div>
	<?php endif; ?>
</section>