<?php namespace Ixudra\Addressable\Services\Factories;


use Ixudra\Core\Services\Factories\BaseFactory;
use Ixudra\Addressable\Models\Address;

class AddressFactory extends BaseFactory {

    public function make($input, $reference, $prefix = '')
    {
        $data = $this->extractInput( $input, Address::getDefaults(), $prefix, true );
        $data[ 'reference_id' ] = $reference->id;
        $data[ 'reference_type' ] = get_class($reference);

        return Address::create( $data );
    }

    public function modify($address, $input, $prefix = '')
    {
        $address->update( $this->extractInput( $input, Address::getDefaults(), $prefix ) );

        return $address;
    }

}
