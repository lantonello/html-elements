<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Meta Head tag
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Meta extends HTMLElement
{
    // PROPERTIES ==============================================================
    
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies the character encoding for the HTML document . */
    public $charset;
    /** @var string Gives the value associated with the http-equiv or name attribute. */
    public $content;
    /** @var string Provides an HTTP header for the information/value of the content attribute. One of HE_* constants. */
    public $httpEquiv;
    /** @var string Specifies a name for the metadata. One of NAM_* constants. */
    public $name;
    
    // Http Equiv constants
    const HE_CONTENT_TYPE  = 'content-type';
    const HE_DEFAULT_STYLE = 'default-style';
    const HE_REFRESH       = 'refresh';
    
    // Metadata name constants
    const NAM_APPLICATION = 'application-name';
    const NAM_AUTHOR      = 'author';
    const NAM_DESCRIPTION = 'description';
    const NAM_GENERATOR   = 'generator';
    const NAM_KEYWORDS    = 'keywords';
    const NAM_VIEWPORT    = 'viewport';
    
    // CONSTRUCTOR =============================================================
    /**
     * Creates a new Meta tag.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'meta', self::TAG_INLINE );
        
        $this->parseAttributes($attrs);
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function toString()
    {
        // Open tag
        $meta = '<meta ';
        
        if( isset($this->httpEquiv) )
            $meta .= 'http-equiv="'. $this->httpEquiv .'" ';
        else if( isset($this->name) )
            $meta .= 'name="'. $this->name .'" ';
        
        // Now, the content
        $meta .= 'content="'. $this->content .'"/>';
        
        return $meta;
    }
    
    /**
     * Parse Array with Attributes specific to Metadata.
     * @param array $attr_array
     */
    protected function parseAttributes( array $attr_array = null )
    {
        if( is_null($attr_array) )
            return;
        
        foreach( $attr_array as $attr => $value )
        {
            // Specific Meta attributes
            switch( $attr )
            {
                case 'name': $this->name = $value; break;
                case 'http-equiv': $this->httpEquiv = $value; break;
                case 'content': $this->content = $value; break;
            }
            
            // Sets the attribute
            $this->setAttribute( $attr, $value );
        }
    }
}
