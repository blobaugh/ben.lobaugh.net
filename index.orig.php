
</head>

<body <?php body_class(); ?>>
<?php 
    $user = blobaugh_get_user_for_card();
    var_dump($user);die();
?>
    <div id="main_wrap">
        <!-- START CONTENT -->
        <div id="content">
            
            <!-- START HOME -->
            <div id="home" class="section">
                <div class="home_bg">
                    
                    <a href="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>vcard.vcf"><img class="download" alt="Download my vCard" title="Download my vCard" src="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>images/download_img.png"></a>
                    
                    <div class="middle">
                        <!-- <img class="logo" src="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>images/ben_lobaugh.jpg" /> -->
                       <?php echo get_avatar( $user->user_email, $size = '164' ); ?>
                        
                        <h1><?php echo $user->first_name . ' ' . $user->last_name; ?></h1>
                        <h4><?php echo $user->title; ?></h4>
                        
                        <ul>
                           <!-- <li>e: <a href="mailto:<?php echo $user->user_email; ?>"><?php echo $user->user_email; ?></a></li>
                            <li>w: <a href="<?php echo $user->user_url; ?>"><?php echo $user->user_url; ?></a></li>
                            <li>p: <a href="tel:<?php echo $user->phone; ?>"><?php echo $user->phone; ?></a></li>-->
                           <a href="<?php echo $user->user_url; ?>" > <li>
                                <span>Blog</span>
                            </li></a>
                           <a href="http://linkedin.com/in/<?php echo $user->linkedin; ?>" target="_BLANK"> <li>
                                <span>Linkedin</span>
                            </li></a>
                           <a href="https://twitter.com/<?php echo $user->twitter; ?>" target="_BLANK"> <li>
                               <span>Twitter</span>
                            </li></a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END HOME -->
            
            
            <!-- SHART ABOUT ME -->
            <div id="networks" class="section">
                <div class="innerpage">
                    <h2>About Me</h2>
                    
                    <?php echo wpautop( $user->description ); ?>
                </div>
            </div>
            <!-- END ABOUT ME -->
            
            
            <!-- START NETWORKS -->
            <div id="networks" class="section">
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
            <!-- END NETWORKS -->
            
            
            <!-- START CONTACT -->
            <div id="networks" class="section">
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
                        <input ytpe="hidden" name="h2" value="42" />
                    </form>
                </div>
            </div>
            <!-- END CONTACT -->
            
            
        </div>
    <!-- START NAV BAR -->    
        <div class="menu">
            <ul id="nav">
                <li><a href="#" title="Home"><img src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/nav/home_icon.png" title="Home" /></a></li>
                <li><a href="#"><img src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/nav/about_icon.png" title="About Me" /></a></li>
                <li><a href="#"><img src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/nav/network_icon.png" title="Social Networks" /></a></li>
                <li><a href="#"><img src="<?php echo trailingslashit( bloginfo( 'template_directory' ) ); ?>images/nav/contact_icon.png" title="Contact Form" /></a></li>
            </ul>
        </div>
    <!-- END NAV BAR -->
    </div>
    <!-- END CONTENT -->
