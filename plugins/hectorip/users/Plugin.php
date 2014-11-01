<?php namespace October\Demo;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Users Admin',
            'description' => 'Provides user login and sign in',
            'author'      => 'Héctor Iván Patricio',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            //'\hectorip\users\comoponents\users' => 'users'
        ];
    }

}