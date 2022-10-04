<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'passwordsalt' => 'ssFyj1J5KxM+A8CpLunHBotO4560tL',
  'secret' => 'YRTWIozwta11kfO7F3b0M85o1qfl7ItKaiQJeasuYZmv2mtF',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => 'nextcloud',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '23.0.9.1',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'db-nc',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'installed' => true,
  'instanceid' => 'oc2qjlyac5q1',
  'config_is_read_only' => true,
);
