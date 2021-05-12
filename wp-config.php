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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '0835' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'e=/08u}_&eO%npo7lgyt+f,e{kX~W@-Y9--R_Xb(ydX6L)p*Q}Gz>)U><Y41<z/<' );
define( 'SECURE_AUTH_KEY',  'V$Iq;8AgVgg!Xg ,o_S$*=7:kCqq>+]4rhH1RPA5Gy, {]yNwqZ`j$z~iibPI|qL' );
define( 'LOGGED_IN_KEY',    'K]7jNu^runUOVJ0.vC]I>ZLim2$VCj,%|r` O}AQ-}Lo<<Lny9Br!O#C{5!|WyD`' );
define( 'NONCE_KEY',        'lD=%iQjZc{PT~@!XtPlJzv?Z=|9-a+/C0MwPpI53Xohi}U!ta<rIF*A?Yha5(-I<' );
define( 'AUTH_SALT',        '=X3tuLbZ18GAlKe*~X,oQCJ#syhZn~xcI(3[(a:En}hOASv+5B}?5 Y!J~%0lGwv' );
define( 'SECURE_AUTH_SALT', 'ai,T`^348Z{1vNt>7XmcHZL&Nqz{&g0czloN.~hx!eJsoNE3m*JoN)zqUTp{Vcp-' );
define( 'LOGGED_IN_SALT',   'gOJal:_q+Y`JPCr;XW/4GJWAb7SB|m` PAj.e#AA)P!q3Q}NZ_fO@7XCZhZs~myW' );
define( 'NONCE_SALT',       'aOB.hP0{4C+f3=fr,m]T01]ofEC73-Y%CP9e?FX{b];f~zND~yW/vb} :rcEzEF4' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
