<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\TableCell;

/**
 * Represents the Html Table Row (tr) element.
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TableRow extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableRow (tr) element.
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'tr', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Adds a new Table Cell to this Row.
     * @param int $index
     * @param string $cell_type
     * @param array $attrs
     * @return TableCell
     */
    public function cell( int $index = null, string $cell_type = TableCell::CELL_TD, array $attrs = null )
    {
        $cell = new TableCell( $cell_type, $attrs );
        
        $this->add( $cell, $index );
        
        return $cell;
    }
    
    /**
     * Returns the next available Cell index
     * @return int
     */
    public function next()
    {
        return $this->countChildren();
    }
}
