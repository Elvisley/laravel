
<div class="panel panel-info"> 
	<div class="panel-heading"> <h3 class="panel-title">Cadastrados</h3> </div>
	 <div class="panel-body"> 

	 	 <a href="{!!URL::to('/pessoa/create')!!}"><i class='fa fa-plus fa-fw'></i>Adicionar</a>

		<table class="table">
	        <thead>
	          <tr>
	            <th>Foto</th>
	            <th>Nome</th>
	            <th>Email</th>
	            <th>Telefone Principal</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody>

				 @foreach($pessoas as $pes)
					 <tr>
			            <td>
			            	@if($pes->foto)
			            		<img src="fotos/{{ $pes->foto }}" alt="" style="width:60px;height:60px" />
			            	@else
								<img src="fotos/default.jpg" alt="" style="width:60px;height:60px" />
			            	@endif
			            </td>
			            <td>{{ $pes->nome }}</td>
			            <td>{{ $pes->email }}</td>
			            <td>{{ $pes->telefone_principal }}</td>
			            <td>
			            	
							{!! link_to_route('pessoa.index', $title = 'Documentos', $parameters = $pes->id , $attributes = ['class'=> 'btn btn-primary btn-xs'])!!}

							{!! link_to_route('pessoa.edit', $title = 'Editar', $parameters = $pes->id , $attributes = ['class'=> 'btn btn-info btn-xs'])!!}
							
							{!!Form::open([ 'route'=> array('pessoa.destroy', $pes->id) , 'method'=>'DELETE' ])!!}
						        {!!Form::submit('Remover',['class'=>'btn btn-danger btn-xs'])!!}
						    {!!Form::close()!!}
			            </td>
			          </tr>
			 	@endforeach

	        </tbody>
	     </table>
</div>