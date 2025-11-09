<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function article()
    {
        return $this->hasOne(Article::class);
    }
}
