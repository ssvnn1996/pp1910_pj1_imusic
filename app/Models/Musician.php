<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Musician extends Model
{
    protected $table = 'musicians';
    protected $fillable = [
        'name',
        'decription',
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    //
}
