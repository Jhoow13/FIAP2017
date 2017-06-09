$(function(){
  //eventos
  //mostra uma imagem de erro
  // $('img').error(function(){
  //   $('img').attr('src', 'img/sem.gif');
  // });

  $('img').error(function(){
    var imagem = $(this).attr("src");
    $('img').attr('src','img/sem.gif');
    alert('A imagem ' + imagem + ', não existe!');
  })

  //ajuste de imagem deacordo com o viewport
  $('img').width($(window).width()).height($(window).height());

  $(window).resize(function(){
    $('img').width($(window).width()).height($(window).height());
  });

$('body').css('height','5000px');

  // $(window).scroll(function(){
  //     $('img').fadeOut('1000');
  // });

  // identificar o tamanho do scroll
  //Sumir o Menu
  $(window).scroll(function(){
    var top = $(window).scrollTop();
    if (top > 200) {
       $('img').fadeOut('1000');
    }else{
       $('img').fadeIn('1000');
    }

  });

});
