<?php
//The lines I added or changed in /var/www/html/wp-config.php.

// Task 3.1
define('DB_NAME', 'wordpress_db');
define('DB_USER', 'wp_user');
define('DB_PASSWORD', 'xxx');
define('DB_HOST', 'localhost');

// Task 3.2
// define( 'DB_USER', 'admin' );
// define( 'DB_PASSWORD', 'xxx' );
// define( 'DB_HOST', 'swe40006-db.c1uugug40rwp.ap-southeast-2.rds.amazonaws.com' );

// Task 3.3
define('WP_HOME', 'http://swe40006-alb-871584496.ap-southeast-2.elb.amazonaws.com');


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}
