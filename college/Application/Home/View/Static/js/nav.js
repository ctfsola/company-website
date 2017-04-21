/**
 * Created by Administrator on 2017/1/9.
 */
$(function () {
    $('.menu , .linee').on('click', function () {
        $('.menu').toggleClass('over')
        $('.linea1').toggleClass('overL1')
        $('.linea2').toggleClass('overL2')
        $('.linea3').toggleClass('overL3')
        $('.voci-menu').toggleClass('overvoci')
        $('.leftNavLi').toggleClass('leftNavLi1')
        $('.menu-espanso').toggleClass('menu-espanso2')
    });
    $('#searchBtn').on('click', function () {
        $('.searchLan').toggleClass('searchLan1')
    });
});