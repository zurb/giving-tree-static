(function ($) {  
  
  var GivingTree = {};
  GivingTree.setInitialStickyNavOffset = function(idx,el) {
    $(el).data("offset-top", $(el).offset().top);
  };
  GivingTree.updateStickyNav = function(event){
    var windowTopOffset = $(event.currentTarget).scrollTop();
    $("[data-sticky]").each(function(idx,el){
      var $el = $(el);
      if (windowTopOffset > $(el).data("offset-top")) {
        $el.addClass("sticky");
      } else {
        $el.removeClass("sticky");
      }
    });
  };
  
  $(function(){
    $(document).foundationAlerts();
    $(document).foundationButtons();
    $(document).foundationAccordion();
    $(document).foundationNavigation();
    $(document).foundationCustomForms();
    $(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});
    
    $(document).tooltips();
    $('input, textarea').placeholder();
    
    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'left'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'left'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'left'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'left'});
  });
  
  $(window).load(function () {
    $('body').raptorize({
      "enterOn" : "konami-code"
    });
    $("[data-sticky]").each(GivingTree.setInitialStickyNavOffset);
  });
  
  
  $("[data-sticky]").each(function(idx,el){
    $(el).data("offset-top", $(el).offset().top);
  });
  
  var updateStickyNav = function(event){
    var windowTopOffset = $(event.currentTarget).scrollTop();
    $("[data-sticky]").each(function(idx,el){
      var $el = $(el);
      if (windowTopOffset > $(el).data("offset-top")) {
        $el.addClass("sticky");
      } else {
        $el.removeClass("sticky");
      }
    });
  };
  
  $(window).scroll(updateStickyNav);
  $('#holidaySlider').orbit({
    directionalNav: true,
    timer:false,
    fluid: true
    
  });
  $("[data-sticky]").each(GivingTree.setInitialStickyNavOffset);
  $(window).on("scroll.sticky-nav",GivingTree.updateStickyNav);
  
})(jQuery);
