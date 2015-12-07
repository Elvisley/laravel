<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PessoaCreateRequest;
use App\Http\Controllers\Controller;
use App\Pessoa;
use Session;
use Redirect;

class Controllerpessoa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view("pessoa.index" , compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaCreateRequest $request)
    {
        Pessoa::create($request->all()) ;
        Session::flash('message' , 'Pessoa cadastrada com sucesso!');
        return Redirect::to('/pessoa');
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
        $pessoa = Pessoa::find($id);
        return view('pessoa.edit' , compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaCreateRequest $request, $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->fill($request->all());
        $pessoa->save();
        Session::flash('message' , 'Pessoa atualizada com sucesso!');
        return Redirect::to('/pessoa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $pessoa = Pessoa::find($id);
        $pessoa->delete($pessoa);
        Session::flash('message' , 'Pessoa removida com sucesso!');
        return Redirect::to('/pessoa');
    }
}
