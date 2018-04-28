<!-- パスワードを必要とする投稿ではコメントテンプレートを表示しない -->
<?php 
if ( post_password_required()){
	return;
}
?>
		
			<?php if ( have_comments() ) : ?>
			<div class="box-generic">
				<div class="box-content box-comment-display">
					<h2>コメントとトラックバック</h2>
					<ul class="comment-list">
					<?php 
					wp_list_comments( array(
					'avatar_size' => 130,
					) );
					?>						
					<!-- #comment-## -->
					</ul>
				</div>
			</div>
			<?php endif; ?>

			<?php if ( comments_open() ) : ?>
			<div class="box-generic">
				<div class="box-content box-comment-input">
					<?php comment_form() ; ?>
				</div>
			</div>
			<?php endif; 
