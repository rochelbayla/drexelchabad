<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="singlecontent">
        <?php echo the_content();?>
        
<?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
    
    
        
            
    
    
    
</div>
<?php include 'footer.php'; ?>