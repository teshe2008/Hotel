<!-- Feedback Field -->
<div class="col-sm-12">
    {!! Form::label('feedback', 'Feedback:') !!}
    <p>{{ $feedback->feedback }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $feedback->image }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $feedback->user_id }}</p>
</div>

<!-- Hotel Id Field -->
<div class="col-sm-12">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    <p>{{ $feedback->hotel_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $feedback->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $feedback->updated_at }}</p>
</div>

