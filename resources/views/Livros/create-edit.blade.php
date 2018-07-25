@extends('templetes.templete')
@section('content')

<style>

    .btn-addNew{

        padding: 20px;
    }
</style>
<header class="page-header">
						<h2>Livros</h2>
					

					</header>
<div class="col-md-12">
							<section class="panel">
								<header class="panel-heading ">
									<div class="panel-actions">
										
									</div>

									<h2 class="panel-title">{{$action}} de Livros</h2>
								</header>
								<div class="panel-body">
			
							@if(isset($livro))

							<form action='{{url("/livros/update/{$livro->id}")}}'  method="POST"  class="form">

							{!! method_field('PUT') !!}

							@else
								<form class="form-vertical form-bordered" method="POST" action="{{url('/livros/store')}}">

							@endif

										 {!! csrf_field()   !!}
										<div class="row">

											<div class="col-md-6">
												
												<div class="form-group">
													<div class="col-md-3" for="inputDefault">Nome</div>
													<div class="col-md-9">
														<input type="text" name="nome" class="form-control" id="nome" value="{{$livro->nome or old('nome')}}">
													</div>
												</div>
												
											</div>
											<div class="col-md-6">
												
												
												<div class="form-group">
													<div class="col-md-3" for="inputDefault">Categoria</div>
													<div class="col-md-9">
														

													 	<select name="categoria" class="form-control">
															<option value="">ESCOLHA UMA OPÇÃO</option>
															@foreach($categorias as $categoria)

															<option value="{{$categoria}}"

															@if( isset($livro) && $livro->categoria == $categoria) selected @endif	

															>{{$categoria}}</option>

															@endforeach
														</select>
	 
	 
													</div>
												</div>
												
											</div>
											
										</div>
										<div style="margin-top: 10px;" class="row">

											<div class="col-md-6">
												
												
												<div class="form-group">
													<div class="col-md-3" for="inputDefault">Descrição</div>
													<div class="col-md-9">
														<input type="text" name="descricao" class="form-control" id="descricao" value="{{$livro->descricao or old('descricao')}}">
													</div>
											</div>
											
										</div>
									
										<div class="col-md-6">
											
											
											<div class="form-group">
												<div class="col-md-3" for="inputDefault">Proprietário</div>
												<div class="col-md-9">
													<select name="usuario_id" class="form-control">
															<option value="">ESCOLHA UMA OPÇÃO</option>
															@foreach($usuarios as $usuario)

															<option value="{{$usuario->id}}"

															@if( isset($livro) && $livro->usuario_id == $usuario->id) selected @endif			

															> {{$usuario->nome}} 	</option>

															@endforeach
														</select>
												</div>
											</div>
											
										</div>
										
									</div>
										
										<button type="submit" class="btn btn-primary">Enviar</button>
									</form>
								</div>
                            </section>
</div>



@endsection

