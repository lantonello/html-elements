<?php
include_once __DIR__.'/../vendor/autoload.php';

use Stigma\HTMLElements\HTMLBuilder;

// First, lets create the page passing a title
$page = HTMLBuilder::page('HTMLElements Sample Page');

// Add some Metadata
$page->head()->addMeta(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
$page->head()->addMeta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);
$page->head()->addMeta(['name' => 'description', 'content' => 'Some Gryphon samples']);
$page->head()->addMeta(['name' => 'author', 'content' => 'Leandro Antonello']);

// Lets include the Bootstrap CSS
$page->head()->addLink(['rel' => 'stylesheet', 'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' ]);
$page->head()->addLink(['rel' => 'stylesheet', 'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' ]);

// Creates a custom style
$raw = 'body { padding-top: 50px; } '. PHP_EOL .'.starter-template { padding: 40px 15px; text-align: center; }';
$page->head()->add( HTMLBuilder::style() )->text( $raw );

// Now, we will build a <nav>
$nav = $page->body()->add( HTMLBuilder::nav(['class' => 'navbar navbar-inverse navbar-fixed-top']) );

// The first div.container
$container = $nav->add( HTMLBuilder::div(['class' => 'container']) );

// Inside the div.container, adds a div.navbar-header
$nav_header = $container->add( HTMLBuilder::div(['class' => 'navbar-header']) );

// Now, adds a button to div.navbar-header
$button = $nav_header->add( HTMLBuilder::button(['class'=>'navbar-toggle collapsed', 'data-toggle'=>'collapse', 'data-target'=>'#navbar', 'aria-expanded'=>'false', 'aria-controls'=>'navbar']) );

// Adds some button children
$button->add( HTMLBuilder::span(['class' => 'sr-only']) )->text('Toggle navigation');
$button->add( HTMLBuilder::span(['class' => 'icon-bar']) );
$button->add( HTMLBuilder::span(['class' => 'icon-bar']) );
$button->add( HTMLBuilder::span(['class' => 'icon-bar']) );

// Adds an anchor to div.navbar-header
$nav_header->add( HTMLBuilder::anchor(['class' => 'navbar-brand', 'href' => '#']) )->text('Gryphon Bootstrap Sample');

// Adds the div.navbar to div.container
$navbar = $container->add( HTMLBuilder::div(['id' => 'navbar', 'class' => 'collapse navbar-collapse']) );

// Creates the navbar list
$ul = $navbar->add( HTMLBuilder::ul(['class' => 'nav navbar-nav']) );
$ul->add( HTMLBuilder::li(['class' => 'active']) )->add( HTMLBuilder::anchor(['href' => '#']) )->text('Home');
$ul->add( HTMLBuilder::li() )->add( HTMLBuilder::anchor(['href' => '#about']) )->text('About');
$ul->add( HTMLBuilder::li() )->add( HTMLBuilder::anchor(['href' => '#contact']) )->text('Contact');

// The nav is ready, now for the content area
// We don't need a reference to next div.container
$page->body()->add( HTMLBuilder::div(['class' => 'container']) );

// We need reference the next div.starter-template
$temp = $page->body()->getChildAt(1)->add( HTMLBuilder::div(['class' => 'starter-template']) );

$temp->add( HTMLBuilder::heading(1) )->text('Bootstrap starter template');
$temp->add( HTMLBuilder::p(['class' => 'lead']) )->text('Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.');

// Bootstrap wants the script to be added on end of body, so...
$page->body()->add( HTMLBuilder::script(['src' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js']) );
$page->body()->add( HTMLBuilder::script(['src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js']) );

echo $page;
