<?php
$locale['setup_0000'] = "Установка PHP-Fusion Core 9 Edition";
$locale['setup_0002'] = "Добро пожаловать в установку PHP-Fusion";
$locale['setup_0003'] = "Установщик проведёт Вас через все шаги, необходимые для установки PHP-Fusion на Ваш сервер. Если Вам нужна дополнительная помощь, пожалуйста, проверьте нашу <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=216'>онлайн-документацию по установке</a>.";
$locale['setup_0005'] = " Я прочитал и соглашаюсь с <a href='https://php-fusion.co.uk/license/'>Правилами и условиями использования</a> PHP-Fusion.";
$locale['setup_0006'] = "PHP-Fusion 9 требует как минимум PHP 5.5.9. Посмотрите <a href=\"https://www.php-fusion.co.uk/requirements\">системные требования</a> для подробной информации.";
$locale['setup_0007'] = "Системы с установленным OPcache должны иметь включенный модуль <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a>.";
$locale['setup_5000'] = "Для установки и использования PHP-Fusion Вы дожлжны ознакомиться с правилами и принять их.</a>.";
$locale['setup_0010'] = "Текущая версия сборки - ";
$locale['setup_0011'] = "ru";
$locale['setup_0012']  = "utf-8";
$locale['setup_0020'] = "Обновление PHP-Fusion";
$locale['setup_0022'] = "Добро пожаловать в службу обновления PHP-Fusion";
$locale['setup_0023'] = "Служба обновления проведёт Вас через все шаги, необходимые для обновления PHP-Fusion на Вашем сервере. Пожалуйста, следуйте этим шагам и проверяйте всю требуемую информацию.";
$locale['setup_0050'] = "Web-сервер";
$locale['setup_0051'] = "Версия PHP";
$locale['setup_0052'] = "Расширение PHP";
$locale['setup_0053'] = "Поддержка OPCache";
$locale['setup_0054'] = "Поддержка PDO для БД";
$locale['setup_0055'] = "Лимит памяти PHP";
$locale['setup_0056'] = "Проверка требований для файлов";

$locale['setup_0101'] = "Вступление";
$locale['setup_0102'] = "Проверка файлов и папок";
$locale['setup_0103'] = "Параметры базы данных";
$locale['setup_0104'] = "Конфигурация и установка БД";
$locale['setup_0104a'] = "Установка PHP-Fusion";
$locale['setup_0105'] = "Конфигурация ядра сайта";
$locale['setup_0106'] = "Главный админ сайта";
$locale['setup_0107'] = "Финальные настройки";

$locale['setup_0109'] = "Минимальная версия сервера Apache, требуемая для запуска PHP-Fusion без включенного mod_rewrite &ndash; 2.2.16.";
$locale['setup_0110'] = "Из-за настроек для токена сервера в файле httpd.conf невозможно определить версию Apache без mod_rewrite, минимально необходимая версия &ndash; 2.2.16.";
$locale['setup_0111'] = "Минимальная версия сервера Apache, требуемая для запуска PHP-Fusion без включенного mod_rewrite &ndash; 2.2.16.";
$locale['setup_0112'] = "Функция phpinfo() была отключена по соображениям безопасности. Для просмотра информации phpinfo() измените Ваши настройки PHP или свяжитесь с администратором сервера.";
$locale['setup_0113'] = "Ваша установленная копия PHP слишком старая. PHP-Fusion требует как минимум версии 5.5.21. Версии PHP выше 5.6.5 или 5.5.21 обеспечивают встроенную защиту от SQL-инъекций для баз данных MySQL. Рекомендуем Вам обновить свою версию.";
$locale['setup_0114'] = "PHP-Fusion требует наличия подключенных расширений PHP из следующего списка";
$locale['setup_0115'] = "Включено";
$locale['setup_0115a'] = "Не включено";
$locale['setup_0116'] = "Расширение PHP OPcode caching может значительно улучшить производительность Вашего сайта. <strong>Настоятельно рекомендуем</strong> установить <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> на Ваш сервер.";
$locale['setup_0118'] = "Похоже, Ваш сервер не поддерживает PDO (PHP Data Objects). Спросите Вашего хостера о поддержке нативного расширения PDO.";
$locale['setup_0119a'] = "Попробуйте увеличить Ваш лимит памяти для PHP до %memory_minimum_limit для предотвращения ошибок в процессе установки.";
$locale['setup_0119b'] = "Увеличьте ваш лимит памяти путём изменения параметра memory_limit в файле ".get_cfg_var('cfg_file_path')." и затем перезапустите Ваш сервер (либо свяжитесь с системым администратором или хостером для помощи).";
$locale['setup_0119c'] = "Свяжитесь с Вашим системным администратором или хостером для помощи с увеличением лимита памяти для PHP.";

