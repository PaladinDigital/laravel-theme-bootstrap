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

### Laravel Support (Task Force Dev package)

If you install the [taskforcedev/laravel-support](https://github.com/taskforcedev/laravel-support) package this provides the ability to set a sitewide master layout which will be used in all views.

This saves you having to set the longform view name in all page templates.  Alternatively you could create your own shared data object.

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

### Page Meta

The following meta tags will be populated if provided by controllers (the easiest way to do this is to create a method on your base controller to populate a shared data object then pass this along with any extra page specific data to your views).

 - $charset : String (optional), default: UTF-8
 - $viewport : String (optional), default: width=device-width, initial-scale=1.0 
 - $keywords : Array of keywords or a comma-seperated string.
 - $description : String
 - $title : Page title
