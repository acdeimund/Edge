jQuery(document).ready(function(){

  //Fade .site-branding when the user scrolls
  jQuery(window).scroll(function(){
    jQuery(".site-branding").css("opacity", 1 - jQuery(window).scrollTop() / 250);
  });

  // Fix the menu to the top once it scrolls there and push it up when it meets the footer.

  // This is the grapgic part of the header.
  const branding = jQuery('.site-branding').first();

  // This is the acctual menu.
  const menu = jQuery('#site-navigation');

  // This is a div just before the content for spacing.
  const spacer = jQuery('#primary-nav-spacer');

  // The footer.
  const footer = jQuery('#colophon');

  // Get some measurements
  let menuHeight = jQuery('#site-navigation').outerHeight(true);
  let brandingBottom = branding.position().top + branding.offset().top + branding.outerHeight(true);
  let footerTop = footer.offset().top;
  let footerPosition;

  jQuery(window).scroll(function(){
    footerPosition = footerTop - jQuery(this).scrollTop()-menuHeight;
  
    // Push menu up when it meets the footer
    if(footerPosition < 0){
      menu.css({
        'position':'fixed',
        'transform': 'translateY(' + (footerPosition - brandingBottom) + 'px)',
        'background-color': '#ffccaa'
      });
    }
    
    // Attach menu to the top once header is scrolled off screen
    else if(brandingBottom - jQuery(this).scrollTop()<0){

      menu.css({
        'position':'fixed',
        'transform': 'translateY(-' + brandingBottom + 'px)',
        'background-color': '#ffccaa'
      });

      spacer.css({
        'height': menuHeight + 'px'
      });
    }

    // Reset the position of the menu
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