<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPage extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value', 'value_type', 'is_active'];
}
