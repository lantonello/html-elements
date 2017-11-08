<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Label
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Label extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies which form element a label is bound to. */
    public $for;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of Label (label) element.
     * @param string $for
     */
    public function __construct( string $for = null )
    {
        parent::__construct( 'label', HTMLElement::TAG_BLOCK );
        
        $this->for = $for;
    }
}
