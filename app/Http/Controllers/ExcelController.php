<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
class ExcelController extends Controller
{
    //
    public function export() 
        {
            return Excel::download(new UsersExport, 'user.xlsx');
        }

        public function import(Request $request)
        {
            
                Excel::import(new UsersImport, $request->file('file'));
                return redirect('view');
        }

       
}
