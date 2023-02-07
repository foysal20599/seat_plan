<?php

namespace App\Imports;

use App\Models\SeatPlan;
use Maatwebsite\Excel\Concerns\ToModel;

class SeatPlanImport implements ToModel
{

    public function model(array $row)
    {
        return new SeatPlan([
            //
        ]);
    }
}
