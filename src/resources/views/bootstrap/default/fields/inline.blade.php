
    <div class="form-group">
        <div class="row">
            <div class="form-group col-md-8">
                {!! Form::text('street_1', $input['street_1'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.street_1'))) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::text('number', $input['number'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.number'))) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::text('box', $input['box'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.box'))) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                {!! Form::text('postal_code', $input['postal_code'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.postal_code'))) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::text('city', $input['city'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.city'))) !!}
            </div>
            <div class="form-group col-md-3">
                {!! Form::select('country', $countries, $input['country'], array('class' => 'form-control', 'placeholder' => Lang::get('addressable::members.country'))) !!}
            </div>
        </div>
    </div>