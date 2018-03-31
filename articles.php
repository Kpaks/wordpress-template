<?php
/**
* Template Name: Articles
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package nataleportifolio
*/
get_header(); ?>



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
            <div class="col-xs-12 col-sm-9 article-content">
                
                    <div class="news-Box ">
        <?php $loop = new WP_Query( array( 'post_type' => 'articles', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <!-- The stuff you want to loop goes in here -->
        <div class="news-mBox ">
        
         
          <div class="col-md-1 " ></div>
          
          <div class="col-md-8 news-title" >
            <h1><a  href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a></h1>
            <p><?php echo get_the_date(); ?></p>
          
              
                <?php $content = apply_filters('the_content',get_the_content());
                                       if ( strlen($content) > 100 ) {  // Max 300 characters

                                        the_excerpt();
                                       } else {
                                        echo $content;
                                       }
                                       ?>
                   
                 
               </div>
               </div>
             <?php endwhile; wp_reset_query(); ?>
             </div>




            </div>
        </div>
    
    


<?php
/*get_sidebar();*/
get_footer();
