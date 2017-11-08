<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

/**
 * Represents the Html Table Cell (td) element.
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class TableCell extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var string Specifies an abbreviated version of the content in a header cell. Only for TH */
    public $abbr;
    /** @var int Specifies the number of columns a cell should span. */
    public $colspan;
    /** @var string Specifies one or more header cells a cell is related to. */
    public $headers;
    /** @var int Sets the number of rows a cell should span. */
    public $rowspan;
    
    /** @var string Specifies whether a header cell is a header for a column, row, or group of columns or rows. */
    public $scope;
    /** @var string Defines the sort direction of a column. */
    public $sorted;
    
    // Table Cell tags constants
    const CELL_TD = 'td';
    const CELL_TH = 'th';
    
    // Scope constants
    const SCP_COL      = 'col';
    const SCP_COLGROUP = 'colgroup';
    const SCP_ROW      = 'row';
    const SCP_ROWGROUP = 'rowgroup';
    
    // Sorted constants
    const SOR_REVERSED = 'reversed';
    const SOR_NUMBER   = 'number';
    const SOR_REV_NUM  = 'reversed number';
    const SOR_NUM_REV  = 'number reversed';
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableCell (td or th) element.
     * @param string $tag Defaults to 'td'.
     * @param array $attrs
     */
    public function __construct( string $tag = self::CELL_TD, array $attrs = null )
    {
        parent::__construct( 'td', self::TAG_BLOCK );
        
        $this->parseAttributes( $attrs );
    }
}
