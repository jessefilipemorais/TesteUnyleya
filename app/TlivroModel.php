<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TlivroModel extends Model
{
    protected $fillable = ['titulo','anolancamento','idautor','idgeneroliterario', 'ideditora']; // campos editaveis, aceitam insert
    protected $guarded = ['idlivro', 'created_at', 'updated_at']; // campos nao editaveis, nao aceitam insert
    protected $primaryKey  = 'idlivro';
    protected $table = 'tlivro';
    
    //marcacaodatahora formatada m/d/Y H:i
    public function getCreatedAtAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->attributes['created_at']));
    } 
}
