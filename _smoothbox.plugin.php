<?php
/**
 * -----------------------------------------------------------------------------------------
 * This file implements the Smoothbox plugin for {@link http://b2evolution.net/}.
 * See the Smoothbox repository for more deatils on usage {@link https://github.com/kthornbloom/Smoothbox}.
 * 
 * @copyright (c)2014 by Alan Wong - {@link http://www.pyepye.com/}.
 * @license The MIT License (MIT) - {@link http://opensource.org/licenses/MIT}.
 * @package plugins
 * @author Alan Wong
 * -----------------------------------------------------------------------------------------
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

/**
 * Smoothbox Plugin
 *
 * From the Smoothbox website {@link https://github.com/kthornbloom/Smoothbox}:
 * "A lightweight & simple jQuery lightbox script by Kevin Thornbloom."
 * * @package plugins
 */
class smoothbox_plugin extends Plugin
{
    /**
     * Variables below MUST be overriden by plugin implementations,
     * either in the subclass declaration or in the subclass constructor.
     */
    var $name = 'smoothbox_plugin';

    /**
     * Code, if this is a renderer or pingback plugin.
     */
    var $code = '';
    var $priority = 90; // only adding to the head; can be called later
    var $version = '0.1-dev';
    var $author = 'http://www.pyepye.com/';
    var $help_url = '';

    var $apply_rendering = 'opt-in';

    /**
     * Init
     *
     * This gets called after a plugin has been registered/instantiated.
     */
    function PluginInit( & $params )
    {
        $this->short_desc = $this->T_('Plugin to add Smoothbox functionality.');
        $this->long_desc = $this->T_('Plugin that adds the requisite libraries to utilize Smoothbox features.');
    }

    // If you use hooks, that are not present in b2evo 1.8, you should also add
    // a GetDependencies() function and require the b2evo version your Plugin needs.
    // See http://doc.b2evolution.net/stable/plugins/Plugin.html#methodGetDependencies

    // Add the methods to hook into here...
    // See http://doc.b2evolution.net/stable/plugins/Plugin.html

    function SkinBeginHtmlHead( & $params ) {
        echo "\n";
        echo '<link rel="stylesheet" href="' . $this->get_plugin_url() . 'css/smoothbox.css"/>';
        echo "\n";
        echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>';
        echo "\n";
        echo '<script type="text/javascript" src="' . $this->get_plugin_url() . 'js/smoothbox.min.js"></script>';
        echo "\n";
    }
}
?>
