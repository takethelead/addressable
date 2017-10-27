ixudra/addressable
=====================

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ixudra/addressable.svg?style=flat-square)](https://packagist.org/packages/ixudra/addressable)
[![license](https://img.shields.io/github/license/ixudra/addressable.svg)]()
[![Total Downloads](https://img.shields.io/packagist/dt/ixudra/addressable.svg?style=flat-square)](https://packagist.org/packages/ixudra/addressable)

Custom Laravel address package for the Laravel 5 framework - developed by [Ixudra](http://ixudra.be).

The ixudra/addressable package provides an easy to use polymorphic address model that can be linked to one or more models in any Laravel PHP application. The package contains an address model class as well as a factory class that will take care of creating and editing the address model. Additionally, the package will also take care of moving and storing the actual files in the correct locations.

This package can be used by anyone at any given time, but keep in mind that it is optimized for my personal custom workflow. It may not suit your project perfectly and modifications may be in order.



## Installation

Pull this package in through Composer:

```js

    {
        "require": {
            "ixudra/addressable": "1.*"
        }
    }

```

Add the service provider to your `config/app.php` file:

```php

    'providers'     => array(

        //...
        Ixudra\Addressable\AddressableServiceProvider::class,

    ),

```

Run package migrations using artisan:

```php

    php artisan migrate --package="ixudra/addressable"

```

Alternatively, you can also publish the migrations using artisan:

```php

    // Publish all resources from all packages
    php artisan vendor:publish
    
    // Publish only the resources of the package
    php artisan vendor:publish --provider="Ixudra\\Addressable\\AddressableServiceProvider"

```



## Usage

Create a model with a polymorphic relationship to the `Address` model:

```php

    use Illuminate\Database\Eloquent\Model;
    use Ixudra\Addressable\Models\Address;

    class Shop extends Model {

        public function address()
        {
            return $this->morphOne( Address::class, 'reference' );
        }


        public function delete()
        {
            if( !is_null($this->address) ) {
                $this->address->delete();
            }

            parent::delete();
        }

    }

```

You can create new `Address` models using the `AddressFactory` class which is provided in the package. The `AddressFactory` will take care of creating the `Address` model, linking the `Address` to the designated model and moving the uploaded file to the location which is specified in the designated model.
 
Updating addresses works similar to creating them. All you need to do is provide the correct information and the `AddressFactory` will take care of the rest for you. It is also possible to update the address information without actually updating the uploaded file. This can be done by omitting the `file` attribute from the data that is passed to the factory.

A full example of a factory class that leverages the package functionality can be found in the following example:

```php

    use Ixudra\Addressable\Services\Factories\AddressFactory;

    class ShopFactory {

        protected $addressFactory;


        /**
         * @codeCoverageIgnore
         */
        public function __construct(AddressFactory $addressFactory)
        {
            $this->addressFactory = $addressFactory;
        }


        public function create($input, $prefix = '')
        {
            $shop = Shop::create( array( 'name' => $input['name'] ) );
            $this->addressFactory->make( $input, $shop, $prefix );

            return $shop;
        }

        public function modify($shop, $input, $prefix = '')
        {
            $shop = $shop->update( array( 'name' => $input['name'] ) );
            $this->addressFactory->modify( $shop->address, $input, $shop, $prefix );

            return $shop;
        }

    }

```

Finally, the package also provides several views that can be used:

 - `bootstrap/default/data/verticalFull.blade.php` which includes a Twitter Bootstrap implementation that will allow you to show the address on a page
 - `bootstrap/default/data/verticalSimple.blade.php` which includes a Twitter Bootstrap implementation that will allow you to show the address on a page
 - `bootstrap/default/fields/inline.blade.php` which includes a Twitter Bootstrap implementation that can be included in forms to create and/or modify the address information
 - `bootstrap/default/fields/verticalFull.blade.php` which includes a Twitter Bootstrap implementation that can be included in forms to create and/or modify the address information
 - `bootstrap/default/fields/verticalSimple.blade.php` which includes a Twitter Bootstrap implementation that can be included in forms to create and/or modify the address information
 
Usage example of both cases can be found in the examples below:

```php

    {!! Form::open(array('url' => 'shops', 'method' => 'POST', 'id' => 'createShop', 'class' => 'form-horizontal', 'role' => 'form')) !!}

        <div class="well well-large">
            <div class='form-group {{ $errors->has('name') ? 'has-error' : '' }}'>
                {!! Form::label('name', 'Name:', array('class' => 'control-label col-lg-3')) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $input['name'], array('class' => 'form-control')) !!}
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
        </div>

        @include('addressable::bootstrap/default/fields/inline')

        <div class="action-button">
            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
            {!! HTML::linkRoute('shops.index', 'Cancel', array(), array('class' => 'btn btn-default')) !!}
        </div>

    {!! Form::close() !!}

```

The input views assumes one variable `$input`, which is associative array of values of the input data. Required keys depend on the view you want to use. Options are: `street_1`, `street_2`, `number`, `box`, `postal_code`, `city`, `district`, `country`, `longitude`, `latitude`

Both of these variables need to be passed to the view in order to use the default views.

```php

    <div class="row">
        <div class="well well-large col-md-12">
            <div class='col-md-10'>
                <div class='col-md-4'>Name:</div>
                <div class='col-md-8'>{{ $shop->name }}</div>
            </div>
        </div>
    </div>

    @include('addressable::bootstrap/default/data/inline', array('address' => $shop->address))

```

The usage of these views is by no means required to take advantage of the functionality in this package. However, it is worth noting that some views leverage the functionality of the [ixudra/translation](http://github.com/ixudra/translation) package by default. The `ixudra/translation` package is not included as a requirement for this package, but must be pulled in via composer in order to take advantage of the views which are provided by default. 




## Planning

- Geocoding
- Additional views




## Support

Help me further develop and maintain this package by supporting me via [Patreon](https://www.patreon.com/ixudra)!!




## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)




## Contact

For package questions, bug, suggestions and/or feature requests, please use the Github issue system and/or submit a pull request. When submitting an issue, always provide a detailed explanation of your problem, any response or feedback your get, log messages that might be relevant as well as a source code example that demonstrates the problem. If not, I will most likely not be able to help you with your problem. Please review the [contribution guidelines](https://github.com/ixudra/addressable/blob/master/CONTRIBUTING.md) before submitting your issue or pull request.

For any other questions, feel free to use the credentials listed below: 

Jan Oris (developer)

- Email: jan.oris@ixudra.be
- Telephone: +32 496 94 20 57

