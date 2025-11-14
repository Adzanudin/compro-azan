<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'content', 'photo', 'status', 'writter'];

    //object relasion mapping
    //belongsto

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

}
