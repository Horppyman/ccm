<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    use HasFactory;





    public function category()
    {
        return $this->hasmany(Category::class, 'id', 'category_id');
    }
}
