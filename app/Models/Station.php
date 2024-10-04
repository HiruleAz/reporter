<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $station = 'stations';


    // protected $primaryKey = 'idno';
    protected $fillable = ['idno', 'idname', 'idcreated', 'idpassword'];
    public function entries()
{
    return $this->hasMany(Entry::class);
}
    
}
