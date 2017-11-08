<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Code
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Code extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Code element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'code', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
