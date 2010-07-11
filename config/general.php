<?php

define('DEVSITE', true);

// Paths
define('VHOST_DIR', '/var/www');
define('ROOT_DIR', VHOST_DIR . '/fairdinkum');
define('INCLUDE_DIR', ROOT_DIR . '/includes');
define('PEAR_DIR', INCLUDE_DIR . '/PEAR');
define('DATA_DIR', ROOT_DIR . '/data');
define('IMAGES_DIR', DATA_DIR . '/images');
define('TEMP_DIR', DATA_DIR . '/temp');
define('DOC_DIR' , ROOT_DIR . '/docs');
define('TOOLS_DIR' , ROOT_DIR . '/tools');
define('CONFIG_DIR' , ROOT_DIR . '/config');
define('TMP_DIR', ROOT_DIR . '/tmp');
define('LOG_DIR', ROOT_DIR . '/logs');
define('SMARTY_PATH', DATA_DIR . '/smarty_compile');
define('TEMPLATE_DIR', ROOT_DIR . '/templates');	
define('CACHE_DIR', DATA_DIR . '/cache');

// Define the database details
define('DB_HOST', 'localhost');
define('DB_NAME', 'fairdinkum');
define('DB_USER', 'root');
define('DB_PASS', 'mysqlpassword');
define('DATETIMEFORMAT_SQL',	"Y-m-d H:i:s"); // 2006-06-02 12:23:23
define('SQL_DEBUG_LEVEL', 0);

//urls
define("WWW_SERVER", "http://10.0.0.204/fairdinkum");
define("ADMIN_SERVER", "http://10.0.0.204/fairdinkum");
define("DOMAIN", "10.0.0.204"); 

//confirmation
define("CONFIRMATION_BASE_URL", WWW_SERVER . '/confirmed.php?q=');
define("CONFIRMATION_EMAIL", 'confirm@' . DOMAIN);

//Email titles
define("EMAIL_PREFIX", '[election leaflet] ');
define("BUG_EMAIL_PREFIX", '[election leaflet bug]');

//Email addresses
define("CONTACT_EMAIL", 'team@' . DOMAIN);	
define("BUG_FROM_EMAIL", 'bugs@' . DOMAIN);	
define("BUG_TO_EMAIL", 'YOUR@EMAIL.co.uk');	

//Site name
define("SITE_NAME", "FairDinkum");
define("SITE_TAG_LINE", "keeping track of electioneering");     

//session stuff
define('SESSION_COOKIE_LIFETIME', 0);
define('SESSION_COOKIE_PATH', '/');
define('SESSION_COOKIE_DOMAIN', null);

//cache
define('CACHE_TIME', 0);

//image sizes
define('IMAGE_THUMBNAIL_SIZE', 140);
define('IMAGE_SMALL_SIZE', 120);
define('IMAGE_MEDIUM_SIZE', 300);
define('IMAGE_LARGE_SIZE', 1024);

//scraping
define('SCRAPE_METHOD', 'PEAR');

//encryption
define("USER_SALT", "blablabla");

//Searching
define(MAX_DISTANCE_SEARCH, 30); //km

//APIs
define("API_SLEEP", 0.5); //time to wait between api calls

//Maps
define("GOOGLE_MAPS_KEY", 'YOUR KEY');
define("MAP_PROVIDER", "openstreetmap");


//cookies
define("LOGIN_COOKIE_NAME", "electionleafletlogin");
define("LOGIN_COOKIE_EXPIRE_DAYS", 14);

// TheyWorkForYou API
define("THEYWORKFORYOU_API_KEY", 'YOUR KEY');

//AWS API
define("AWS_KEY",'YOUR AWS KEY');
define("AWS_SECRET",'YOUR AWS SECRET');
define("S3_BUCKET",'BUCKET NAME');
define("USE_S3_DIRECTLY",false);

//image upload by email
define("UPLOAD_MAIL_SERVER", 'AN IMAP SERVER LIKE GMAIL'); //imap server
define("UPLOAD_MAIL_USER", 'USERNAME');
define("UPLOAD_MAIL_PASSWORD", 'PASSWORD');

define("STAT_ZERO_DATE", '2010-01-01');

define("PAGE_ITEMS_COUNT",10);
?>
