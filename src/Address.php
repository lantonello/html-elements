<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Address tag
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Address extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Address element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'address', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
