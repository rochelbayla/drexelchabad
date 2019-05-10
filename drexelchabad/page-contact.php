<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
<div class="container page contact">
        <h1><?php echo the_title(); ?></h1>

        <?php echo the_content(); ?>
        <?php endwhile; endif; wp_reset_postdata();?>

        

    
</div>
<?php include 'footer.php'; ?>