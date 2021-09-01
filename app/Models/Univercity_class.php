<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univercity_class extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function classLessons()
    {
        return $this->hasMany(Lesson::class, 'class_id', 'id');
    }

    public function classUsers()
    {
        return $this->hasMany(User::class, 'class_id', 'id');
    }
}
