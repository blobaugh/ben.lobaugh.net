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
    
    $('.main-nav-menu').find('a:first-child').attr('title', 'whatever');
    $('.main-nav-menu').find('a:nth-child(2)').attr('title', 'whatever2');
    $('.main-nav-menu').find('a:nth-child(3)').attr('title', 'whatever3');
    $('.main-nav-menu').find('a:nth-child(4)').attr('title', 'whatever4');

    $(".main-nav-menu a").tipTip();
    console.log($('main-nav-menu a'));
    
    console.log( $('.main-nav-menu').find('a').tipTip() );
       
});


// main-nav-menu