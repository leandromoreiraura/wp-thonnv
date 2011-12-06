<?php get_header(); ?>
        <div id="cnt">
        
        
        
		<?php if (have_posts()) : ?>
    
            <?php while (have_posts()) : the_post(); ?>
    
                <div class="art" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                </div>
    
            <?php endwhile; ?>
    
   
        <?php else : ?>
    
            <h2 class="center"><?php _e('Not Found'); ?></h2>
            <p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.'); ?></p>
            <?php get_search_form(); ?>
    
        <?php endif; ?>
        
        
        </div>
<?php get_footer(); ?>