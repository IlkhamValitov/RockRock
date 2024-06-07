<html lang="ru">
    <head>  
        <meta charset="utf-8"/>
        <title>Истории Рока</title>
        <link rel="stylesheet" href="styles/style.css">
        <script src="js/JQuery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/ajax.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php include_once './controller/controller.php';?> 
        <div class="main_container">
            <header class="header_container">
                <div class="logo" accesskey="0"><h2>Rock-Rock</h2></div>
                <div class="main_menu">
                    <div class="bands_link" accesskey="1">
                        <a href="#">Имена</a> <!-- добавить подкатегорию (инди, фолк и т.д.) -->
                    </div>
                    <div class="bands_link" accesskey="2">
                        <a href="#">Фестивали</a> 
                    </div>
                    <div class="bands_link" accesskey="3">
                        <a href="#">Обратная связь</a>
                    </div>
                    <div class="search">
                        <img class="default_img" src="img/search.png" alt="">
                        <img class="hover_change" src="img/white_search.png" alt="">
                    </div>

                    <div class="search_form">
                        <form method="post" action="controller/controller.php">
                            <label for="search"></label><input id="search" type="search" name="search"/>
                        </form>
                    </div>
                </div>
            </header>
            <div class="central_container">
                <!-- <h4 class="news_section_title">Новости из мира рок-музыки</h4> -->
                <!-- Первая тройка новостей -->
                <section class="news_section show"><!--Создать вложенный блок для отделения новостных блоков от трех кнопок навигации снизу-->
                    <div class="three_news"><!-- Один из блоков с тремя новостями -->
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text"> 
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article> 
                            </div> 
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text"> 
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text"> 
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div> 
                        </a>
                    </div>
                </section>
                <!-- Вторая тройка новостей -->
                <section class="news_section"><!--Создать вложенный блок для отделения новостных блоков от трех кнопок навигации снизу-->
                    <div class="three_news"><!-- Один из блоков с тремя новостями -->
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor()?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                    </div>
                </section>
                <!-- Третья тройка новостей -->
                <section class="news_section">
                    <div class="three_news">
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                        <a href="#">
                            <div class="news_block">
                                <h4 class="title"><?php news_distributor();?></h4>
                                <div class="news_img">
                                    <img alt="image" src="<?php news_distributor();?>"/>
                                </div>
                                <article class="short_text">
                                    <p><?php news_distributor();?></p>
                                    <p class="placement_date"><?php news_distributor();?></p>
                                </article>
                            </div>
                        </a>
                    </div>
                </section> 
                <div class="switches">
                        <div class="hidden_switch"></div>
                        <div></div>
                        <div></div>
                </div>
                <main>
                    <!-- <h3 class="ra_article_title">Случайная статья</h3> -->
                    <div class="ra_article_block">
                        <h4 class="ra_title"><?php ra_generator(); ?></h4> 
                        <article class="ra_article">
                            <p>
                                <?php ra_generator(); ?>
                            </p>
                        </article> 
                    </div>  
                </main>
            </div>
            <footer class="footer_container">
                <div class="footer_menu">
                    <div>
                        <a href="#">Группы</a>
                    </div>
                    <div>
                        <a href="#">Фестивали</a>
                    </div>
                    <div>
                        <a href="#">Обратная связь</a>
                    </div>
                </div>
                <div class="author_attributes">
                    <p class="full_name">Валитов Ильхам</p>
                    <p class="email">ValitovIlkham@gmail.com</p>
                    <p class="send_email"><a href="mailto:ValitovIlKham@gmail.com?subject=Вопросы">Вопросы и предложения</a></p>
                </div>
                <div class="date">
                    <?php echo date('Y'); ?>
                </div>
            </footer>
        </div>
    </body>
</html>