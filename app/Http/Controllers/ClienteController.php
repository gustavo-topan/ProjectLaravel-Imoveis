<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\imoveis;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ClienteController extends Controller
{
    protected function validarCliente($request){
        $validator = Validator::make($request->all(), [
            "nome" => "required",
            "email" => "required",
            "telefone" => "required",
            "cpf" => "required",
            "cidadeEndereco" => "required",
            "estadoEndereco" => "required",
        
        ]);
        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 5;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if($buscar){
            $cliente = DB::table('cliente')->where('cidadeEndereco', '=', $buscar)->paginate($qtd);
        }else{
               $cliente = DB::table('cliente')->paginate($qtd);
            }
        
        $cliente = $cliente->appends(Request::capture()->except('page'));

        return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarCliente($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        Cliente::create($dados);

        return redirect()->route('cliente.index');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = cliente::find($id);

        return view('cliente.edit', compact('cliente'));
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
        $validator = $this->validarCliente($request);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $cliente = Cliente::find($id);
        $dados = $request->all();
        $cliente->update($dados);

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('cliente.index');
    }

    public function remover($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.remove', compact('cliente'));
    }
}
