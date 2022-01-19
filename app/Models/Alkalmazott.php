<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alkalmazott extends Model
{
    use HasFactory;

    protected $table = 'alkalmazottak';

    protected $primaryKey = 'id';

    public function cegek(){         
        
        
        return $this->belongsTo(Ceg::class);
         
    }
}
