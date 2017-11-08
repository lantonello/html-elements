<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Article
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Article extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Article element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'article', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
