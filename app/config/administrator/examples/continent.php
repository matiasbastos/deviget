<?php
return array(
    'title' => 'Continent',
    'single' => 'continent',
    'model' => 'Continent',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'code' => array(
            'title' => 'Code',
        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'code' => array(
            'title' => 'Code',
            'type' => 'text'
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'code' => 'required',
        'name' => 'required',
    ),
);



