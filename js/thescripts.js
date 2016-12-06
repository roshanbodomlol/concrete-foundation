var winHeight = $(window).height();
var winWidth = $(window).width();

$(document).ready(function(){

    $('.full_height').css('height', winHeight);
    
});

$('.hasChildren > a').click(function (e) {
    e.preventDefault();
});

$(window).load(function () {
    $('#loading_screen').addClass('off');
});

$('.showModal').click(function (e) {
    e.preventDefault();

    var theURL = $(this).attr('href');

    console.log(theURL);

    $('#theModal').modal('show');

    $('.modal-body').load(theURL+' #modal_inner', function(){
        $('.loadingImg').addClass('off');
        $.getScript('https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js');
        $.getScript(globalVariable.theURL + '/js/career.js');
    });

});

$('#theModal').on('hidden.bs.modal', function (e) {
    $('#modal_inner').remove();
    $('.loadingImg').removeClass('off');
});

$('no_click').click(function(e){

    e.preventDefault();

});

















