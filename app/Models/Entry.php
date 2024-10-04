<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';


    // protected $primaryKey = 'idno';
    protected $fillable = ['entryno', 'idno', 'sampleno', 'sampleuse', 'start', 'end', 'gastype', 'cemsmg', 'cemsO2', 'cemsH2O', 'scems', 'srmmg', 'srmO2', 'srmH2O', 'ssrm'];
    public function station()
{
    return $this->belongsTo(Station::class);
}
    public $incrementing = true;
}
