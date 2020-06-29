<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Vaga;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::orderBy('id_empresa', 'ASC')->get();
        $vagas = Vaga::orderBy('id_vaga', 'ASC')->get();

        return view(
            'pages.empresa.dashboard-empresa',
            array('empresas' => $empresas, 'vagas' => $vagas),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.empresa.cadastrar-empresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('pages.empresa.login-empresa');
    }

    public function fazerLogin(Request $request)
    {
        $dados = Empresa::where('nome', $request->nome)->first();

        $resultado = '';

        if ($dados == '') {
            $resultado = redirect('empresa/login');
        } else {
            $resultado = redirect('empresa');
        }

        return ($resultado);
    }

    public function store(Request $request)
    {
        Empresa::create($request->all());

        return (redirect('empresa/selecionar'));
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

    public function escolherEmpresa()
    {
        $empresas = Empresa::orderBy('id_empresa', 'ASC')->get();

        return view(
            'pages.empresa.escolher-empresa',
            array('empresas' => $empresas),
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view(
            'pages.empresa.atualizar-empresa',
            array('empresa' => $empresa)
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
        $empresa = Empresa::find($id);
        $empresa->update($request->all());

        return redirect('empresa');
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
