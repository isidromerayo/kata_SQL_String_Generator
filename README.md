SQL String Generator
====================

Usando el código de Carles Climent
https://github.com/carlescliment/Katas/tree/master/sql_generator

Ejecutar
========

Simplemente

$ phpunit

Sencillo no;)

Autotest
========

You can autotest on save file, but you need ruby and some gems.

$ gem install guard guard-phpunit
$ gem install --version '~> 0.8.8' rb-inotify

Send notify to OS, I test on GNU/Linux Ubuntu 12.04 (gnome shell).

The project page: https://github.com/Maher4Ever/guard-phpunit. Guard::PHPUnit automatically runs your tests.
There is a problem, you need install phpunit in your system but a PR solve this problem https://github.com/Maher4Ever/guard-phpunit/pull/7.

