<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\UploadData;
use Illuminate\Support\Facades\Auth;

class ImportData implements ToCollection
{
    public function collection(Collection $rows)
    {
        dd($rows);
        $records = [];
        // Skip the first row (header row)
        $rows->shift();
        
        foreach ($rows as $row) {
            $records[] = [
                'gov_id_no'     => $row['govt_id_number'],
                'gov_id_type'   => $row['gov_id_type'],
                // 'photo'         => $filePath,
                'name'          => $row['name'],
                'dob'           => $row['dob'],
                'father_name'   => $row['father_name'],
                'age'           => $row['age'],
                'sex'           => $row['sex'],
                'phone'         => $row['phone'],
                'address'       => $row['address'],
                'district'      => $row['district'],
                'state'         => $row['state'],
                'pincode'       => $row['pincode'],
                'created_by'    => Auth::user()->name,
            ];
        }

        UploadData::insert($records);

        return back()->with('success', 'Data Uploaded successfully');
    }
}