@extends('master')

@section('content')

<div class="panel panel-primary"> 
	<div class="panel-heading"> <h3 class="panel-title">Cadastrar</h3> </div>
	 <div class="panel-body"> 
		<div class="row" style="padding:10px">

		
		 {!! Form::model($pessoa , [ 'route' => [ 'pessoa.update' , $pessoa->id ] , 'method' => 'PUT' , 'files' => true ]) !!}
    		
    			@include('pessoa.form')

				<div class="col-md-4">
					{!! Form::submit('Atualizar' ,  array ( 'class' => 'btn btn-success')); !!}
				</div>

				<div class="col-md-4">
					 <a href="{!!URL::to('/pessoa')!!}" class='btn btn-Danger'>Voltar</a>
				</div>


		{!! Form::close() !!}
		</div>
	 </div>
</div>

@endsection