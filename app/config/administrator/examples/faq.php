<?php
/**
 * Header Images model config
 */
return array(
    'title' => 'Faq',
    'single' => 'faq',
    'model' => 'Faq',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'author' => array(
            'title' => 'Author',
        ),
        'title' => array(
            'title' => 'Title',
        ),
        'text' => array(
            'title' => 'Text',
        ),
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/faqimages/thumb/(:value)" height="100" />',
        ),
        'site' => array(
            'title' => 'Site',
            'relationship' => 'site',
            'select' => "(:table).siteName",
        ),
        'active' => array(
            'title' => 'Active',
            'select' => "IF((:table).active, 'Yes', 'No')",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'author' => array(
            'title' => 'Author',
            'type' => 'text'
        ),
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'uploads/faqimages/originals/',
            'size_limit' => 5,
            'sizes' => array(
                array(102, 135, 'crop', 'uploads/faqimages/thumb/', 100),
            )
        ),
        'site' => array(
            'type' => 'relationship',
            'title' => 'Site',
            'name_field' => 'siteName',
            'sort_field' => 'siteName',
        ),
        'faqDate' => array(
            'type' => 'date',
            'title' => 'Date',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'Active',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'title' => 'required',
        'text' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
    ),
);
