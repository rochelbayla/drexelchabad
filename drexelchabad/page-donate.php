<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
<div class="container page donate">
    <div class='header'>
    <img src="<?php echo get_template_directory_uri();?>/img/flame.png">

        <?php echo the_content(); ?>
        <?php endwhile; endif; wp_reset_postdata();?>

        
    </div>

    <div class="content">  
        
        <div class="clearfix field_wrapper">
        <h1>More Ways to Donate</h1><br><br>

        <?php query_posts('cat=4'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <div class="field" style="background-image:url('<?php the_field( "image" ); ?>');">
                <div class="field_content">
                    <h3><?php echo the_title(); ?></h3>
                    <p><?php echo mb_strimwidth(get_the_content(), 0, 50, '...'); ?> <b>Learn More</b></p>
                    
                </div>
            </div>
            </a>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            
        </div>

 
        
        
    </div>
</div>
<?php include 'footer.php'; ?>