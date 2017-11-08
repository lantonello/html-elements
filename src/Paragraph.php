<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Paragraph element
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Paragraph extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Paragraph element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'p', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