$locale['setup_stepx'] = "Шаг %2\$s";

// Buttons
$locale['setup_0120'] = "Завершение настройки";
$locale['setup_0121'] = "Дальше";
$locale['setup_0122'] = "Попробовать снова";
$locale['setup_0124'] = "Перейти к опциям восстановления";
$locale['setup_0125'] = "Выполняется удаление. Пожалуйста, подождите...";

$locale['setup_0130'] = "Настройки Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level установлен в";
$locale['setup_0132'] = "Установите {%code%} в Вашей конфигурации PHP, так как некоторые страницы Вашего сайта PHP-Fusion не будут работать при слишком низком значении.";
$locale['setup_0134'] = "Все необходимые файлы прошли проверку разрешений на запись.";
$locale['setup_0135'] = "Для продолжения установки следующие файлы и папки должны быть доступны на запись. Пожалуйста, измените права доступа на 755 или 777 для продолжения";
$locale['setup_0136'] = "Не доступно (ошибка)";
$locale['setup_0137'] = "Доступно (пройдено)";
$locale['setup_0138'] = "Соединение с БД установлено";
$locale['setup_0139'] = "Выбор столбца БД сделан";
$locale['setup_0140'] = "БД доступна и готова для установки";
$locale['setup_0141'] = "Разрешения для БД иправа доступа проверены";
$locale['setup_0142'] = "Файл config.php создан";
$locale['setup_0143'] = "Указанный префикс таблиц в настоящее время используется и активен. Установщик продолжит работу с обновлением БД";
$locale['setup_0144'] = "Диагностика БД выполнена";

// Step 1
$locale['setup_1000'] = "Пожалуйста, выберите Ваш язык:";
$locale['setup_1001'] = "Больше переводов можно загрузить с <a href='https://www.php-fusion.co.uk/downloads.php#langpacks'><strong>официального сайта поддержки PHP-Fusion</strong></a>";
$locale['setup_1002'] = 'Добро пожаловать в режим восстановления PHP-Fusion 9.0.';
$locale['setup_1003'] = 'Мы обнаружили, что здесь уже была выполнена установка. Пожалуйста, выберите один из следующих вариантов действий.';
$locale['setup_1004'] = 'Чистая установка';
$locale['setup_1005'] = 'Вы можете удалить и очистить Вашу базу данных, после чего начать чистую установку с нуля.';
$locale['setup_1006'] = 'ПОЖАЛУЙСТА, СДЕЛАЙТЕ РЕЗЕРВНУЮ КОПИЮ ФАЙЛА &laquo;CONFIG.PHP&raquo;. ОН БУДЕТ УДАЛЁН ВМЕСТЕ С ДАННЫМИ.';
$locale['setup_1007'] = 'Удалить и начать заново';
$locale['setup_1008'] = 'Установщик ядра системы';
$locale['setup_1009'] = 'Изменить конфигурацию ядра системы.';
$locale['setup_1010'] = 'Перейти к установщику системы';
$locale['setup_1011'] = 'Изменить данные первичной учётной записи';
$locale['setup_1012'] = 'Изменить данные главного админа сайта без необходимости восстановления пароля или переноса существующей учётной записи на другого пользователя.';
$locale['setup_1013'] = 'Изменить данные главного админа';
$locale['setup_1014'] = 'Пересоздать файл &laquo;.htaccess&raquo;';
$locale['setup_1015'] = 'Удалить текущий файл и &laquo;.htaccess&raquo; заменить его стандартной версией';
$locale['setup_1016'] = 'Собрать файл';
$locale['setup_1017'] = 'Отмена и выход из установки';
$locale['setup_1018'] = 'Вы можете выйти из установки прямо сейчас, нажав кнопку ниже. Этодействие вызовет переименование вашего файла &laquo;config_temp.php&raquo; обратно в &laquo;config.php&raquo;.';
$locale['setup_1019'] = 'Выйти из установки';
$locale['setup_1020'] = "Файл .htaccess создан/обновлён";

