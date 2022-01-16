<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCandidate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }
}
