<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('title', null, ['class' => 'mdl-textfield__input', 'id' => 'title']) !!}
    {!! Form::label('title', 'Title', ['class' => 'mdl-textfield__label']) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input', 'id' => 'description']) !!}
    {!! Form::label('description', 'Description', ['class' => 'mdl-textfield__label']) !!}
</div>

<div class="form-group">
    {!! Form::submit($buttonLabel, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'addCardpack', 'name' => 'addCardpack']) !!}
</div>