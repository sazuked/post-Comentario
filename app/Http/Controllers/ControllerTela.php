<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ControllerTela extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $array=$request->all();
         $comentario=Comentario::create([
            'nome'=>$array['nome'],
            'comentario'=>$array['comentario'],
            'userid'=>Auth::user()->id
            
        ]);
        if($comentario){
            return redirect()->route('welcome');
        }else{
            return redirect()->route('welcome');
        
        }

        
        
    }
    public function listarLog()
    {
        $sql = Comentario::where('userid',Auth::user()->id)->get();
        return view('layouts.listarlog',compact('sql'));
        
    }
    public function editarLog($id){
        $editar = Comentario::where('id',$id)->first();
        return view('layouts.editar',compact('editar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sql = Comentario::all();
        return view('listar',compact('sql'));

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
        $update = $request->all();
        $sql = Comentario::where('id',$id)->update(['nome'=>$update['nome'],'comentario'=>$update['comentario']]);
        if($sql){
            return redirect()->route('listarLog');
        }
        return redirect()->route('listarLog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ok = Comentario::where('id',$id)->delete();
        if($ok){
            return redirect()->route('listarLog');
        }
         return redirect()->route('listarLog');
    }
}
