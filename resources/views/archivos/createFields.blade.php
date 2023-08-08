{!! Form::open(['route' => 'guardar.archivo', 'method' => 'STORE', 'files' => true, 'role' => 'form']) !!}

{!! Form::label('archivo', 'Sube tu archivo.') !!}

{!! Form::file('archivo', [ 'class' => 'form-control', 'accept' => '.pdf']) !!}
<p class="help-block">Aquí van tus imagenes.</p>
<small class="text-danger">{{ $errors->first('archivo') }}</small>

{!! Form::submit('Guardar', ['class' => 'btn btn-info pull-right']) !!}

{!! Form::close() !!}
