<?php
Define( 'WP_TEMP_DIR', ABSPATH . 'wp-content/' );
#Define('WP_TEMP_DIR', '/nas/content/live/oldspacinsider/wp-content/uploads');

# Database Configuration
define( 'DB_NAME', 'wp_oldspacinsider' );
define( 'DB_USER', 'oldspacinsider' );
define( 'DB_PASSWORD', 'Ax6PpKzgI5rUjX0JsEps' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );


$table_prefix = 'ecwnyr4L_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '5x8-84/^lS95#_xE{oV21>3:zzfGv4p#-iQdiADZ=g#3.306X!DeBk*VVdeMu++N');
define('SECURE_AUTH_KEY',  '}n~}-V7gK,(K%oSPlsS&9;yk>|AmK+`[.:patH`HzC67(kZ$c|j?snYQ1;.Z{]m|');
define('LOGGED_IN_KEY',    'ew #F-6>pp1G)ZJg(/vAszs=`JR)NP{GiHHtNH*p6|86 Jk~lHh#+Hm8]f5,2jeM');
define('NONCE_KEY',        ',ChB3?BY^pg*|n4RwedtlH.$Pa>GO|=VgnKhA?Tdu<AoR3g_pVL|>ZM!LT~.uOFs');
define('AUTH_SALT',        'v.]LH#Xk/~YfH1@t.u!93FP<S(>q(-q~_9jh>1oIshv?irkG$v<_?l+nv|(L~^.+');
define('SECURE_AUTH_SALT', '$o}}exj$`DbFoNZMpzg;Ws$qH^x*F]qCPXCEc2anD~HJAD]TJEkrd|}-#;VA+E7K');
define('LOGGED_IN_SALT',   'eOcKNOG;T QP&bD37!<&-J[9X+2J]/I0`tLA(d+<,5h>>1#H{wb|AMh|9|@v9K(D');
define('NONCE_SALT',       'WTD@x[npfO&Dl3/&(`V2>]Q-$FoGNjLZPfG#E3a_[_3|3O{N0bN(P-Ep_|x9{N{B');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'oldspacinsider' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '4982870a4008e9836fbecc47704996dac0e2d765' );

define( 'WPE_CLUSTER_ID', '210844' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', TRUE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'oldspacinsider.wpengine.com', 1 => 'oldspacinsider.wpenginepowered.com', 2 => 'old.spacinsider.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '35.227.109.130', 1 => 'pod-210844-utility.pod-210844.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );


# WP Engine ID

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'GRAPHQL_DEBUG', true );

# WP Engine Settings

define('WP_MEMORY_LIMIT', '1024M');
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );


//define( 'WP_MEMORY_LIMIT', '500M' );
set_time_limit(1500);

define( 'WPE_GOVERNOR', false );

define('WP_TEMP_DIR', '/nas/content/live/oldspacinsider/wp-content/uploads');

//define( 'WP_SITEURL', 'https://spacinsider.com/' );
//define( 'WP_HOME',    'https://spacinsider.com/' );

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

define( 'WPE_SFTP_ENDPOINT', '34.138.141.189' );
