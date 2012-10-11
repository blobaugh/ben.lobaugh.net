<?php
/*
Template Name: home page only
*/
$user = blobaugh_get_user_for_card();

get_header(); ?>
	<div id="page-wrap">
		<div class="content">
			<!-- START HOME -->
            <div id="home" class="section">
                <a class="vcard" href="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>vcard.vcf"><img alt="Download my vCard" title="Download my vCard" src="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>images/download_img.png"></a>
                  
                 <div><?php echo get_avatar( $user->user_email, $size = '164' ); ?></div><!--avatar --> 
                <hgroup>
                	<h1><?php echo $user->first_name . ' ' . $user->last_name; ?></h1>
                	<h4><?php echo $user->title; ?></h4>                        
                </hgroup>
				<ul class="social-links">
                   <a href="<?php echo $user->user_url; ?>" id="home-site"><li><span>Blog</span></li></a>
                   <a href="http://linkedin.com/in/<?php echo $user->linkedin; ?>" id="home-linkedin"> <li><span>Linkedin</span></li></a>
                   <a href="https://twitter.com/<?php echo $user->twitter; ?>" id="home-twitter"><li><span>Twitter</span></li></a>
                </ul>
             </div><!-- home -->
            <!-- END HOME -->
			<!-- Thus begins the rest of the sliders -->
			<div class="section">
                <div class="innerpage">
                    <h2>About Me</h2>
                    <?php echo wpautop( $user->description ); ?>
                </div>
            </div>
			<div class="section">
                <div class="innerpage">
                    <h2>Networks</h2>
                    
                    <ul class="social">
                        
                        <?php  ?>
                        <li>
                            <a class="socialbox" href="https://facebook.com/<?php echo $user->facebook; ?>" target="_BLANK" style="opacity: 1;">
                                <img alt="facebook icon" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/facebook.png">
                                <strong>Facebook</strong>
                                facebook.com/
                            </a>
                        </li>
                        
                        <li class="last">
                            <a class="socialbox" href="http://linkedin.com/in/<?php echo $user->linkedin; ?>" target="_BLANK" style="opacity: 1;">
                                <img alt="linkedin icon" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/linkedin.png">
                                <strong>LinkedIn</strong>
                                linkedin.com/
                            </a>
                        </li>
                        
                        <li>
                            <a class="socialbox" href="https://twitter.com/<?php echo $user->twitter; ?>" target="_BLANK" style="opacity: 1;">
                                <img alt="" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/twitter.png" style="margin-left: 2px;">
                                <strong>Twitter</strong>
                                twitter.com/
                            </a>
                        </li>
                        
                        <li class="last">
                            <a class="socialbox" href="https://github.com/<?php echo $user->github; ?>" target="_BLANK" style="opacity: 1;">
                                <img alt="github icon" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/github.png">
                                <strong>Github</strong>
                                github.com/
                            </a>
                        </li>
                        
                        <li>
                            <a class="socialbox" href="http://profiles.wordpress.org/<?php echo $user->wordpress; ?>" target="_BLANK">
                                <img alt="wordpress icon" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/wordpress.png">
                                <strong>WordPress</strong>
                                profiles.wordpress.org/
                            </a>
                        </li>
                        
                        <li class="last">
                            <a class="socialbox" href="http://ben.lobaugh.net/gallery" style="opacity: 1;">
                                <img alt="photos link image" src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/social-icons/gallery.png">
                                <strong>Photos</strong>
                                ben.lobaugh.net/
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
			        <div class="section">
		                <div class="innerpage">
		                    <h2>Contact Me</h2>
		                    <form action="" method="post" >
		                        <p>
		                            <input type="text" default="Subject" name="name" value="Your Name..." onblur="if (this.value == '') {this.value = 'Your Name...';}"
		 onfocus="if (this.value == 'Your Name...') {this.value = '';}" />
		                            <input type="text" default="Subject" name="email" value="Your Email..." onblur="if (this.value == '') {this.value = 'Your Email...';}"
		 onfocus="if (this.value == 'Your Email...') {this.value = '';}"/></p>
		                        <p><input type="text" default="Subject" name="subject" value="Subject..." onblur="if (this.value == '') {this.value = 'Subject...';}"
		 onfocus="if (this.value == 'Subject...') {this.value = '';}" /></p>
		                        <p><textarea name="body" rows="3" cols="60" onblur="if (this.value == '') {this.value = 'Message...';}"
		 onfocus="if (this.value == 'Message...') {this.value = '';}">Message...</textarea></p>
		                        <p><input type="submit" name="blobaugh_card_contact"/></p>
		                        <input type="hidden" name="h1" value="" />
		                        <input type="hidden" name="h2" value="42" />
		                    </form>
		                </div>
		            </div>
			
			
			
			
			
			
		</div><!-- content -->	
		<div class="main-nav-menu">

		</div><!-- main nav menu -->
	</div><!-- page wrap -->









<?php get_footer(); ?>
