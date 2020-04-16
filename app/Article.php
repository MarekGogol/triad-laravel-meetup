<?php

namespace App;

use Admin\Eloquent\AdminModel;
use Admin\Fields\Group;

class Article extends AdminModel
{
    /*
     * Model created date, for ordering tables in database and in user interface
     */
    protected $migration_date = '2020-04-16 16:04:57';

    /*
     * Template name
     */
    protected $name = 'Články';

    /*
     * Automatic model slugs
     */
    protected $sluggable = 'name';

    /*
     * Automatic form and database generation
     * @name - field name
     * @placeholder - field placeholder
     * @type - field type | string/text/editor/select/integer/decimal/file/password/data/checkbox
     * ... other validation methods from laravel
     */
    protected $fields = [
        'name' => 'name:Názov|placeholder:Zadajte názov článku|required|max:90',
        'content' => 'name:Obsah článku|type:editor|required',
        'authors' => 'name:Zoznam autorov|belongsToMany:authors,name|canAdd',
        'image' => 'name:Obrazok|type:file|required|image',
    ];
}