<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html heading element
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Heading extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Paragraph element
     * @param int $level Heading level, from 1 to 6
     * @param array $attrs
     */
    public function __construct( int $level, array $attrs = null )
    {
        parent::__construct( ('h'. $level), self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