// Step 2
$locale['setup_1090'] = "Файлы";
$locale['setup_1091'] = "Статус";
$locale['setup_1092'] = "Конфигурация и драйвер БД";
$locale['setup_1106'] = "Диагностика файловой структуры и сервера";

// Step 3 - Access criteria
$locale['setup_1200']  = "Настройки базы данных и путей на сервере.";
$locale['setup_1201']  = "Введите параметры доступа к базе данных MySQL.";
$locale['setup_1202']  = "Сервер БД:";
$locale['setup_1203']  = "Пользователь:";
$locale['setup_1204']  = "Пароль:";
$locale['setup_1205']  = "Имя БД:";
$locale['setup_1206']  = "Префикс таблиц:";
$locale['setup_1207']  = "Префикс Cookie:";
$locale['setup_1208']  = "Драйвер БД";

// Step 4 - Database Setup
$locale['setup_1210'] = "Возникли ошибки при установке PHP-Fusion. Пожалуйста, перезапустите скрипт установки.";
$locale['setup_1211'] = "Установка PHP-Fusion завершена. Пожалуйста, перейдите к следующему шагу.";
$locale['setup_1212'] = "Параметры сайта и Суперадминистратора";
$locale['setup_1213'] = "Подробная информация о сайте";
$locale['setup_1214'] = "Название сайта";
$locale['setup_1215'] = "Ваш новый сайт на PHP-Fusion";
$locale['setup_1216'] = "PHP-Fusion &ndash; лёгкая система управления содержимым (CMS) с открытым исходным кодом, написанная на PHP.";
$locale['setup_1217'] = "Ваша учётная запись обновлена. Пожалуйста, с этого момента используйте новые возможности.";
$locale['setup_1220'] = "Имя базы данных, в которую вы хотите установить PHP-Fusion";
$locale['setup_1221'] = "Ваше имя пользователя MYSQL";
$locale['setup_1222'] = "...и Ваш пароль MYSQL";
$locale['setup_1223'] = "Сделайте его достаточно уникальным для обеспечения безопасности Вашей базы данных";
$locale['setup_1224'] = "Префикс идентификатора Cookie в браузере";
$locale['setup_1307'] = "Проверьте доступность для записи файла &laquo;config.php&raquo;.";
$locale['setup_1310'] = "Невозможно подключиться к базе данных MySQL.";
$locale['setup_1311'] = "Указанная база данных MySQL не существует.";
$locale['setup_1313'] = "Указанный префикс таблиц используется и активен. Табицы не будут созданы. Пожалуйста начните заново или перейдите к следующему шагу.";
$locale['setup_1315'] = "Пожалуйста, проверьте, что Ваш пользователь MySQL имеет разрешения на чтение, запись и удаление для выбранной базы данных.";
$locale['setup_1317'] = "Пожалуйста, убедитесь, что вы заполнили все поля параметров подключения к БД.";

// Step 6 - Super Admin login
$locale['setup_1500'] = "Учётная запись главного админа";
$locale['setup_1501'] = "Настройте параметры учётной записи главного админа сайта.";
$locale['setup_1504'] = "Имя пользователя:";
$locale['setup_1505'] = "Пароль:";
$locale['setup_1506'] = "Повторите пароль:";
$locale['setup_1507'] = "Админпароль:";
$locale['setup_1508'] = "Повторите админпароль:";
$locale['setup_1509'] = "Электропочта:";
$locale['setup_1510'] = "Адрес почты сайта:";
$locale['setup_1511'] = "Регион сайта:";
$locale['setup_1512'] = "Языки для установки:";
$locale['setup_1513'] = "Имя владельца сайта";

