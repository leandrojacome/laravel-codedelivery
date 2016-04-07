<div class="form-group">
    {{ Form::label('category', 'Categoria', array('class' => 'control-label')) }}
    {{ Form::select('category_id', $categories, null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Nome', array('class' => 'control-label')) }}
    {{ Form::text('name', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descrição', array('class' => 'control-label')) }}
    {{ Form::textarea('description', null , array( 'class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('price', 'Preço', array('class' => 'control-label')) }}
    {{ Form::text('price', null , array( 'class' => 'form-control')) }}
</div>