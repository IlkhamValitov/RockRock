<?php
    const mysql_path = "./model/model.php";
    function news_distributor() {
        require mysql_path; //Подключение файла к текущему скрипту
        static $elem_counter = 0; //счетчик для каждого элемента блока новости. 
                                  //значение увеличится на единицу при каждом вызове текущей функции
        static $block_counter = 1; //счетчик для нумерации каждого блока новости.
                                   //при каждом вызове текущей функции из главной страницы,
                                   //значение будет увеличено на единицу             
        if($elem_counter  === 4) {  //если достигнуто значение последнего элемента блока,то
            $block_counter++;      //значение счетчика блока будет инкрементировано
        }
        //Запрос к БД, содержащий в конце выражения переменную счетчика блока для автоматического
        //отбора нужного элемента из БД по его идентификатору 
        $news_content = $mysql -> query("SELECT * FROM `news` WHERE id = $block_counter");
        $mysql -> close();
        $result_arr = $news_content -> fetch_assoc();
        //Массив, дублирующий названия колонок и порядок их расположения в таблице БД
        $elem = ['', 'title', 'image', 'short_text', 'addition_time', 'text', 'id'];
        //Если счетчик достигнет значения равного количеству элементов (4), то счетчик
        //изменит свое значение на единицу
        $elem_counter < 4 ? $elem_counter++ : $elem_counter = 1;      
        //Сверка данных из массива "elem" с данными из массива полученного из БД (массив "result")
        foreach ($result_arr as $key => $value) { 
            if($key == $elem[$elem_counter]) echo $result_arr[$elem[$elem_counter]];
            }
    }

    function ra_generator() { //функция для генерации случайных статей
        require mysql_path;
        $article_content = $mysql -> query("SELECT * FROM `articles` WHERE article_id = 1"); //на последнюю позиуию нужно добавить функцию ramdom
        $mysql -> close();
        $result_arr = $article_content -> fetch_assoc();
        static $require_count = 0; //счетчик для учета запросов с полей
        foreach ($result_arr as $key => $value) {
            if ($key === 'article_title' && $require_count === 0) {
                echo $value;
                $require_count++; //значение будет увеличено после вывода текста для перехода к следующему полю
                break; //выйти из цикла после заполнения поля
            }
            if ($key === 'article_text' && $require_count === 1) {
                echo $value;
                $require_count--; //значение уменьшится после заполнения последнего поля
            }
        }
    }

    function searching() {
        require "../model/model.php";
        $search_query = $_POST['search'];
        //Логика сравнения поискового запроса с данными из БД
        $search_result = $mysql -> query("SELECT * FROM `articles` WHERE article_title LIKE '%$search_query%'");
        echo $search_result == false;
        $mysql -> close();
        $result = $search_result -> fetch_assoc();
        print <<<_HTML_
                <html>
                    <head>
                        <title>Результаты поиска</title>
                    </head>
                    <body style="background-color:#131313;color:#DCDCDC;">
                        <h3>Результаты поиска по запросу: "{$_POST['search']}"</h3>
                            <a href="#" style="text-decoration:none; color:#DCDCDC;">
                                <p style="width:90%;">{$result['article_title']}</p>
                                <p style="width:90%;padding-bottom:12px;border-bottom:3px solid snow;">{$result['article_text']}</p>
                            </a>
                    </body>
                </html>
                _HTML_;
        }
    if(@$_POST['search'] != null) searching();
    else echo 'Введите поисковый запрос';