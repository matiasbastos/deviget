<?php
return array(
    'title' => 'Resort Best Season',
    'single' => 'best season',
    'model' => 'ResortBestSeason',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'region' => array(
            'title' => 'Region',
            'relationship' => 'region',
            'select' => "(:table).RegionName",
        ),
        'experience' => array(
            'title' => 'Experiences',
            'relationship' => 'experiences',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
        'created_at' => array(
            'title' => 'Created',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'region' => array(
            'type' => 'relationship',
            'title' => 'Region',
            'name_field' => 'RegionName',
            'options_sort_field' => 'RegionName',
        ),
        'experiences' => array(
            'type' => 'relationship',
            'title' => 'Experiences',
            'name_field' => 'title',
        ),
        'january' => array(
            'title' => 'January',
            'type' => 'number'
        ),
        'february' => array(
            'title' => 'February',
            'type' => 'number'
        ),
        'march' => array(
            'title' => 'March',
            'type' => 'number'
        ),
        'april' => array(
            'title' => 'April',
            'type' => 'number'
        ),
        'may' => array(
            'title' => 'May',
            'type' => 'number'
        ),
        'june' => array(
            'title' => 'June',
            'type' => 'number'
        ),
        'july' => array(
            'title' => 'July',
            'type' => 'number'
        ),
        'august' => array(
            'title' => 'August',
            'type' => 'number'
        ),
        'september' => array(
            'title' => 'September',
            'type' => 'number'
        ),
        'october' => array(
            'title' => 'October',
            'type' => 'number'
        ),
        'november' => array(
            'title' => 'November',
            'type' => 'number'
        ),
        'december' => array(
            'title' => 'December',
            'type' => 'number'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'region' => array(
            'type' => 'relationship',
            'title' => 'Region',
            'name_field' => 'RegionName',
        ),
    ),
);



