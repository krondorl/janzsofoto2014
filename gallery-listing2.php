
<?php 
/*
Template Name: Galeria lista2
*/
get_header(); 

?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

									<p class="byline vcard">
										<?php // printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									
                                    <p>A következő galériák érhetők el kattintásra:</p>
                                    
                                    <?php

                                     // list of gallery subpages

                                     $args = array(
                                        'authors'      => '',
                                        'child_of'     => 10,
                                        'date_format'  => get_option('date_format'),
                                        'depth'        => 0,
                                        'echo'         => 1,
                                        'exclude'      => '',
                                        'include'      => '',
                                        'link_after'   => '',
                                        'link_before'  => '',
                                        'post_type'    => 'page',
                                        'post_status'  => 'publish',
                                        'show_date'    => '',
                                        'sort_column'  => 'menu_order, post_title',
                                            'sort_order'   => '',
                                        'title_li'     => '', 
                                        'walker'       => ''
                                    ); 

                                    wp_list_pages($args); 

                                    ?>
                                    
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
