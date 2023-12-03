<?php
// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('HOME', route('home'));
});

Breadcrumbs::for('csat', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('CSAT', route('csat.index'));
});

Breadcrumbs::for('csat.index', function (BreadcrumbTrail $trail) {
    $trail->parent('csat');
    $trail->push('GERAL', route('csat.index'));
});

Breadcrumbs::for('csat.statistics', function (BreadcrumbTrail $trail) {
    $trail->parent('csat');
    $trail->push('STATISTICS', route('csat.statistics'));
});



