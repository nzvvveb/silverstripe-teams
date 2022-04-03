<?php

namespace App\Model;

use Silverstripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use App\Model\Sportsman;

class Teams extends DataObject {
    /**
     * Database field definitions.
     * This is a map from field names to field type. The field
     * type should be a class that extends .
     * @var array
     * @config
     */
    private static $db = [
        'Sport'     => 'Varchar',
        'Season'    => 'Varchar',
        'Type'      => 'Varchar',
        'Name'      => 'Varchar',
        'Colour'    => 'Varchar',
        'Mascot'    => 'Varchar',
    ];

    /**
     * One-to-zero relationship defintion. This is a map of component name to data type. In order to turn this into a
     * true one-to-one relationship you can add a {@link DataObject::$belongs_to} relationship on the child class.
     *
     * Note that you cannot have a has_one and belongs_to relationship with the same name.
     *
     * @var array
     * @config
     */
    private static $has_one = [
        'Logo' => Image::class,
    ];

    /**
     * many-many relationship definitions.
     * This is a map from component name to data type.
     * @var array
     * @config
     */
    private static $many_many = [
        'Players' => Sportsman::class,
    ];

    /**
     * Human-readable singular name.
     * @var string
     * @config
     */
    private static $singular_name = 'team';

    /**
     * Human-readable plural name
     * @var string
     * @config
     */
    private static $plural_name = 'Teams';

    /**
     * Override table name for this class. If ignored will default to FQN of class.
     * This option is not inheritable, and must be set on each class.
     * If left blank naming will default to the legacy (3.x) behaviour.
     *
     * @var string
     */
    private static $table_name = 'teams';

    /**
     * Provides a default list of fields to be used by a 'summary'
     * view of this object.
     * @config
     * @var array
     */
    private static $summary_fields = [
        'ID', 'Name', 'Sport', 'Type'
    ];
    
}

