<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    public function alunos()
    {
        return $this->belongsToMany(User::class);
    }

    public function professor()
    {
        return $this->belongsTo(User::class, 'professor_id');
    }
}
