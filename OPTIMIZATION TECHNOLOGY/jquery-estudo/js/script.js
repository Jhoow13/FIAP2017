$(function(){
//jQuery-01
    $("#hide").click(function(){
        $(".alvo01").hide();
    });

    $("#show").click(function(){
        $(".alvo01").show();
    });

//jQuery-02
    $("#fadeIn").click(function(){
            $(".alvo02").fadeIn();
        // $(".alvo").fadeIn();
        // $(".alvo").fadeIn("slow");
        //$(".alvo").fadeIn(5000);
    });

    $("#fadeOut").click(function(){
        $(".alvo02").fadeOut();
        // $(".alvo").fadeOut("slow");
        // $(".alvo").fadeOut(5000);
    });

//jQuery-03
    $("#slideDown").click(function(){
            $(".alvo03").slideDown();
    });

    $("#slideUp").click(function(){
        $(".alvo03").slideUp();
    });

    $("#slideToggle").click(function(){
        //$(".alvo").slideToggle('show');
        $(".alvo03").css("background", "#c4ddc5").slideUp(2000).slideDown(100);
    });

//jQuery-04
        $("#animate").click(function(){
            $(".alvo04").css({'position':'absolute'});
            $(".alvo04").animate({'left':'800px', 'opacity': '0.2', 'width':'80px', 'height':'80px'});
            var zeca = $(".alvo04")
            zeca.animate({height: '250px', opacity: '0.4'}, "slow");
            zeca.animate({width: '250px', opacity: '0.8'}, "slow");
            zeca.animate({height: '100px', opacity: '0.4'}, "slow");
            zeca.animate({width: '100px', opacity: '0.8'}, "slow");
        });

//jQuery-05
        $("#html").click(function(){
            $(".alvo05").html('<p>Outro texto aqui</p>');
        });

//jQuery-06
        $("#attr").click(function(){
            $(".alvo06 a").attr({
                "href" : "http://www.fiap.com.br/profBortola",
                "title" : "Vae Bortola!!!!"
                });
        });


        $("#removeAttr").click(function(){
            $(".alvo06 a").removeAttr("title");
        });

//jQuery-07
        $("#addClass").click(function(){
            $(".alvo07 > h5").addClass("ajusteTexto");
        });
        $("#removeClass").click(function(){
            $(".alvo07 > h5").removeClass("ajusteTexto");
        });
/*----------------------------------------------------------------------*/
});
