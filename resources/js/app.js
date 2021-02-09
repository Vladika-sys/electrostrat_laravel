const { includes, reduce } = require("lodash");
require('./main');
$(document).ready(function()
{

let buton = $('.hai-sus');

$(window).on('scroll',function()
{
   if($(this).scrollTop()>=50)
   {
       buton.fadeIn(1000);


   }
   else{
       buton.fadeOut(1000);
   }
});

buton.on('click',function(sageata)

{


 sageata.preventDefault();

 $('html').animate({scrollTop:0},2000);

});

});

let options =
    {
        startAngle: -1.55,
        size: 200,
        value: 0.6,
        fill: "tomato"
    }
    $(".circle .bar").circleProgress(options).on('circle-animation-progress',function(event,progress,stepValue)
    {
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
    });
    $(".second .bar").circleProgress({
        value:0.45,
        fill:"tomato",
    });
    $(".third .bar").circleProgress({
        value:0.25,
        fill: "tomato",
    });
    $(".fourth .bard").circleProgress({
        value:0.35,
       
    });


//