// Progress Reports
$locale['setup_1600'] = "Установка ";
$locale['setup_1601'] = "Обновлние структуры таблицы ";
$locale['setup_1602'] = "Добавление нового поля ";
$locale['setup_1603'] = "Заполнение данных ";

// Step 6 - User details validation
$locale['setup_5010']  = "Имя пользователя содержит недопустимые символы.";
$locale['setup_5011'] = "Имя пользователя не может быть пустым.";
$locale['setup_5012']  = "Пароль и повтор не совпадают.";
$locale['setup_5013']  = "Некорректный пароль, пожалуйста, используйте только буквы и цифры.<br />Длина пароля должна быть не менее 8 символов.";
$locale['setup_5015']  = "Админпароль и подтверждение не совпадают.";
$locale['setup_5016']  = "Админпароль не должен совпадать с пользовательским.";
$locale['setup_5017']  = "Некорректный админпароль, пожалуйста, используйте только буквы и цифры.<br />Длина пароля должна быть не менее 8 символов";
$locale['setup_5020'] = "Поле электропочты не может быть пустым.";

// Step 6 - Admin Panels
$locale['setup_3000']  = "Администраторы";
$locale['setup_3002']  = "Статьи";
$locale['setup_3003']  = "Баннеры";
$locale['setup_3004']  = "Коды BB";
$locale['setup_3005']  = "Чёрный список";
$locale['setup_3006']  = "Комментарии";
$locale['setup_3007']  = "Страницы";
$locale['setup_3008']  = "Резервная копия БД";
$locale['setup_3010']  = "Загрузки";
$locale['setup_3011']  = "ЧаВо";
$locale['setup_3012']  = "Форумы";
$locale['setup_3013']  = "Изображения";
$locale['setup_3014']  = "Плагины";
$locale['setup_3015']  = "Панели плагинов";
$locale['setup_3016']  = "Участники";
$locale['setup_3018']  = "Новости";
$locale['setup_3019']  = "Панели";
$locale['setup_3020']  = "Фотоальбомы";
$locale['setup_3021']  = "Информация PHP";
$locale['setup_3022']  = "Опросы";
$locale['setup_3023']  = "Навигация сайта";
$locale['setup_3024']  = "Смайлики";
$locale['setup_3026']  = "Обновление";
$locale['setup_3027']  = "Группы пользователей";
$locale['setup_3029']  = "Ссылки";
$locale['setup_3030']  = "Основные параметры";
$locale['setup_3031']  = "Время и дата";
$locale['setup_3033']  = "Регистрация";
$locale['setup_3035']  = "Прочие параметры";
$locale['setup_3036']  = "Личные сообщения";
$locale['setup_3037']  = "Поля профиля";
$locale['setup_3038']  = "Ранги форума";
$locale['setup_3041']  = "Управление пользователями";
$locale['setup_3044']  = "Безопасность";
$locale['setup_3047']  = "Сброс админпароля";
$locale['setup_3048']  = "Журнал ошибок";
$locale['setup_3049'] = "Журнал пользователей";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Параметры языка";
$locale['setup_3052'] = "Постоянные ссылки";
$locale['setup_3055'] = "Блог";
$locale['setup_3056'] = "Темы";
$locale['setup_3057'] = "Инструмент миграции";
$locale['setup_3058'] = "Настройки темы";

//Multilanguage table rights
$locale['setup_3200'] = "Статьи";
$locale['setup_3201'] = "Страницы";
$locale['setup_3202'] = "Загрузки";
$locale['setup_3203'] = "ЧаВо";
$locale['setup_3204'] = "Форум";
$locale['setup_3205'] = "Новости";
$locale['setup_3206'] = "Галерея";
$locale['setup_3207'] = "Опросы";
$locale['setup_3208'] = "Шаблоны почтовых сообщений";
$locale['setup_3209'] = "Ссылки";
$locale['setup_3210'] = "Навигация";
$locale['setup_3211'] = "Панели";
$locale['setup_3212'] = "Ранги форума";
$locale['setup_3213'] = "Блог";

