$('#aboutnav a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

$('#aboutnav a:first').tab('show');

$(window).bind('resize', function(){
    var w = $(this).width(),
        threshold = 768;

        if(w < threshold){
            $('.nav-justified').hide().fadeIn();
        }
});