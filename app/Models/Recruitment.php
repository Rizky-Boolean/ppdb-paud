<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recruitment extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'tahun_ajaran';
    }

    public function student_candidate()
    {
        return $this->hasMany(StudentCandidate::class);
    }

}
