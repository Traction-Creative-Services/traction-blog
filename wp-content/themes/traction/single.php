<?php get_header();
?>

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
<?php
the_post(); ?>

<?php
if (has_post_thumbnail( get_the_ID() ) ) {
    $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
    $bgImg = $image;
} ?>
<article class="cover wrapper" id="cover" <?php if(isset($bgImg)) ?> style="background-image: url('<?php echo $bgImg; ?>');" ?>
	    <div class="container">
	        <h1><?php the_title(); ?></h1>    
	    </div>
	</article>
	<article class="wrapper white">
	    <div class="container">
                <div class="row">
                    <div class="col-md-9" id="post-body">
                        <?php the_content(); ?>
                        <?php comments_template(); ?>
                    </div>
                    <div class="col-md-3">
                        <h3><?php the_author_meta('first_name');?> <?php the_author_meta('last_name'); ?></h3>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div>
            </div>
	</article>
<?php get_footer(); ?>