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


       
            $(".main-nav-menu a").tipTip();
       
});


// main-nav-menu