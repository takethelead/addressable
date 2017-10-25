
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.street_1') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->street_1 }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.street_2') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->street_2 }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.number') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->number }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.box') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->box }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.postal_code') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->postal_code }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.city') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->city }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.district') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->district }} @endif</div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">{{ Lang::get('addressable::members.country') }}:</div>
        <div class="col-md-8">@if( !is_null($address) ) {{ $address->country }} @endif</div>
    </div>
