
<?php
/**
 * Countries model config
 */
return array(
    'title' => 'Countries',
    'single' => 'country',
    'model' => 'Country',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'continent' => array(
            'title' => 'Continent',
            'relationship' => 'continent',
            'select' => "(:table).name",
        ),
        'countryName' => array(
            'title' => 'Country',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'continent' => array(
            'type' => 'relationship',
            'title' => 'Continent',
            'name_field' => 'name',
            'sort_field' => 'name',
        ),
        'countryCode' => array(
            'title' => 'Code',
            'type' => 'text',
            'limit' => 3
        ),
        'countryName' => array(
            'title' => 'Country',
            'type' => 'text'
        ),
        'ISO_NUM' => array(
            'title' => 'ISO_NUM',
            'type' => 'text',
            'limit' => 3
        ),
        'ISO_A2' => array(
            'title' => 'ISO_A2',
            'type' => 'text',
            'limit' => 2
        ),
        'sspId' => array(
            'title' => 'SSP Galery ID',
            'type' => 'number'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'countryName' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'countryName' => array(
            'title' => 'Country',
        ),
    ),
);

