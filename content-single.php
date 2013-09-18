<?php
/**
 * Template for single post content
 *
 *
 * @package PRA
 * @since 1.0
 */
 ?>
                    <article id="post-<?php the_ID(); ?>">
                        <header>
		                    <h2><?php the_title(); ?></h2>
		                </header>
		                <?php the_content(); ?>
                		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
                    </article>
