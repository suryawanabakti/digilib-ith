<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literatur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = 'literatur';
    public function user() // author
    {
        return $this->belongsTo(User::class);
    }
    public function kontributor()
    {
        return $this->hasMany(LiteraturKontributor::class);
    }

    public function subject()
    {
        return $this->hasMany(SubjectLiteratur::class);
    }
}
