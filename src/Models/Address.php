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
        $countries = Config::get('addressable.countries');

        return array(
            'street_1'                  => 'required|max:256',
            'street_2'                  => 'max:256',
            'number'                    => 'required|integer',
            'box'                       => 'max:16',
            'district'                  => 'max:128',
            'postal_code'               => 'required|max:32',
            'city'                      => 'required|max:128',
            'country'                   => 'max:2|in:'. implode(',', $countries),
            'latitude'                  => 'max:16',
            'longitude'                 => 'max:16',
        );
    }

    /**
     * @codeCoverageIgnore
     */
    public static function getDefaults()
    {
        return array(
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
        );
    }

}
