<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('Checkin', 'Checkin:') !!}
    {!! Form::date('checkin', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('Checkout', 'checkout:') !!}
    {!! Form::date('checkout', null, ['class' => 'form-control']) !!}
</div>
<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job', 'Job:') !!}
    {!! Form::text('job', null, ['class' => 'form-control']) !!}
</div>