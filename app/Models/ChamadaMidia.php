<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamadaMidia extends Model
{
    use HasFactory;
   
    protected $table = 'chamado_midia'; 
    protected $fillable = [
        'chamado_id', 
        'midia_id',   
    ];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id'); 
    }

    public function midia()
    {
        return $this->belongsTo(Midia::class, 'midia_id');
    }
}
