<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $guarded = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id', 'id')->where('role_id', 2);
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    public function serve()
    {
        return $this->belongsTo(ServeStatus::class, 'serve_status', 'id');
    }
}
