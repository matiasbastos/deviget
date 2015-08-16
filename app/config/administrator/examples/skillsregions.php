<?php
/**
 * SkillRegions model config
 */
return array(
    'title' => 'Region Skills',
    'single' => 'Region Skills',
    'model' => 'SkillRegion',
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
        'site' => array(
            'title' => 'Site',
            'relationship' => 'site',
            'select' => "(:table).siteName",
        ),
        'skill' => array(
            'title' => 'Skills',
            'relationship' => 'skills',
            'select' => "GROUP_CONCAT((:table).skill SEPARATOR ', ')",
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
        'site' => array(
            'type' => 'relationship',
            'title' => 'Site',
            'name_field' => 'siteName',
            'sort_field' => 'siteName',
        ),
        'skills' => array(
            'type' => 'relationship',
            'title' => 'Skills',
            'name_field' => 'skill',
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'region_id' => 'required',
        'siteId' => 'required',
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
        'site' => array(
            'type' => 'relationship',
            'title' => 'Sites',
            'name_field' => 'siteName',
            'sort_field' => 'siteName',
        ),
    ),
    'form_width' => 600,
);

