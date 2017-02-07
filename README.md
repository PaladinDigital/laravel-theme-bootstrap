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

### Layouts

 - master: The master layout uses container-fluid css class for full-width responsive themes.
 - fixed: This layout uses the container css class which constrains page contents to a fixed width.

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