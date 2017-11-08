<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLCollection;

/**
 * Base class for all HTML Element
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class HTMLElement
{
    // PROPERTIES ==============================================================
    /** @var string Element's tag name. */
    protected $tagName;
    /** @var string Indicates the type of tag, one of Tag Type (TAG_*) constants. */
    protected $tagType;
    /** @var HTMLCollection Holds the children elements of this element. */
    protected $children;
    
    /** @var string Holds the Element Text. */
    protected $text;

    // Tag Type constants
    const TAG_INLINE = 'inline';
    const TAG_BLOCK  = 'block';
    
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies a shortcut key to activate/focus an element. */
    public $accesskey;
    /** @var string Specifies one or more classnames for an element (refers to a class in a style sheet). */
    public $class;
    /** @var bool Specifies whether the contents of the element are editable. */
    public $contenteditable;
    /** @var string Specifies a context menu for an element. The context menu appears when a user right-clicks on the element. */
    public $contextmenu;
    /** @var string Specifies the text direction for the content, one of Text Direction (DIR_*) constants. Can be "ltr" or "rtl". */
    public $dir;
    
    // Text Direction constants
    const DIR_LEFT_TO_RIGHT = 'ltr';
    const DIR_RIGHT_TO_LEFT = 'rtl';
    
    /** @var bool Specifies whether the element is draggable. */
    public $draggable;
    /** @var string Specifies that the element represents an element that is not yet, or is no longer, relevant. */
    public $hidden;
    /** @var string A unique identifier for the element. */
    public $id;
    /** @var string Specifies the language of the element's content. */
    public $lang;
    /** @var bool Specifies whether the element is to have its spelling and grammar checked or not. */
    public $spellcheck;
    /** @var string Specifies zero or more CSS declarations that apply to the element. */
    public $style;
    /** @var int Specifies the tabbing order of an element. */
    public $tabindex;
    /** @var string Advisory information associated with the element. */
    public $title;
    /** @var array Holds any custom attributes defined by user. */
    public $customAttributes;
    
    // CONSTRUCTOR =============================================================
    /**
     * Creates a new Html Element
     * @param string $tag
     * @param string $ttype
     */
    public function __construct( string $tag, string $ttype = self::TAG_INLINE )
    {
        $this->tagName = $tag;
        $this->tagType = $ttype;
        
        $this->customAttributes = [];
    }
    
    // OVERRIDES ==============================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function toString()
    {
        $tag = $this->openTag();
        
        if( $this->tagType === self::TAG_INLINE )
            return $tag;
        
        // Get text content
        $tag .= $this->text;
        
        // Get all children
        $tag .= $this->childrenToString();
        $tag .= $this->closeTag();
        
        return $tag;
    }
    
    /**
     * Sets or Gets the Text node of this Element.
     * @param string $content
     */
    public function text( string $content = null )
    {
        if( is_null( $content ) )
            return $this->text;
        
        $this->text = $content;
    }
    
    /**
     * Gets or Sets an Attribute value.
     * @param string $attr_name Attribute name.
     * @param mixed $value      If given, this value will be set. Otherwise, current value are returned.
     * @return mixed
     */
    public function attr( string $attr_name, $value = null )
    {
        if( is_null($value) )
            return $this->getAttribute( $attr_name );
        
        $this->setAttribute( $attr_name, $value );
    }
    
    /**
     * Returns an Element attribute.
     * @param string $name
     * @return mixed
     */
    public function getAttribute( string $name )
    {
        if( ! property_exists( $this, $name ) )
            return NULL;
        
        return $this->$name;
    }
    
    /**
     * Sets the value for an Attribute
     * @param string $name
     * @param mixed $value
     * @return NULL
     */
    public function setAttribute( string $name, $value )
    {
        if( ! property_exists( $this, $name ) )
        {
            $this->customAttributes[] = [$name => $value];
            return;
        }
        
        $this->$name = $value;
    }
    
    /**
     * Adds one HTMLElement as a Child of this HTMLElement.
     * @param HTMLElement $node
     * @param int $index 
     * @return boolean|HTMLElement
     */
    public function add( HTMLElement $node, int $index = null )
    {
        // Inline tags do not have children
        if( $this->isInline() )
            return FALSE;
        
        // Init children, if needed
        $this->initChildren();
        
        // Add the new child
        $this->children->add( $node, $index );
        
        return $node;
    }
    
    /**
     * Returns a Child at given index.
     * @param int $index
     * @return boolean|HTMLElement
     */
    public function getChildAt( int $index )
    {
        // Inline tags do not have children
        if( $this->isInline() )
            return FALSE;
        
        // Init children, if needed
        $this->initChildren();
        
        return $this->children->item($index);
    }
    
    /**
     * Returns a child by its tag Name.
     * @param string $tagname
     * @return HTMLElement
     */
    public function getChildByTagName( string $tagname )
    {
        return $this->children->getByTagName($tagname);
    }
    
    /**
     * Removes a child at given index.
     * @param int $index
     * @return boolean
     */
    public function removeChildAt( int $index )
    {
        // Inline tags do not have children
        if( $this->isInline() )
            return FALSE;
        
        // Init children, if needed
        $this->initChildren();
        
        return $this->children->delete($index);
    }
    
    /**
     * Returns the length of children.
     * @return int
     */
    public function countChildren()
    {
        return $this->children->length();
    }
    
    /**
     * Returns the Element's Tag Name.
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }
    
    // PROTECTED METHODS ======================================================
    /**
     * Parse Array with Attributes to class properties.
     * @param array $attr_array
     */
    protected function parseAttributes( array $attr_array = null )
    {
        if( is_null($attr_array) )
            return;
        
        foreach( $attr_array as $attr => $value )
        {
            // Skip labels
            if( $attr === 'label' )
                continue;
            
            // Skip Content
            if( $attr === 'content' )
                continue;
            
            // Sets the attribute
            $this->setAttribute( $attr, $value );
        }
    }
    
    /**
     * Indicates if this is an Inline Element.
     * @return boolean
     */
    protected function isInline()
    {
        if( $this->tagType === self::TAG_INLINE )
            return TRUE;
        
        return FALSE;
    }
    
    /**
     * Initialize elements children.
     */
    protected function initChildren()
    {
        if( is_null( $this->children ) )
            $this->children = new HTMLCollection();
    }
    
    /**
     * Starts the tag open part.
     * @return string
     */
    protected function openTag()
    {
        // Build attributes
        $attributes = [];
        
        foreach( $this as $attr => $value )
        {
            // Skip NULL values
            if( is_null( $value ) )
                continue;
            
            // Skip FALSE values
            if( $value === FALSE )
                continue;
            
            // Skip Zero values
            if( $value === 0 )
                continue;
            
            // Skip arrays
            if( is_array( $value ) )
                continue;
            
            // Get Property
            $prop = new \ReflectionProperty( get_class($this), $attr );
            
            // Skip non-public properties
            if( ! $prop->isPublic() )
                continue;
            
            // Add to array
            $attributes[] = $attr .'="'. htmlentities($value) .'"';
        }
        
        // Now, the custom attributes
        foreach( $this->customAttributes as $custom )
        {
            $k = key($custom);
            // Add to array
            $attributes[] = $k .'="'. htmlentities( $custom[$k] ) .'"';
        }
        
        // Build Tag
        $tag = '<'. $this->tagName;
        
        // Put attributes
        if( count($attributes) > 0 )
            $tag .= ' '. implode( ' ', $attributes );
        
        $tag .= ( ($this->tagType === self::TAG_INLINE) ? '/>' : '>' );
        
        return $tag;
    }
    
    /**
     * Returns all children's string representation.
     * @return string
     */
    protected function childrenToString()
    {
        // Check children
        if( is_null( $this->children ) )
            return '';
        
        if( $this->children->length() === 0 )
            return '';
        
        $source = '';
        
        foreach( $this->children as $child )
        {
            // Check child type
            if( is_a( $child, 'HTMLElement' ) )
            {
                $source .= $child->toString();
            }
            else if( is_string( $child ) )
            {
                $source .= $child;
            }
            else
            {
                $source .= (string) $child;
            }
        }
        
        $source .= PHP_EOL;
        
        return $source;
    }
    
    /**
     * Close a BLOCK tag
     * @return string
     */
    protected function closeTag()
    {
        return '</'. $this->tagName .'>' . PHP_EOL;
    }
}
