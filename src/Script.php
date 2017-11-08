<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Script
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Script extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that the script is executed asynchronously (only for external scripts). */
    public $async;
    /** @var string Specifies the character encoding used in an external script file. */
    public $charset;
    /** @var string Specifies that the script is executed when the page has finished parsing (only for external scripts). */
    public $defer;
    /** @var string Specifies the URL of an external script file. */
    public $src;
    /** @var string Specifies the media type of the script. */
    public $type;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Aside element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'script', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
}
