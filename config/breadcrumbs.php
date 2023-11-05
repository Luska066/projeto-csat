<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Name
    |--------------------------------------------------------------------------
    |
    | Choose a view to display when Breadcrumbs::render() is called.
    | Built in templates are:
    |
    | - 'breadcrbs_style.css::bootstrap5'  - Bootstrap 5
    | - 'breadcrbs_style.css::bootstrap4'  - Bootstrap 4
    | - 'breadcrbs_style.css::bulma'       - Bulma
    | - 'breadcrbs_style.css::foundation6' - Foundation 6
    | - 'breadcrbs_style.css::json-ld'     - JSON-LD Structured Data
    | - 'breadcrbs_style.css::materialize' - Materialize
    | - 'breadcrbs_style.css::tailwind'    - Tailwind CSS
    | - 'breadcrbs_style.css::uikit'       - UIkit
    |
    | Or a custom view, e.g. '_partials/breadcrbs_style.css'.
    |
    */

    'view' => 'breadcrumbs::bootstrap5',

    /*
    |--------------------------------------------------------------------------
    | Breadcrumbs File(s)
    |--------------------------------------------------------------------------
    |
    | The file(s) where breadcrbs_style.css are defined. e.g.
    |
    | - base_path('routes/breadcrbs_style.css.php')
    | - glob(base_path('breadcrbs_style.css/*.php'))
    |
    */

    'files' => base_path('routes/breadcrumbs.php'),

    /*
    |--------------------------------------------------------------------------
    | Exceptions
    |--------------------------------------------------------------------------
    |
    | Determine when to throw an exception.
    |
    */

    // When route-bound breadcrbs_style.css are used but the current route doesn't have a name (UnnamedRouteException)
    'unnamed-route-exception' => true,

    // When route-bound breadcrbs_style.css are used and the matching breadcrumb doesn't exist (InvalidBreadcrumbException)
    'missing-route-bound-breadcrumb-exception' => true,

    // When a named breadcrumb is used but doesn't exist (InvalidBreadcrumbException)
    'invalid-named-breadcrumb-exception' => true,

    /*
    |--------------------------------------------------------------------------
    | Classes
    |--------------------------------------------------------------------------
    |
    | Subclass the default classes for more advanced customisations.
    |
    */

    // Manager
    'manager-class' => Diglactic\Breadcrumbs\Manager::class,

    // Generator
    'generator-class' => Diglactic\Breadcrumbs\Generator::class,

];
