<?php get_header();
?>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#crew">Crew</a></li>
							<li><a href="#official">News</a></li>
                            <li><a href="#tuts">Tutorials</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section class="main">
<?php
//default args
$args = array(
	'posts_per_page'   => 20,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true );
?>
<article class="cover wrapper" id="cover">
	    <div class="container">
	        <h1>Redifining<br />The Box</h1>   
	    </div>
	</article>
	<article class="wrapper orange" id="crew">
			<div class="container">
							<h2>From the Crew</h2>
							<div id="crew-filters">
											<button class="btn waves-effect waves-orange filter-btn" data-filter="*">Show All</button>       
							</div>
							<div class="posts-wrapper" id="crew-posts-wrapper">
											<?php
							$args['category_name'] = 'personal';
							$news = get_posts($args);
											foreach($news as $post) {
								setup_postdata( $post );
									if (has_post_thumbnail( get_the_ID() ) ) {
												$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
												$bgImg = $image;
											}
											$author = get_the_author();
											$author = str_replace(' ','-',$author);
									?>
									<a href="<?php the_permalink(); ?>">
									<div class="post <?php echo $author; ?>" id="<?php the_ID(); ?>">
										<?php if(isset($bgImg)) { ?><div class="post-cover"><img alt="post cover" src="<?php echo $bgImg; ?>"/></div><?php } ?>
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>
									</div>
									</a>
									<?php
								}
											?>
							</div>
			</div>
	</article>
	<article class="wrapper gray" id="official">
                <div class="container">
                                <h2>TRACTION News</h2>
				<div class="posts-wrapper">
                                <?php
				$args['category_name'] = 'news';
				$news = get_posts($args);
                                foreach($news as $post) {
				    setup_postdata( $post );
                                if (has_post_thumbnail( get_the_ID() ) ) {
                                    $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                                    $bgImg = $image;
                                }
						?>
						<a href="<?php the_permalink(); ?>">
						<div class="post" id="<?php the_ID(); ?>">
                            <?php if(isset($bgImg)) { ?><div class="post-cover"><img alt="post cover" src="<?php echo $bgImg; ?>"/></div><?php } ?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div>
						</a>
						<?php
			        }
                                ?>
				</div>
                </div>
	</article>
        <article class="wrapper white" id="tuts">
                <div class="container">
                                <h2>Tutorials and Tips</h2>
				<div class="posts-wrapper">
                                <?php
				$args['category_name'] = 'tuts and tips';
				$news = get_posts($args);
                                foreach($news as $post) {
				    setup_postdata( $post );
						if (has_post_thumbnail( get_the_ID() ) ) {
                                    $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                                    $bgImg = $image;
                                }
						?>
						<a href="<?php the_permalink(); ?>">
						<div class="post" id="<?php the_ID(); ?>">
                            <?php if(isset($bgImg)) { ?><div class="post-cover"><img alt="post cover" src="<?php echo $bgImg; ?>"/></div><?php } ?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div>
						</a>
						<?php
			        }
                                ?>
				</div>
                </div>
        </article>
        
<?php get_footer(); ?>