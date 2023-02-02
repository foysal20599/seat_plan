<?php

namespace App\Exports;

use App\Models\SeatPlan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class SeatPlanExport extends DefaultValueBinder implements WithColumnFormatting, FromQuery, WithHeadings, ShouldAutoSize
{

    public function headings(): array
    {
        return ['id', 'student_id', 'name', 'room_no', 'bept', 'section', 'batch', 'date_time'];
    }

    public function map($student): array
    {
        return [
            $student->id,
            $student->student_id,
            $student->name,
            $student->room_no,
            $student->bept,
            $student->section,
            $student->batch,
            $student->date_time,
        ];
    }

    public function columnFormats(): array
    {
        return [
            'J' => NumberFormat::FORMAT_NUMBER_0,
            'K' => NumberFormat::FORMAT_NUMBER_0,
            'L' => NumberFormat::FORMAT_NUMBER_0,
        ];
    }

    public function query()
    {
        return SeatPlan::query();
    }
}
