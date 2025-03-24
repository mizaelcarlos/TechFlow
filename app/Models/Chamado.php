<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'chamados';
=======
    protected $table = 'chamado';  
>>>>>>> de3c28861fdcc502d14fdf5fed5972b8391f603a
    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'titulo',
        'descricao',
        'usuario_solicitante_id',
        'usuario_atendente_id',
        'risco_id',
        'status_id',
        'setor_id',
    ];

    // Definir as relações
    public function usuarioSolicitante()
    {
        return $this->belongsTo(User::class, 'usuario_solicitante_id');
    }

    public function usuarioAtendente()
    {
        return $this->belongsTo(User::class, 'usuario_atendente_id');
    }

    public function risco()
    {
        return $this->belongsTo(Risco::class, 'risco_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setor_id');
    }
}
