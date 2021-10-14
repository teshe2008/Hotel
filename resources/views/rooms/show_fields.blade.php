<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $rooms->name }}</p>
</div>

<!-- Room Number Field -->
<div class="col-sm-12">
    {!! Form::label('room_number', 'Room Number:') !!}
    <p>{{ $rooms->room_number }}</p>
</div>

<!-- Room Type Field -->
<div class="col-sm-12">
    {!! Form::label('room_type', 'Room Type:') !!}
    <p>{{ $rooms->room_type }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $rooms->price }}</p>
</div>

<!-- Hotel Id Field -->
<div class="col-sm-12">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    <p>{{ $rooms->hotel_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rooms->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rooms->updated_at }}</p>
</div>

