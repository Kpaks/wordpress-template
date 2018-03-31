<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NatalePortfolio
 */

get_header(); ?>

	<div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 menu-article">
            	
                <img src="<?php echo get_template_directory_uri() . '/assets/img/profile.jpg'?>" class="img-circle img-responsive center-block profile-img">
  
                <h3 align=center class="name">Felipe<b> Natale</b></h3>

                    <div class="col-sm-2">  </div>
                    <div class="col-sm-10 menu-about">
                       
                         <ul class="list-unstyled ">
                            <li><a href="<?php echo get_home_url()?> "><b>about</b></a></li>
                            <li><a href="<?php echo get_home_url() . '/articles' ?> "><b>blog</b></a></li>
                            <li><a href="<?php echo get_home_url() . '/Felipe_Natale.pdf'?>"><b>resume</b></a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">  </div>
                    <div class="col-sm-10 social">
                        <a href="https://twitter.com/fenatale" class="btn btn-xs social-icons"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/felipenatale" class="btn btn-xs social-icons"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://github.com/kpaks" class="btn btn-xs social-icons"><i class="fa fa-github" aria-hidden="true"></i></a>
                        
                    </div>
                    
                    <div class="col-sm-2">  </div>
                    <div class="col-xs-12 col-sm-10 contact-number">
                        <p>+55 12 981048064</p>            
                    </div>   

                    <div class="col-sm-2">  </div>
                    <div class="col-xs-12 col-sm-10 contact-email">
                        <p>felipenatale@gmail.com</p>                      
                    </div>
                      
            </div>
            <div class="col-xs-12  col-sm-7 article-content">
                <div class="site-content">
                
				    <div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>

						</main><!-- #main -->
					</div><!-- #primary -->
                

                </div>
            </div>
        </div>
    
    </div>

	

<?php

