<?php namespace Ixudra\Addressable\Presenters;


use Ixudra\Core\Presenters\BasePresenter;

class AddressPresenter extends BasePresenter {

    public function name()
    {
        return $this->street() .', '. $this->postal_code  .' '. $this->city .' ('. $this->country .')';
    }

    public function street()
    {
        $box = '';
        if( $this->box !== '' ) {
            $box = ' '. $this->box;
        }

        $street = $this->street_1;
        if( $this->number !== '' && $this->box !== '' ) {
            $street .= ' '. $this->number . $box;
        }

        return $street;
    }

    public function location($includeCountry = false)
    {
        $location = $this->postal_code .' '. $this->city;
        if( $includeCountry ) {
            $location .= ' ('. $this->country .')';
        }

        return $location;
    }

    public function compact()
    {
        return $this->street() .'<br />'. $this->location();
    }

}