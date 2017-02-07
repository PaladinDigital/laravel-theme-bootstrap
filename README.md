# Laravel Theme: Bootstrap

This is a base theme which can be used as-is or extended by other themes.

## Installation

Add the require in your composer.json file:

    "require": {
      ...
      "paladindigital/laravel-bootstrap": "*"
    }

If you dont already have the service provider registered in your config/app.php then add it also

    'providers' => [
        ...
        PaladinDigital\LaravelThemes\ServiceProvider::class,
    ]
    
## Theme Usage

The master layout provides most commonly used yields (listed below), and uses the container-fluid css class for content wrapping.

### Yields
 - head
 - meta
 - styles
 - navigation
 - secondary_navigation
 - content
 - sidebar
 - widgets
 - footer
 - scripts