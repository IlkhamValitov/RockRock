                <script src="js/JQuery.js"></script>
                <script src="js/script.js"></script>
                <script src="js/ajax.js"></script>
                <?php include_once './controller/controller.php';?> 
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