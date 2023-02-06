<?php

namespace App\Exports;

use App\Models\SeatPlan;
use App\Models\Student;
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
        return ['id', 'name', 'student_id'];
    }

    public function map($student): array
    {
        return [
            $student->id,
            $student->student_id,
            $student->name,
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
        return Student::query();
    }
}
