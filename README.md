<p align="center">
    <h1 align="center">Smart Bus System</h1>
    <br>
</p>

Yii 2 Basic [Yii 2](http://www.yiiframework.com/) implementation of smart bus system.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic smart-bus
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:
create database smart with tables that I will send you via just 
test me through [My email](mailto:pascaldeus@yahoo.com)

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=smart',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
