<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\Option;

/**
 * Represents the Html Option Group
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class OptionGroup extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that an option should be disabled. */
    public $disabled;
    /** @var string Specifies a shorter label for an option. */
    public $label;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Div
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'optgroup', self::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
    }
    
    // PUBLIC STATIC METHODS ==================================================
    /**
     * Adds an Option to this Option Group.
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
