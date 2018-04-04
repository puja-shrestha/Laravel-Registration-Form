<?php

namespace App\Exports;

use Maatwebsites\Excel\Concerns\FromCollection;

class InvoiceExport implements FromCollection
{
    public function collection()
    {
        return Invoice::all();
    }
}
