<?php namespace Ixudra\Addressable\Services\Validation;


use Ixudra\Core\Services\Validation\BaseValidationHelper;
use Ixudra\Addressable\Models\Address;

class AddressValidationHelper extends BaseValidationHelper {

    public function getFilterValidationRules()
    {
        return array(
            'query'         => ''
        );
    }

    public function getFormValidationRules($formName, $prefix = '')
    {
        return Address::getRules();
    }

}