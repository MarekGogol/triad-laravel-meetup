<?php

namespace App\Admin\Buttons;

use Admin\Eloquent\AdminModel;
use Admin\Helpers\Button;
use Illuminate\Support\Collection;

class MyCustomButton extends Button
{
    /*
     * Button type
     * button|action|multiple
     */
    public $type = 'button';

    //Name of button on hover
    public $name = 'MyCustomButton';

    //Button classes
    public $class = 'btn-default';

    //Button Icon
    public $icon = 'fa-gift';

    /**
     * Here you can set your custom properties for each row
     * @param Admin\Models\Model $row
     */
    public function __construct($row)
    {
        $this->active = true;
    }

    /**
     * Firing callback on press button
     * @param Admin\Models\Model $row
     * @return object
     */
    public function fire(AdminModel $row)
    {
        //...

        return $this->message('Your action is done!');
    }

    /**
     * Firing callback on press action for multiple items
     * @param Illuminate\Support\Collection $rows
     */
    // public function fireMultiple(Collection $rows)
    // {
    //     return $this->error('Your multiple rows action callback.');
    // }
}