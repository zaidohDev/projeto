<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Docentes;

class DocentesController extends Controller
{
      public function __construct() {
       $this->middleware('auth');
  }


    public function index(Request $request){

    	/*$docentes = Docentes::paginate(3);

      return view('docentes.index',compact('docentes'))->with('i', ($request->input('page',1)-1) * 5);*/

      return view('admin.docentes.index')->with('docentes',Docentes::paginate(5));
    }
    public function create()
    {
        return view('admin.docentes.create');
    }

   
    public function store(Request $request)
    {
            $this->validate($request, [
            'nome' => 'required',
            'sobrenome' => 'required',
            'turma' => 'required',
            'escola' => 'required',
            'disciplina' => 'required',
            'email' => 'required',
        ]);
        Docentes::create($request->all());
        return redirect()->route('docentes.index')
                        ->with('success','Docente inserido com suecesso');
    }
    public function show($id)
    {
        $docentes = Docentes::find($id);
        return view('admin.docentes.show',compact('docentes'));
    }
  
    public function edit($id)
    {
        $docentes = Docentes::find($id);
        return view('admin.docentes.edit',compact('docentes'));
    }

    public function update(Request $request, $id)
    {
            $this->validate($request, [
            'nome' => 'required',
            'sobrenome' => 'required',
                    ]);
        Docentes::find($id)->update($request->all());
        return redirect()->route('docentes.index')
        ->with('success','Docente atualizado com sucesso ');
    }

    public function destroy($id){
        Docentes::find($id)->delete();
        return redirect()->route('docentes.index')->with('success','Docente deletado com sucesso');
    }
}
