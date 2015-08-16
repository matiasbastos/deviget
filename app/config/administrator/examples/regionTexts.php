<?php
/**
 * Region Texts model config
 */
return array(
    'title' => 'Region Texts',
    'single' => 'Text',
    'model' => 'RegionText',
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
        'resortTag' => array(
            'title' => 'Title',
        ),
        'quote' => array(
            'title' => 'Quote Image',
            'select' => "IF((:table).quote, 'Yes', 'No')",
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
        'resortTag' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'resortText' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'resortTextPriority' => array(
            'title' => 'Priority',
            'type' => 'number'
        ),
        'quote' => array(
            'type' => 'bool',
            'title' => 'Quote Text',
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
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'resortTag' => 'required',
        'resortText' => 'required',
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
