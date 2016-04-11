{{ Form::hidden('user[id]', null) }}
<div class="form-group">
    {{ Form::label('name', 'Nome', array('class' => 'control-label')) }}
    {{ Form::text('user[name]', null,  array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'E-mail', array('class' => 'control-label')) }}
    {{ Form::text('user[email]', null,  array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone', 'Telefone', array('class' => 'control-label')) }}
    {{ Form::text('phone', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address', 'Endereço', array('class' => 'control-label')) }}
    {{ Form::textarea('address', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('city', 'Cidade', array('class' => 'control-label')) }}
    {{ Form::text('city', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('state', 'Estade', array('class' => 'control-label')) }}
    {{ Form::text('state', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('zipcode', 'CEP', array('class' => 'control-label')) }}
    {{ Form::text('zipcode', null , array( 'class' => 'form-control')) }}
</div>