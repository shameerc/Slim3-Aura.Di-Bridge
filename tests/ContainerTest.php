<?php

namespace SlimAura\Tests;

use SlimAura\Container;
use Slim\App;

class ContainerTest extends \PHPUnit_Framework_TestCase
{
    protected $config = [
        'foo' => 'bar',
    ];

    public function testGetAppContainer()
    {
        $container = new Container([]);
        $app = new App($container);
        $this->assertInstanceOf('SlimAura\Container', $app->getContainer());
    }

    public function testGet()
    {
        $container = new Container([]);
        $container->set('foo', new \StdClass());
        $this->assertInstanceOf('StdClass', $container->get('foo'));
    }

    public function testDefaultSettings()
    {
        $container = new Container([]);
        $settings = $container->get('settings');
        $this->assertEquals($settings['httpVersion'], '1.1');
    }

    public function testCustomSettings()
    {
        $container = new Container(['httpVersion' => '1.0']);
        $settings = $container->get('settings');
        $this->assertEquals($settings['httpVersion'], '1.0');
    }
}
