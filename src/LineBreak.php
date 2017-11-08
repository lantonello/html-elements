<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Line Break (br)
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class LineBreak extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Aside element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'br', self::TAG_INLINE );
        
        $this->parseAttributes($attrs);
    }
}
