<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "author"
    ];

    protected $hidden = [
        "updated_at",
        "id"
    ];

    protected $with = [
        "author"
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
