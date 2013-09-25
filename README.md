RedBean STDError Querylogger
=======================

This is a plugin for the [RedBeanPHP ORM](http://www.redbeanphp.com/), which utilizes the
provided RedBean_Plugin_QueryLogger Mockup to capture SQL Log events and redirect them
to the STDError output.



Usage
-----

- Download the latest version of [RedBean from Github](https://github.com/gabordemooij/redbean) or
  install via Composer.
- Add the file StdErrorLogger.php to the RedBean/Plugin folder
- Either manually require the file or see the [RedBean instructions](http://www.redbeanphp.com/replica) for building your on RB.php file
- In your main file where you setup RedBean add following code to bind the Logger to the event-dispatcher

```php
   R::getDatabaseAdapter()->addEventListener('sql_exec',new RedBean_Plugin_StdErrorLogger());
```
