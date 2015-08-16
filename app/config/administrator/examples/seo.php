<?php
return array(
    'title' => 'Seo',
    'single' => 'seo',
    'model' => 'Seo',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'url' => array(
            'title' => 'Url',
        ),
        'windows_title' => array(
            'title' => 'Windows Title',
        ),
        'body_title' => array(
            'title' => 'Body Title',
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
        'url' => array(
            'title' => 'Url',
            'type' => 'text'
        ),
        'windows_title' => array(
            'title' => 'Windows Title',
            'type' => 'text'
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'wysiwyg'
        ),
        'keywords' => array(
            'title' => 'Keywords',
            'type' => 'text'
        ),
        'body_title' => array(
            'title' => 'Body Title',
            'type' => 'text'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'url' => 'required',
        'windows_title' => 'required',
        'description' => 'required',
        'keywords' => 'required',
        'body_title' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'id',
        'url' => array(
            'title' => 'Url',
        ),
    ),
);


