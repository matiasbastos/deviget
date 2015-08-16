<?php
return array(
    'title' => 'Team',
    'single' => 'Team',
    'model' => 'Team',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
        ),
        'position' => array(
            'title' => 'Position',
        ),
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/teamimages/thumb/(:value)" height="100" />',
        ),
        'text' => array(
            'title' => 'Text',
            'output' => '<div style="height:150px;overflow: hidden;">(:value)</div>',
        ),
        'enabled' => array(
            'title' => 'Enabled',
            'select' => "IF((:table).enabled, 'Yes', 'No')",
        ),
        'planet_sites' => array(
            'title' => 'Sites',
            'relationship' => 'planet_sites',
            'select' => "GROUP_CONCAT((:table).domain SEPARATOR ', ')",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'type' => 'text',
            'title' => 'Name',
        ),
        'position' => array(
            'type' => 'text',
            'title' => 'Position',
        ),
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'uploads/teamimages/originals/',
            'size_limit' => 5,
            'sizes' => array(
                array(108, 148, 'crop', 'uploads/teamimages/thumb/', 100),
            )
        ),
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'enabled' => array(
            'type' => 'bool',
            'title' => 'Enabled',
        ),
        'planet_sites' => array(
            'type' => 'relationship',
            'title' => 'Sites',
            'name_field' => 'siteName',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'name' => 'required',
        'position' => 'required',
        'text' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
    ),
    'form_width' => 800,
    'sort' => array(
        'field' => 'name',
        'direction' => 'asc',
    ),
);





