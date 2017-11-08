<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLInput;
use Stigma\HTMLElements\OptionGroup;
use Stigma\HTMLElements\Option;

/**
 * Represents the Html Select
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Select extends HTMLInput
{
    // PROPERTIES =============================================================
    
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that the drop-down list should automatically get focus when the page loads. */
    public $autofocus;
    /** @var bool Specifies that a drop-down list should be disabled. */
    public $disabled;
    /** @var bool Specifies that multiple options can be selected at once. */
    public $multiple;
    /** @var string Defines a name for the drop-down list. */
    public $name;
    /** @var bool Specifies that the user is required to select a value before submitting the form. */
    public $required;
    /** @var int Defines the number of visible options in a drop-down list. */
    public $size;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of Select (select) element.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'select', $attrs );
    }
    
    // PUBLIC STATIC METHODS ==================================================
    /**
     * Adds an Option Group
     * @param string $group_name
     * @return OptionGroup
     */
    public function group( string $group_name )
    {
        $group = new OptionGroup(['label' => $group_name]);
        
        $this->add( $group );
        
        return $group;
    }
    
    /**
     * Adds an Option to this Select Element.
     * @param string $value
     * @param string $text
     * @param bool $selected
     * @return Option
     */
    public function option( string $value, string $text, bool $selected = FALSE )
    {
        $opt = new Option(['value' => $value, 'content' => $text]);
        $opt->select( $selected );
        
        $this->add( $opt );
        
        return $opt;
    }
    
    /**
     * Parse and adds an Array of Options
     * @param array $options
     */
    public function optionsArray( array $options )
    {
        foreach( $options as $value => $text )
        {
            $this->option( $value, $text );
        }
    }
}
