$('nav[role=navigation]').hide();
$(function () {
  $('.second-hand__show-more').click(function () {
    // alert('sdf');
    console.log($('nav[role=navigation] div a:first'))
    $(this).jscroll({
      autoTrigger: false,
      padding: 0,
      nextSelector: 'nav[role=navigation] div a:first',
      contentSelector: '.second-hand__items',
      callback: function () {
        $('nav[role=navigation]').remove();
      }
    });
  });
});
