<?php
return array(
    'title' => 'Footer Links',
    'single' => 'Footer Link',
    'model' => 'FooterLink',
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'link' => array(
            'title' => 'Link',
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
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'link' => array(
            'title' => 'Link',
            'type' => 'text'
        ),
        'site' => array(
            'type' => 'relationship',
            'title' => 'Site',
            'name_field' => 'siteName',
            'sort_field' => 'siteName',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'Active',
        ),
    ),
    'rules' => array(
        'title' => 'required',
        'link' => 'required',
    ),
    'filters' => array(
    ),
);
