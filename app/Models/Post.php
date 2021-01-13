<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    use HasFactory;
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo('App\Models\User');
    }


}
