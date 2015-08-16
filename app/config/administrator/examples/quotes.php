<?php
/**
 * Quotes model config
 */
return array(
    'title' => 'Quotes',
    'single' => 'quote',
    'model' => 'Quote',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'text' => array(
            'title' => 'Text',
        ),
        'experience' => array(
            'title' => 'Experience',
            'relationship' => 'experience',
            'select' => "(:table).title",
        ),
        'region' => array(
            'title' => 'Region',
            'relationship' => 'region',
            'select' => "(:table).RegionName",
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
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'experience' => array(
            'type' => 'relationship',
            'title' => 'Experience',
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
        'text' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'text' => array(
            'title' => 'Text',
        ),
    ),
);

