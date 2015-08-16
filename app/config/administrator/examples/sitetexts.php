<?php
/**
 * SiteTexts model config
 */
return array(
    'title' => 'Site Texts',
    'single' => 'Text',
    'model' => 'SiteText',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
/*
        'Text' => array(
            'title' => 'Text',
        ),
*/
        'site' => array(
            'title' => 'Site',
            'relationship' => 'site',
            'select' => "(:table).siteName",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'Text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'site' => array(
            'type' => 'relationship',
            'title' => 'Site',
            'name_field' => 'siteName',
            'sort_field' => 'siteName',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'Text' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'Text' => array(
            'title' => 'Text',
        ),
    ),
    'form_width' => 800,
);


