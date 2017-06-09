$(function(){
  $('h2').css('border','1px solid red');
  $('p').css('color','blue');
  $('.classe1').css('background','#ccc');

  // seletor Filhas
  $('.classe1 span').css('color','red');

  //Filhas direta do elemento
  $('.classe1 > span').css('background','blue');

  //Primeiro elemento após o selecionado
  $('.aqui + p').css('font-size','30px');

  //Atacar todos os elementos após o selecionado
  $('.aqui ~ p').css('background','red');
});
