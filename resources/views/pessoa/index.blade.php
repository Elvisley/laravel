@extends('master')

@section('content')

<div class="panel panel-primary"> 
	<div class="panel-heading"> <h3 class="panel-title">Cadastrar</h3> </div>
	 <div class="panel-body"> 
		<div class="row" style="padding:10px">
		{!! Form::open(array('url' => 'pessoa' , 'method' => 'POST')) !!}
    		
				

    			<div class="col-md-12">
					{!! Form::label('nome', 'Nome'); !!}
					{!! Form::text('nome' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('nome'))<span class="label label-danger">{!!$errors->first('nome')!!}</span>@endif
				</div>

				
				<div class="col-md-3">
					{!! Form::label('rg', 'RG'); !!}
					{!! Form::text('rg' , null ,  array ( 'class' => 'form-control')); !!}		
					@if ($errors->has('rg'))<span class="label label-danger">{!!$errors->first('rg')!!}</span>@endif
				</div>
				
				<div class="col-md-3">
					{!! Form::label('cpf', 'CPF'); !!}
					{!! Form::text('cpf' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('cpf'))<span class="label label-danger">{!!$errors->first('cpf')!!}</span>@endif
				</div>	

				<div class="col-md-6">
					{!! Form::label('email', 'E-mail'); !!}
					{!! Form::text('email' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('email'))<span class="label label-danger">{!!$errors->first('email')!!}</span>@endif
				</div>

				<div class="col-md-12">
					{!! Form::label('foto', 'Foto'); !!}
					{!! Form::file('foto' , null ,  array ( 'class' => 'form-control')); !!}
				</div>				

				<div class="col-md-12">	
					{!! Form::label('estado_civil', 'Estado Civil'); !!} <br/>
					{!! Form::select('estado_civil', array(1 => 'Solteiro', 2 => 'Casado', 3 => 'Divorciado' ,4 => 'Viuvo') , array( 'class' => 'form-control')); !!}
					@if ($errors->has('estado_civil'))<span class="label label-danger">{!!$errors->first('estado_civil')!!}</span>@endif
				</div>

				<div class="col-md-4">
					{!! Form::label('telefone_principal', 'Telefone Principal'); !!}
					{!! Form::text('telefone_principal' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('telefone_principal'))<span class="label label-danger">{!!$errors->first('telefone_principal')!!}</span>@endif
				</div>
				
				<div class="col-md-4">
					{!! Form::label('telefone_celular', 'Telefone Celular'); !!}
					{!! Form::text('telefone_celular' , null ,  array ( 'class' => 'form-control')); !!}	
					@if ($errors->has('telefone_celular'))<span class="label label-danger">{!!$errors->first('telefone_celular')!!}</span>@endif
				</div>

				<div class="col-md-4">
					{!! Form::label('telefone_recado', 'Telefone Recado'); !!}
					{!! Form::text('telefone_recado' , null ,  array ( 'class' => 'form-control')); !!}	
					@if ($errors->has('telefone_recado'))<span class="label label-danger">{!!$errors->first('telefone_recado')!!}</span>@endif
				</div>

				<div class="col-md-2">			
					{!! Form::label('cep', 'CEP'); !!}
					{!! Form::text('cep' , null ,  array ( 'class' => 'form-control')); !!}	
					@if ($errors->has('cep'))<span class="label label-danger">{!!$errors->first('cep')!!}</span>@endif
				</div>

				<div class="col-md-8">			
					{!! Form::label('endereco', 'Endereço'); !!}
					{!! Form::text('endereco' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('endereco'))<span class="label label-danger">{!!$errors->first('endereco')!!}</span>@endif
				</div>	

				<div class="col-md-2">		
					{!! Form::label('numero', 'Numero'); !!}
					{!! Form::number('numero' , null ,  array ( 'class' => 'form-control')); !!}	
					@if ($errors->has('numero'))<span class="label label-danger">{!!$errors->first('numero')!!}</span>@endif
				</div>
				
				
				<div class="col-md-12">		
					{!! Form::label('complemento', 'Complemento'); !!}
					{!! Form::text('complemento' , null ,  array ( 'class' => 'form-control')); !!}	
					@if ($errors->has('complemento'))<span class="label label-danger">{!!$errors->first('complemento')!!}</span>@endif
				</div>

				<div class="col-md-6">
					{!! Form::label('bairro', 'Bairro'); !!}
					{!! Form::text('bairro' , null ,  array ( 'class' => 'form-control')); !!}		
					@if ($errors->has('bairro'))<span class="label label-danger">{!!$errors->first('bairro')!!}</span>@endif
				</div>

				<div class="col-md-6">
					{!! Form::label('cidade', 'Cidade'); !!}
					{!! Form::text('cidade' , null ,  array ( 'class' => 'form-control')); !!}
					@if ($errors->has('cidade'))<span class="label label-danger">{!!$errors->first('cidade')!!}</span>@endif		
				</div>

				<div class="col-md-12">
					{!! Form::label('observacao', 'Observação'); !!}
					{!! Form::textarea('observacao' , null ,  array ( 'class' => 'form-control')); !!}	
				</div>

				<br/>

				<div class="col-md-4">
					{!! Form::submit('Salvar' ,  array ( 'class' => 'btn btn-success')); !!}
				</div>


		{!! Form::close() !!}
		</div>
		<!-- <form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form> -->
	 </div>
</div>

<div class="panel panel-info"> 
	<div class="panel-heading"> <h3 class="panel-title">Cadastrados</h3> </div>
	 <div class="panel-body"> 

		<table class="table">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>First Name</th>
	            <th>Last Name</th>
	            <th>Username</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Mark</td>
	            <td>Otto</td>
	            <td>@mdo</td>
	            <td>
	            	<span class="label label-default">Documentos</span>
					<span class="label label-primary">Editar</span>
					<span class="label label-danger">Remover</span>
	            </td>
	          </tr>
	          <tr>
	            <td>2</td>
	            <td>Jacob</td>
	            <td>Thornton</td>
	            <td>@fat</td>
	            <td>
	            	<span class="label label-default">Documentos</span>
					<span class="label label-primary">Editar</span>
					<span class="label label-danger">Remover</span>
	            </td>
	          </tr>
	          <tr>
	            <td>3</td>
	            <td>Larry</td>
	            <td>the Bird</td>
	            <td>@twitter</td>
	            <td>
	            	<span class="label label-default">Documentos</span>
					<span class="label label-primary">Editar</span>
					<span class="label label-danger">Remover</span>
	            </td>
	          </tr>
	        </tbody>
	     </table>
</div>
@endsection