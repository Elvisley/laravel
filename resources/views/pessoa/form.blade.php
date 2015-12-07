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
				
				<div class="col-md-8">
					{!! Form::label('foto', 'Foto'); !!}
					{!! Form::file('foto' ,   [ 'class' => 'form-control' ] ); !!}
				</div>				

				<div class="col-md-4">	
					{!! Form::label('estado_civil', 'Estado Civil'); !!} <br/>
{!! Form::select('estado_civil', array(1 => 'Solteiro', 2 => 'Casado', 3 => 'Divorciado' ,4 => 'Viuvo') , null , $attributes = array('class'=>'form-control')); !!}

					@if ($errors->has('estado_civil'))<span class="label label-danger">{!!$errors->first('estado_civil')!!}</span>@endif
				</div>
			
				
				<br/>
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