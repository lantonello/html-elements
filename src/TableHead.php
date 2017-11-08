<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLTableSection;

/**
 * Represents the Html Table Head (thead) element.
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TableHead extends HTMLTableSection
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableHead (thead) element.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'thead', $attrs );
    }
}
