<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart_model extends Model
{
    use HasFactory;

    protected $table = 'chart';

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(category_model::class, 'category_model_id', 'id');
    }

    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
