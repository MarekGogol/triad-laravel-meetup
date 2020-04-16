<?php

namespace App;

use Admin\Eloquent\AdminModel;
use Admin\Fields\Group;

class ArticlesGallery extends AdminModel
{
    /*
     * Model created date, for ordering tables in database and in user interface
     */
    protected $migration_date = '2020-04-16 16:09:20';

    /*
     * Template name
     */
    protected $name = 'Galéria';

    /*
     * Additional model settings
     */
    protected $settings = [
        'increments' => false,
    ];

    /*
     * Model Parent
     * Eg. Article::class
     */
    protected $belongsToModel = Article::class;

    /*
     * Automatic form and database generator by fields list
     * :name - field name
     * :type - field type (string/text/editor/select/integer/decimal/file/password/date/datetime/time/checkbox/radio)
     * ... other validation methods from laravel
     */
    public function fields()
    {
        return [
            'image' => 'name:Obrázok|type:file|required|image|multirows',
        ];
    }
}