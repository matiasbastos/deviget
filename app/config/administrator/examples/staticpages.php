<?php
/**
 * Static Pages model config
 */
return array(
    'title' => 'Static Pages',
    'single' => 'Page',
    'model' => 'StaticPage',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'page' => array(
            'title' => 'Page URL',
            'select' => "IF((:table).redirect_url <> '', 'Redirect Link', (:table).page)",
        ),
        'text' => array(
            'title' => 'Text',
        ),
        'footer' => array(
            'title' => 'Show in Footer',
            'select' => "IF((:table).footer, 'Yes', 'No')",
        ),
        'redirect_url' => array(
            'title' => 'Redirect To',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'page' => array(
            'title' => 'Page Url (MUST be unique, lower case and with out spaces! Not nescesary if a redirect url will be supplied.)',
            'type' => 'text'
        ),
        'text' => array(
            'title' => 'Text',
            'type' => 'wysiwyg'
        ),
        'footer' => array(
            'type' => 'bool',
            'title' => 'Show in Footer',
        ),
        'redirect_url' => array(
            'title' => 'Redirect to Url (If set, means that this page is just a redirect to an other.)',
            'type' => 'text'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'title' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'title' => array(
            'title' => 'Title',
        ),
    ),
    'form_width' => 800,
);

