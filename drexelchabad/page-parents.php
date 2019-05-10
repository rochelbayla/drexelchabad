<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
<div class="container page parents">
    <div class='header'>
        <?php echo the_content(); ?>
    </div>
         <?php endwhile; endif; wp_reset_postdata();?>

    <div class="content">  
        
        <div class="clearfix field_wrapper">
                        <h1>Parent Resources</h1><br><br>

        <?php query_posts('cat=5'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        
        
        

      
<!--
        
         <div style="background-image: url('php echo the_field( "bottompic" );?>');" class='header'>
        
            <span>
                <img src="php echo get_template_directory_uri();?>/img/logo_white.png">
                php echo the_field( "bottomcontent" );?>
            </span>
        </div>
        
-->
        
        
 
        
    </div>
</div>


<?php include 'footer.php'; ?>