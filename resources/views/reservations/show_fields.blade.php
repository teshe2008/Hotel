<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $reservation->name }}</p>
</div>

<!-- Job Field -->
<div class="col-sm-12">
    {!! Form::label('job', 'Job:') !!}
    <p>{{ $reservation->job }}</p>
</div>

<!-- Checkin Field -->
<div class="col-sm-12">
    {!! Form::label('checkin', 'Checkin:') !!}
    <p>{{ $reservation->checkin }}</p>
</div>

<!-- Checkout Field -->
<div class="col-sm-12">
    {!! Form::label('checkout', 'Checkout:') !!}
    <p>{{ $reservation->checkout }}</p>
</div>

<!-- Room Id Field -->
<div class="col-sm-12">
    {!! Form::label('room_id', 'Room Id:') !!}
    <p>{{ $reservation->room_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $reservation->user_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reservation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reservation->updated_at }}</p>
</div>

