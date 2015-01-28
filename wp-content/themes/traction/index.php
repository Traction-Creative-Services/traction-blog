<?php get_header();?>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/#official">News</a></li>
                            <li><a href="/#tuts">Tutorials</a></li>
                            <li><a href="/#crew">Crew</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section class="main">
<article class="cover wrapper" id="cover">
	    <div class="container">
	        <h1>Bringing Your<br />Ideas to Life</h1>    
	    </div>
	</article>
	<article class="wrapper orange" id="traction-official">
		<h2>TRACTION</h2>
		<div class="posts-wrapper">
		<?php
		if( have_posts() ) {
			while( have_posts() ) {
				the_post();
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
		}
		?>
		</div>
	</article>
<?php get_footer(); ?>