<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'content',
        'tag'
        ];

    public function searchableAs()
    {
        return 'posts_index';
    }

}
