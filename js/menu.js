$('#navbar > ul.navbar-nav li').click(function(e) {
    $('.nav li.active').removeClass('active');
    var $this = $(this);
    $this.addClass('active');
});

jQuery(function($){
    $(document).on('mousewheel', function(e){
        e.preventDefault();
    });
});

$(document).ready(function(){
  $(".anchorLink").click(function(e) {
    e.preventDefault();
 
    anchorScroll( $(this), $($(this).attr("href")), 100 );
  });
});
 
function anchorScroll(this_obj, that_obj, base_speed) {
  var this_offset = this_obj.offset();
  var that_offset = that_obj.offset();
  var offset_diff = Math.abs(that_offset.top - this_offset.top);
 
  var speed       = (offset_diff * base_speed) / 1000;
 
  $("html,body").animate({
  scrollTop: that_offset.top
}, {
  duration: speed,
  easing: "easeInOutSine"
});
}
