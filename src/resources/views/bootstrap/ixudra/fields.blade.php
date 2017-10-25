
    <h4>{{ Translate::recursive('addressable::members.address') }}</h4>
    <div class="well well-large">
        {!! Form::openFormGroup($prefix .'street_1', $errors, $requiredFields) !!}
            {!! Form::label($prefix .'street_1', Translate::recursive('addressable::members.street_1') .': ', array('class' => 'control-label col-md-3')) !!}
            <div class="col-md-5">
                {!! Form::text($prefix .'street_1', $input[$prefix .'street_1'], array('class' => 'form-control')) !!}
            </div>
        {!! Form::closeFormGroup($prefix .'street_1', $errors) !!}
        {!! Form::openFormGroup($prefix .'number', $errors, $requiredFields) !!}
            {!! Form::label($prefix .'number', Translate::recursive('addressable::members.number') .': ', array('class' => 'control-label col-md-3')) !!}
            <div class="col-md-6">
                {!! Form::text($prefix .'number', $input[$prefix .'number'], array('class' => 'form-control')) !!}
            </div>
        {!! Form::closeFormGroup($prefix .'number', $errors) !!}
        {!! Form::openFormGroup($prefix .'box', $errors, $requiredFields) !!}
            {!! Form::label($prefix .'box', Translate::recursive('addressable::members.box') .': ', array('class' => 'control-label col-md-3')) !!}
            <div class="col-md-6">
                {!! Form::text($prefix .'box', $input[$prefix .'box'], array('class' => 'form-control')) !!}
            </div>
        {!! Form::closeFormGroup($prefix .'box', $errors) !!}
        {!! Form::openFormGroup($prefix .'postal_code', $errors, $requiredFields) !!}
            {!! Form::label($prefix .'postal_code', Translate::recursive('addressable::members.postal_code') .': ', array('class' => 'control-label col-md-3')) !!}
            <div class="col-md-4">
                {!! Form::text($prefix .'postal_code', $input[$prefix .'postal_code'], array('class' => 'form-control')) !!}
            </div>
        {!! Form::closeFormGroup($prefix .'postal_code', $errors) !!}
        {!! Form::openFormGroup($prefix .'city', $errors, $requiredFields) !!}
            {!! Form::label($prefix .'city', Translate::recursive('addressable::members.city') .': ', array('class' => 'control-label col-md-3')) !!}
            <div class="col-md-4">
                {!! Form::text($prefix .'city', $input[$prefix .'city'], array('class' => 'form-control')) !!}
            </div>
        {!! Form::closeFormGroup($prefix .'city', $errors) !!}
    </div>

