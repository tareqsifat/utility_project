<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['*'];

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id', 'id')->where('role_id',2);
    }
}
