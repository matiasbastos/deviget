<?php
return array(
    'title' => 'Country Texts',
    'single' => 'Country Text',
    'model' => 'CountryText',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'country' => array(
            'title' => 'Country',
            'relationship' => 'country',
            'select' => "(:table).countryName",
        ),
        'countryText' => array(
            'title' => 'Text',
            'output' => '<div style="height:150px;overflow: hidden;">(:value)</div>',
        ),
        'countryTag' => array(
            'title' => 'Title',
        ),
        'countryTextPriority' => array(
            'title' => 'Priority',
        ),
        'planet_sites' => array(
            'title' => 'Sites',
            'relationship' => 'planet_sites',
            'select' => "GROUP_CONCAT((:table).domain SEPARATOR ', ')",
        ),
        'experience' => array(
            'title' => 'Experience',
            'relationship' => 'experiences',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
        'liveaboard' => array(
            'title' => 'Liveaboard',
            'select' => "IF((:table).liveaboard, 'Yes', 'No')",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'country' => array(
            'type' => 'relationship',
            'title' => 'Country',
            'name_field' => 'countryName',
        ),
        'countryText' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'countryTag' => array(
            'type' => 'text',
            'title' => 'Title',
        ),
        'countryTextPriority' => array(
            'type' => 'number',
            'title' => 'Priority',
        ),
        'planet_sites' => array(
            'type' => 'relationship',
            'title' => 'Sites',
            'name_field' => 'siteName',
        ),
        'experiences' => array(
            'type' => 'relationship',
            'title' => 'Experiences',
            'name_field' => 'title',
        ),
        'liveaboard' => array(
            'type' => 'bool',
            'title' => 'Liveaboard',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'countryTag' => 'required',
        'countryText' => 'required',
        'countryTextPriority' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'country' => array(
            'type' => 'relationship',
            'title' => 'Country',
            'name_field' => 'countryName',
            'sort_field' => 'countryName',
        ),
    ),
    'form_width' => 800,
    'sort' => array(
        'field' => 'countryCode',
        'direction' => 'asc',
    ),
);





