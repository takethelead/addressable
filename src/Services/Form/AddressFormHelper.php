<?php namespace Ixudra\Addressable\Services\Form;


use Ixudra\Core\Services\Form\BaseFormHelper;

use Config;
use Translate;

class AddressFormHelper extends BaseFormHelper {

    public function getCountriesAsSelectList($includeNull = false)
    {
        $results = array();

        if( $includeNull ) {
            $results[ 0 ] = '';
        }

        $countries = Config::get('addressable.countries');

        foreach( $countries as $country ) {
            $results[ $country ] = Translate::recursive('addressable::countries.'. $country);
        }

        return $results;
    }

}