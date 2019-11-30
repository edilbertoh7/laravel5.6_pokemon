<div class="form-group">
	{!! form::label('name','Nombre') !!}
	{!! form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! form::label('slug','slug') !!}
	{!! form::text('slug',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! form::label('avatar','Avatar') !!}
	{!! form::file('avatar') !!}
</div>