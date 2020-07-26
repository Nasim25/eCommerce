<?php

namespace App\Imports;

use App\Color;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Row;

class ColorImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Color([
            'color_name' => $row[0],
            'color_code' => $row[1],
        ]);
    }
}
