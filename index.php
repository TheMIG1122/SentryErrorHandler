<?php
require_once(__DIR__ . '/vendor/autoload.php');
Sentry\init(['dsn' => 'https://da8504ce798d49b1859f683081909158@o996156.ingest.sentry.io/5954937' ]);
// ini_set("display_errors",0);
// ini_set("log_errors",1);

throw new Exception("My first Sentry error!");