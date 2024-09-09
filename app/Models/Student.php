<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // if the table name and model name is deffernt then we write this line code 
        // protected $table = 'table-name'

    function test(){
        echo "this is test function from Student Model";
    }
}
