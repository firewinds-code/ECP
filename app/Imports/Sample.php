<?php

namespace App\Imports;

use App\Models\UploadData;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;

class Sample implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        // dd($row);
        // Extract the image ID from the cell containing the image reference
        preg_match('/DISPIMG\("([^"]+)",\d+\)/', $row['photo'], $matches);
        $imageId = $matches[1];

        // Store the image in the public folder

        $imageContents = $this->getImageContentsFromExcel($imageId);
        $imagePath = $this->saveImageToPublicStorage($imageContents, $imageId);

        // Store the data in the database, including the image path

        $data = [
            'gov_id_type' => $row['govt_id_type'],
            'gov_id_no' => $row['govt_id_number'],
            'name' => $row['name'],
            'dob' => $row['dobyyyy_mm_dd'],
            'father_name' => $row['father_name'],
            'age' => $row['age'],
            'sex' => $row['sex'],
            'phone' => $row['mobile_no'],
            'address' => $row['address'],
            'state' => $row['state'],
            'district' => $row['district'],
            'pincode' => $row['pincode'],
            'created_by' => auth()->id(),
            'photo' => $imagePath,
        ];

        UploadData::create($data);
    }




    private function getImageContentsFromExcel($imageId)
    {
        $spreadsheet = IOFactory::load(request()->file('file'));
        foreach ($spreadsheet->getActiveSheet()->getDrawingCollection() as $drawing) {
            if ($drawing instanceof MemoryDrawing && $drawing->getName() === $imageId) {
                ob_start();
                call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
                $imageContents = ob_get_contents();
                ob_end_clean();
                return $imageContents;
            }
        }
        return false;
    }

    private function saveImageToPublicStorage($imageContents, $imageId)
    {
        $extension = 'png'; // Replace with the correct extension if known
        $imagePath = 'public/images/people/' . $imageId . '.' . $extension;

        // Save the image to the public storage
        Storage::put($imagePath, $imageContents);

        return $imagePath;
    }
}