// Step 6 - Navigation Links
$locale['setup_3300'] = "Главная";
$locale['setup_3302'] = "Загрузки";
$locale['setup_3303'] = "ЧаВо";
$locale['setup_3304'] = "Форум";
$locale['setup_3305'] = "Контакты";
$locale['setup_3307'] = "Ссылки";
$locale['setup_3308'] = "Галерея";
$locale['setup_3309'] = "Поиск";
$locale['setup_3310'] = "Добавить ссылку";
$locale['setup_3311'] = "Добавить новость";
$locale['setup_3312'] = "Добавить статью";
$locale['setup_3313'] = "Добавить фото";
$locale['setup_3314'] = "Добавить загрузку";
$locale['setup_3315'] = "Присланное";
$locale['setup_3316'] = "Мини-чат";
$locale['setup_3317'] = "Добавить запись в блог";
$locale['setup_3318'] = "Панель архива блога";
$locale['setup_3319'] = "Последние обсуждения";
$locale['setup_3320'] = "Обсуждения с моим участием";
$locale['setup_3321'] = "Отслеживаемые темы";
$locale['setup_3322'] = "Темы без ответов";
$locale['setup_3323'] = "Нерешённые вопросы";
$locale['setup_3324'] = "Начать тему";
$locale['setup_3325'] = "Последние статьи";
$locale['setup_3326'] = "Последние файлы";
$locale['setup_3327'] = "Добавить ЧаВо";

// Stage 6 - Panels
$locale['setup_3400'] = "Навигация";
$locale['setup_3401'] = "Пользователи на сайте";
$locale['setup_3402'] = "Темы форума";
$locale['setup_3404'] = "Приветствие";
$locale['setup_3405'] = "Список тем форума";
$locale['setup_3406'] = "Информация пользователя";
$locale['setup_3407'] = "Опрос";
$locale['setup_3408'] = "RSS";

// Stage 6 - News Categories
$locale['setup_3500'] = "Ошибки";
$locale['setup_3501'] = "Загрузки";
$locale['setup_3502'] = "Игры";
$locale['setup_3503'] = "Графика";
$locale['setup_3504'] = "Железо";
$locale['setup_3505'] = "Журнал";
$locale['setup_3506'] = "Участники";
$locale['setup_3507'] = "Моды";
$locale['setup_3508'] = "Фильмы";
$locale['setup_3509'] = "Сеть";
$locale['setup_3510'] = "Новости";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Безопасность";
$locale['setup_3513'] = "Программы";
$locale['setup_3514'] = "Темы";
$locale['setup_3515'] = "Windows";

// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Суперадмин";
$locale['setup_3601'] = "Администратор";
$locale['setup_3602'] = "Модератор";
$locale['setup_3603'] = "Новичок";
$locale['setup_3604'] = "Младший участник";
$locale['setup_3605'] = "Участник";
$locale['setup_3606'] = "Опытный участник";
$locale['setup_3607'] = "Ветеран";
$locale['setup_3608'] = "Fusioneer";

// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Smile";
$locale['setup_3621'] = "Wink";
$locale['setup_3622'] = "Sad";
$locale['setup_3623'] = "Frown";
$locale['setup_3624'] = "Shock";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Cool";
$locale['setup_3627'] = "Grin";
$locale['setup_3628'] = "Angry";
$locale['setup_3629'] = "Like";

// Stage 6 - User Field Categories
$locale['setup_3640'] = "Профиль";
$locale['setup_3641'] = "Контакная информация";
$locale['setup_3642'] = "Прочая информация";
$locale['setup_3643'] = "Параметры";
$locale['setup_3644'] = "Статистика";
$locale['setup_3645'] = "Приватность";

// Stage 6 - Forum Tags
$locale['setup_3660'] = "Информация о сайте";
$locale['setup_3661'] = "Обсуждения, касающиеся управления этим сайтом";

