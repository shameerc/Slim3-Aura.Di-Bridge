##Slim3 Aura.Di Bridge

This library lets you to replace Pimple container in [Slim framework 3](http://www.slimframework.com/) with [Aura.Di](https://github.com/auraphp/Aura.Di)

###Installation
```
$ composer require shameerc/slim3-aura-di
```
###Usage
```
$di = new SlimAura\Container($settings, true);
$di->set('App\Controller\HomeController', $di->lazyNew('App\Controller\HomeController'));

$app = new \Slim\App($di);
```
###Example
Check this [Slim3 Skeleton](https://github.com/shameerc/slim-skeleton) project for more example on how to use this package.