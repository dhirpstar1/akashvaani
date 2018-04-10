<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('MERCHANT_ID', '114454'); // highest automatically-assigned error code
define('WORKING_KEY', 'C6AD546ED5241858332B936BF9CE03F4'); // highest automatically-assigned error code
define('ACCESS_CODE', 'AVGA67DK73AQ34AGQA'); // highest automatically-assigned error code

define('USER_ID', '600204'); // highest automatically-assigned error code
define('API_KEY', '73907d396fbca5772661fce70059708e'); // highest automatically-assigned error code
define('TAX', '0.00');
define('SITE_PHONE', '9599564835');
//define('SITE_EMAIL', 'dhirpstar@gmail.com');
define('SITE_EMAIL', 'pec.anshul05@gmail.com'); 
define('RETRIED', "Incase you don't get results . Click 'Get Prediction' Button again. Sorry for inconvenience.");
//define('GOOGOLE_PLACE_API', 'AIzaSyAewGLZ8R1G4-eX3YE47zBz3Luo8VleYTo');
define('GOOGOLE_PLACE_API', 'AIzaSyD3EA2kgQMZTt1PjzGcNQdfgSr0nG8-CP0');
define('LANGUAGES', serialize(array('en' => 'ENGLISH', 'hi' => 'HINDI')));
define('CONTACT_NUMBER', '959 956 4835'); 

define('API_USERNAME', 'dhirpstar-facilitator_api1.gmail.com');
define('API_PASSWORD', 'P4ZZVGE8SSP496SJ');
define('API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31Af6k-qBQnnz3naZJniSguaWsvL1Z');

/*
define('API_USERNAME', 'pec.anshul05_api1.gmail.com');
define('API_PASSWORD', 'WG72WRYNUK46NYZ3');
define('API_SIGNATURE', 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAQIdKrVKXPBpQVHA1Olvy5hdmpWe');
*/