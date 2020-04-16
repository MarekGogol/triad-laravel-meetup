<?php

/*
|--------------------------------------------------------------------------
| Crud Admin configuration
|--------------------------------------------------------------------------
|
| This is general configuration file for CrudAdmin. Any other configuration
| settings you can find at https://docs.crudadmin.com/#/config or in additional
| config file /vendor/crudadmin/crudadmin/src/config/config_additional.php
|
*/

return [
    /*
     * Administration name
     */
    'name' => 'My Admin',

    /*
     * Admin locale (en|sk|cs)
     */
    'locale' => 'sk',

    /*
     * License key
     */
    'license_key' => 'campaign2019',

    /*
     * Administration groups names
     */
    'groups' => [
        'settings' => ['Nastavenia', 'fa-gear'],
    ],

    /*
     * Add multi language mutations support
     */
    'localization' => true,

    /*
     * Gettext support
     */
    'gettext' => true,

    /*
     * Frontend editor for simple text translates
     */
    'frontend_editor' => true,

    /*
     * Sitebuilder support into fields.
     * Group::sitebuilder()
     */
    'sitebuilder' => false,

    /*
     * Seo module for all routes
     */
    'seo' => true,

    /*
     * Slugs History for 302 redirects of changed slugs
     */
    'sluggable_history' => false,

    /*
     * Admin roles support
     */
    'admin_roles' => true,
];
