<?php get_header() ; ?>
	<div class="hero"></div>
	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Blog</h1>
			<div class="box-content">
					<?php if ( have_posts() ) : ?>
				<ul>

					<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
							
					<li class="item-archive">
						<div class="time-and-thumb-archive">
							<time class="pub-date" datetime="<?php echo get_the_date( DATE_W3C) ; ?>"><?php echo get_the_date() ; ?></time>
							<?php if ( has_post_thumbnail() ) : ?>
							<p class="thumb thumb-archive"><a href="<?php the_permalink() ; ?>">
							<?php the_post_thumbnail( 'easiestwp-thumbnail' ) ; ?></a></p>
							<?php endif; ?>

						</div>
						<div class="data-archive">
							<p class="list-categories-archive"><a href="<?php the_category(',') ; ?>">カテゴリ名</a></p>
							<h2 class="title-archive"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
							<p class="list-tags-archive"><?php the_tags() ; ?>></p>
						</div>
					</li>
					<!-- “else”部分を除いたループ終了 -->
					<?php endwhile; ?>					
				</ul>
				
					<?php else : ?>
					<p>投稿がありません。</p>
					<?php endif; ?>

			</div>

			<!-- ページネーション -->
			<?php the_posts_pagination( array(
			'prev_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-left.png" srcset="' . get_theme_file_uri() . '/images/arrow-left@2x.png 2x" alt="前へ">',
			'next_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-right.png" srcset="' . get_theme_file_uri() . '/images/arrow-right@2x.png 2x" alt="次へ">',
			) ) ; ?>
		
		

		</div>
		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<ul class="side-column">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</ul>
		<?php endif; ?>


	</div>

	<footer class="page-footer">
		<div class="footer-widget-area">
			<ul class="footer-widgets">
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
			</ul>
			<div class="back-to-top">
				<a href="#"><img src="images/arrow-up.png" srcset="images/arrow-up@2x.png 2x" alt="">TOP</a>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright ©  Gijutsu-Hyohron Co., Ltd.</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>