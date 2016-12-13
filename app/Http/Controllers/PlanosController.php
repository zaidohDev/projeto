<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Planos;


class PlanosController extends Controller
{
     

     public function __construct() {
       $this->middleware('auth');
  }


    public function index(Request $request)
    {  
      // $planos = Planos::paginate(3);
      // return view('planos.index',compact('planos'))
      // ->with('i', ($request->input('page',1)-1) * 5);

        return view('admin.planos.index')->with('planos',Planos::paginate(5)); //aqui usei o admin.folder
    }

  
    public function create()
    {
        return view('admin.planos.create');//aqui usei o admin.folder
    }

   
    public function store(Request $request)
    {
            $this->validate($request, [
            'curso' => 'required',
            'titulo' => 'required',
        ]);
        Planos::create($request->all());
        return redirect()->route('planos.index')
                        ->with('success','Plano de aula criado com suecesso');
    }
    public function show($id)
    {
        $planos = Planos::find($id);
        return view('admin.planos.show',compact('planos')); //aqui usei o admin.folder
    }
  
    public function edit($id)
    {
        $planos = Planos::find($id);
        return view('admin.planos.edit',compact('planos')); //aqui usei o admin.folder
    }

    public function update(Request $request, $id)
    {
            $this->validate($request, [
            'curso' => 'required',
            'titulo' => 'required',
                    ]);
        Planos::find($id)->update($request->all());
        return redirect()->route('planos.index')
        ->with('success','Plano de aula atualizado com sucesso ');
    }

    public function destroy($id){
        Planos::find($id)->delete();
        return redirect()->route('planos.index')->with('success','Item deletado com sucesso');
    }
}
