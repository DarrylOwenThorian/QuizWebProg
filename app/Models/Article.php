<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'subject_id',
        'writer_id',
        'title',
        'content',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
