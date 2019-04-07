jQuery(document).ready(function(){

  //Fade .site-branding when the user scrolls
  jQuery(window).scroll(function(){
    jQuery(".site-branding").css("opacity", 1 - jQuery(window).scrollTop() / 250);
  });

  // Fix the menu to the top once it scrolls there.
  const branding = jQuery('.site-branding').first();
  const menu = jQuery('#site-navigation');
  const spacer = jQuery('#primary-nav-spacer');

  let menuHeight = jQuery('#site-navigation').outerHeight(true);
  let brandingBottom = branding.position().top + branding.offset().top + branding.outerHeight(true);


  console.log(menuHeight);

  jQuery(window).scroll(function(){
    
    if(brandingBottom - jQuery(this).scrollTop()<0){

      menu.css({
        'position':'fixed',
        'transform': 'translateY(-' + brandingBottom + 'px)',
        'background-color': '#ffccaa'
      });

      spacer.css({
        'height': menuHeight + 'px'
      });
    }
    else{
      menu.css({
        'position':'relative',
        'background-color': 'transparent',
        'transform': 'none',
      });

      spacer.css({
        'height': '0',
      });
    }
  });
});