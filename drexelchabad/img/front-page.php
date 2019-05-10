<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          
    <div class='header'>
        <div class="flexslider">

            <ul class="slides">
                <?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>

                        
<li>
                    <div class="sliderbg" style="background-image: url('<?php echo the_sub_field( "image" );?>'), url('<?php echo get_template_directory_uri();?>/img/bluegradient.png');">
                        <div class="slider_content">
                            <h1><?php the_sub_field( "title" ); ?></h1>   
                            <p><?php echo wp_trim_words( the_sub_field( "description" ), 40, '...' ); ?></p>
                            <a href="<?php echo the_sub_field( "link_href" );?>"><?php echo the_sub_field( "link_text" );?></a>
                        </div>
                    </div>
                </li>

    <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>

    <div class="content">  

        
            <?php the_content(); ?>
        
            <?php endwhile; endif; wp_reset_postdata(); ?>
        
        
        
        <br><br>
        
        <div style="margin-bottom:20px;border-top: #006298 2px solid; border-bottom: #006298 2px solid;"class="clearfix dragon_of_week">
            <div id="dow_wrapper">
                <table>
                    <tr>
             <?php query_posts('cat=5'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <td style="width:20%"><img src="<?php echo the_field( "image" );?>'"></td>
                <td style="width:80%"><p><?php echo the_content();?></p></td>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <div class="clearfix board">
            
            

            <div class="boardimages_wrapper">
                
                <div class="clearfix boardimages">
            <?php query_posts('cat=4'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <span class="mobileboard"><?php echo the_title(); ?></span>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    <?php $args = array( 'orderby' => 'date', 'post_type' => 'board_members', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                      
                    <div class="boardmember" style="background-image: url('<?php echo get_field( "image" );?>');">
                        <div class="boardtext" style="background-color:rgba(8,41,77,.7);">
                            <span class="boardname"><?php echo the_title();?></span>   
                            <span class="boardtitle"><?php echo the_content();?></span>
                        </div>
                    </div>
                    
                    <?php endwhile; ?>
                    
                </div>
            </div>
            <?php query_posts('cat=4'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="boardcontent">
                <h1><?php echo the_title(); ?></h1>
                <p><?php echo the_content(); ?></p>
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
        
        
    </div>
<?php include 'footer.php'; ?>