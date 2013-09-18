<?php
/**
 * Index Template
 *
 *
 * @package PRA
 * @since 1.0
 */
get_header(); ?>
        <div id="container" class="down clearfix">
            <div id="page" class="two-column-col-a-primary clearfix">
                <div id="description">
                    
                </div>
                <div id="col-a" class="column">
                    <?php if ( have_posts() ) : ?>
                    <?php /* Start the Loop */ ?>
			        <?php while ( have_posts() ) : the_post(); ?>
				        <?php get_template_part( 'content', get_post_format() ); ?>
			        <?php endwhile; ?>
			        <?php else : ?>
                        <article id="post-0" class="post no-results not-found">
    				        <header class="entry-header">
            					<h2>Nothing Found</h2>
            				</header>
            				<p>Apologies, but no results were found. Perhaps searching will help find a related post.</p>
			            </article>
			        <?php endif; ?>
			    </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer(); ?>