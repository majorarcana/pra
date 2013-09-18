<?php
/**
 * Page Template
 *
 *
 * @package PRA
 * @since 1.0
 */
get_header(); ?>
        <div id="container" class="down">
            <div id="page" class="clearfix">
                <div id="description">
                    
                </div>
                <div class="column">
                    <?php while ( have_posts() ) : the_post(); ?>
    				<?php get_template_part( 'content', 'page' ); ?>
    				<?php endwhile;?>
    			</div>
            </div>
        </div>
        <?php get_footer(); ?>