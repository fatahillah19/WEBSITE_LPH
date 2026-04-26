<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
    'user_id', 'company_name', 'nib', 'company_address', 'product_name', 'product_type', 'status'
];

public function user() {
    return $this->belongsTo(User::class);
}
}
