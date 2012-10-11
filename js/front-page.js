/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


// Custom JS for Ben
jQuery(function($){
	
    $('.content').cycle({
        fx: 'scrollUp',
        speed: 'fast',
        timeout: 0,
        pager: '.main-nav-menu'
    });
    
    $('.main-nav-menu').find('a:first-child').attr('title', 'Home');
    $('.main-nav-menu').find('a:nth-child(2)').attr('title', 'About Me');
    $('.main-nav-menu').find('a:nth-child(3)').attr('title', 'My Networks');
    $('.main-nav-menu').find('a:nth-child(4)').attr('title', 'Contact Form');

    $(".main-nav-menu a").tipTip({
        delay: 1,
        fadeIn: 1
    });
    console.log($('main-nav-menu a'));
    
    console.log( $('.main-nav-menu').find('a').tipTip() );
       
});


// main-nav-menu