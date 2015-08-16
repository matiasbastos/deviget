<?php
/**
 * Translates model config
 */
return array(
    'title' => 'Translates',
    'single' => 'translate',
    'model' => 'Translate',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'original' => array(
            'title' => 'Original',
        ),
        'translated' => array(
            'title' => 'Translated',
        ),
        'language' => array(
            'title' => 'Language',
            'relationship' => 'language',
            'select' => "(:table).language",
        ),
        'need_translate' => array(
            'title' => 'Need Translate',
            'select' => "IF((:table).need_translate, 'Yes', 'No')",
        ),
        'used_in' => array(
            'title' => 'Used In',
        )    
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'original' => array(
            'title' => 'Original',
            'type' => 'text'
        ),
        'translated' => array(
            'title' => 'Translated',
            'type' => 'text'
        ),
        'language' => array(
            'type' => 'relationship',
            'title' => 'Language',
            'name_field' => 'language',
        ),
        'need_translate' => array(
            'type' => 'bool',
            'title' => 'Need Translate',
        ),
        'used_in' => array(
            'title' => 'Used In',
            'editable' => false,
        )    
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'original' => 'required',
        'translated' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'need_translate' => array(
            'title' => 'Need Translate',
            'type' => 'bool',
        ),
        'original' => array(
            'title' => 'Original',
        ),
        'translated' => array(
            'title' => 'Translated',
        ),
    ),
    /**
    * The width of the model's edit form
    *
    * @type int
    */
    'form_width' => 500,
);


