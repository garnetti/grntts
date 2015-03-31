<?php 
/*
Template Name: Homepage
*/
?>

 <?php get_header(); ?>
			
			<div id="content" class="site-hero">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

                        <div class="middle-image">

                         </div>


    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			<div id="navigation-wrap">

    			<div class="row">

    				<div id="navigation" class="show-for-large-up large-12 medium-12 columns">

                        <div id="left-nav" class="show-for-large-up large-4 medium-4 columns">
                            <ul>
                            <li><a class="gallery tk-museo-slab">GALLERY</a></li>
                            <li><a class="about tk-museo-slab">ABOUT</a></li>
                            </ul>
                         </div>

                         <div id="Nav-Logo" class="show-for-large-up large-4 medium-4 columns">
                            <img class="logo1" src="<?php echo get_template_directory_uri(); ?>/library/images/grnttslogo.png">
                            <img class="logo2" src="<?php echo get_template_directory_uri(); ?>/library/images/helmet_logo2.png">
                        </div>

                        <div id="right-nav" class="show-for-large-up large-4 medium-4 columns">
                            <li><a class="contact tk-museo-slab">CONTACT</a></li>
                            <li><a class="education tk-museo-slab">EDUCATION</a></li>
                        </div>

    				</div>

                    <div id="mobile-navigation" class="large-12 columns hide-for-large-up">
                        <div id="Mobile-Logo" class="hide-for-large-up large-4 medium-4 small-4 columns">
                            <img class="mobile-logo2" src="<?php echo get_template_directory_uri(); ?>/library/images/helmet_logo2.png">
                        </div>

                        <div id="mobile-nav" class="large-8 medium-8 small-8 columns">
                             <div class="show-mobile-menu">
                                <div class="mobile-menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                </div>
                            </div>
                        </div>

                    </div>

    			</div>

    		</div>

			<div class="gallery-wrap" id="gallery">

    			<?php if( have_rows('gallery') ): ?>

                <div class="row">

                    <?php while( have_rows('gallery') ): the_row(); 

                        // vars
                        $image = get_sub_field('behanced_image');
                        $link = get_sub_field('behanced_link');

                        ?>

                        <div class="large-4 medium-6 small-12 columns gallery-image">

                            <?php if( $link ): ?>
                                <a href="<?php echo $link; ?>" target="_blank">
                            <?php endif; ?>

                                <img src="<?php echo $image; ?>"/>

                            <?php if( $link ): ?>
                                </a>
                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>

                    </div>

                    <?php endif; ?>

    		</div>

    		<div class="about-wrap">

    			<div class="row">

    				<div id="about" class="large-12 medium-12 columns">

                        <div class="about-cup large-4 large-centered small-6 small-centered columns">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/grntts_about-cup.jpg">
                            </div>

                            <div class="about-info large-8 large-centered small-10 small-centered columns">
                               <h1 class="tk-museo-slab"> My name is Ian Garnett, a visual front end designer aiming to achieve the impossible, through design. 

                               </h1>

                                <hr>

                                <p class="tk-open-sans">
                                    I have a passion for all things web + design related, striving to solve design 
                                    challenges in the best way possible. My process includes researching thoroughly
                                    before the designing begins and allowing the creative process to evolve from sketches.
                                    I aim to please, pushing myself to meet the needs of my clients and employers. 
                                    I believe creativity is nothing without hard work.
                                </p>

                            </div>

                        </div>

    				</div>

    			</div>

    		<div class="education-wrap">

    			<div class="row">

    				<div id="education">

                        <div class="education-title large-8 large-centered small-10 small-centered columns"> 
                            
                            <div class="large-12 medium-12 small-12 columns">
                                <p class="ed-header tk-museo-slab"> <ins> Education </ins> </p>
                            </div>

                            <div class="grad-hat large-2 medium-2 small-12 columns">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/grntts_education-gradhat.jpg">
                            </div>
                             
                            <div class="large-8 medium-10 small-12 columns">
                                <p class="ai-info tk-open-sans">The Art Institute of Washington</p>
                                <p class="ba-info tk-open-sans">Bachelor of Fine Arts (BFA)</p>
                                <p class="gd-info tk-open-sans">Graphic Design</p>
                                <p class="yr-info tk-open-sans">2007-11</p>
                            </div>

                            <div class="sec-divide large-12 medium-12 small-12 columns">
                                <span></span>
                            </div>

                            <div class="cirtificate large-2 medium-2 small-12 columns">
                                 <img src="<?php echo get_template_directory_uri(); ?>/library/images/grntts_education-cirtificate.jpg">
                            </div>

                                 <div class="large-8 medium-10 small-12 columns">
                                    <p class="nv-info tk-open-sans">Northern Virginia Community College</p>
                                    <p class="wd-info tk-open-sans">Web Development Certificate</p>
                                    <p class="css-info tk-open-sans">HTML/CSS JavaScript & jQuery</p>
                                    <p class="yr1-info tk-open-sans">Jan-March 2013</p>
                                </div>
                        
                            <hr class="bottom-line">

                            <div class="tech-area large-12 medium-12 small-12 columns">

                             <div class="large-12 medium-12 small-12 columns">
                            <p class="tech-header tk-museo-slab"><ins>Technical Proficiency</ins></p>
                            </div>

                            <div class="large-12 medium-12 columns">
                                <ul>
                                    <li>
                                        <p class="cre-suit tk-open-sans">Creative Suites</p>
                                        <div class="nice round progress alert large-12">
                                            <span class="meter" style="width: 75%"></span>   
                                        </div>
                                    </li>
                                </ul>

                                <ul>
                                    <li>
                                        <p class="motion tk-open-sans">Motion</p>
                                        <div class="nice round progress alert large-12">
                                            <span class="meter" style="width: 45%"></span>   
                                        </div>
                                    </li>
                                </ul>

                                <ul>
                                    <li>
                                        <p class="illust tk-open-sans">Illustrations</p>
                                        <div class="nice round progress alert large-12">
                                            <span class="meter" style="width: 65%"></span>   
                                        </div>
                                    </li>
                                </ul>
                            </div> 

                            </div>


                            <div class="large-12 large-centered medium-12 small-12 columns">
                                <div class="large-10 large-centered columns">
                                <p class="rest_text tk-museo-slab">For more information download my resume</p>
                                </div>

                                <?php if( get_field('resume') ): ?>
                                    <a class="button expand" href="<?php the_field('resume'); ?>" target="_blank"> Download Resume </a>
                                <?php endif; ?>
                            </div>  



                        </div>


    				</div>

    			</div>

    		</div>

    		<div class="social-wrap">

    			<div class="row">

    				<div id="social" class="large-12 columns">

						 <div class="social-area large-12 large-centered medium-12 small-12 columns">
                            <i class="fi-social-linkedin large"></i>
                            <i class="fi-social-twitter large"></i>
                            <i class="fi-social-path large"></i>
                            <i class="fi-social-behance large"></i>
                            
                         </div>  


    				</div>

    			</div>

    		</div>

    		<div class="contact-wrap">

    			<div class="row">

    				<div id="contact" class="large-12 columns">
    					
						<?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ); ?>

    				</div>

    			</div>

    		</div>

    		

<?php get_footer(); ?>