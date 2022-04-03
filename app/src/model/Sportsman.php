<?php

namespace App\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextField;

use App\Model\Teams;

class Sportsman extends DataObject {
    /**
     * Database field definitions.
     * This is a map from field names to field type. The field
     * type should be a class that extends .
     * @var array
     * @config
     */
    private static $db = [
        'Firstname'     => 'Varchar',
        'Lastname'      => 'Varchar',
    ];

    /**
     * The inverse side of a many-many relationship.
     * This is a map from component name to data type.
     * @var array
     * @config
     */
    private static $belongs_many_many = [
        'Teams' => Teams::class,
    ];

    /**
     * Human-readable singular name.
     * @var string
     * @config
     */
    private static $singular_name = 'Sportsman';

    /**
     * Human-readable plural name
     * @var string
     * @config
     */
    private static $plural_name = 'Sportsmen';

    /**
     * Override table name for this class. If ignored will default to FQN of class.
     * This option is not inheritable, and must be set on each class.
     * If left blank naming will default to the legacy (3.x) behaviour.
     *
     * @var string
     */
    private static $table_name = 'sportsman';

    /**
     * Provides a default list of fields to be used by a 'summary'
     * view of this object.
     * @config
     * @var array
     */
    private static $summary_fields = [
        'ID', 'Firstname', 'Lastname'
    ];

    /**
     * Standard implementation of a title/label for a specific
     * record. Tries to find properties 'Title' or 'Name',
     * and falls back to the 'ID'. Useful to provide
     * user-friendly identification of a record, e.g. in errormessages
     * or UI-selections.
     *
     * Overload this method to have a more specialized implementation,
     * e.g. for an Address record this could be:
     * <code>
     * function getTitle() {
     *   return "{$this->StreetNumber} {$this->StreetName} {$this->City}";
     * }
     * </code>
     *
     * @return string
     */
    public function getTitle()
    {
        return "{$this->Firstname} {$this->Lastname}";
    }
    
}

