<?php

define('DEBUG', true);
define('ENV', ENV_DEV);

$GLOBALS['redisInfo']['name_serv'] = array(
  'host' => '61.160.36.225',
  'port' => 6405,
  'pwd' => 'ojia123',
  'db' => 1,
  'connect_timeout' => 0,
);

$GLOBALS['dbInfo']['dw_ups'] = array (
    'dbHost' => '14.17.108.245',
    'dbPort' => 8011,
    'dbName' => 'dw_ups',
    'dbPass' => 'ouj.test',
    'dbType' => 'clickhouse',
    'dbUser' => 'test',
    'enable' => 'true',
);


defined('CJMS_HOST_DW') || define('CJMS_HOST_DW', 'test.admin.duowan.com');
defined('CJMS_IP') || define('CJMS_IP', '61.160.36.225');

define("TYPE_MODULE_CALL", "test_phpbase2_modulecall");
define("TYPE_SELF_CALL", "test_phpbase2_selfcall");
define("TYPE_CUSTOM_LOG", "test_phpbase2_customlog");

define("CALL_LOG_KEY", "logstash:dw#1");

//end of script
