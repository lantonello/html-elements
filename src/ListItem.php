<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html List Item
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class ListItem extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new List Item (li)
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'li', self::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
    }
}
