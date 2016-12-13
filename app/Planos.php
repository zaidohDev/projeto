<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Docentes;

class Planos extends Model 
{	 
	 protected $table ='planos';
	 protected $fillable =[
	 'curso','titulo','conteudo','objetivo','metodologia','avaliacao','referencia','descricao','data_insert'
	 ];	

   public function docentes(){
   	return $this->belongsTo('Docentes');
   }  
}
