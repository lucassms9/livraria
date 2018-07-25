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
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									
									</div>

									<h2 class="panel-title">Todos Livros</h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>nome</th>
													<th>categoria</th>
                                                    <th>descrição</th>
                                                    <th>Ações</th>
												</tr>
											</thead>
											<tbody>

                                                    @foreach($livros as $livro)
                                                <tr>
													<td>1</td>
													<td>{{$livro->nome}}</td>
													<td>{{$livro->categoria}}</td>
													<td>{{$livro->descricao}}</td>
													<td>
                                                    <a  href='{{url("/livros/edit/{$livro->id}")}}' class="edit actions"><i class="fa fa-pencil" aria-hidden="true"></i></a>
			                                        <a id="delete-book" href='{{url("/livros/destroy/{$livro->id}")}}' class="delete actions"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                    </td>
												</tr>
                                                    @endforeach
												
										
											</tbody>
										</table>
                                    </div>
                                    <div class="btn-addNew"></div>
                                <a href='{{url("/livros/create")}}' class="btn btn-primary" >Novo Livro</a>
								</div>
                            </section>
</div>


@endsection