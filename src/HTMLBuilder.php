<?php
namespace Stigma\HTMLElements;

/**
 * Static HTML Builder
 *
 * @author Leandro Antonello <lantonello@gmail.com>
 * @version 1.0
 * @copyright (c) 2017, HTMLElements
 */
class HTMLBuilder
{
    // PUBLIC STATIC METHODS ==================================================
    /**
     * Returns a new HTML Document.
     * @param string $page_title
     * @param string $language
     * @param string $content_type
     * @return HTMLDocument
     */
    public static function page( string $page_title, string $language = 'en', string $content_type = HTMLDocument::CT_HYPERTEXT_MARKUP_LANGUAGE )
    {
        return new \Stigma\HTMLElements\HTMLDocument( $page_title, $language, $content_type );
    }
    
    /**
     * Returns a new Address element.
     * @param array $attributes Array with element attributes.
     * @return Address
     */
    public static function address( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Address($attributes);
    }
    
    /**
     * Returns a new Anchor element.
     * @param array $attributes Array with element attributes.
     * @return Anchor
     */
    public static function anchor( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Anchor($attributes);
    }
    
    /**
     * Returns a new Article element.
     * @param array $attributes Array with element attributes.
     * @return Article
     */
    public static function article( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Article($attributes);
    }
    
    /**
     * Returns a new Aside element.
     * @param array $attributes Array with element attributes.
     * @return Aside
     */
    public static function aside( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Aside($attributes);
    }
    
    /**
     * Returns a new Body element.
     * @param array $attributes Array with element attributes.
     * @return Body
     */
    public static function body( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Body($attributes);
    }
    
    /**
     * Returns a new Button element.
     * @param array $attributes Array with element attributes.
     * @return Button
     */
    public static function button( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Button( \Stigma\HTMLElements\Button::BT_BUTTON, $attributes);
    }
    
    /**
     * Returns a new Submit Button element.
     * @param array $attributes Array with element attributes.
     * @return Button
     */
    public static function submitButton( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Button( \Stigma\HTMLElements\Button::BT_SUBMIT, $attributes);
    }
    
    /**
     * Returns a new Reset Button element.
     * @param array $attributes Array with element attributes.
     * @return Button
     */
    public static function resetButton( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Button( \Stigma\HTMLElements\Button::BT_RESET, $attributes);
    }
    
    /**
     * Returns a new Code element.
     * @param array $attributes Array with element attributes.
     * @return Code
     */
    public static function code( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Code($attributes);
    }
    
    /**
     * Returns a new Div element.
     * @param array $attributes Array with element attributes.
     * @return Div
     */
    public static function div( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Div($attributes);
    }
    
    /**
     * Returns a new Footer element.
     * @param array $attributes Array with element attributes.
     * @return Footer
     */
    public static function footer( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Footer($attributes);
    }
    
    /**
     * Returns a new Head element.
     * @param string $charset The charset of document. Defaults to UTF-8.
     * @return Head
     */
    public static function head( astring $charset = Head::ENC_UTF8 )
    {
        return new \Stigma\HTMLElements\Head($charset, $attributes);
    }
    
    /**
     * Returns a new Heading element.
     * @param int $level The Heading level, from 1 to 6.
     * @param array $attributes Array with element attributes.
     * @return Heading
     */
    public static function heading( int $level, array $attributes = null )
    {
        return new \Stigma\HTMLElements\Heading($level, $attributes);
    }
    
    /**
     * Returns a new Image element.
     * @param array $attributes Array with element attributes.
     * @return Image
     */
    public static function image( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Image($attributes);
    }
    
    /**
     * Returns a new Input element.
     * @param string $type Specifies the Type of Input. See HTMLInput::TYPE_* constants.
     * @param array $attributes Array with element attributes.
     * @return Input
     */
    public static function input( string $type, array $attributes = null )
    {
        return new \Stigma\HTMLElements\Input($type, $attributes);
    }
    
    /**
     * Returns a new Label element.
     * @param string $for The id of element that this label is attached.
     * @return Label
     */
    public static function label( string $for = null )
    {
        return new \Stigma\HTMLElements\Label( $for );
    }
    
    /**
     * Returns a new LineBreak element.
     * @param array $attributes Array with element attributes.
     * @return LineBreak
     */
    public static function br( array $attributes = null )
    {
        return new \Stigma\HTMLElements\LineBreak($attributes);
    }
    
    /**
     * Returns a new LineBreak element.
     * @param array $attributes Array with element attributes.
     * @return LineBreak
     */
    public static function lineBreak( array $attributes = null )
    {
        return new \Stigma\HTMLElements\LineBreak($attributes);
    }
    
    /**
     * Returns a new Link element.
     * @param array $attributes Array with element attributes.
     * @return Link
     */
    public static function link( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Link($attributes);
    }
    
    /**
     * Returns a new ListItem element.
     * @param array $attributes Array with element attributes.
     * @return ListItem
     */
    public static function listItem( array $attributes = null )
    {
        return new \Stigma\HTMLElements\ListItem($attributes);
    }
    
    /**
     * Returns a new ListItem element.
     * @param array $attributes Array with element attributes.
     * @return ListItem
     */
    public static function li( array $attributes = null )
    {
        return new \Stigma\HTMLElements\ListItem($attributes);
    }
    
    /**
     * Returns a new Meta element.
     * @param array $attributes Array with element attributes.
     * @return Meta
     */
    public static function meta( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Meta($attributes);
    }
    
