<?php
return array(
    'title' => 'Snow Forecast',
    'single' => 'Forecast',
    'model' => 'SnowForecast',
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
        'code' => array(
            'title' => 'Code',
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
            'sort_field' => 'RegionName',
        ),
        'code' => array(
            'title' => 'Code',
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
            'sort_field' => 'RegionName',
        ),
    ),
    'form_width' => 800,
);
