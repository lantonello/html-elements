<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Anchor
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Anchor extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies the URL of the page the link goes to. */
    public $href;
    /** @var string Specifies the language of the linked document. */
    public $hreflang;
    /** @var string Specifies the relationship between the current document and the linked document. */
    public $rel;
    /** @var string Specifies where to open the linked document. */
    public $target;
    
    // Rel constants
    const REL_ALTERNATE  = 'alternate';
    const REL_AUTHOR     = 'author';
    const REL_BOOKMARK   = 'bookmark';
    const REL_EXTERNAL   = 'external';
    const REL_HELP       = 'help';
    const REL_LICENSE    = 'license';
    const REL_NEXT       = 'next';
    const REL_NOFOLLOW   = 'nofollow';
    const REL_NOREFERRER = 'noreferrer';
    const REL_NOOPENER   = 'noopener';
    const REL_PREV       = 'prev';
    const REL_SEARCH     = 'search';
    const REL_TAG        = 'tag';
    
    // Target constants
    const TGT_BLANK     = '_blank';
    const TGT_PARENT    = '_parent';
    const TGT_SELF      = '_self';
    const TGT_TOP       = '_top';
    const TGT_FRAMENAME = '';
    
    // CONSTRUCTOR =============================================================
    /**
     * Creates a new instance of Anchor
     * @param array $attrs
     */
    public function __construct( array $attrs = NULL )
    {
        parent::__construct( 'a', HTMLElement::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
        
        if( isset( $attrs['content'] ) )
            $this->text( $attrs['content'] );
    }
}
