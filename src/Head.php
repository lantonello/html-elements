<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\HTMLElement;
use Stigma\HTMLElements\Meta;
use Stigma\HTMLElements\Link;
use Stigma\HTMLElements\Style;
use Stigma\HTMLElements\Script;

/**
 * Represents the Html Head
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class Head extends HTMLElement
{
    // PROPERTIES =============================================================
    /** @var string Holds the document character set. */
    protected $charset;

    // CONSTANTS ===============================================================
    // Character Encodings
    const ENC_UTF8           = 'utf-8';
    const ENC_IBM866         = 'ibm866';
    const ENC_ISO_8859_2     = 'iso-8859-2';
    const ENC_ISO_8859_3     = 'iso-8859-3';
    const ENC_ISO_8859_4     = 'iso-8859-4';
    const ENC_ISO_8859_5     = 'iso-8859-5';
    const ENC_ISO_8859_6     = 'iso-8859-6';
    const ENC_ISO_8859_7     = 'iso-8859-7';
    const ENC_ISO_8859_8     = 'iso-8859-8';
    const ENC_ISO_8859_8_I   = 'iso-8859-8-i';
    const ENC_ISO_8859_10    = 'iso-8859-10';
    const ENC_ISO_8859_13    = 'iso-8859-13';
    const ENC_ISO_8859_14    = 'iso-8859-14';
    const ENC_ISO_8859_15    = 'iso-8859-15';
    const ENC_ISO_8859_16    = 'iso-8859-16';
    const ENC_KOI8_R         = 'koi8-r';
    const ENC_KOI8_U         = 'koi8-u';
    const ENC_MACINTOSH      = 'macintosh';
    const ENC_WINDOWS_874    = 'windows-874';
    const ENC_WINDOWS_1250   = 'windows-1250';
    const ENC_WINDOWS_1251   = 'windows-1251';
    const ENC_WINDOWS_1252   = 'windows-1252';
    const ENC_WINDOWS_1253   = 'windows-1253';
    const ENC_WINDOWS_1254   = 'windows-1254';
    const ENC_WINDOWS_1255   = 'windows-1255';
    const ENC_WINDOWS_1256   = 'windows-1256';
    const ENC_WINDOWS_1257   = 'windows-1257';
    const ENC_WINDOWS_1258   = 'windows-1258';
    const ENC_X_MAC_CYRILLIC = 'x-mac-cyrillic';
    const ENC_GBK            = 'gbk';
    const ENC_GB18030        = 'gb18030';
    const ENC_BIG5           = 'big5';
    const ENC_EUC_JP         = 'euc-jp';
    const ENC_ISO_2022_JP    = 'iso-2022-jp';
    const ENC_SHIFT_JIS      = 'shift-jis';
    const ENC_EUC_KR         = 'euc-kr';
    const ENC_UTF_16BE       = 'utf-16be';
    const ENC_UTF_16LE       = 'utf-16';
    const ENC_X_USER_DEFINED = 'x-user-defined';

    // HTML ELEMENT ATTRIBUTES ================================================
    
    // CONSTRUCTOR ============================================================
    /**
     * Creates a new Head element
     * @param string $charset
     */
    public function __construct( string $charset = self::ENC_UTF8 )
    {
        parent::__construct( 'head', self::TAG_BLOCK );
        
        $this->charset = $charset;
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function toString()
    {
        // Starts the Tag
        $head = $this->openTag() . PHP_EOL;
        
        // Starts with charset
        $head .= '<meta charset="'. $this->charset .'"/>' . PHP_EOL;
        
        // Gets all metadata
        foreach( $this->children as $child )
        {
            if( $child->getTagName() === 'meta' )
                $head .= $child->toString() . PHP_EOL;
        }
        
        // After Metadata, puts the Title
        $head .= $this->children->getByTagName('title')->toString();
        
        // Now, the others children
        foreach( $this->children as $child )
        {
            $tag_name = $child->getTagName();
            
            if( ($tag_name === 'meta') || ($tag_name === 'title') )
                continue;
            
            $head .= $child->toString() . PHP_EOL;
        }
        
        // Close tag
        $head .= $this->closeTag();
        
        return $head;
    }
    
    /**
     * Sets the Title tag.
     * @param string $title
     */
    public function setTitle( string $title )
    {
        $tt = new HTMLElement('title', self::TAG_BLOCK);
        $tt->text( $title );
        
        $this->add( $tt );
    }
    
    /**
     * Adds a new meta tag to this head.
     * @param array $attrs
     */
    public function addMeta( array $attrs = null )
    {
        $this->add( new Meta($attrs) );
    }
    
    /**
     * Adds a new link tag to this head.
     * @param array $attrs
     */
    public function addLink( array $attrs = null )
    {
        $this->add( new Link($attrs) );
    }
    
    /**
     * Adds a new Style to this Head.
     * @param array $attrs
     */
    public function addStyle( array $attrs = null )
    {
        $this->add( new Style($attrs) );
    }
    
    /**
     * Adds a new Script to this Head
     * @param array $attrs
     */
    public function addScript( array $attrs = null )
    {
        $this->add( new Script($attrs) );
    }
}
