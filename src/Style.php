<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Style
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Style extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies what media/device the media resource is optimized for. */
    public $media;
    /** @var string Specifies that the styles only apply to this element's parent element and that element's child elements. */
    public $scoped;
    /** @var string Specifies the media type of the <style> tag. */
    public $type;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Aside element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'style', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
        
        $this->type = 'text/css';
    }
}
