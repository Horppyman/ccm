<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;



    public function Sermons()
    {
        return $this->hasmany(Sermon::class, 'category_id', 'id');
    }

    public function Books()
    {
        return $this->hasmany(Book::class, 'category_id', 'id');
    }
}
