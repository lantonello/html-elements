<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Button
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Button extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that a button should automatically get focus when the page loads. */
    public $autofocus;
    /** @var bool Specifies that a button should be disabled. */
    public $disabled;
    /** @var string Specifies a name for the button. */
    public $name;
    /** @var string Specifies the type of button. One of BT_* constants. */
    public $type;
    /** @var string Specifies an initial value for the button. */
    public $value;
    
    // Button Type constants 
    const BT_BUTTON = 'button';
    const BT_RESET  = 'reset';
    const BT_SUBMIT = 'submit';
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Button element
     * @param array $attrs
     */
    public function __construct( string $type = self::BT_BUTTON, array $attrs = null )
    {
        parent::__construct( 'button', self::TAG_BLOCK );
        $this->type = $type;
        
        $this->parseAttributes($attrs);
    }
}
