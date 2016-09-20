<?php 
/*
Template name: Бриф
*/
?>

<?php get_header(); ?>
<section class="header-vn">
	<?php include_once('template-top-header.php'); ?>
</section>


<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
				
			</div>
			<div class="clearfix"></div>
			<div class="col-md-8 col-md-offset-2">
				<h1>Бриф на создание сайта</h1>
<div class="brief_left"><form id="brief" class="brief" method="post">
    <table>
        <tr>
            <td class="left">
                Контактное лицо</td>
            <td>
                <input class="input-text" type="text" value="" name="face" />
            </td>
        </tr>

        <tr>
            <td class="left">
                Электронная почта</td>
            <td>
                <input class="input-text" type="text" value="" name="mail" />
            </td>
        </tr>

        <tr>
            <td class="left">
                Телефон</td>
            <td>
                <input class="input-text" type="text" value="" name="phone" />
            </td>
        </tr>

        <tr>
            <td class="left">
                Цель создания сайта

                <p class="comment">
                    Первый вариант или редизайн созданной ранее версии (если это редизайн, уточните, чем не устраивает)? Каких практических результатов вы хотели 
                    бы добиться с помощью нового сайта?
                </p>

            </td>
            <td>
                <textarea name="target"></textarea>
            </td>
        </tr>



        <tr>
            <td class="left">
                Ваша компания

                <p class="comment">
                    Как она называется, как правильно пишется название, как его можно сокращать, можно ли переводить 
                    на другой язык, какое название следует использовать?
                </p>

            </td>
            <td>
                <textarea name="company"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Миссия компании

                <p class="comment">
                    Есть ли у компании сформулированная миссия, цели? Если у вас есть слоган или девиз, приведите их.
                </p>

            </td>
            <td>
                <textarea name="mission"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Область деятельности

                <p class="comment">
                    Преимущества, отличия, ключевые моменты, которые вы хотели бы донести до аудитории в первую очередь.
                </p>

            </td>
            <td>
                <textarea name="activity"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Основные конкуренты и их веб-ресурсы



            </td>
            <td>
                <textarea name="competitors"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Отличительные черты и преимущества компании перед конкурентами

            </td>
            <td>
                <textarea name="benefits"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Основные товары и услуги компании

            </td>
            <td>
                <textarea name="main_products"></textarea>
            </td>
        </tr>


        <tr>
            <td class="left">
                Бизнес-цели разработки Интернет-ресурса


            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets1"  value="Общее информирование о компании и услугах;" /> Общее информирование о компании и услугах;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets2"  value="Укрепление имиджа компании;" /> Укрепление имиджа компании;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets3"  value="Увеличение объема продаж товаров и услуг;" /> Увеличение объема продаж товаров и услуг;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets4"  value="Привлечение новых клиентов и партнеров;" /> Привлечение новых клиентов и партнеров;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets5"  value="Инструмент маркетинговых акций;" /> Инструмент маркетинговых акций;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets6"  value="Поддержка и обслуживание клиентов;" /> Поддержка и обслуживание клиентов;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets7"  value="Сбыт продукции (Интернет-магазин);" /> Сбыт продукции (Интернет-магазин);
                </div>


                <div class="checkbox">
                    <input type="checkbox" name="business_targets8"  value="Автоматизация бизнес-процессов;" /> Автоматизация бизнес-процессов;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets9"  value="Связь и взаимодействие с партнерами и дилерами;" /> Связь и взаимодействие с партнерами и дилерами;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="business_targets10"  value="Вспомогательный элемент для рекламных кампаний;" /> Вспомогательный элемент для рекламных кампаний;
                </div>


            </td>
        </tr>

        <tr>
            <td class="left">
                Сегмент, в котором работает компания

            </td>
            <td>
                <div class="checkbox">
                    <input type="checkbox" name="segment1"  value="B2C Частные лица;" /> B2C Частные лица;
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="segment2"   value="B2B Юридические лица;" /> B2B Юридические лица;
                </div>

            </td>
        </tr>

        <tr>
            <td class="left">
                Возраст 
                <p class="comment">для приоритетной целевой группы</p>

            </td>
            <td>
                <table class="brief_age">
                    <tr>
                        <td>
                        	 <div class="checkbox">
                    <input type="checkbox" name="segment2"   value="B2B Юридические лица;" /> 18-25 лет
                </div>
                            
                        </td>
                        </tr>
                    <tr>
                        <td>
                        	<div class="checkbox">
                    <input type="checkbox" name="segment2"   value="B2B Юридические лица;" /> 26-35 лет
                </div>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                        <div class="checkbox">
                    <input type="checkbox" name="segment2"   value="B2B Юридические лица;" /> 36-45 лет
                </div>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                        <div class="checkbox">
                    <input type="checkbox" name="segment2"   value="B2B Юридические лица;" /> старше 45 лет
                </div>
                            
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="left">
                Регионы и страны, с которыми ведется наиболее активная работа

            </td>
            <td>
                <div id="regions">
                                            <div class="checkbox">
                            <input class="input-text" type="text" value="" name="region_1" /></div>

                    <script type="text/javascript">
                        $(function(){
                            var i_region = 1;
                            $('#add_region').click(function(){
                                i_region++;
                                $('#regions').append('<div class="checkbox"><input class="input-text" type="text" value="" name="region_' + i_region + '" /> <span class="link"><a href="javascript:void(0);" href="javascript:void(0);" class="delete">[-]</a></span></div>');
                            });

                            $('a.delete').live('click', function(){
                                $(this).parent().parent().remove();
                            });

                        });
                    </script>
                </div>

               

            </td>
        </tr>


        <tr>
            <td class="left">
                Предполагаемый тип проекта
            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="type_1"  value="корпоративный сайт;" /> корпоративный сайт;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_2"  value="промо-сайт;" /> промо-сайт;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_3"  value="сайт продукта (отдельного бренда) или подразделения компании;" /> сайт продукта (отдельного бренда) или подразделения компании;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_4"  value="электронный магазин;" /> электронный магазин;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_5"  value="внутрикорпоративный Интранет-сайт;" /> внутрикорпоративный Интранет-сайт;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_6"  value="портал;" /> портал;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_7"  value="локализованный сайт (версия сайта на иностр. языке);" /> локализованный сайт (версия сайта на иностр. языке);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="type_8"  value="wap-сайт;" /> wap-сайт;
                </div>

                Другой:<br />
                <textarea name="type"></textarea>


            </td>
        </tr>


        <tr>
            <td class="left">
                Информация, которую планируется размещать на сайте

            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="inf_1"  value="О компании;" /> О компании;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_2"  value="Новости компании, отрасли;" /> Новости компании, отрасли;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_3"  value="Продукция/Услуги;" /> Продукция/Услуги;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_4"  value="Каталог;" /> Каталог;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_5"  value="Статьи, публикации, документация;" /> Статьи, публикации, документация;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_6"  value="Пресс-релизы, публикации в СМИ, медиа-кит;" /> Пресс-релизы, публикации в СМИ, медиа-кит;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_7"  value="Контактная информация;" /> Контактная информация;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_8"  value="Информация для ограниченного круга пользователей (закрытый раздел только для авторизованных пользователей);" /> Информация для ограниченного круга пользователей (закрытый раздел только для авторизованных пользователей);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_9"  value="Баннеры, анонсирующие какие либо акции;" /> Баннеры, анонсирующие какие либо акции;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_10"  value="Ответы на распространенные вопросы пользователей;" /> Ответы на распространенные вопросы пользователей;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_11"  value="Гостевая книга;" /> Гостевая книга;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="inf_12"  value="Фотографии, иллюстрации;" /> Фотографии, иллюстрации;
                </div>

                Другой:<br />
                <textarea name="inf"></textarea>

            </td>
        </tr>

        <tr>
            <td class="left">
                Языковые версии сайта

            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="lang_1"  value="Русский;" /> Русский;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="lang_2"  value="Английский;" /> Английский;
                </div>

                Другой:<br />
                <textarea name="lang"></textarea>

            </td>
        </tr>


        <tr>
            <td class="left">
                Дальнейшая работа с сайтом
                <p class="comment">
                    Внесение обновлений: новости, предложения, товары в каталог и пр.
                </p>

            </td>
            <td>

                <div class="checkbox">
                    <input type="radio" name="updates" checked="checked" value="Все обновления делают специалисты Медиасеть;" /> Все обновления делают специалисты Медиасети;
                </div>

                <div class="checkbox">
                    <input type="radio" name="updates" value="Все обновления делает представитель Заказчика;" /> Все обновления делает представитель Заказчика;
                </div>

            </td>
        </tr>


        <tr>
            <td class="left">
                Какую дату запуска нового сайта вы намечаете? Какие внешние обстоятельства могут изменить график (выставка, рекламная кампания, др.)?

            </td>
            <td>

                <textarea name="start"></textarea>

            </td>
        </tr>



        <tr>
            <td class="left">
                Какое впечатление должен произвести дизайн сайта на посетителя?

            </td>
            <td>

                <textarea name="impression"></textarea>

            </td>
        </tr>


        <tr>
            <td class="left">
                Есть ли у компании свой фирменный стиль?

            </td>
            <td>

                <textarea name="firstil"></textarea>

            </td>
        </tr>

        <tr>
            <td class="left">
                Насколько точно необходимо придерживаться фирменного стиля/brandbook?

            </td>
            <td>

                <textarea name="firstil_"></textarea>

            </td>
        </tr>

        <tr>
            <td class="left">
                Использование элементов фирменного стиля?
            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="elements_1"  value="логотип;" /> логотип;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="elements_2"  value="шрифты;" /> шрифты;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="elements_3"  value="слоганы;" /> слоганы;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="elements_4"  value="персонажи;" /> персонажи;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="elements_5"  value="иллюстрации;" /> иллюстрации;
                </div>

                Другой:<br />
                <textarea name="elements"></textarea>

            </td>
        </tr>



        <tr>
            <td class="left">
                Предпочитаемая цветовая гамма?
                <p class="comment">
                    Умеренная, спокойная или же броская, яркая
                </p>
            </td>
            <td>

                <textarea name="colors"></textarea>

            </td>
        </tr>

        <tr>
            <td class="left">
                Готовность к оригинальным и неожиданным решениям
                <p class="comment">В дизайне, стилистике сайта и общей концепции</p>

            </td>
            <td>

                <textarea name="originals"></textarea>

            </td>
        </tr>

        <tr>
            <td class="left">
                Образцы сайтов, которые могли бы служить примером

            </td>
            <td>


                <div id="sites">
                                            <div class="checkbox">
                            Адрес сайта: <br />
                            <input class="input-text" type="text" value="" name="site_1" />
                                                        <br />
                            Почему этот ресурс вам нравится?<br />
                            <textarea name="reason_1"></textarea></div>

                    <script type="text/javascript">
                        $(function(){
                            var i_sites = 1;
                            $('#add_site').click(function(){
                                i_sites++;
                                $('#sites').append('<div class="checkbox">Адрес сайта: <br /><input class="input-text" type="text" value="" name="site_' + i_sites + '" /> <span class="link"><a href="javascript:void(0);" class="delete">[-]</a></span><br />Почему этот ресурс вам нравится?<br /><textarea name="reason_' + i_sites + '"></textarea></div>');
                            });
                        });
                    </script>
                </div>
            </td>
        </tr>

        <tr>
            <td class="left">
                Базовые программные модули

            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="modules_1"  value="Новости с архивом;" /> Новости с архивом;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_2"  value="RSS (подписка на новости);" /> RSS (подписка на новости);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_3"  value="Гостевая книга;" /> Гостевая книга;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_4"  value="FAQ (вопрос - ответ);" /> FAQ (вопрос - ответ);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_5"  value="Конференция (форум);" /> Конференция (форум);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_6"  value="Фотогалерея ;" /> Фотогалерея ;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_7"  value="Видеогаларея;" /> Видеогалерея;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_8"  value="Каталог с сервисами подбора ;" /> Каталог с сервисами подбора ;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_9"  value="Интеграция с бухгалтерией (1С);" /> Интеграция с бухгалтерией (1С);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_10"  value="Интеграция с электронными платежными системами;" /> Интеграция с электронными платежными системами;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_11"  value="Почтовая (e-mail) рассылка;" /> Почтовая (e-mail) рассылка;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_12"  value="Опрос / Анкета;" /> Опрос / Анкета;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_13"  value="On-line заказ / Обратная связь;" /> On-line заказ / Обратная связь;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_14"  value="Тарификатор (калькулятор);" /> Тарификатор (калькулятор);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_15"  value="Курс валют;" /> Курс валют;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_16"  value="Система управления пользователями;" /> Система управления пользователями;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_17"  value="Регистрация на сайте и авторизация (доступ к закрытым разделам);" /> Регистрация на сайте и авторизация (доступ к закрытым разделам);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_18"  value="Система размещения баннеров на сайте;" /> Система размещения баннеров на сайте;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_19"  value="Доска объявлений;" /> Доска объявлений;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_20"  value="Закрытый раздел (единый набор контента, доступный для авторизованного пользователя);" /> Закрытый раздел (единый набор контента, доступный для авторизованного пользователя);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="modules_21"  value="Личный кабинет (кастомизированный контент для конкретного пользователя, просьба уточнить, какой);" /> Личный кабинет (кастомизированный контент для конкретного пользователя, просьба уточнить, какой);
                </div>
                Другие:
                <textarea name="modules"></textarea>


            </td>
        </tr>


        <tr>
            <td class="left">
                Какие действия по поддержке и продвижению сайта планируются после разработки

            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="seo_1"  value="Абонентское обслуживание;" /> Абонентское обслуживание;
                    <ul>
                        <li>обновление информации на сайте</li>
                        <li>продвижение сайта в поисковых системах (SEO)</li>
                        <li>мониторинг эффективности работы сайта </li>
                        <li>устранение технических неполадок</li>
                    </ul>
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="seo_2"  value="Реклама (контекстная, баннерная, вирусная);" /> Реклама (контекстная, баннерная, вирусная);
                </div>

            </td>
        </tr>

        <tr>
            <td class="left">
                Какие дополнительные Интернет-решения Вы планируете использовать для Вашего бизнеса

            </td>
            <td>

                <div class="checkbox">
                    <input type="checkbox" name="add_1"  value="Мультимедиа-презентации (на cd-носителях);" /> Мультимедиа-презентации (на cd-носителях);
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="add_2"  value="Внутрикорпоративные Интранет-системы;" /> Внутрикорпоративные Интранет-системы;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="add_3"  value="Создание сообщества лояльных пользователей;" /> Создание сообщества лояльных пользователей;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="add_4"  value="Тикетная система;" /> Тикетная система;
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="add_5"  value="Разработка дополнительных Интернет-сайтов (сайтов продуктов/услуг, промо-сайтов и пр.) ;" /> Разработка дополнительных Интернет-сайтов (сайтов продуктов/услуг, промо-сайтов и пр.) ;
                </div>
                Другие:
                <textarea name="add"></textarea>


            </td>
        </tr>



        <tr>
            <td class="left">
            </td>
            <td>
                <input class="button-1" type="submit" id="" value="Отправить заявку" /></td>

        </tr>
    </table>
</form>

</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	