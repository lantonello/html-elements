<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLInput;

/**
 * Represents the Html TextArea
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TextArea extends HTMLInput
{
    // PROPERTIES =============================================================

    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that an <input> element should automatically get focus when the page loads. */
    public $autofocus;
    /** @var int Specifies the visible width of a text area. */
    public $cols;
    /** @var bool Specifies that an <input> element should be disabled. */
    public $disabled;
    /** @var int Specifies the maximum number of characters allowed in an <input> element. */
    public $maxlength;
    /** @var string The Name attribute. */
    public $name;
    /** @var string Specifies a short hint that describes the expected value of an <input> element. */
    public $placeholder;
    /** @var bool The ReadOnly attribute. */
    public $readonly;
    /** @var bool Specifies that an input field must be filled out before submitting the form. */
    public $required;
    /** @var int Specifies the visible number of lines in a text area. */
    public $rows;
    /** @var string Specifies how the text in a text area is to be wrapped when submitted in a form. */
    public $wrap;
    
    // Wrap constants
    const WRAP_HARD = 'hard';
    const WRAP_SOFT = 'soft';
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Nav element
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'textarea', $attrs );
    }
}
