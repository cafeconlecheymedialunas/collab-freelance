<?php

// app/Models/Tag.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_id', 
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_tag');
    }
}

