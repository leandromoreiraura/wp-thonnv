<?php get_header(); ?>
<div id="cnt">
    <?php if (have_posts ()) : ?>
    <?php while (have_posts ()) : the_post(); ?>
            <div class="art" id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <p class="postmetadata"><?php the_author_posts_link(); ?>, <?php the_time(__('F jS, Y')) ?> | <?php printf(__('Tac gia: %s'), get_the_term_list($post->ID, 'tacgia', '', ', ', ''));?> | <?php printf(__('Nxb: %s'), get_the_term_list($post->ID, 'nxb', '', ', ', ''));?> | <?php printf(__('The loai: %s'), get_the_term_list($post->ID, 'theloai', '', ', ', '')); ?></p>
                <div class="entry">
            <?php
            if ("ebooks" == get_post_type($post)) {
                the_meta();
            }
            ?><br/><br/>
            <?php the_content(); ?>
        </div>
                <!--Navigation Post Link Start -->
                <span>Sach truoc: <?php next_post_link('%link'); ?> &raquo;</span>
                <span> &laquo; Sach sau: <?php previous_post_link('%link'); ?></span>
    <!--Navigation Post Link End -->
    </div>
    
    <div class="comments">
        <div id="cmnts"><?php comments_popup_link(__('Chưa có nhận xét'), __('1 nhận xét'), __('% nhận xét'), '', __('Nhận xét đóng')); ?></div>
        <div id="cmnts-l"><a href="#comment">Thêm nhận xét</a></div>
    </div>
    <?php comments_template(); ?>
    <?php endwhile; ?>


    <?php else : ?>

                <h2 class="center"><?php _e('Không thấy'); ?></h2>
                <p class="center"><?php _e('Xin lỗi, không tìm thấy thông tin yêu cầu'); ?></p>
    <?php get_search_form(); ?>

    <?php endif; ?>


            </div>
<?php get_footer(); ?>