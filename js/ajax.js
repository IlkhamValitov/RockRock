$(window).on('load', function() {
    //Отображаемый перед выводом результата контент
    function funcBefore() {
        $('.central_container').text('Waiting of data');
    }
    //Выводимый результат
    function funcSuccess(data) {
        $('.central_container').html(data);
        
    }
    //Массивы для хранения имен классов и модулей соответственно, относящихся к пунктам всплывающего меню
    let link_array = ['.logo', '.bands_link', '.fest_link', '.feedback_link'];
    let url_array = ['main.php','bands.php', 'fest.php', 'feedback.php'];

    let i = 0;
    //Цикл для перебора элементов массива, расположенного выше
    for(; i < link_array.length; i++) {
        $(link_array[i]).on('click', transition);
    }
        //Функция, частично для управления отображением всплывающего меню и полосы прокрутки
        function transition(e) {
            $('.the_menu').removeClass('the_menu_show');
            $('html body').removeClass('no_scroll');
            //Часть функции, служащая для обработки асинхронных запросов
            $.ajax({ 
                url: url_array[e.currentTarget.accessKey],
                type: "POST",
                data: ({name: "someone"}),
                dataType: "html",
                beforeSend: funcBefore,
                success: funcSuccess
            });
        }

    
})