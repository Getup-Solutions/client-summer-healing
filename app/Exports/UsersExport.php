<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Name',
            'Lastname',
            'Email',
            'Phone',
            'Subscription',
            'Created_at',
            'Updated_at' 
        ];
    }

    public function collection()
    {
        $users = DB::table('users')->select('id','name', 'lastname','email', 'phone', 'subscription','Created_at','Updated_at' )->where('type', '0')->get();
        return $users;
    }
}
