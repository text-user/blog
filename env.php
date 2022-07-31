<?php
// manpで作成したdb情報
// define('DB_NAME', 'blog_app');
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', 'root');
// ここまで


// heroku用の情報
// $url = parse_url(getenv("
// mysql://b7d1a928bfb1bb:e940d97c@us-cdbr-east-06.cleardb.net/heroku_028664bd7b01fd4?reconnect=true
// "));git push heroku master

define('DB_NAME', 'blog_app');
define('DB_HOST', 'us-cdbr-east-06.cleardb.net');
define('DB_USER', 'b7d1a928bfb1bb@%');
define('DB_PASS', 'b7d1a928bfb1bb');
// ここまで


?>