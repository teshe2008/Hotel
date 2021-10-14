<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $hotel->name }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $hotel->location }}</p>
</div>

<!-- Hotelclass Field -->
<div class="col-sm-12">
    {!! Form::label('HotelClass', 'Hotelclass:') !!}
    <p>{{ $hotel->HotelClass }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $hotel->image }}</p>
</div>

<!-- Restaurant Field -->
<div class="col-sm-12">
    {!! Form::label('restaurant', 'Restaurant:') !!}
    <p>{{ $hotel->restaurant }}</p>
</div>

<!-- Indoor Atm Field -->
<div class="col-sm-12">
    {!! Form::label('Indoor_ATM', 'Indoor Atm:') !!}
    <p>{{ $hotel->Indoor_ATM }}</p>
</div>

<!-- Free Wifi Field -->
<div class="col-sm-12">
    {!! Form::label('Free_Wifi', 'Free Wifi:') !!}
    <p>{{ $hotel->Free_Wifi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $hotel->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $hotel->updated_at }}</p>
</div>

