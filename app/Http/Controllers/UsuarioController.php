<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Vaga;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id_usuario', 'ASC')->get();
        $vagas = Vaga::orderBy('id_vaga', 'ASC')->get();

        return view(
            'pages.usuario.dashboard-usuario',
            array('usuarios' => $usuarios, 'vagas' => $vagas),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.usuario.cadastrar-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('pages.usuario.login-usuario');
    }

    public function fazerLogin(Request $request)
    {
        $dados = Usuario::where('perfil_github', $request->perfil_github)->first();

        $resultado = '';

        if ($dados == '') {
            $resultado = redirect('usuario/login');
        } else {
            $resultado = redirect('usuario');
        }

        return ($resultado);
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());

        return (redirect('usuario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function escolherUsuario()
    {
        $usuarios = Usuario::orderBy('id_usuario', 'ASC')->get();

        return view(
            'pages.usuario.escolher-usuario',
            array('usuarios' => $usuarios),
        );
    }

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
        $usuario = Usuario::find($id);

        return view(
            'pages.usuario.atualizar-usuario',
            [
                'usuario' => $usuario
            ]
        );
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
        $usuario = Usuario::find($id);
        $usuario->update($request->all());

        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        return view(
            'pages.empresa.dashboard-empresa',
            array('usuario' => $usuario)
        );
    }
}
