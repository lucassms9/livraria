<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Notifications\ConfirmaCadastro;
use App\Jobs\EnviarEmail;
use SebastianBergmann\Environment\RuntimeTest;


class UsuariosController extends Controller
{


     private $usuario;

    public function __construct(Usuario $usuario )
    {
       $this->usuario = $usuario;
   }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $usuario = Usuario::find(3);
        dispatch(new EnviarEmail($usuario));
      


         return 'email sent';
    }


    public function emailConfirmacao($usuario_id)
    {

        $usuario = Usuario::find($usuario_id);

        dd($usuario['email']);
        $user = $this->usuario;
        $user->dados = $usuario;
        $user->email = $usuario['email'];   // This is the email you want to send to.
        $user->notify(new ConfirmaCadastro());
        if($user)
        return 'enviado com sucesso';
        else
        return 'erro no envio';

    }

    public function ativarConta($usuario_id)
    {

        $usuario = Usuario::find($usuario_id);

        $usuario->ativo = 1;

        $update = $usuario->save();

        if ($update)
            return 'usuario ativo com sucesso';
        else
            return 'erro ao ativar usuario';

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
