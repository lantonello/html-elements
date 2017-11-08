<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Ordered List
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class OrderedList extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Ordered List (ol)
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'ol', self::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
    }
}
