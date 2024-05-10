<?php

namespace App\Imports;
use App\Models\SignUp;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    // public function collection(Collection $collection)
    
        
        public function model(array  $row)
        {
            return new SignUp([
               'Name'     => $row[0],
               'Email'    => $row[1], 
               'Pwd' => bcrypt('Pwd'),
            ]);
        }
    
    
}
