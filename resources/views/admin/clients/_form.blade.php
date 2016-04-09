<div class="form-group">
    {{ Form::label('user_id', 'Usuário', array('class' => 'control-label')) }}
    {{ Form::select('user_id', $users, null , array( 'class' => 'form-control')) }}
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