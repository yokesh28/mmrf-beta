$(document).ready(function () {
    $("body").queryLoader2({onComplete:function(){
       $('body').css('visibility','visible');
return false;
        }
        });
});