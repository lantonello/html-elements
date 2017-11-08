<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\TableHead;
use Stigma\HTMLElements\TableBody;
use Stigma\HTMLElements\TableFoot;
use Stigma\HTMLElements\TableRow;

/**
 * Represents the Html Table
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Table extends HTMLElement
{
    // PROPERTIES =============================================================
    /** @var HTMLElement Holds the Table caption. */
    protected $caption;
    /** @var TableHead The Table Header (thead) Element. */
    protected $tHead;
    /** @var TableFoot The Table Foot (tfoot) element. */
    protected $tFoot;
    /** @var TableBody The Table Body (tbody) element. */
    protected $tBody;


    // HTML ELEMENT ATTRIBUTES ================================================
    /** @var bool Specifies that the table should be sortable. */
    public $sortable;
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new instance of Table
     * @param array $attrs
     */
    public function __construct( array $attrs = null )
    {
        parent::__construct( 'table', self::TAG_BLOCK );
        
        $this->parseAttributes($attrs);
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function toString()
    {
        // Init the Table
        $table = $this->openTag();
        
        // Get the Table Head
        $table .= $this->thead()->toString();
        
        // Now, the Table Foot
        $table .= $this->tfoot()->toString();
        
        // And Table Body
        $table .= $this->tbody()->toString();
        
        // Close tag
        $table .= $this->closeTag();
        
        return $table;
    }
    
    /**
     * Adds a Caption element to this Table
     * @param string $content
     */
    public function caption( string $content )
    {
        $this->caption = new HTMLElement('caption', self::TAG_BLOCK);
        $this->caption->text($content);
    }
    
    /**
     * Adds or return the Table Head.
     * @param array $attrs
     * @return TableHead
     */
    public function thead( array $attrs = null )
    {
        if( is_null($this->tHead) )
            $this->tHead = new TableHead( $attrs );
        
        return $this->tHead;
    }
    
    /**
     * Adds or returns the Table Foot.
     * @param array $attrs
     * @return TableFoot
     */
    public function tfoot( array $attrs = null )
    {
        if( is_null($this->tFoot) )
            $this->tFoot = new TableFoot( $attrs );
        
        return $this->tFoot;
    }
    
    /**
     * Adds or returns the Table Body
     * @param array $attrs
     * @return TableBody
     */
    public function tbody( array $attrs = null )
    {
        if( is_null($this->tBody) )
            $this->tBody = new TableBody( $attrs );
        
        return $this->tBody;
    }
    
    /**
     * Alias for Table Body row.
     * @param int $index
     * @return TableRow
     */
    public function row( int $index )
    {
        return $this->tbody()->row($index);
    }
}
