<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lantanacom');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ck(iWU)@92!F1@3i!+]J2~tqGXk^0*A&se|KXd^9gKHn!eg8=-}a8T Ems0o0as/');
define('SECURE_AUTH_KEY',  'XxCw#HZ|G=lY$C+6)cNcUIEI/D+?/.<2RwfTeC%myy*+e>Hb#AIr-;t0Y!UVTxgq');
define('LOGGED_IN_KEY',    '3+:E)5G@@ x9P%bk]&dSRQjg>n|[5|-~m<li{;y^W.Sx^UJ^x1pFrJ|<aVKRb<T~');
define('NONCE_KEY',        '9.M?eXk=%xH_h!AMD+v:|K=zjR{Z !0MMCn[j?|eS)FA$xGXhoy4q:z;$p:Z`hD}');
define('AUTH_SALT',        ']q+lG :?Ws|6DyJ|l%Bc&GxYMeDktRJ+i%J!4WRBL;^Vsw<`X4;x3_Fv+nl9Y-K/');
define('SECURE_AUTH_SALT', 'S-L B#J+ ^`+ytu+GheZ-@Zz_j!wEf}oe-^|)l+Se`-A+pvqQuHRPndQAJl%>1q<');
define('LOGGED_IN_SALT',   '9t)~.@{mG@^Ok`ncXt0^nIXd|s_&RQ]cltn/6Q?&JKs6)7p,lV2rbrAu$mvss,8P');
define('NONCE_SALT',       'Z(%m3Ar8qnCA1+!Z}o,oor!Sy~ 3(#ND|d[dK!Xw]AJq+Lf!u;C$L{)&aK|s`|)!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
?>