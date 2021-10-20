<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    //protected $fillable = ['title', 'excerpt', 'body', 'id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
        // hasOne, hasMany, belongsTo, belongsToMany
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
