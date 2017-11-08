<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\Label;

/**
 * Base class for all HTML Input Elements
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class HTMLInput extends HTMLElement
{
    // PROPERTIES =============================================================
    /** @var Label The label associate with this input. */
    protected $label;
    /** @var string Indicates the position of label, one of POS_* constants. */
    protected $labelPosition;
    
    // Label Position constants
    const POS_NONE   = 'none';
    const POS_BEFORE = 'before';
    const POS_AFTER  = 'after';

    // HTML ELEMENT ATTRIBUTES ================================================
    
    // Input Type constants
    const TYPE_BUTTON   = 'button';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_COLOR    = 'color';
    const TYPE_DATE     = 'date';
    const TYPE_DT_LOCAL = 'datetime-local';
    const TYPE_EMAIL    = 'email';
    const TYPE_FILE     = 'file';
    const TYPE_HIDDEN   = 'hidden';
    const TYPE_IMAGE    = 'image';
    const TYPE_MONTH    = 'month';
    const TYPE_NUMBER   = 'number';
    const TYPE_PASSWORD = 'password';
    const TYPE_RADIO    = 'radio';
    const TYPE_RANGE    = 'range';
    const TYPE_RESET    = 'reset';
    const TYPE_SEARCH   = 'search';
    const TYPE_SUBMIT   = 'submit';
    const TYPE_TEL      = 'tel';
    const TYPE_TEXT     = 'text';
    const TYPE_TIME     = 'time';
    const TYPE_URL      = 'url';
    const TYPE_WEEK     = 'week';
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of HTMLInput element.
     * @param string $tagname 
     * @param array $attrs
     */
    public function __construct( string $tagname, array $attrs = null )
    {
        // Tag Type
        $tagtype = ($tagname === 'input') ? self::TAG_INLINE : self::TAG_BLOCK;
        
        parent::__construct( $tagname, $tagtype );
        
        $this->parseAttributes( $attrs );
        
        if( isset( $attrs['label'] ) )
        {
            $pos = $attrs['label_position'] ?? self::POS_BEFORE;
            $this->label( $attrs['label'], $pos );
        }
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
        if( $this->type === self::TYPE_HIDDEN )
            return parent::__toString();
        
        switch( $this->labelPosition )
        {
            case self::POS_NONE:
                return parent::__toString();
            case self::POS_BEFORE:
                $label = $this->getLabel();
                return $label->toString() . parent::__toString();
            case self::POS_AFTER:
                $label = $this->getLabel();
                return parent::__toString() . $label->toString();
        }
    }
    
    /**
     * Gets or Sets the Readonly attribute.
     * @param bool $value
     * @return bool
     */
    public function readonly( bool $value = null )
    {
        if( is_null($value) )
            return $this->readonly;
        
        $this->readonly = $value;
    }
    
    /**
     * Gets or Sets the Checked attribute.
     * @param bool $value
     * @return bool
     */
    public function check( bool $value = null )
    {
        if( is_null($value) )
            return $this->checked;
        
        $this->checked = $value;
    }
    
    /**
     * Adds a Label for this Input.
     * @param string $content
     * @param string $label_pos Position of Label relative to input.
     */
    public function label( string $content = null, string $label_pos = self::POS_BEFORE )
    {
        $lb = new Label( $this->id );
        $lb->text( $content );
        
        $this->labelPosition = $label_pos;
    }
    
    /**
     * Indicates if this Input have an associated Label
     * @return bool
     */
    public function hasLabel()
    {
        return $this->label ? TRUE : FALSE;
    }
    
    /**
     * Returns the label associated with this Input
     * @return Label
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    /**
     * Returns the Label text only.
     * @return typstring
     */
    public function getLabelText()
    {
        return $this->label->text();
    }
}
