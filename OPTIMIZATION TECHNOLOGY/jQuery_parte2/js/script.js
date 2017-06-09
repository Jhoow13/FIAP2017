$(function(){
//jQuery-01
    $("#hide").click(function(){
        $(".alvo").hide();
    });

    $("#show").click(function(){
        $(".alvo").show();
    });

//jQuery-02
    $("#fadeIn").click(function(){
            $(".alvo").fadeIn();
        // $(".alvo").fadeIn();
        // $(".alvo").fadeIn("slow");
        //$(".alvo").fadeIn(5000);
    });

    $("#fadeOut").click(function(){
        $(".alvo").fadeOut();
        // $(".alvo").fadeOut("slow");
        // $(".alvo").fadeOut(5000);
    });

//jQuery-03
    $("#slideDown").click(function(){
            $(".alvo").slideDown();
    });

    $("#slideUp").click(function(){
        $(".alvo").slideUp();
    });

    $("#slideToggle").click(function(){
        //$(".alvo").slideToggle('show');
        $(".alvo").css("background", "red").slideUp(2000).slideDown(100);
    });

//jQuery-04
        $("#animate").click(function(){
            $(".alvo").css({'position':'absolute'});
            $(".alvo").animate({'left':'800px', 'opacity': '0.2', 'width':'80px', 'height':'80px'});
            var zeca = $(".alvo")
            zeca.animate({height: '250px', opacity: '0.4'}, "slow");
            zeca.animate({width: '250px', opacity: '0.8'}, "slow");
            zeca.animate({height: '100px', opacity: '0.4'}, "slow");
            zeca.animate({width: '100px', opacity: '0.8'}, "slow");
        });

//jQuery-05
        $("#html").click(function(){
            $(".alvo").html('<p>Outro texto aqui</p>');
        });

//jQuery-06
        $("#attr").click(function(){
            $(".alvo a").attr({
                "href" : "http://www.fiap.com.br/profBortola",
                "title" : "Vae Bortola!!!!"
                });
        });


        $("#removeAttr").click(function(){
            $(".alvo a").removeAttr("title");
        });

//jQuery-07
        $("#addClass").click(function(){
            $(".alvo > h5").addClass("ajusteTexto");
        });
        $("#removeClass").click(function(){
            $(".alvo > h5").removeClass("ajusteTexto");
        });

//jQuery-08
        $("#load").click(function(){
            $(".alvo").load("../conteudo.html");
        });


/*----------------------------------------------------------------------*/
});
