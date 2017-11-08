<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Span element
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Span extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Span element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'span', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
