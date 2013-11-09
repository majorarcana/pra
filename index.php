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
                    <aside>
                        <p>The Prison Radio Association (PRA) aims to change the lives of serving prisoners through the power of radio.</p>
                        <p>An award-winning education charity, the PRA runs National Prison Radio (NPR) in partnership with the National Offender Management Service (NOMS). The service is available to prisoners across England and Wales directly in their cells.</p>
                        <p>The PRA also provides support, guidance and expertise to existing prison radio projects and advises prisons interested in setting up radio projects and radio training facilities.</p>
                        <p>The PRA was established as a charity in 2006 in response to a growing demand from prisons to engage in prison radio.</p>
                        <p>Registered Charity Number – 1114760</p>
                    </aside>
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