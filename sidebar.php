				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
<?php wpdbones_ad_content_side(); ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
						<?php else: ?>						
						<div class="scrollside">
						<h4 class="widgettitle">おすすめ図書</h4>
						<a style="float: left; margin-right: 10px; "  href="http://wp-d.org/2013/01/24/2146/"><img style="width:100px;height:100px;" src="http://wp-d.org/wp-content/uploads/2013/01/kindle-200x200.jpg" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/01/24/2146/">PHPをよく知らずにWordPressを扱う人にぜひ読んでほしい電子書籍の紹介（著者インタビュー）</a></p>
						<div style="clear: both"></div>
						<a style="float: left; margin-right: 10px; "  href="http://wp-d.org/2013/01/14/1938/"><img style="width:100px;height:100px;" src="http://i0.wp.com/wp-d.org/wp-content/uploads/2013/01/book2012.jpg?zoom=2&resize=200%2C200" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/01/14/1938/">新春座談会 このコンピュータ書がすごい！ 2013年版</a></p>
						</div>
						<?php endif; ?>
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>
				</div>