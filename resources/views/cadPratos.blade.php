@extends('layouts.app')

@section('content')
	<div>
		<h1>cadastrar novo prato</h1>
		<form method='post' action="">
			<input type="text" name="nomeDoPrato">
			<input type="number" name="precoDoPrato">
			<input type="submit" name="enviar">			
		</form>
		<h1>excluir prato</h1>
		<form method='post' action=""><br>


			@foreach($pratos as $prato)
				echo "<input type='number' name='precoDoPrato' value='{{$prato->nome}}' >"
			@endforeach
		</form>

	</div>
@endsection