<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
<div class="container page students">
    <div class='header'>
        <?php echo the_content(); ?>
    </div>
         <?php endwhile; endif; wp_reset_postdata();?>

    <div class="content">  
        
        <div class="clearfix field_wrapper">
        <h1>Student Resources</h1><br><br>

        <?php query_posts('cat=6'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        
 
        
        
        
       
        
        <div class="board">
            <?php query_posts('cat=3'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="boardcontent">
                <h1><?php echo the_title(); ?></h1>
            </div>
            
            <?php endwhile; endif; wp_reset_postdata(); ?>

            <div class="clearfix" id="boardholder">

                <?php $args = array( 'orderby' => 'date', 'post_type' => 'board_members', 'posts_per_page' => -1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="boardmember" style="background-image: url('<?php echo get_field( "image" );?>');">
                        <div class="boardtext">
                            <span class="boardname"><?php echo the_title();?></span>   
                            <span class="boardtitle"><?php echo the_content();?></span>
                        </div>
                    </div>


                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <?php query_posts('cat=3'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="boardcontent">
                <p><?php echo the_content(); ?></p>
            </div>
            
            <?php endwhile; endif; wp_reset_postdata(); ?>
                    
            

        </div>

        <br><br>
        
        
        
        
 
        
    </div>
</div>
<?php include 'footer.php'; ?>