<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
<div class="container page alumni">
    <div class='header'>
        <?php echo the_content(); ?>
    </div>
<div class="clearfix content">
    
    <div class="clearfix alumni_info">

    <?php echo the_field('description'); ?>
    
                <?php endwhile; endif; wp_reset_postdata(); ?>

    
     
            <h2>Current Members</h2>
            <div class="clearfix alumni_names">
                <?php $args = array( 'orderby' => 'date', 'post_type' => 'alumni_association', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <p><?php echo the_title();?></p>
                    <?php endwhile;  wp_reset_postdata(); ?>
            </div> 
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <a href="<?php echo the_field('link_href'); ?>"><?php echo the_field('link_text'); ?></a>

                <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
        
        <div class="clearfix alumni_pics">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <img class="mainsub2 hover-shadow cursor" onclick="openModal('myModal');currentSlide(1)" src="<?php echo the_field( "image1" );?>">
                <img class="mainsub2 hover-shadow cursor" onclick="openModal('myModal');currentSlide(2)" src="<?php echo the_field( "image2" );?>">
                <img class="mainsub2 hover-shadow cursor" onclick="openModal('myModal');currentSlide(3)" src="<?php echo the_field( "image3" );?>">
                <img class="mainsub2 hover-shadow cursor" onclick="openModal('myModal');currentSlide(4)" src="<?php echo the_field( "image4" );?>">
                <img class="mainsub2 hover-shadow cursor" onclick="openModal('myModal');currentSlide(5)" src="<?php echo the_field( "image5" );?>">
            
            
            
   

        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal('myModal')">&times;</span>
          <div class="modal-content">

              
              <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <div class="highlightsub" style="width:100%;background-image:url('<?php echo the_field( "image1" );?>');"></div>
                </div>
              <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <div class="highlightsub" style="width:100%;background-image:url('<?php echo the_field( "image2" );?>');"></div>
                </div>
              <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <div class="highlightsub" style="width:100%;background-image:url('<?php echo the_field( "image3" );?>');"></div>
                </div>
              <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <div class="highlightsub" style="width:100%;background-image:url('<?php echo the_field( "image4" );?>');"></div>
                </div>
              <div class="mySlides">
                    <div class="numbertext">5 / 4</div>
                    <div class="highlightsub" style="width:100%;background-image:url('<?php echo the_field( "image5" );?>');"></div>
                </div>
              
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

              
              <div class="column_small">
                  <div class="minisub demo cursor" style="width:100%;background-image:url('<?php echo the_field( "image1" );?>');" onclick="currentSlide(1)"></div>
              </div> <div class="column_small">
                  <div class="minisub demo cursor" style="width:100%;background-image:url('<?php echo the_field( "image2" );?>');" onclick="currentSlide(2)"></div></div>
                  <div class="column_small"> <div class="minisub demo cursor" style="width:100%;background-image:url('<?php echo the_field( "image3" );?>');" onclick="currentSlide(3)"></div></div>
                   <div class="column_small"><div class="minisub demo cursor" style="width:100%;background-image:url('<?php echo the_field( "image4" );?>');" onclick="currentSlide(4)"></div></div>
                   <div class="column_small"><div class="minisub demo cursor" style="width:100%;background-image:url('<?php echo the_field( "image5" );?>');" onclick="currentSlide(5)"></div></div>
           
              
              
              
          </div>
        </div>

    
        
        
        <?php endwhile; endif; wp_reset_postdata(); ?>

            
            
            
            
            

        </div>
    
    
    
    
</div>

</div>
<?php include 'footer.php'; ?>