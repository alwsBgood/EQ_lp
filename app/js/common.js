if (localStorage.name && localStorage.email && localStorage.phone)  {
  // запись сохраненных данных сразу в поля, если надо
  $('input[name="entry.1005876579"]').val(localStorage.name);
  $('input[type="email"]').val(localStorage.email);
  $('input[type="tel"]').val(localStorage.phone);
}

$(function() {
  $("[name=send]").click(function (e) {
   var btn = $(this);
   var form = $(this).closest('form');

   $(":input.error").removeClass('error');
   $(".allert").remove();

   var error;
   var ref = btn.closest('form').find('[required]');
   var msg = btn.closest('form').find('input, textarea, select');
   var send_btn = btn.closest('form').find('[name=send]');
   var send_adress = btn.closest('form').find('[name=send_adress]').val();
   var send_options = btn.closest('form').find('[name=campaign_token]');;
   var formType = btn.closest('form').find('[name=form_type]').val();
   var redirect = btn.closest('form').find('[name=redirect]').val();
   var goal = btn.closest('form').find('[name=goal]').val();
   var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';

   localStorage.name = form.find('input[name="entry.1005876579"]').val();
   localStorage.email = form.find('input[type="email"]').val();
   localStorage.phone = form.find('input[type="tel"]').val();


   $(ref).each(function() {
    if ($(this).val() == '') {
      var errorfield = $(this);
      $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
      error = 1;
      $(":input.error:first").focus();
      return;
    } else {
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if ($(this).attr("type") == 'email') {
        if (!pattern.test($(this).val())) {
          $("[name=email]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
      var patterntel = /^()[- +()0-9]{9,18}/i;
      if ($(this).attr("type") == 'tel') {
        if (!patterntel.test($(this).val())) {
          $("[name=phone]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
    }
  });
   if (!(error == 1)) {
    $(send_btn).each(function() {
      $(this).attr('disabled', true);
    });

    // Send data from form to zohoCRM

    var form_data = $(this).closest('form').serializeArray();
    var form_data_bootcamp = {};

    $.each(form_data, function(i, v) {
        form_data_bootcamp[v.name] = v.value;
    });

    console.log(form_data_bootcamp);
    $.ajax({
       type: 'POST',
        url: '/registration/application.php',
        data: {eqbootcamp: form_data_bootcamp, utm_source: form_data_bootcamp['utm_source'], google_id: form_data_bootcamp['google_id'], utm_campaign: form_data_bootcamp['utm_campaign'], utm_content: form_data_bootcamp['utm_content'], utm_medium: form_data_bootcamp['utm_medium'], utm_term: form_data_bootcamp['utm_term']},
        success: function() {
            console.log("Zoho ok");
        }
    });


    $.ajax({
      type: 'POST',
      url: 'https://docs.google.com/forms/d/e/1FAIpQLSeVVDu7YDB7J8HQM0HQUcXGqozUn7GPqnTBqWW71V9ks-lHGg/formResponse',
      data: msg,
    });
    // Отправка на почту
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: msg,
      success: function() {
        setTimeout(function() {
          $("[name=send]").removeAttr("disabled");
        }, 1000);
        $('div.md-show').removeClass('md-show');
        dataLayer.push({
          'form_type': formType,
          'event': "form_submit"
        });
          // Отправка в базу данных
          $.ajax({
           type: 'POST',
           url: 'db/registration.php',
           dataType: 'json',
           data: form.serialize(),
           success: function(response) {
             console.info(response);
             console.log(form.serialize());
             if (response.status == 'success') {
              $('form').trigger("reset");
               window.location.href = 'http://allinsol.com/eqbootcamp/success/';
            }
          }
        });
      },
      error: function(xhr, str) {
        console.log("Erorr")
      }
    });

  }
  return false;
})
});

 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});

//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("+38 (999) 999-9999");
});

// Scroll BAR

$(window).scroll(function() {
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

    $('.bar-long').css('width', scrollPercent +"%"  );

  });

// Coaches more text show

$('.coach_accordion_trigger').click(function() {
  $(this).toggleClass('active');
  $(this).closest('.coach_card').find('.more_info').slideToggle();
  if($(this).hasClass('active')){
    $(this).children('span').text('уменьшить');
  }
  else {
    $(this).children('span').text('читать полностью')
  }
});


$('.coach_img').click(function() {
  $(this).closest('.coach_card').find('.coach_accordion_trigger').click();
});

//  UP BUTTON

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
    } else {
      $('#scrollup').fadeOut('slow');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });
});

// PREVENT SCROLLING

$('*').click(function() {
  var modal= $(".md-modal");
  if( modal.hasClass('md-show')){
    $("body").addClass('unscroll')
  } else {
    $("body").removeClass('unscroll');
  }
});


// Slider


$(document).ready(function() {
  $('.slider').slick({
    slidesToShow: 1,
    dots: false,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    autoplay: false,
    adaptiveHeight: false
  });
});

$(document).ready(function() {
  $('.photo_slider-1').slick({
    slidesToShow: 1,
    lazyLoad: 'ondemand',
    dots: false,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    autoplay: false,
    adaptiveHeight: false
  });
});

$(document).ready(function() {
  $('.photo_slider-2').slick({
    slidesToShow: 1,
    lazyLoad: 'ondemand',
    dots: false,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    autoplay: false,
    adaptiveHeight: false
  });
});

//Tabs

$('.tabs').tabslet({
  animation: true
});

// Menu

$('.menu_site_navigation').click(function(event) {
  $(this).toggleClass('open');
});

$(window).scroll(function(){
  if ( $(document).scrollTop() > 600 ) {
    $('.menu_site_navigation').fadeIn('slow');
  } else {
    $('.menu_site_navigation').fadeOut('slow');
  }
});