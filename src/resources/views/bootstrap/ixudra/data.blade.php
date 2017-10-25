
    @if( !is_null($address) )
        <div class="col-md-12">
            <div class="col-md-4">{{ Translate::recursive('addressable::members.address') }}:</div>
            <div class="col-md-8">{{ $address->street_1 .' '. $address->number }}</div>
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-8">{{ $address->postal_code .' '. $address->city }}</div>
        </div>
    @else
        <div class="col-md-12">
            <div class="col-md-4">{{ Translate::recursive('addressable::members.address') }}:</div>
            <div class="col-md-8">&nbsp;</div>
        </div>
    @endif


