<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Planos;

class Docentes extends Model
{
     protected $table ='docentes';
	 protected $fillable =[	
	 'nome','sobrenome','telefone','email','disciplina','escola','turma' ];	

	 public function planos(){
	 	return $this->hasMany('Planos');
	 }
}
