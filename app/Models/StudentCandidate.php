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

    public function scopeTahunAjaran($query, $tahunAjaran)
    {
        $query->when( $tahunAjaran ?? false, fn ($query, $tahunAjaran) =>
            $query->whereHas('recruitment', fn ($query) =>
                $query->where('tahun_ajaran', $tahunAjaran)
            )
        );
    }
    public function scopeActive($query)
    {
        $query->whereHas('recruitment', fn ($query) =>
            $query->where('deleted_at', '=', NULL)
        );
    }

    public function scopeSearch($query, $search)
    {
        $query->when( $search ?? false, fn ($query, $search) =>
            $query->where('nama_lengkap', 'LIKE', '%'.$search.'%')
            ->orWhere('nama_panggilan', 'LIKE', '%'.$search.'%')
            ->orWhere('jk', 'LIKE', '%'.$search.'%')
            ->orWhere('created_at', 'LIKE', '%'.$search.'%')
        );
    }

}
