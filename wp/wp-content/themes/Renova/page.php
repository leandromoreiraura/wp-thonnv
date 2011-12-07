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
                <div class="comments">
                    <div id="cmnts"><?php comments_popup_link(__('Chưa có nhận xét'), __('1 nhận xét'), __('% nhận xét'), '', __('Nhận xét đóng') ); ?></div>
                    <div id="cmnts-l"><a href="#comment">Thêm nhận xét</a></div>
                </div>
                <?php comments_template(); ?>
            <?php endwhile; ?>
    
   
        <?php else : ?>
    
            <h2 class="center"><?php _e('Not Found'); ?></h2>
            <p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.'); ?></p>
            <?php get_search_form(); ?>
    
        <?php endif; ?>
        
        
        </div>
<?php get_footer(); ?>