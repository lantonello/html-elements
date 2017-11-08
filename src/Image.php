<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Image
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Image extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies an alternate text for an image. */
    public $alt;
    /** @var int Specifies the height of an image. */
    public $height;
    /** @var string Specifies a URL to a detailed description of an image. */
    public $longdesc;
    /** @var string Specifies the URL of an image. */
    public $src;
    /** @var string Specifies an image as a client-side image-map. */
    public $usemap;
    /** @var int Specifies the width of an image. */
    public $width;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Html Image
     * @param array $attrs
     * @param string $id
     * @param string $class
     * @param string $title
     * @param string $alt
     */
    public function __construct( array $attrs = NULL )
    {
        parent::__construct( 'img', HTMLElement::TAG_INLINE );
        
        $this->parseAttributes( $attrs );
    }
}
