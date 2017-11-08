<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Div
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Div extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Div
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'div', HTMLElement::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
        
        if( isset( $attrs['content'] ) )
            $this->text( $attrs['content'] );
    }
}
