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
    {!! Form::label('Indoor Atm', 'Indoor ATM:') !!}
    {!! Form::select('IndooAtm', ['1' => 'yes', '0' => 'no'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Free Wifi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Free Wifi', 'Free Wifi:') !!}
    {!! Form::select('freeWifi', ['1' => 'yes', '0' => 'no'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Free Cancellation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Free Cancellation', 'Free Cancellation:') !!}
    {!! Form::select('freeCancellation', ['1' => 'yes', '0' => 'no'], null, ['class' => 'form-control custom-select']) !!}
</div>
