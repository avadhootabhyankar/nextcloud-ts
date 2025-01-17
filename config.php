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
  'upgrade.disable-web' => true,
  'instanceid' => 'ocrh9f4d515k',
  'passwordsalt' => '1tm9J+K+vzvFhnOCbP743nEjRL48cy',
  'secret' => 'woq89VtDl3yDn3Pf23JJhI70I2RaPWMUkY6SaTTx+8M9PYLS',
  'trusted_domains' => 
  array (
	  0 => 'nextcloud.taileXXXX.ts.net', # By default your Tailscale Machine FCDN will be here
	  1 => 'localhost', # Add this line
	  2 => '127.0.0.1' # Add this line
  ),
  'trusted_proxies' => ['127.0.0.1', '::1', '100.123.163.3'], # Add this line
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '30.0.4.1',
  'overwrite.cli.url' => 'https://nextcloud.taileXXXX.ts.net', # Replace http with https
  'overwriteprotocol' => 'https', # Add this line
  'dbname' => 'db',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'zK7ryCH7YDgBwKB0', # Replace with the mysql password you set in db.env file
  'installed' => true,
  'forwarded_for_headers' => ['HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP'], # Add this line
  'mimetypes' => [
    'mjs' => 'application/javascript',
    'js.map' => 'application/json',
  ], # Add this Array
  'maintenance_window_start' => '15', # Add this line
);