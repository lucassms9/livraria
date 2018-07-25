<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Jobs\EnviarEmail;

class UsuariosController extends Controller
{
	

	private $usuario;

	public function __construct(Usuario $usuario )
	{
		$this->usuario = $usuario;
	}


	public function index()
	{   

		$usuarios = $this->usuario->all();
		echo json_encode($usuarios);
		
	}

	public function verify($token)
	{
		$user = Usuario::where('email_token', $token)->first();
		$user->verified = 1;
		if ($user->save()) 
			// return view('emailconfirm', ['user' => $user]);
			return 'user ativado com sucesso';
	}

	public function store(Request  $request)
	{
		if ($request->isMethod('post')) {

			$retorno = '';

			$dataForm = $request->all();
			$dataForm['senha'] = md5($dataForm['senha']);
			$dataForm['ativo'] = 0;
			$dataForm['email_token'] = base64_encode($dataForm['email']);
			$insert = $this->usuario->create($dataForm);
			if($insert){

				dispatch(new EnviarEmail($insert));
				EnviarEmail::dispatch($insert)
					->delay(now()->addMinutes(1));
				$retorno = 'usuario cadastrado com sucesso';
			}else{

				$retorno = 'tente cadastrar o usuario novamente';
			}

			echo json_encode($retorno);

		} 

	}

	public function update(Request $request,$id)
	{
		
		$dataForm = $request->all();
		$update = $this->usuario
		->where('id',$id)
		->update($dataForm);  

		if($update)
			$retorno = 'usuario editado com sucesso';
		else
			$retorno = 'tente editar o usuario novamente';

		echo json_encode($retorno);
	}
	public function destroy($id)
	{
		$delete = $this->usuario
		->where('id',$id)
		->delete();  

		if($delete)
			return "usuario deletado com sucesso";
		else
			return 'Erro tentar deletar';
	}
}