    /**
     * Returns a new Nav element.
     * @param array $attributes Array with element attributes.
     * @return Nav
     */
    public static function nav( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Nav($attributes);
    }
    
    /**
     * Returns a new Option element.
     * @param array $attributes Array with element attributes.
     * @return Option
     */
    public static function option( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Option($attributes);
    }
    
    /**
     * Returns a new OptionGroup element.
     * @param array $attributes Array with element attributes.
     * @return OptionGroup
     */
    public static function optionGroup( array $attributes = null )
    {
        return new \Stigma\HTMLElements\OptionGroup($attributes);
    }
    
    /**
     * Returns a new OptionGroup element.
     * @param array $attributes Array with element attributes.
     * @return OptionGroup
     */
    public static function optGroup( array $attributes = null )
    {
        return new \Stigma\HTMLElements\OptionGroup($attributes);
    }
    
    /**
     * Returns a new OrderedList element.
     * @param array $attributes Array with element attributes.
     * @return OrderedList
     */
    public static function orderedList( array $attributes = null )
    {
        return new \Stigma\HTMLElements\OrderedList($attributes);
    }
    
    /**
     * Returns a new OrderedList element.
     * @param array $attributes Array with element attributes.
     * @return OrderedList
     */
    public static function ol( array $attributes = null )
    {
        return new \Stigma\HTMLElements\OrderedList($attributes);
    }
    
    /**
     * Returns a new Paragraph element.
     * @param array $attributes Array with element attributes.
     * @return Paragraph
     */
    public static function paragraph( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Paragraph($attributes);
    }
    
    /**
     * Returns a new Paragraph element.
     * @param array $attributes Array with element attributes.
     * @return Paragraph
     */
    public static function p( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Paragraph($attributes);
    }
    
    /**
     * Returns a new Script element.
     * @param array $attributes Array with element attributes.
     * @return Script
     */
    public static function script( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Script($attributes);
    }
    
    /**
     * Returns a new Select element.
     * @param array $attributes Array with element attributes.
     * @return Select
     */
    public static function select( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Select($attributes);
    }
    
    /**
     * Returns a new Span element.
     * @param array $attributes Array with element attributes.
     * @return Span
     */
    public static function span( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Span($attributes);
    }
    
    /**
     * Returns a new Style element.
     * @param array $attributes Array with element attributes.
     * @return Style
     */
    public static function style( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Style($attributes);
    }
    
    /**
     * Returns a new Table element.
     * @param array $attributes Array with element attributes.
     * @return Table
     */
    public static function table( array $attributes = null )
    {
        return new \Stigma\HTMLElements\Table($attributes);
    }
    
    /**
     * Returns a new TableBody element.
     * @param array $attributes Array with element attributes.
     * @return TableBody
     */
    public static function tableBody( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableBody($attributes);
    }
    
    /**
     * Returns a new TableBody element.
     * @param array $attributes Array with element attributes.
     * @return TableBody
     */
    public static function tbody( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableBody($attributes);
    }
    
    /**
     * Returns a new TableCell element.
     * @param string $tag The tag to be use in this cell. See TableCell::CELL_* constants.
     * @param array $attributes Array with element attributes.
     * @return TableCell
     */
    public static function tableCell( string $tag = TableCell::CELL_TD, array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableCell($tag, $attributes);
    }
    
    /**
     * Returns a new TableCell element.
     * @param array $attributes Array with element attributes.
     * @return TableCell
     */
    public static function td( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableCell( TableCell::CELL_TD, $attributes );
    }
    
    /**
     * Returns a new TableCell element.
     * @param array $attributes Array with element attributes.
     * @return TableCell
     */
    public static function th( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableCell( TableCell::CELL_TH, $attributes );
    }
    
    /**
     * Returns a new TableFoot element.
     * @param array $attributes Array with element attributes.
     * @return TableFoot
     */
    public static function tableFoot( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableFoot($attributes);
    }
    
    /**
     * Returns a new TableFoot element.
     * @param array $attributes Array with element attributes.
     * @return TableFoot
     */
    public static function tfoot( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableFoot($attributes);
    }
    
    /**
     * Returns a new TableHead element.
     * @param array $attributes Array with element attributes.
     * @return TableHead
     */
    public static function tableHead( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableHead($attributes);
    }
    
    /**
     * Returns a new TableHead element.
     * @param array $attributes Array with element attributes.
     * @return TableHead
     */
    public static function thead( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableHead($attributes);
    }
    
    /**
     * Returns a new TableRow element.
     * @param array $attributes Array with element attributes.
     * @return TableRow
     */
    public static function tableRow( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableRow($attributes);
    }
    
    /**
     * Returns a new TableRow element.
     * @param array $attributes Array with element attributes.
     * @return TableRow
     */
    public static function tr( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TableRow($attributes);
    }
    
    /**
     * Returns a new TextArea element.
     * @param array $attributes Array with element attributes.
     * @return TextArea
     */
    public static function textArea( array $attributes = null )
    {
        return new \Stigma\HTMLElements\TextArea($attributes);
    }
    
    /**
     * Returns a new UnorderedList element.
     * @param array $attributes Array with element attributes.
     * @return UnorderedList
     */
    public static function unorderedList( array $attributes = null )
    {
        return new \Stigma\HTMLElements\UnorderedList($attributes);
    }
    
    /**
     * Returns a new UnorderedList element.
     * @param array $attributes Array with element attributes.
     * @return UnorderedList
     */
    public static function ul( array $attributes = null )
    {
        return new \Stigma\HTMLElements\UnorderedList($attributes);
    }
}
