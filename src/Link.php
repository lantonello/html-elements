<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Head Link element
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Link extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies the location of the linked document. */
    public $href;
    /** @var string Specifies the language of the text in the linked document. */
    public $hreflang;
    /** @var string Specifies on what device the linked document will be displayed. */
    public $media;
    /** @var string Specifies the relationship between the current document and the linked document. REL_* constants. */
    public $rel;
    /** @var string Specifies the media type of the linked document. */
    public $type;
    
    // REL constants
    const REL_ALTERNATE  = 'alternate';
    const REL_AUTHOR     = 'author';
    const REL_DNS_PREF   = 'dns-prefetch';
    const REL_HELP       = 'help';
    const REL_ICON       = 'icon';
    const REL_LICENSE    = 'license';
    const REL_NEXT       = 'next';
    const REL_PINGBACK   = 'pingback';
    const REL_PRECONNECT = 'preconnect';
    const REL_PREFETCH   = 'prefetch';
    const REL_PRELOAD    = 'preload';
    const REL_PRERENDER  = 'prerender';
    const REL_PREV       = 'prev';
    const REL_SEARCH     = 'search';
    const REL_STYLESHEET = 'stylesheet';
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Link element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'link', self::TAG_INLINE );
        
        $this->parseAttributes($attrs);
    }
}
