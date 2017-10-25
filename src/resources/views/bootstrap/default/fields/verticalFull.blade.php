
    <div class="form-group col-md-12">
        <label for="street_1" class="control-label col-md-3">{{ Lang::get('addressable::members.street_1') }}:</label>
        <div class="col-md-6">
            {!! Form::text('street_1', $input['street_1'], array('class' => 'form-control')) !!}
            {!! $errors->first('street_1', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="street_2" class="control-label col-md-3">{{ Lang::get('addressable::members.street_2') }}:</label>
        <div class="col-md-6">
            {!! Form::text('street_2', $input['street_2'], array('class' => 'form-control')) !!}
            {!! $errors->first('street_2', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="number" class="control-label col-md-3">{{ Lang::get('addressable::members.number') }}:</label>
        <div class="col-md-2">
            {!! Form::text('number', $input['number'], array('class' => 'form-control')) !!}
            {!! $errors->first('number', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="box" class="control-label col-md-3">{{ Lang::get('addressable::members.box') }}:</label>
        <div class="col-md-2">
            {!! Form::text('box', $input['box'], array('class' => 'form-control')) !!}
            {!! $errors->first('box', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="postal_code" class="control-label col-md-3">{{ Lang::get('addressable::members.postal_code') }}:</label>
        <div class="col-md-3">
            {!! Form::text('postal_code', $input['postal_code'], array('class' => 'form-control')) !!}
            {!! $errors->first('postal_code', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="city" class="control-label col-md-3">{{ Lang::get('addressable::members.city') }}:</label>
        <div class="col-md-6">
            {!! Form::text('city', $input['city'], array('class' => 'form-control')) !!}
            {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="box" class="control-label col-md-3">{{ Lang::get('addressable::members.district') }}:</label>
        <div class="col-md-2">
            {!! Form::text('district', $input['district'], array('class' => 'form-control')) !!}
            {!! $errors->first('district', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="country" class="control-label col-md-3">{{ Lang::get('addressable::members.country') }}:</label>
        <div class="col-md-4">
            {!! Form::select('country', $countries, $input['country'], array('class' => 'form-control')) !!}
            {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
        </div>
    </div>