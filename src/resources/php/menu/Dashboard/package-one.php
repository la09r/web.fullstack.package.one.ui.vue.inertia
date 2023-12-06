<?php // php artisan route:list --sort=name

$access = false; // Illuminate\Support\Facades\Gate::allows('ACCESS');

$itemsNotUsersAccess = [
    [
        'title' => __('Index'),
        'link'  => route('package.one.web.route.index'),
    ],
    [
        'title' => __('List'),
        'link'  => route('package.one.web.route.list'),
    ],
    [
        'title' => __('Settings'),
        'link'  => route('package.one.web.route.settings'),
    ],

];

$itemsWithUsersAccess = [

];

if(!$access)
{
    return $itemsNotUsersAccess;
}
else
{
    return [...$itemsNotUsersAccess, ...$itemsWithUsersAccess];
}
