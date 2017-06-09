$(function(){
  $('body').css('height','5000px');
  $('body').css('background-color','#ccc');

  //***seleciondo um elemento*****
  // $('h1').css('color','red');
  // $('h1').hide();
  // $('h1').delay('1000');
  // $('h1').fadeIn('show');
  // $('h1').text('Aprendendo Jquery');

  // inline ***
  // $('h1').css('color','red').hide().delay('1000').fadeIn('show').text('Aprendendo Jquery');

  // em bloco com click
  $('h1')
    .css('color','red')
    .hide().delay('1000')
    .fadeIn('show')
    .text('Aprendendo Jquery')
    .click(function(){
      $('body').css('background','blue')
      $('h1').css('color','#fff');
    });

    $('a').css({'color':'red', 'text-decoration':'none', 'text-transform':'uppercase'});
    $('.laranja').css('color','orange');
    $('#pink').css('color','pink');
    $('h1, #pink').css('border','1px dashed red');

  $(window).scroll(function(){
    var top = $(window).scrollTop();
    if (top > 10) {
       $('nav').fadeOut('1000');
    }else{
       $('nav').fadeIn('1000');
    }
  });




});
