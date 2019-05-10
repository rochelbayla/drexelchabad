<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
             <div class="container content">  
       
<div id="main">
        <img src="<?php echo get_template_directory_uri();?>/img/logo_blue.png">

            <?php the_content(); ?>
        
            <?php endwhile; endif; wp_reset_postdata(); ?>
        
        </div>
</div>

    <div class='clearfix header'>

                <?php if( have_rows('header') ): while ( have_rows('header') ) : the_row(); ?>

                        
                    <a href="<?php echo the_sub_field( "link_href" );?>" class="box" style="background-image: url('<?php echo the_sub_field( "image" );?>');">
                        
                        <div class="boxcontent">
                            <h2><?php the_sub_field( "date" ); ?></h2>
                            <h1><?php the_sub_field( "title" ); ?></h1>
                            <p class="desktop_substr">
                            <?php 
                                $value = substr(get_sub_field('description'), 0, 100);
                                echo $value.'...'; ?>
                            </p>
                            <p class="mobile_substr">
                            <?php 
                                $value = substr(get_sub_field('description'), 0, 75);
                                echo $value.'...'; ?>
                            </p>
                            <span><?php echo the_sub_field( "link_text" );?></span>
                        </div>   
                            
                    </a>

    <?php endwhile; endif; ?>
    </div>



    <div class="container content">  
        
        
        
        
        
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
        
        
    </div>
<?php include 'footer.php'; ?>