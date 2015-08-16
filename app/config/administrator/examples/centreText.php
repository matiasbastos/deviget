<?php
return array(
    'title' => 'Centre Texts',
    'single' => 'Centre Text',
    'model' => 'CentreText',
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
        'centre' => array(
            'title' => 'Centre',
            'relationship' => 'centre',
            'select' => "(:table).centreName",
        ),
        'centreText' => array(
            'title' => 'Text',
            'output' => '<div style="height:150px;overflow: hidden;">(:value)</div>',
        ),
        'centreTag' => array(
            'title' => 'Tag',
        ),
        'centrePriority' => array(
            'title' => 'Priority',
        ),
        'GermanText' => array(
            'title' => 'German Text',
            'select' => "IF((:table).GermanText, 'Yes', 'No')",
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
            'title' => 'Region*',
            'name_field' => 'RegionName',
            'options_sort_field' => 'RegionName',
        ),
        'centre' => array(
            'type' => 'relationship',
            'title' => 'Centre',
            'name_field' => 'centreName',
            'constraints' => array('region' => 'centres')
        ),
        'centreText' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'centreTag' => array(
            'type' => 'number',
            'title' => 'Tag',
        ),
        'centrePriority' => array(
            'type' => 'number',
            'title' => 'Priority',
        ),
        'GermanText' => array(
            'type' => 'bool',
            'title' => 'German Text',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'centreTag' => 'required',
        'centreText' => 'required',
        'centrePriority' => 'required',
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
        'centre' => array(
            'type' => 'relationship',
            'title' => 'Centre',
            'name_field' => 'centreName',
            'sort_field' => 'centreName',
            'constraints' => array('region' => 'centres')
        ),
    ),
    'form_width' => 800,
    'sort' => array(
        'field' => 'ResortID',
        'direction' => 'asc',
    ),
);




