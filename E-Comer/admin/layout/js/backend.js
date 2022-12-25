$(function(){
    'use strict';
//Hied placeholder on form focus
    $('[Placeholder]')

    $('[Placeholder]').focus(function(){
        $(this).attr('data-text',$(this).attr('Placeholder'));

        $(this).attr('Placeholder', '');
    }).blur(function(){

        $(this).attr('Placeholder', $(this).attr('data-text'));
    })

});