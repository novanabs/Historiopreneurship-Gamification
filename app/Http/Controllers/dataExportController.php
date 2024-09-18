<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nilai;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Storage;

class dataExportController extends Controller
{
    public function exportEvaluasi()
    {
        // Ambil data mahasiswa dan nilai evaluasi dari database
        $mahasiswa = User::join('nilai', 'users.email', '=', 'nilai.email')
                         ->where('nilai.aspek', 'evaluasi')
                         ->select('users.nama_lengkap', 'users.kelas', 'nilai.nilai_akhir')
                         ->get();

        // Buat instance Spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Tambahkan judul kolom
        $sheet->setCellValue('A1', 'Nomor');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kelas');
        $sheet->setCellValue('D1', 'Nilai Evaluasi');

        // Tambahkan data ke sheet
        $row = 2;
        $no = 1;
        foreach ($mahasiswa as $data) {
            $sheet->setCellValue('A' . $row, $no);
            $sheet->setCellValue('B' . $row, $data->nama_lengkap);
            $sheet->setCellValue('C' . $row, $data->kelas);
            $sheet->setCellValue('D' . $row, $data->nilai_akhir);
            $row++;
            $no++;
        }

        // Membuat Writer untuk menyimpan file Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);
        $filePath = 'exports/data_evaluasi.xlsx';

        // Simpan file ke storage sementara
        $writer->save(storage_path('app/' . $filePath));

        // Kirim file sebagai respon download dan hapus setelah dikirim
        return response()->download(storage_path('app/' . $filePath))->deleteFileAfterSend(true);
    }
}