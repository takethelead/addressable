<?php namespace Ixudra\Addressable\Services\Input;


use Ixudra\Core\Services\Input\BaseInputHelper;
use Ixudra\Addressable\Models\Address;

class AddressInputHelper extends BaseInputHelper {

    public function getDefaultInput($prefix = '')
    {
        return $this->getPrefixedInput( Address::getDefaults(), $prefix );
    }

    public function getInputForModel($model, $prefix = '')
    {
        return $this->getPrefixedInput( $this->getAttributes( $model ), $prefix );
    }

}