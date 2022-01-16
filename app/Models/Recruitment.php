<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student_candidate()
    {
        return $this->hasMany(StudentCandidate::class);
    }

}
