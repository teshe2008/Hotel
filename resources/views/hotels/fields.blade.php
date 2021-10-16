<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('HotelClass', 'HotelClass:') !!}
    {!! Form::text('HotelClass', null, ['class' => 'form-control']) !!}
</div>
<!-- Restaurant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('restaurant', 'Restaurant:') !!}
    {!! Form::select('restaurant', ['1' => 'yes', '0' => 'no'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Indoor Atm Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('indoor_ATM', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('indoor_ATM', 'yes', 0, ['class' => 'form-check-input']) !!}
        {!! Form::label('indoor_ATM', 'Indoor Atm', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Free Wifi Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('free_wifi', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('free_wifi', 'yes', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('free_wifi', 'Free Wifi', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Free Cancellation Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('free_cancellation', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('free_cancellation', 'yes', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('free_cancellation', 'Free Cancellation', ['class' => 'form-check-label']) !!}
    </div>
</div>
