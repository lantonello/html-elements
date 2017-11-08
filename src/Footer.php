<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Footer
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Footer extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Footer element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'footer', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
