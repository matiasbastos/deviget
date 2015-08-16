<?php
return array(
    'title' => 'Continent Texts',
    'single' => 'Continent Text',
    'model' => 'ContinentText',
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
        'title' => array(
            'title' => 'Title',
        ),
        'text' => array(
            'title' => 'Text',
        ),
        'experience' => array(
            'title' => 'Experience',
            'relationship' => 'experience',
            'select' => "(:table).title",
        ),
        'priority' => array(
            'title' => 'Priority',
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
        ),
        'title' => array(
            'type' => 'text',
            'title' => 'Title',
        ),
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'experience' => array(
            'type' => 'relationship',
            'title' => 'Experience',
            'name_field' => 'title',
        ),
        'priority' => array(
            'type' => 'number',
            'title' => 'Priority',
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
        'priority' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'continent' => array(
            'type' => 'relationship',
            'title' => 'Continent',
            'name_field' => 'name',
            'sort_field' => 'name',
        ),
    ),
    'form_width' => 800,
    'sort' => array(
        'field' => 'continent_id',
        'direction' => 'asc',
    ),
);



