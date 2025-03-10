<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados en masa
    protected $fillable = [
        'proposal_id',
        'title',
        'description',
        'cost',
        'revisions',
        'type',
        'meeting',
        'deliverable',
        'estimation_optimistic',
        'estimation_more_probabbly',
        'estimation_pesimistic',
        'estimated_time',
        'init_at',
        'finish_at',
        'status'
    ];



    // Relación con Proposal: Un milestone pertenece a una propuesta
    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
