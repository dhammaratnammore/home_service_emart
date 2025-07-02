<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_category_model extends Model
{
    use HasFactory;
    protected $table = 'sub_category';
    protected $primaryKey = 'sub_category_id';
    public function category()
{
    return $this->belongsTo(category_model::class, 'category_id');
}


}
