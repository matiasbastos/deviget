<?php
return array(
    'title' => 'Centres',
    'single' => 'centre',
    'model' => 'Centre',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'centreName' => array(
            'title' => 'Title',
        ),
        'region' => array(
            'title' => 'Region',
            'relationship' => 'region',
            'select' => "(:table).RegionName",
        ),
        'experiences' => array(
            'title' => 'Experiences',
            'relationship' => 'experiences',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'centreName' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'region' => array(
            'type' => 'relationship',
            'title' => 'Region*',
            'name_field' => 'RegionName',
            'options_sort_field' => 'RegionName',
        ),
        'experiences' => array(
            'type' => 'relationship',
            'title' => 'Experiences* (obligatory for pth)',
            'name_field' => 'title',
        ),
        'sspId' => array(
            'title' => 'SSP Album',
            'type' => 'number'
        ),
        'enabled' => array(
            'title' => 'Enabled',
            'type' => 'bool'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'centreName' => 'required',
        'ResortID' => 'required',
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
        'centreName',
    ),
);





