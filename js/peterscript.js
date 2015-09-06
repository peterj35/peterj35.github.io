//navstuff
$(function() {
    $('#nav-wrapper').height($("#nav").height());
    
    $('#nav').affix({
        offset: { top: $('#nav').offset().top }
    });
});


$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.modalthumbnail').hover(
        function(){
            $(this).find('.modalcaption').slideDown(100); //.fadeIn(250)
        },
        function(){
            $(this).find('.modalcaption').slideUp(100); //.fadeOut(205)
        }


    ); 
});

//Executes your code when the DOM is ready.  Acts the same as $(document).ready().
$(function() {
    //Calls the tocify method on your HTML div.
    $("#toc").tocify();
});

