$('.header').flowtype({
   minimum : 880,
   maximum : 1200,
   minFont : 20,
   maxFont : 80,
   fontRatio : 30
});
$([$('.header__button'), $('.press__link')]).each(function(){
  $(this).click(showFeedback)
})
  
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

function showFeedback(e) {
  e.preventDefault();
  $('body').animate({
    scrollTop: window.innerHeight
  }, 500)
  $('.feedback').slideDown(200);
}

$('#leaveApp').validate({
  rules: {
    tel1 : {
      required: true,
      digits: true
    },
    name1: {
      required: true,
    }
  },
  messages: {
    name1: {
      required: "Поля обязательны для заполнения",
    },
    tel1: {
      required: "Поля обязательны для заполнения",
      digits: "Некорректный номер телефона"
    }
  },
  invalidHandler: function() {$(this).find('.form__text').hide(300);},
  success: function() {$(this).find('.form__text').show(300);},
  submitHandler: function() { 
    $('#leaveApp').hide();
    $('.form__success').show();
  }
});