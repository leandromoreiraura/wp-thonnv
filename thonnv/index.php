<?php get_header(); ?>
<div id="cnt">

    <?php if (have_posts ()) : ?>
    <?php
        //
        ?>
    <?php while (have_posts ()) : the_post();
            $first++; ?>
    <?php
            $posttype = get_post_type($post);
            // && "ebook" == $posttype
    ?>
    <?php if (is_home() && !is_paged()) {
    ?>

    <?php
                $imgsrcparam = array(
                    'class' => "prv",
                    'alt' => trim(strip_tags($post->post_excerpt)),
                    'title' => trim(strip_tags($post->post_title)),
                );
                $thumbID = get_the_post_thumbnail($post->ID, 'thumbnail', $imgsrcparam); ?>
    <?php if ($first % 2 == 0) {
    ?>
                    <a class="art" href="<?php the_permalink() ?>" id="post-<?php the_ID(); ?>">
        <?php } else {
        ?>
                    <a class="art1" href="<?php the_permalink() ?>" id="post-<?php the_ID(); ?>">
            <?php } ?>
                <h2><?php the_title(); ?></h2>

            <?php echo "$thumbID"; ?>

            <?php the_excerpt(); ?>
            <?php the_meta();
             ?>
            </a>
        <?php } //elseif ( 2 == $first && is_home() && !is_paged() ) {   ?>
        <?php
//                    	$imgsrcparam = array(
//						'class'	=> "prv",
//						'alt'	=> trim(strip_tags( $post->post_excerpt )),
//						'title'	=> trim(strip_tags( $post->post_title )),
//						);
//                    	$thumbID = get_the_post_thumbnail( $post->ID, 'thumbnail', $imgsrcparam );
        ?>

                <!--	                    <a class="art" href="<?php //the_permalink()     ?>" id="post-<?php //the_ID();     ?>">-->
                <!--	                        <h2><?php //the_title();    ?></h2>-->

        <?php //echo "$thumbID";    ?>

        <?php //the_excerpt();   ?>
            <!--	                    </a>-->


        <?php //} //else {    ?>

                <!--                <a class="art sm" href="<?php //the_permalink()    ?>">
                           <h2><?php //the_title();     ?></h2>
                       </a>-->

        <?php //}    ?>

        <?php endwhile; ?>
        <?php endif; ?>






        <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            }
        ?>






    </div>
<?php get_footer(); ?>   
