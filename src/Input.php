<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLInput;

/**
 * Represents the Html Input
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Input extends HTMLInput
{
    // PROPERTIES =============================================================

    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string The Accept attribute. Only for input type=file. */
    public $accept;
    /** @var string The Alt attribute. Only for input type=image. */
    public $alt;
    /** @var string Specifies whether an <input> element should have autocomplete enabled. */
    public $autocomplete;
    /** @var bool Specifies that an <input> element should automatically get focus when the page loads. */
    public $autofocus;
    /** @var bool The Checked attribute. Only for input type=checkbox OR type=radio. */
    public $checked;
    /** @var bool Specifies that an <input> element should be disabled. */
    public $disabled;
    /** @var int Specifies the height of an <input> element (only for type="image"). */
    public $height;
    /** @var string Refers to a <datalist> element that contains pre-defined options for an <input> element. */
    public $list;
    /** @var mixed Specifies the maximum value for an <input> element. */
    public $max;
    /** @var int Specifies the maximum number of characters allowed in an <input> element. */
    public $maxlength;
    /** @var mixed Specifies a minimum value for an <input> element. */
    public $min;
    /** @var bool Specifies that a user can enter more than one value in an <input> element. */
    public $multiple;
    /** @var string The Name attribute. */
    public $name;
    /** @var string Specifies a regular expression that an <input> element's value is checked against. */
    public $pattern;
    /** @var string Specifies a short hint that describes the expected value of an <input> element. */
    public $placeholder;
    /** @var bool The ReadOnly attribute. */
    public $readonly;
    /** @var bool Specifies that an input field must be filled out before submitting the form. */
    public $required;
    /** @var int Specifies the width, in characters, of an <input> element. */
    public $size;
    /** @var string Specifies the URL of the image to use as a submit button (only for type="image"). */
    public $src;
    /** @var int Specifies the legal number intervals for an input field. */
    public $step;
    /** @var string Specifies the type <input> element to display. One of TYPE_* constants */
    public $type;
    /** @var string Specifies the value of an <input> element. */
    public $value;
    /** @var int Specifies the width of an <input> element (only for type="image"). */
    public $width;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of Input (input) element.
     * @param string $type
     * @param array $attrs
     */
    public function __construct( string $type, array $attrs = null )
    {
        parent::__construct( 'input', $attrs );
        
        $this->type  = $type;
    }
    
    // PUBLIC STATIC METHODS ==================================================
    /**
     * Returns a new Input type=hidden
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function hidden( array $attrs = null )
    {
        return new Input( self::TYPE_HIDDEN, $attrs );
    }
    
    /**
     * Returns a new Input type=text
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function textField( array $attrs = null )
    {
        return new Input( self::TYPE_TEXT, $attrs );
    }
    
    /**
     * Returns a new readonly Input type=text
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function readonlyText( array $attrs = null )
    {
        $input = new Input( self::TYPE_TEXT, $attrs );
        $input->readonly( TRUE );
        
        return $input;
    }
    
    /**
     * Returns a new Input type=password
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function password( array $attrs = null )
    {
        return new Input( self::TYPE_PASSWORD, $attrs );
    }
    
    /**
     * Returns a new Input type=checkbox
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function checkbox( array $attrs = null )
    {
        return new Input( self::TYPE_CHECKBOX, $attrs );
    }
    
    /**
     * Returns a new Input type=radio
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function radio( array $attrs = null )
    {
        return new Input( self::TYPE_RADIO, $attrs );
    }
    
    /**
     * Returns a new Input type=file
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function file( array $attrs = null )
    {
        return new Input( self::TYPE_FILE, $attrs );
    }
    
    /**
     * Returns a new Input type=image
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function image( array $attrs = null )
    {
        return new Input( self::TYPE_IMAGE, $attrs );
    }
    
    /**
     * Returns a new Input type=button
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function button( array $attrs = null )
    {
        return new Input( self::TYPE_BUTTON, $attrs );
    }
    
    /**
     * Returns a new Input type=color
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function color( array $attrs = null )
    {
        return new Input( self::TYPE_COLOR, $attrs );
    }
    
    /**
     * Returns a new Input type=date
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function date( array $attrs = null )
    {
        return new Input( self::TYPE_DATE, $attrs );
    }
    
    /**
     * Returns a new Input type=datetime-local
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function localDatetime( array $attrs = null )
    {
        return new Input( self::TYPE_DT_LOCAL, $attrs );
    }
    
    /**
     * Returns a new Input type=email
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function email( array $attrs = null )
    {
        return new Input( self::TYPE_EMAIL, $attrs );
    }
    
    /**
     * Returns a new Input type=month
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function month( array $attrs = null )
    {
        return new Input( self::TYPE_MONTH, $attrs );
    }
    
    /**
     * Returns a new Input type=image
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function number( array $attrs = null )
    {
        return new Input( self::TYPE_NUMBER, $attrs );
    }
    
    /**
     * Returns a new Input type=range
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function range( array $attrs = null )
    {
        return new Input( self::TYPE_RANGE, $attrs );
    }
    
    /**
     * Returns a new Input type=reset
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function reset( array $attrs = null )
    {
        return new Input( self::TYPE_RESET, $attrs );
    }
    
    /**
     * Returns a new Input type=search
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function search( array $attrs = null )
    {
        return new Input( self::TYPE_SEARCH, $attrs );
    }
    
    /**
     * Returns a new Input type=submit
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function submit( array $attrs = null )
    {
        return new Input( self::TYPE_SUBMIT, $attrs );
    }
    
    /**
     * Returns a new Input type=tel
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function tel( array $attrs = null )
    {
        return new Input( self::TYPE_TEL, $attrs );
    }
    
    /**
     * Returns a new Input type=time
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function time( array $attrs = null )
    {
        return new Input( self::TYPE_TIME, $attrs );
    }
    
    /**
     * Returns a new Input type=url
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function url( array $attrs = null )
    {
        return new Input( self::TYPE_URL, $attrs );
    }
    
    /**
     * Returns a new Input type=week
     * @param array $attrs
     * @return \Stigma\HTMLElements\Input
     */
    public static function week( array $attrs = null )
    {
        return new Input( self::TYPE_WEEK, $attrs );
    }
}
