<?php

namespace App;

use Admin\Eloquent\AdminModel;
use Admin\Fields\Group;

class Author extends AdminModel
{
    /*
     * Model created date, for ordering tables in database and in user interface
     */
    protected $migration_date = '2020-04-16 16:01:28';

    /*
     * Template name
     */
    protected $name = 'Autori';

    /*
     * Automatic form and database generator by fields list
     * :name - field name
     * :type - field type (string/text/editor/select/integer/decimal/file/password/date/datetime/time/checkbox/radio)
     * ... other validation methods from laravel
     */
    public function fields()
    {
        return [
            'name' => 'name:Meno a priezvisko autora|required|min:5|max:30',
            'description' => 'name:Popis autora|type:text',
            'image' => 'name:Obrazok autora|type:file|required|image',
        ];
    }
}