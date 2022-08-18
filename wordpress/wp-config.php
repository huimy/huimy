<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */
/*
本文件迁站需改项目
 1.wordpress数据库设置
 2.wordpress站点域名设置
*/




// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'suguohui2004' );

/** MySQL主机 */
define( 'DB_HOST', '192.168.2.101' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f_+u3aU~Pke]oU,&?:G:zEtN&7$:xu{s)(U^qC,Zxm3lXu1rfX+[]&NYI]Bs~H8Q' );
define( 'SECURE_AUTH_KEY',  '&:)=L{77zM3]V U}Bl?A&3!oES{P3<x9cGR:{.fX)9tx/l)V~7eaEy])>,%x;N2Z' );
define( 'LOGGED_IN_KEY',    'hY6mPO&jHh~2]svFMdB4*F<a`^f)-``8Wx6(fZX+Q89wZ44Dca/_TfJ4,Q/iV&)`' );
define( 'NONCE_KEY',        'Pu~7j#%mSRBd` G*#F?LYms97ZQsagq~Y~wu*dd4-zx:bV9(mf1;g|jqkf|>@$3!' );
define( 'AUTH_SALT',        '?-NiA!2]6NJhR@I0xY8}oKuBN!;1g u,K+YsE/(#=%d-h j3y{p{KJKf7y<7yk3Y' );
define( 'SECURE_AUTH_SALT', '`J>5$.o1.yCdwd()N`XSQNmVoz$X3/fwKJt[hKVH {Fq,oJz`gi@CY;ejPb{m@Tz' );
define( 'LOGGED_IN_SALT',   '6&{E=>= 0qEhppKC#nc)?@R-UQO(^%>r9X6hj`Y,(Nt2G]4R)?9hgH^`B~ngFV&W' );
define( 'NONCE_SALT',       'HoQA/|%{:Hni/$gNCI!j/VvkGUxxQ9a9X7?|l[yXmj=N,iep`B2Z4~^^V*q|VHc2' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
define('WP_CACHE', true);
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
 $domain = array("192.168.2.102:805", "192.168.2.102:805");
 if(in_array($_SERVER['HTTP_HOST'], $domain)){
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']); 
    define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
}
define( 'WP_CONTENT_URL', '/wp-content');














/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
