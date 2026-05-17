<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->belongsTo(User::class, 'aluno_id');
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }
}
