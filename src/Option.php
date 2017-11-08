<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Option of an Select
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Option extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that an option should be disabled. */
    public $disabled;
    /** @var string Specifies a shorter label for an option. */
    public $label;
    /** @var bool Specifies that an option should be pre-selected when the page loads. */
    public $selected;
    /** @var string Specifies the value to be sent to a server. */
    public $value;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Div
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'option', self::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
        
        if( isset( $attrs['content'] ) )
            $this->text( $attrs['content'] );
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Sets of Gets the Selected attribute.
     * @param bool $selected
     * @return bool
     */
    public function select( bool $selected = null )
    {
        if( is_null( $selected ) )
            return $this->selected;
        
        $this->selected = $selected;
    }
}
