<?php
/**
 * Skills model config
 */
return array(
    'title' => 'Skills',
    'single' => 'skill',
    'model' => 'Skill',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'skill' => array(
            'title' => 'Skill',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'skill' => array(
            'title' => 'Text',
            'type' => 'text'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'skill' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'skill' => array(
            'title' => 'Skill',
        ),
    ),
);

