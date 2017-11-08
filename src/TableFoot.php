<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLTableSection;

/**
 * Represents the Html Table Foot (tfoot) element.
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TableFoot extends HTMLTableSection
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableFoot (tfoot) element.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'tfoot', $attrs );
    }
}
