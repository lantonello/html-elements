<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLTableSection;

/**
 * Represents the Html Table Body (tbody) element.
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TableBody extends HTMLTableSection
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableBody (tbody) element.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'tbody', $attrs );
    }
}
