<?php
/**
 * Query Logger
 *
 * @file    StdErrorLogger.php
 * @desc    StdError logger is an implementation of the QueryLogger redirecting to StdError output
 * @author  Zewa, Gabor de Mooij and the RedBeanPHP Community
 * @license BSD/GPLv2
 *
 * (c) copyright G.J.G.T. (Gabor) de Mooij and the RedBeanPHP Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class RedBean_Plugin_StdErrorLogger extends RedBean_Plugin_QueryLogger {

  /**
   * Constructor.
   */
  public function __construct() {

  }

  /**
   * Implementation of the onEvent() method for Observer interface.
   * If a query gets executed this method gets invoked because the
   * adapter will send a signal to the attached logger.
   *
   * @param  string $eventName          ID of the event (name)
   * @param  RedBean_DBAdapter $adapter adapter that sends the signal
   *
   * @return void
   */
  public function onEvent($eventName, $adapter) {
    if ($eventName == 'sql_exec') {
      error_log($adapter->getSQL());
    }
  }
}
