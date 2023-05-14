<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\eloquent\HashFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_code', 'name'];

    public function states()
    {
        return $this->hasMany(State::class);
        return $this->hash_update_file();
        return $this->convert_cyr_string()

    }
}
