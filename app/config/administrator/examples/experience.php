<?php
return array(
    'title' => 'Experiences',
    'single' => 'experiencee',
    'model' => 'Experience',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'page' => array(
            'title' => 'page',
        ),
        'img' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/experiences/resized/(:value)" height="100" />',
        ),
        'enabled' => array(
            'title' => 'Enabled',
            'select' => "IF((:table).enabled, 'Yes', 'No')",
        ),
        'desc' => array(
            'title' => 'Description',
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
        'page' => array(
            'title' => 'Page',
            'type' => 'text'
        ),
        'img' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'uploads/experiences/originals/',
            'size_limit' => 5,
            'sizes' => array(
                array(470, 330, 'crop', 'uploads/experiences/resized/', 100),
            )
        ),
        'desc' => array(
            'title' => 'Description',
            'type' => 'wysiwyg'
        ),
        'ssp_id' => array(
            'title' => 'SSP Album',
            'type' => 'number'
        ),
        'enabled' => array(
            'type' => 'bool',
            'title' => 'Enabled',
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
        'page' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'id',
        'title' => array(
            'title' => 'Title',
        ),
        'page' => array(
            'title' => 'Page',
        ),
    ),
);

