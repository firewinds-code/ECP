<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportData implements WithHeadings
{
    public function headings(): array
    {
        return ['Govt. ID Number', 'Govt. ID Type', 'Photo', 'Name', 'DOB(YYYY-MM-DD)', 'Father Name', 'Age', 'Sex', 'Email', 'Mobile No.', 'Vidhan Sabha', 'Address', 'District', 'State', 'Pincode'];
    }
}