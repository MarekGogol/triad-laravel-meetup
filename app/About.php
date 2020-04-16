<?php

namespace App;

use Admin\Eloquent\AdminModel;
use Admin\Fields\Group;

class About extends AdminModel
{
    /*
     * Model created date, for ordering tables in database and in user interface
     */
    protected $migration_date = '2020-04-16 13:58:43';

    /*
     * Template name
     */
    protected $name = 'O nás';

    protected $single = true;

    /*
     * Automatic form and database generator by fields list
     * :name - field name
     * :type - field type (string/text/editor/select/integer/decimal/file/password/date/datetime/time/checkbox/radio)
     * ... other validation methods from laravel
     */
    public function fields()
    {
        return [
            'name' => 'name:Názov|placeholder:Zadajte názov článku|required|max:90|locale',
            'content' => 'name:Obsah článku|type:editor|required|locale',
        ];
    }
}