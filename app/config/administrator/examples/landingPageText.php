<?php
return array(
    'title' => 'Landing Pages Texts',
    'single' => 'landing page text',
    'model' => 'LandingPageText',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'experience' => array(
            'title' => 'Experience',
            'relationship' => 'experience',
            'select' => "(:table).title",
        ),
        'homeText' => array(
            'title' => 'Home Page Text',
            'select' => "IF((:table).homeText, 'Yes', 'No')",
        ),
        'text' => array(
            'title' => 'Text',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'experience' => array(
            'type' => 'relationship',
            'title' => 'Experience',
            'name_field' => 'title',
        ),
        'homeText' => array(
            'type' => 'bool',
            'title' => 'Home Page Text',
        ),
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'text' => 'required',
        'experience_id' => 'unique:pth_landing_page_text,experience_id',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'experience' => array(
            'type' => 'relationship',
            'title' => 'Experience',
            'name_field' => 'title',
            'sort_field' => 'title',
        ),
    ),
    'form_width' => 800,
    'sort' => array(
        'field' => 'homeText',
        'direction' => 'desc',
    ),
);



