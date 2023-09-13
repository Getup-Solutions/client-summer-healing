<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExportEvent implements FromCollection, WithHeadings
{

    public function headings():array{
        return[
            'Id',
            'Email',
            'Event',
            'price',
            'Venue',
            'Tickets',
            'Attendees',
            'Start Date',
            'End Date',
            'Start Time',
            'End Time',
            'Created on',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $events = DB::table('bookedevents')->select('id','username','useremail','title','price','venue','tickets','attendees','startdate','enddate','starttime','endtime','created_at')->get();
        return $events;
    }
}
