<?php
return array(
    'title' => 'Offers Season',
    'single' => 'Season',
    'model' => 'OffersSeason',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'created_at' => array(
            'title' => 'Created',
            'visible' => false,
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
        'id',
        'title' => array(
            'title' => 'Title',
        ),
    ),
);


