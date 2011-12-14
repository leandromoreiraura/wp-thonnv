<?php get_header(); ?>
<div id="cnt">



    <?php if (have_posts ()) : ?>

    <?php while (have_posts ()) : the_post(); ?>

            <div class="art" id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <p class="postmetadata"><?php the_author_posts_link(); ?>, <?php the_time(__('F jS, Y')) ?>, <?php printf(__('mục %s'), get_the_category_list(', ')); ?></p>
                <div class="entry">
            <?php the_content(); ?>
            <?php
            if ("ebook" == get_post_type($post)) {
                the_meta();
            }
            ?>
        </div>
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