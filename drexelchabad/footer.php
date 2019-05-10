</div>
<footer style="background-image: url('<?php echo get_template_directory_uri();?>/img/logo_transparent.png');">
    <div class="clearfix" id="footersections">
        <div class="footersection">
            <h1>Upcoming Events</h1>
            <?php $args = array( 'order' => 'ASC', 'orderby' => 'date', 'post_type' => 'events', 'posts_per_page' => 2 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
            <div class="footersub">
                
                <h5><?php echo get_field( "date" );?></h5>
                <h6><?php echo the_title();?></h6>
                <a href="<?php echo the_permalink();?>">View Event</a>
            </div>
            
    
            <?php endwhile; ?>
               
            <a href="#">View All Events</a>
        </div>
        <div class="footersection">
            <img src="<?php echo get_template_directory_uri();?>/img/logo_white.png">
            <h1 style="font-weight:700;"><?php echo get_bloginfo( 'name' ); ?></h1>
            <p>3507 Baring Street, Philadelphia PA 19104<br>
            <a class="plain" href="#">215-948-7940</a> <b>&bull;</b> <a class="plain" href="#">rabbichaim@chabad.org</a></p>
            <h1 style="margin-top:30px;">Connect With Us</h1>

            <div class="clearfix" id="socialmedia">
                <a class="icon" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="icon" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="icon" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="icon" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </div>
                    
            <a href="#">Subscribe to our E-Newsletter</a>
        </div>
        <div class="footersection">
            <h1>Latest News</h1>
                <?php $args = array( 'order' => 'ASC', 'orderby' => 'date', 'post_type' => 'newsfeed', 'posts_per_page' => 2 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
            <div class="footersub">
                
                <h5><?php echo the_title();?></h5>
                <h6><?php $content = get_the_content();
                    echo mb_strimwidth($content, 0, 30, '...');?></h6>
                <a href="<?php echo the_permalink();?>">Read More</a>
            </div>
    
            <?php endwhile; ?>
            <a href="#">View Latest News</a>
        </div>
    </div>
    
        <p style="font-size:12px;margin:30px 0px 0px 0px;">&copy; 2018 Chabad Serving Drexel University. All Rights Reserved </p>
        <a class="plain" href="#">Site by CollectDev</a>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
   <script src="<?php echo get_template_directory_uri();?>/js/nav.js"></script>


</footer>
<?php wp_footer(); ?>
</body>
</html>