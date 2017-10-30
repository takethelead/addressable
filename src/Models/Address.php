<?php namespace Ixudra\Addressable\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laracasts\Presenter\PresentableTrait;
use Ixudra\Addressable\Presenters\AddressPresenter;

use Config;

class Address extends Model {

    use PresentableTrait, SoftDeletes;


    protected $table = 'addresses';

    protected $fillable = array(
        'reference_id',
        'reference_type',
        'street_1',
        'street_2',
        'number',
        'box',
        'district',
        'postal_code',
        'city',
        'country',
        'latitude',
        'longitude',
    );

    protected $guarded = array( 'id' );

    protected $hidden = array(
        'reference_id',
        'reference_type',
    );

    protected $dates = array(
        'deleted_at',
    );

    protected $translationKey = 'address';

    protected $presenter = AddressPresenter::class;


    public function reference()
    {
        return $this->morphTo();
    }


    /**
     * @codeCoverageIgnore
     */
    public static function getRules()
    {
        $rules = Config::get('addressable.rules');

        if( Config::get('addressable.restrictCountries') ) {
            $countries = Config::get('addressable.countries');
            if( !empty($rules[ 'country' ]) ) {
                $rules[ 'country' ] .= '|';
            }

            $rules[ 'country' ] .= 'in:'. implode(',', $countries);
        }

        return $rules;
    }

    /**
     * @codeCoverageIgnore
     */
    public static function getDefaults()
    {
        return Config::get('addressable.defaults');
    }

}
