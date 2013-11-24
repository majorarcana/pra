<?php
/**
 * Template Name: Intro and Child Listing
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
                    <nav class="sub-index">
                        <ul>
        			        <?php
                            	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $post->ID) );
                            	foreach( $mypages as $page ) {
                    	    
                            	?>
                            	<li>
                            	    <h2><a href="<?php echo get_permalink($page->ID); ?>"><?php echo get_the_title($page->ID); ?></a></h2>
                                	<?php 
                                	$fullpage = get_post($page->ID); 
                                	$content = truncate::page_content($fullpage->post_content, 250); 
                                    echo $content ?>
                                    <a href="<?php echo get_permalink($page->ID); ?>">more-></a>
                                </li>
                            	<?php	
                            	}				
                            ?>
                        </ul>
                    </nav>
    			</div>
            </div>
        </div>
        <?php get_footer(); ?>