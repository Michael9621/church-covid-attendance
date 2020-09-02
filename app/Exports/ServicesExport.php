<?php

namespace App\Exports;

use App\Service;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }


    public function collection()
    {
        $service = Service::find($this->id);
        return $service->members()->get(['name','identification','phone']);
    }
}
