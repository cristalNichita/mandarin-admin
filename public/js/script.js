function phoneMask(){
    Inputmask.extendDefinitions({
        '8': {
            validator: "[12345690]",
        },
    });
    $('[name="telephone"]').inputmask('+7(899) 999-99-99');
}

$(document).ready(function () {
    phoneMask();

    $(".hamburger").on('click', function (){
        $(this).toggleClass("active");
        $(".menu-fix").toggleClass("active");
        $("body").toggleClass("overflow");
    });
    $(".menu-fix").on('click', function (e) {
        if (!$(e.target).closest(".menu").length) {
            $(this).removeClass('active');
            $(".hamburger").removeClass('active');
            $("body").removeClass('overflow');
        }
        e.stopPropagation();
    });


    $(".a-menu-name").on('click', function (){
        $(this).toggleClass("open");
        $(this).parent(".a-menu-li").find(".a-menu-inside").slideToggle();
    });

    $('.select2').select2({
        minimumResultsForSearch: 10,
        width: "100%",
    });



    $(".datepicker").datepicker({
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
            'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
            'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        minDate: 1,
        maxDate: '+1y',
        dateFormat: "dd.mm.yy",
        range: "period",
    });

});



$(window).scroll(function () {


});

$(window).resize(function () {

});

