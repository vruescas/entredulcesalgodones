<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 It is recommended that you leave this file alone.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'BjKXybsZmxnvfSBKOcAkIHczrDXWqtXGTEaFpDgcHrQfWTCCwnhShOtXZrGTGaav');
define('SECURE_AUTH_KEY',  'nREDHglZHQHZnWZrLEGAPfDJgiAOmPVfAgFjWwoBpWmiUZrtDDzwcuHzkUbYoHNY');
define('LOGGED_IN_KEY',    'eqGbhdbwKumoeaJlbdLOLXRNrIzzvobSsvwboxssJaaZYVNrdKwKIzYYREoymfrH');
define('NONCE_KEY',        'oMjpIPEwbgPXQqkLOEBmMqaNABcrTZFRbUVwGcNbQViKoPDfiuNneLoiSBgxGTiu');
define('AUTH_SALT',        'eYlxNDzCWZJnPmtHznfRqqKLLPjwykESIqIImUrVPVHqjQLPSeSCGjlaXJyHghQB');
define('SECURE_AUTH_SALT', 'bcCqzOjEUhCPANonGSYLBsfywhqORDgyNqzEbalxhSFoBKxxEUEUBzvLkhoRQHKW');
define('LOGGED_IN_SALT',   'FsmzetZhjClRZeDhVYuppSdMyhuDpaBHoDXpWlhHtKMlGGxAiYkKIFEUZUtZYLvd');
define('NONCE_SALT',       'nYhNjdPcntFzmjaqjNZPrzXNLvngEjjxNltqvALdsXQzQQPfyjxVXKjurumwRowg');

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

// Include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER') && getenv('IS_DDEV_PROJECT') == 'true') {
  require_once($ddev_settings);
}

/** Include wp-settings.php */
if (file_exists(ABSPATH . '/wp-settings.php')) {
  require_once ABSPATH . '/wp-settings.php';
}
