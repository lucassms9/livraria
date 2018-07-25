<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Livro;

class LivrosController extends Controller
{
   
	private $livro;

	public function __construct(Livro $livro )
	{
		$this->livro = $livro;
	}


	public function index()
	{   

		$livros = $this->livro->all();
		echo json_encode($livros);
		
	}

	public function store(Request  $request)
	{
		if ($request->isMethod('post')) {

			$retorno = '';

			$dataForm = $request->all();

			$insert = $this->livro->create($dataForm);

			if($insert)
				$retorno = 'livro cadastrado com sucesso';
			else
				$retorno = 'tente cadastrar o livro novamente';

			echo json_encode($retorno);
		} 

	}

	public function update(Request $request,$id)
	{
		
		$dataForm = $request->all();
		$update = $this->livro
		->where('id',$id)
		->update($dataForm);  

		if($update)
			$retorno = 'livro editado com sucesso';
		else
			$retorno = 'tente editar o livro novamente';

		echo json_encode($retorno);
	}
	public function destroy($id)
	{
		$delete = $this->livro
		->where('id',$id)
		->delete();  

		if($delete)
			return "livro deletado com sucesso";
		else
			return 'Erro ao tentar deletar';
	}
}
