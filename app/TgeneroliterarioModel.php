<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TgeneroliterarioModel extends Model 
{

    protected $fillable = ['nome']; // campos editaveis, aceitam insert
    protected $guarded = ['idgeneroliterario', 'created_at', 'updated_at']; // campos nao editaveis, nao aceitam insert
    protected $primaryKey = 'idgeneroliterario';
    protected $table = 'tgeneroliterario';

    //marcacaodatahora formatada m/d/Y H:i
    public function getCreatedAtAttribute() {
        return date('d/m/Y H:i', strtotime($this->attributes['created_at']));
    }

}
