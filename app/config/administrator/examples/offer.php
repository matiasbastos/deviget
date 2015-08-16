<?php
return array(
    'title' => 'Offers',
    'single' => 'offer',
    'model' => 'Offer',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'region' => array(
            'title' => 'Region',
            'relationship' => 'region',
            'select' => "(:table).RegionName",
        ),
        'season' => array(
            'title' => 'Season',
            'relationship' => 'season',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
        'experiences' => array(
            'title' => 'Experiences',
            'relationship' => 'experiences',
            'select' => "GROUP_CONCAT((:table).title SEPARATOR ', ')",
        ),
        'img' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/offerimages/thumb/(:value)" height="100" />',
        ),
        'created_at' => array(
            'title' => 'Created',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title*',
            'type' => 'text'
        ),
        'link' => array(
            'title' => 'PWH, PKH, PDH Link',
            'type' => 'text'
        ),
        'pth_link' => array(
            'title' => 'PTH Link (obligatory for pth, with out exp)',
            'type' => 'text'
        ),
        'region' => array(
            'type' => 'relationship',
            'title' => 'Region*',
            'name_field' => 'RegionName',
            'options_sort_field' => 'RegionName',
        ),
        'desc' => array(
            'title' => 'Description',
            'type' => 'wysiwyg'
        ),
        'img' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'uploads/offerimages/',
            'size_limit' => 5,
            'sizes' => array(
                array(310, 230, 'exact', 'uploads/offerimages/thumb/', 100),
            )
        ),
        'season' => array(
            'type' => 'relationship',
            'title' => 'OffersSeason',
            'name_field' => 'title',
        ),
        'experiences' => array(
            'type' => 'relationship',
            'title' => 'Experiences* (obligatory for pth)',
            'name_field' => 'title',
        ),
        'expiry' => array(
            'title' => 'Expiry Date',
            'type' => 'date'
        ),
        'diving' => array(
            'title' => 'Diving',
            'type' => 'bool'
        ),
        'windsurfing' => array(
            'title' => 'Windsurfing',
            'type' => 'bool'
        ),
        'kitesurfing' => array(
            'title' => 'Kitesurfing',
            'type' => 'bool'
        ),
        'golf' => array(
            'title' => 'Golf',
            'type' => 'bool'
        ),
        'sup' => array(
            'title' => 'SUP',
            'type' => 'bool'
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'title' => 'required',
        'link' => 'required',
        'region_id' => 'required',
    ),
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => array(
        'id',
        'title',
    ),
);




