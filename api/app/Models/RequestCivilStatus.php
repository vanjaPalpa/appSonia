<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCivilStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_civils_status',
        'pattern',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
