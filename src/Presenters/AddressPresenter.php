<?php namespace Ixudra\Addressable\Presenters;


use Ixudra\Core\Presenters\BasePresenter;

class AddressPresenter extends BasePresenter {

    public function name()
    {
        $name = $this->street();
        if( !empty($name) ) {
            $name .=  ', ';
        }

        $name .= $this->entity->postal_code;
        if( !empty($name) ) {
            $name .=  ' ';
        }

        $name .= $this->entity->city;

        if( !empty($name) && !empty($this->entity->country) ) {
            $name .= ' (' . $this->entity->country . ')';
        }

        return $name;
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