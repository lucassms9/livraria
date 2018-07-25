<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Usuario;
use Session;
class LivrosController extends Controller
{   


     private $livro;
     private $usuario;

    public function __construct(Livro $livro, Usuario $usuario )
    {
       $this->livro = $livro;
       $this->usuario = $usuario;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        $livros = $this->livro->all();
    

        return view('Livros.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       

        $categorias = ['Desenvolvimento', 'Estrangeiros', 'Romance', 'Terror'];
        $usuarios = $this->usuario->all();
        $action = 'Cadastro';
        return view('Livros.create-edit', compact('livros', 'categorias', 'usuarios', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $dataForm = $request->all();
            $insert = $this->livro->create($dataForm);

            if ($insert)
                return redirect('livros');
            else
                return redirect('livros/create');

        }

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
        $livro = $this->livro->find($id);
        // dd($livro->categoria);
        $usuarios = $this->usuario->all();
        $action = 'Edição';
        $categorias = ['Desenvolvimento', 'Estrangeiros', 'Romance', 'Terror'];
        return view('Livros.create-edit', compact('title', 'categorias', 'livro', 'usuarios', 'action'));
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
        $dataForm = $request->all();

        // dd();
        unset($dataForm['_method']);
        unset($dataForm['_token']);
        $update = $this->livro
            ->where('id', $id)
            ->update($dataForm);

        if ($update)
            return redirect('livros');
        else
            return redirect('livros/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete = $this->livro
            ->where('id', $id)
            ->delete();

        if ($delete)
            return redirect('livros');
        else
            return redirect('livros');
    }
}
