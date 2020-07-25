<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '' );


/** Имя пользователя MySQL */
define( 'DB_USER', '' );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );


/** Имя сервера MySQL */
define( 'DB_HOST', '' );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',jWuCzCUx&@ NeX42a{dr[PGpf+5pd:}Z$UTm:}Rrx!Or-oYsC5&/L7_gpY;h=w3' );

define( 'SECURE_AUTH_KEY',  'b82,i{4MWd#BP;GBcn`s%53CMPs.KmBvrigR@_CqY(`LdV7bEbFQ&uLm$]8sFobj' );

define( 'LOGGED_IN_KEY',    '20|`}t=UX1[/j0Ms.Z`ohAo;x=[kn?!Pmsr}$h<7e=x+GHn`#$,F1VRYqC4&Hrs|' );

define( 'NONCE_KEY',        '4eX{dz^b:?%+pj0iZgsc{V=aoifG,:6wWm{:i^okXyn4>FrGcF={CU:F+H$7  h]' );

define( 'AUTH_SALT',        'wXlo+Pe{/bm%v7Ba KU~;kWQcMM9Wfj$^CVj@$6|Tv4^DOLb`1f*(0}!L;9 zZ-n' );

define( 'SECURE_AUTH_SALT', 'cXU!4mbfw!L){USTu0?E|{{dSNEUJ|-!AdZ[5nrC[1[s;U,e)Nv*wHAFQu?dZ6N[' );

define( 'LOGGED_IN_SALT',   '=Gzg`4|s~c~XUY(Nad8}pDRm*Qoj`c14;,90k?4lb@K`6?_ +47N9hd<7+5#a8vZ' );

define( 'NONCE_SALT',       'Gx.r5r4k2@9}Rv=V:2z&*5_qkl_/UZ90-}He,UbLA?e|xf|5<AIX?[:`gAM4P!T}' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
