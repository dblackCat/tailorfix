<?php namespace CatDesign\TailorFix;

use Event;
use Backend;
use CatDesign\TailorFix\Classes\Event\EntryRecordModelHandler;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'TailorFix',
            'description' => 'Fixing problems in the tailor',
            'author' => 'CatDesign',
            'icon' => 'icon-wench'
        ];
    }



    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        Event::subscribe(EntryRecordModelHandler::class);
    }
}
