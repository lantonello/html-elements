# HTMLElements

Creates and manipulates HTML tags as Objects.

## Installing

The best way to install HTMLElements is using [Composer](http://getcomposer.org/):
```
$ composer require stigma/html-elements
```

Then, use the great Composer autoload
```php
<?php
require '/../vendor/autoload.php';

use Stigma\HTMLElements\HTMLBuilder;
```

### First, lets create the page
```php
$page = HTMLBuilder::page('HTMLElements Sample Page');
```

### Add Metadata to HTML Head
```php
// Add some Metadata
$page->head()->addMeta(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
$page->head()->addMeta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);
$page->head()->addMeta(['name' => 'description', 'content' => 'Some HtmlElements samples']);
```

### Include CSS from URL or from raw string
```php
// Lets include the Bootstrap CSS
$page->head()->addLink(['rel' => 'stylesheet', 'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' ]);
$page->head()->addLink(['rel' => 'stylesheet', 'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' ]);

// Creates a custom style
$raw = 'body { padding-top: 50px; } '. PHP_EOL .'.starter-template { padding: 40px 15px; text-align: center; }';
$page->head()->add( HTMLBuilder::style() )->text( $raw );
```

### Creates a full Bootstrap Nav element
```php
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
$nav_header->add( HTMLBuilder::anchor(['class' => 'navbar-brand', 'href' => '#']) )->text('HtmlElements Bootstrap Sample');

// Adds the div.navbar to div.container
$navbar = $container->add( HTMLBuilder::div(['id' => 'navbar', 'class' => 'collapse navbar-collapse']) );

// Creates the navbar list
$ul = $navbar->add( HTMLBuilder::ul(['class' => 'nav navbar-nav']) );
$ul->add( HTMLBuilder::li(['class' => 'active']) )->add( HTMLBuilder::anchor(['href' => '#']) )->text('Home');
$ul->add( HTMLBuilder::li() )->add( HTMLBuilder::anchor(['href' => '#about']) )->text('About');
$ul->add( HTMLBuilder::li() )->add( HTMLBuilder::anchor(['href' => '#contact']) )->text('Contact');
```

### Write the page content
```php
// We don't need a reference to next div.container
$page->body()->add( HTMLBuilder::div(['class' => 'container']) );

// We need reference the next div.starter-template
$temp = $page->body()->getChildAt(1)->add( HTMLBuilder::div(['class' => 'starter-template']) );

$temp->add( HTMLBuilder::heading(1) )->text('Bootstrap starter template');
$temp->add( HTMLBuilder::p(['class' => 'lead']) )->text('This entire page has been built with HTMLElements.');
```

### Now, add the javascript files
```php
// Bootstrap wants the script to be added on end of body, so...
$page->body()->add( HTMLBuilder::script(['src' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js']) );
$page->body()->add( HTMLBuilder::script(['src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js']) );
```

### Finally, output the page
```php
echo $page;
```

## Contributing

#### Bug Reports & Feature Requests

If you find a bug, please [opening an issue](https://github.com/lantonello/html-elements/issues/new) with the steps to reproduce the error.

If you'd like to request a new feature, feel free to [opening an issue](https://github.com/lantonello/html-elements/issues/new).

#### Development

Want to contribute? This is great!

We are looking for someone that can write the Tests.


## Team
![Leandro Antonello](https://avatars0.githubusercontent.com/u/15302760?v=3&s=120)
[Leandro Antonello](https://github.com/lantonello)


## License

This project is licensed under the [MIT License](https://github.com/lantonello/html-elements/blob/master/LICENSE)
Copyright (c) 2017 Leandro Antonello

