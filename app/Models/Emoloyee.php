<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emoloyee extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function employee()
    {
        return $this->belongsTo(Project::class);
    }
}
