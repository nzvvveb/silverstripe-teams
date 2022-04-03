<?php

use SilverStripe\Admin\ModelAdmin;
use App\Model\Teams;
use App\Model\Sportsman;

class SportsAdmin extends ModelAdmin {
    /**
     * List of all managed {@link DataObject}s in this interface.
     *
     * Simple notation with class names only:
     * <code>
     * array('MyObjectClass','MyOtherObjectClass')
     * </code>
     *
     * Extended notation with options (e.g. custom titles):
     * <code>
     * array(
     *   'MyObjectClass' => ['title' => "Custom title"]
     *   'urlslug' => ['title' => "Another title", 'dataClass' => MyNamespacedClass::class]
     * )
     * </code>
     *
     * Available options:
     * - 'title': Set custom titles for the tabs or dropdown names
     * - 'dataClass': The class name being managed. Defaults to the key. Useful for making shorter URLs or placing the same class in multiple tabs
     *
     * @config
     * @var array|string
     */
    private static $managed_models = [
        'Teams' => ['title' => 'Teams', 'dataClass' => Teams::class],
        'Sportsmen' => ['title' => 'Sportsmen', 'dataClass' => Sportsman::class],
    ];

    /**
     * The current url segment attached to the LeftAndMain instance
     *
     * @config
     * @var string
     */
    private static $url_segment = 'Sports';
}