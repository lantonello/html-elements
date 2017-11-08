<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\TableRow;

/**
 * Base class for HTML Table Sections (thead, tfoot and tbody)
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class HTMLTableSection extends HTMLElement
{
    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of TableBody (tbody) element.
     * @param string $tag 
     * @param array $attrs
     */
    public function __construct( string $tag, array $attrs = null )
    {
        parent::__construct( $tag, self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the TableRow (tr) element located in the given $index or creates one if none exists.
     * @param int $index
     * @param array $attrs
     * @return TableRow
     */
    public function row( int $index = null, array $attrs = null )
    {
        $row = null;
        
        if( ! is_null($index) )
        {
            // Check for existing element at this position
            $row = $this->getChildAt( $index );
            
            if( $row !== FALSE )
                return $row;
            
            // Creates new row at index
            $this->add( new TableRow($attrs), $index );
        }
        else
        {
            // Creates new row
            $this->add( new TableRow($attrs) );
            
            $index = $this->countChildren();
        }
        
        return $this->getChildAt($index);
    }
    
    /**
     * Returns the number of rows
     * @return int
     */
    public function rowSize()
    {
        return $this->countChildren();
    }
    
    /**
     * Returns the number of cells of given row.
     * @param int $index
     * @return int
     */
    public function cellSize( int $index = 0 )
    {
        return $this->getChildAt($index)->countChildren();
    }
}