// Stage 6 - User Fields
require_once(dirname(__FILE__)."/user_fields/user_aim.php");
require_once(dirname(__FILE__)."/user_fields/user_birthdate.php");
require_once(dirname(__FILE__)."/user_fields/user_icq.php");
require_once(dirname(__FILE__)."/user_fields/user_location.php");
require_once(dirname(__FILE__)."/user_fields/user_sig.php");
require_once(dirname(__FILE__)."/user_fields/user_skype.php");
require_once(dirname(__FILE__)."/user_fields/user_theme.php");
require_once(dirname(__FILE__)."/user_fields/user_web.php");
require_once(dirname(__FILE__)."/user_fields/user_yahoo.php");
require_once(dirname(__FILE__)."/user_fields/user_timezone.php");
require_once(dirname(__FILE__)."/user_fields/user_blacklist.php");

// Welcome message
$locale['setup_3650'] = "Добро пожаловать на сайт";

// Final message
$locale['setup_1700'] = "Установка завершена";
$locale['setup_1701'] = "Ваш сайт на PHP-Fusion 9 готов к использованию. Нажмите &laquo;Завершить&raquo; для перезаписи временного файла &laquo;config_temp.php&raquo; в &laquo;config.php&raquo;<br/>";
$locale['setup_1702'] = "<strong>Внимание: После входа на сайт удалите с сервера папку &laquo;/install&raquo; и установите права 644 на файл &laquo;config.php&raquo; в целях безопасности.</strong>";
$locale['setup_1703'] = "Благодарим за использование PHP-Fusion.";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701']  = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d.%m.%Y %H:%M";
$locale['setup_3703']  = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";

// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Шаблоны почтовых сообщений";
$locale['setup_3801'] = "Уведомление о новом личном сообщении";
$locale['setup_3802'] = "Вы получили новое личное сообщение от пользователя [USER] на сайте [SITENAME]";
$locale['setup_3803'] = "Приветствую, [RECEIVER],\r\nВы получили новое личное сообщение с темой [SUBJECT] от пользователя [USER] на сайте [SITENAME]. Вы можете прочитать его по ссылке [SITEURL]messages.php\r\n\r\nСообщение: [MESSAGE]\r\n\r\nВы также можете отключить уведомления на почту через панель опций личных собощений, если не хотите получать такие уведомления в дальнейшем.\r\n\r\nС наилучшими пожеланиями,\r\n[SENDER].";
$locale['setup_3804'] = "Уведомление о сообщениях на форуме";
$locale['setup_3805'] = "Уведомление об ответе в теме - [SUBJECT]";
$locale['setup_3806'] = "Приветствую, [RECEIVER],\r\n\r\nВ теме форума \'[SUBJECT]\', которую вы отслеживаете на сайте [SITENAME], появился новый ответ. Для того, чтобы ответить, пройдите по ссылке:\r\n\r\n[THREAD_URL]\r\n\r\nЕсли Вы больше не хотите отслеживать эту тему, пройдите по ссылке \'Прекратить следить за темой\', которая размещена вверху темы. С наилучшими пожеланиями,\r\n[SENDER].";
$locale['setup_3807'] = "Обратная связь";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";

// Official Supported System List
$locale['articles']['title'] = "Статьи";
$locale['articles']['description'] = "Стандартная система документации.";
$locale['blog']['title'] = "Блог";
$locale['blog']['description'] = "Стандартные онлайн-дневники.";
$locale['downloads']['title'] = "Загрузки";
$locale['downloads']['description'] = "Стандартный файловый архив.";
$locale['faqs']['title'] = "ЧаВо";
$locale['faqs']['description'] = "База знаний в виде вопросов и ответов.";
$locale['forums']['title'] = "Форум";
$locale['forums']['description'] = "Дискуссионная площадка на сайте.";
$locale['news']['title'] = "Новости";
$locale['news']['description'] = "Модуль публикации новостей.";
$locale['photos']['title'] = "Фотографии";
$locale['photos']['description'] = "Модуль фотогалереи.";
$locale['polls']['title'] = "Опросы";
$locale['polls']['description'] = "Опросы и голосование пользователей.";
$locale['weblinks']['title'] = "Ссылки";
$locale['weblinks']['description'] = "Каталог ссылок на сайты.";
$locale['install'] = "Установить ядро";
