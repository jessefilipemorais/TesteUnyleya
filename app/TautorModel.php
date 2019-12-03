<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TautorModel extends Model
{
    protected $fillable = ['nome','anonascimento','sexo','nascionalidade']; // campos editaveis, aceitam insert
    protected $guarded = ['idautor', 'created_at', 'updated_at']; // campos nao editaveis, nao aceitam insert
    protected $primaryKey  = 'idautor';
    protected $table = 'tautor';
    
    //marcacaodatahora formatada m/d/Y H:i
    public function getCreatedAtAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->attributes['created_at']));
    } 
}

