<?php

namespace App\Exports;
use App\Models\SignUp;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
            return SignUp::all();
        
    }
}
