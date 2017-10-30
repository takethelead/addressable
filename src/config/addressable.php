<?php


    return array(

        'countries' => array(
            'BE',
            'NL',
            'DE',
            'IT',
            'FR',
            'UK',
            'ES',
            'US',
        ),

        'restrictCountries'         => true,

        'rules'                     => array(
            'street_1'                  => 'required|max:256',
            'street_2'                  => 'max:256',
            'number'                    => 'required|integer',
            'box'                       => 'max:16',
            'district'                  => 'max:128',
            'postal_code'               => 'required|max:32',
            'city'                      => 'required|max:128',
            'country'                   => 'max:2',
            'latitude'                  => 'max:16',
            'longitude'                 => 'max:16',
        ),

        'defaults'                  => array(
            'street_1'                  => '',
            'street_2'                  => '',
            'number'                    => '',
            'box'                       => '',
            'district'                  => '',
            'postal_code'               => '',
            'city'                      => '',
            'country'                   => '',
            'latitude'                  => '',
            'longitude'                 => '',
        ),

    );