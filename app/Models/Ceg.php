<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceg extends Model
{
    use HasFactory;

    protected $table = 'cegek';

    protected $primaryKey = 'id';

    // protected $timestamps = true;

    // protected $dateFormat = 'h:m:s'; 

    protected $fillable = ['nev','email', 'logo','website'];


    public function alkalmazottak(){
         
        // set 1 : N relationship
        return $this->hasMany(Alkalmazott::class);
         
    }

}
