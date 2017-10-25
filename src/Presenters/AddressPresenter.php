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
        if( $box != '' ) {
            $box = ' '. $this->box;
        }

        return $this->street_1 .' '. $this->number . $box;
    }

}