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
$(window).on('resize', addImage)

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
    scrollTop: $('.header').height()
  }, 500)
  $('.feedback').slideDown(200);

  // метрика + аналитика
  typeof yaCounter28435541 != 'undefined' && yaCounter28435541.reachGoal('setBidPageTop');
  typeof ga != 'undefined' && ga('send', 'event', 'setBidPageTop', 'click');

  return false;
}
addImage();
function addImage() {
  var width = $('.press').width(),
      widthImg = 112,
      count = 8,
      block = '';
      if(width > 1060 && width < 1200) {
        count = 9;
      } else if (width > 1200 && width < 1400) {
        count = 10
      } else if (width > 1400 && width < 1500) {
        count = 11
      } else if (width > 1500 && width < 1600) {
        count = 12
      } else if (width > 1600 && width < 1700){ 
        count = 13
      } else if (width > 1700 && width < 1800){ 
        count = 14
      } else if (width > 1800){ 
        count = 15
      } 
      for(var i = 1; i < count+1; i++) {
        block += '<img src="img/prod'+i+'.png" alt="kommersant"/>';
      }
        $('.press__products').html(block);
      margin = (width - (widthImg*count))/ count;

      $(".press__products img").css({
        marginRight: margin + 'px'
      })
}

function sendData2Server(name, phone)
{
  $.post('/send.php', {"name":name, "phone":phone});
}

$('#leaveApp').validate({
  rules: {
    tel1 : {
      required: true,
      phoneUS: true,
      minlength: 5
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
  invalidHandler: function() {
    $(this).find('.form__text').hide(300);
  },
  success: function() {
    $(this).find('.form__text').show(300);
  },
  submitHandler: function() { 
    $('#leaveApp').hide();
    $('.form__success').show();
    sendData2Server($('#name1').val(), $('#tel1').val());
    
    // метрика + аналитика
    typeof yaCounter28435541 != 'undefined' && yaCounter28435541.reachGoal('sendBidPageTop');
    typeof ga != 'undefined' && ga('send', 'event', 'sendBidPageTop', 'click');
  }
});
$('#leaveApp1').validate({
  rules: {
    tel2 : {
      required: true,
      phoneUS: true,
      minlength: 5
    },
    name2: {
      required: true,
    }
  },
  messages: {
    name2: {
      required: "Поля обязательны для заполнения",
    },
    tel2: {
      required: "Поля обязательны для заполнения",
      digits: "Некорректный номер телефона"
    }
  },
  invalidHandler: function() {
    $(this).find('.form__text').hide(300);
  },
  success: function() {
    $(this).find('.form__text').show(300);
  },
  submitHandler: function() { 
    $('#leaveApp1').hide();
    $('.form__success').show();
    sendData2Server($('#name2').val(), $('#tel2').val());

    // метрика + аналитика
    typeof yaCounter28435541 != 'undefined' && yaCounter28435541.reachGoal('sendBidPageBottom');
    typeof ga != 'undefined' && ga('send', 'event', 'sendBidPageBottom', 'click');
  }
});
