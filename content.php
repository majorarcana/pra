<?php
/**
 * Index Template
 *
 *
 * @package PRA
 * @since 1.0
 */
 ?>
                    <article id="post-<?php the_ID(); ?>" class="clearfix">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pra' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        </header>
                		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
                			<?php the_excerpt(); ?>
                		<?php else : ?>
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pra' ) ); ?>
                			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'pra' ) . '</span>', 'after' => '</div>' ) ); ?>
                		<?php endif; ?>
                    </article>
