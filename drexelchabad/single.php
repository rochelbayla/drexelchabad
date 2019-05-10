<?php if(in_category('sponsorships')) {
    
        include 'header.php'; ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="headerimg" style="background-image: url('<?php echo get_field( "image" );?>');"></div>

<div class="clearfix container">

<div id="sponsorship">
   
    <div class="singlecontent">
        <h1><?php echo the_title();?></h1>
        <?php echo the_content();?>
        
<?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

        
    
    <table>
                <?php $args = array( 'order' => 'ASC', 'orderby' => 'date', 'post_type' => 'sponsorships', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
                <tr>
                    <td class="table_date"><?php echo get_field( "date" );?></td>
                    <td class="table_name"><?php echo get_field( "event_name" );?></td>
                    <?php if( get_field('event_sponsors') ): ?>
                        <td class="table_sponsor">Sponsored by <?php echo get_field( "event_sponsors" );?></td>
                    <?php else: ?>
                        <td class="table_sponsor"><a style="margin:0;border:none;" class="available" href="#">Available - Sponsor This Event</a></td>
                    <?php endif; ?>
                </tr>
            
            
            
            
            <?php endwhile; ?>
                
                
            </table>

    
   
        
            
    
    
    </div>
</div>
<?php include 'footer.php'; 
    
} else{
         
    include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="headerimg" style="background-image: url('<?php echo get_field( "image" );?>');"></div>

<div class="clearfix container">
    <div class="clearfix singlecontent">
        
                

        
            <?php if ( in_category('students') ) { ?>
                <div class="single_left">
                    <h1><?php echo the_title();?></h1>
                    <?php echo the_content(); ?>
                </div>
                <div class="single_right">
                    <div class="sidebar">
                        <p>More Student Resources</p>
                        <ul>
                            <li><a href="">Kosher Meal Plan</a></li>
                            <li><a href="">Travel Opportunities</a></li>
                            <li><a href="">Sinai Scholars</a></li>
                        </ul>
                    </div>
                </div>
            <?php } elseif ( in_category('parents') ) { ?>
                <div class="single_left">
                    <h1><?php echo the_title();?></h1>
                    <?php echo the_content(); ?>
                </div>
                <div class="single_right">
                    <div class="sidebar">
                        <p>More Parent Resources</p>
                        <ul>
                            <li><a href="">Kosher Meal Plan</a></li>
                            <li><a href="">Travel Opportunities</a></li>
                            <li><a href="">Sinai Scholars</a></li>
                        </ul>
                    </div>
                </div>
            <?php } elseif ( is_singular( 'events' ) ) { ?>
                <div class="single_left">
                    <h1><?php echo the_title();?></h1>
                    <?php echo the_content(); ?>
                </div>
                <div class="single_right">
                    <div class="sidebar">
                        <p>More Upcoming Events</p>
                        <ul>
                         <?php $args = array( 'order' => 'ASC', 'orderby' => 'date', 'post_type' => 'events', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
          
                <li><a href="<?php echo the_permalink();?>"><?php echo get_field( "date" );?> - <?php echo the_title();?></a></li>
                    
            
    
            <?php endwhile; ?>
                        
                    
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                
                    <h1><?php echo the_title();?></h1>
                    <?php echo the_content(); ?>
                
            <?php } ?>
            
        
        
    
    
        
        

                
        
        
        
        
        
    </div>
    
   
        
            
    
    
    
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
<?php include 'footer.php'; 
    
}


?>


 