/**
 * @file
 * Custom javascript for Bamboo.
 */

(function($) {

Backdrop.behaviors.bambooSidebarToggle = {
  attach: function(context, settings) {

    $('.layout--bamboo .l-sidebar-toggle').click(function() {
      $('.layout--bamboo').toggleClass('sidebar-active');
    });

  }
};

})(jQuery);
