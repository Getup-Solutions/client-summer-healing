<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExportOrder implements FromCollection, WithHeadings
{

    public function headings():array{
        return[
            'Id',
            'Name',
            'Order date',
            'Course',
            'Quantity',
            'Total',
            'Phone',
            'Subscriber',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $orders = DB::table('orders')->select('id','username', 'created_at','course', 'quantity', 'total','userphone', 'useremail')->get();
        return $orders;
    }
}
