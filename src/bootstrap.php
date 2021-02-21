<?php declare(strict_types=1);

/** 
 * The file responsible for the basic load.
 * 
 * The basics load script.
 * By default, this is where the lumen starts and everything debug-related.
 * 
 * @author Pihe Edmond <pihedy@gmail.com>
 */

/** 
 * https://www.php.net/manual/en/function.set-time-limit.php
 */
set_time_limit(3600);

/** 
 * @var string App Base Directory.
 */
define('APP_BASE_DIR', APP_SRC_DIR . DIRECTORY_SEPARATOR . 'app');

/** 
 * @var string App Vendor Directory.
 */
define('APP_VENDOR_DIR', APP_BASE_DIR . DIRECTORY_SEPARATOR . 'Vendor');


