<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;

class HTMLCollection implements \Iterator, \ArrayAccess, \Countable
{
    // PROPERTIES ==============================================================
    /** @var array The collection items. */
    private $items;
    /** @var int Represents a cursor for iteration. */
    private $cursor;
    
    // CONSTRUCTOR =============================================================
    public function __construct()
    {
        $this->items = [];
        $this->cursor = 0;
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Adds an item to Collection
     * @param <HTMLElement> $obj 
     * @param <int> $index 
     * @return  
     */
    public function add( HTMLElement $obj, int $index = null )
    {
        if( is_null($index) )
        {
            $this->items[] = $obj;
        }
        else
        {
            $this->items[$index] = $obj;
        }
    }
    
    /**
     * Deletes a Collection item by its index
     * @param <int> $index
     * @return <bool>
     */
    public function delete( int $index )
    {
        if( ! $this->exists( $index ) )
            return FALSE;
        
        unset( $this->items[$index] );
        return TRUE;
    }
    
    /**
     * Returns a Collection item by its index
     * @param <int> $index
     * @return <HTMLElement>
     */
    public function item( int $index )
    {
        if( ! $this->exists( $index ) )
            return null;
        
        return $this->items[$index];
    }
    
    /**
     * Indicates if an item exists in Collection at given index.
     * @param <int> $index
     * @return <bool>
     */
    public function exists( int $index )
    {
        return isset( $this->items[$index] );
    }
    
    /**
     * Returns the length of Collection items;
     * @return <int>
     */
    public function length()
    {
        return count($this->items);
    }
    
    /**
     * Returns an item by its Tag Name.
     * @param string $tagname
     * @return HTMLElement
     */
    public function getByTagName( string $tagname )
    {
        foreach( $this->items as $item )
        {
            if( ! method_exists( $item, 'getTagName' ) )
                continue;
            
            $tag = $item->getTagName();
            
            if( $tag === $tagname )
                return $item;
        }
    }
    
    /**
     * Returns the first child of collection.
     * @return <NULL|HTMLElement>
     */
    public function firstChild()
    {
        if( ! $this->exists( 0 ) )
            return NULL;
        
        return $this->item(0);
    }
    
    /**
     * Returns the last child of collection.
     * @return <NULL|HTMLElement>
     */
    public function lastChild()
    {
        $last = $this->length() - 1;
        
        if( ! $this->exists( $last ) )
            return NULL;
        
        return $this->item($last);
    }
    
    // METHODS FROM ITERATOR INTERFACE ========================================
    /**
     * Rewind the Iterator cursor.
     */
    public function rewind()
    {
        $this->cursor = 0;
    }
    
    /**
     * Returns the current item.
     * @return <NULL|HTMLElement>
     */
    public function current()
    {
        return $this->item($this->cursor);
    }
    
    /**
     * Returns current cursor.
     * @return <int>
     */
    public function key()
    {
        return $this->cursor;
    }
    
    /**
     * Advance cursor to next position.
     */
    public function next()
    {
        ++$this->cursor;
    }
    
    /**
     * Same as exists method.
     * @return <bool>
     */
    public function valid()
    {
        return $this->exists($this->cursor);
    }
    
    // METHODS FROM ARRAYACCESS INTERFACE =====================================
    /**
     * Alias for add method.
     * @param <int> $offset
     * @param <HTMLElement> $value
     */
    public function offsetSet( $offset, $value )
    {
        $this->add( $value, $offset );
    }
    
    /**
     * Alias for exists method
     * @param <int> $offset
     * @return <bool>
     */
    public function offsetExists( $offset )
    {
        return $this->exists( $offset );
    }
    
    /**
     * Alias for delete method.
     * @param <int> $offset
     * @return <bool>
     */
    public function offsetUnset( $offset )
    {
        return $this->delete( $offset );
    }
    
    /**
     * Alias for item method
     * @param <int> $offset
     * @return <HTMLElement>
     */
    public function offsetGet( $offset )
    {
        return $this->item( $offset );
    }
    
    // METHODS FROM COUNTABLE INTERFACE =======================================
    /**
     * Alias for length method
     * @return <int>
     */
    public function count()
    {
        return $this->length();
    }
}
