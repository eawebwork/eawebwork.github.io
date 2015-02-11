$('.header').flowtype({
   minimum : 880,
   maximum : 1200,
   minFont : 20,
   maxFont : 80,
   fontRatio : 30
});
var buttonsForm = [$('.header__button'), $('.press__link')];
$(buttonsForm).each(function(){
  $(this).click(showFeedback);
})
  
$('.benefits__button-set button').on('click', toggleBlock);
$('input')
  .focus(animateLable)
  .blur(animateLableOut);

function animateLable(input) {
  var thisInput = input.target,
      thisLabel = $(thisInput).prev(); 

  thisLabel.addClass('focus');
}

function animateLableOut(input) {
  var thisInput = input.target,
      thisLabel = $(thisInput).prev(); 

      if(thisInput.value == "") {
        thisLabel.removeClass('focus');   
      }
}

function toggleBlock() {
  var block = $('.benefits__block');
  block.toggleClass('benefits__animate');
  block.toggleClass('benefits__animate-in');
  
}
function showFeedback(e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: $(window).height()
  }, 500)
  $('.feedback').slideDown(200);
  return false;
}



