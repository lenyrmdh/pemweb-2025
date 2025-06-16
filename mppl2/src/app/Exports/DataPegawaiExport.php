<?php

namespace App\Exports;

use App\Models\DataPegawai;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class DataPegawaiExport implements
    FromCollection,
    WithHeadings,
    WithStyles,
    WithTitle,
    WithColumnWidths,
    ShouldAutoSize,
    WithMapping
{
    public function collection()
    {
        return DataPegawai::with([
            'divisi',
            'jabatan',
            'absensis',
            'cutis',
            'gajis',
            'lemburs'
        ])->get();
    }

    public function map($pegawai): array
    {
        $totalLemburJam = $pegawai->lemburs->filter(function ($lembur) {
            return $lembur->jam_mulai && $lembur->jam_selesai;
        })->sum(function ($lembur) {
            $mulai = Carbon::parse($lembur->jam_mulai);
            $selesai = Carbon::parse($lembur->jam_selesai);
            return min($mulai, $selesai)->diffInHours(max($mulai, $selesai));
        });

        return [
            $pegawai->id,
            $pegawai->nama,
            $pegawai->email,
            $pegawai->divisi->nama ?? '-',
            $pegawai->jabatan->nama ?? '-',
            $pegawai->absensis->count(),
            $pegawai->cutis->count(),
            number_format($pegawai->gajis->sum('total_gaji'), 0, ',', '.'),
            $totalLemburJam,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Email',
            'Divisi',
            'Jabatan',
            'Total Absensi',
            'Total Cuti',
            'Total Gaji (Rp)',
            'Total Lembur (Jam)',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

        // Header: bold + background biru muda
        $sheet->getStyle('A1:I1')->getFont()->setBold(true);
        $sheet->getStyle('A1:I1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFBDD7EE'); // biru muda

        // Seluruh baris data: background abu terang
        $sheet->getStyle("A2:I{$highestRow}")->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFF2F2F2'); // abu terang

        // Border seluruh kolom
        $sheet->getStyle("A1:I{$highestRow}")
            ->getBorders()->getAllBorders()
            ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        return [];
    }

    public function title(): string
    {
        return 'Data Pegawai';
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 25,
            'C' => 30,
            'D' => 20,
            'E' => 20,
            'F' => 15,
            'G' => 15,
            'H' => 20,
            'I' => 20,
        ];
    }
}
