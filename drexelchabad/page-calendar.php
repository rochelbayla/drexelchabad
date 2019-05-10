<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container page events">

    <div class="clearfix content"> 
         <h1><?php echo the_title();?></h1>
        
                        <?php endwhile; endif; wp_reset_postdata(); ?>

        <?php $args = array( 'order' => 'ASC', 'orderby' => 'date', 'post_type' => 'events', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
          
                <div class="eventholder">
                    <h2><?php echo get_field( "date" );?></h2>
                    <h3><?php echo the_title();?></h3>
                    <p><?php $content = get_the_content();
                    echo mb_strimwidth($content, 0, 100, '...');?></p>
                    <a href="<?php echo the_permalink();?>">View Event</a>
                </div>
            
    
            <?php endwhile; ?>
               
        
 
        
        
    </div>
</div>

<?php include 'footer.php'; ?>