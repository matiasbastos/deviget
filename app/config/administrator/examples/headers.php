<?php
/**
 * Header Images model config
 */
return array(
    'title' => 'Header Images',
    'single' => 'header',
    'model' => 'HeaderImage',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'img' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/headerimages/thumb/(:value)" height="100" />',
        ),
        'home_image' => array(
            'title' => 'Home Image',
            'select' => "IF((:table).home_image, 'Yes', 'No')",
        ),
        'landing_page_image' => array(
            'title' => 'Landing Page',
            'select' => "IF((:table).landing_page_image, 'Yes', 'No')",
        ),
        'all_exp' => array(
            'title' => 'All Exp.',
            'select' => "IF((:table).all_exp, 'Yes', 'No')",
        ),
        'experience' => array(
            'title' => 'Experience',
            'relationship' => 'experiences',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
        'region' => array(
            'title' => 'Region',
            'relationship' => 'region',
            'select' => "(:table).RegionName",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'img' => array(
            'title' => 'Image (1500 x 520)',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'uploads/headerimages/originals/',
            'size_limit' => 5,
            'sizes' => array(
                array(1500, 520, 'crop', 'uploads/headerimages/resized/', 100),
                array(600, 300, 'landscape', 'uploads/headerimages/thumb/', 100),
            )
        ),
        'home_image' => array(
            'type' => 'bool',
            'title' => 'Home Image',
        ),
        'landing_page_image' => array(
            'type' => 'bool',
            'title' => 'Landing Page Image (must have an experience asociated!)',
        ),
        'all_exp' => array(
            'type' => 'bool',
            'title' => 'For All Experiences',
        ),
        'experiences' => array(
            'type' => 'relationship',
            'title' => 'Experiences',
            'name_field' => 'title',
        ),
        'region' => array(
            'type' => 'relationship',
            'title' => 'Region',
            'name_field' => 'RegionName',
            'sort_field' => 'RegionName',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'title' => 'required',
        'img' => 'required',
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
);
