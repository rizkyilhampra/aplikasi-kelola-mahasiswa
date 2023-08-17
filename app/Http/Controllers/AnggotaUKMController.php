<?php

namespace App\Http\Controllers;

use App\Exports\AnggotaUkmExport;
use App\Models\AnggotaUKM;
use App\Models\Mahasiswa;
use App\Models\UnitKegiatanMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class AnggotaUKMController extends Controller
{
    private $rules = [
        'ukm_id' => 'required|exists:unit_kegiatan_mahasiswa,id',
        'mahasiswa_id' => 'required|exists:mahasiswa,id',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('anggota-ukm.index', [
            'anggotaUkms' => AnggotaUKM::with('mahasiswa', 'ukm')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota-ukm.create', [
            'mahasiswa' => Mahasiswa::all(),
            'ukm' => UnitKegiatanMahasiswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);

        try {
            AnggotaUKM::create($validated);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('anggota_ukm.index')->with('error', 'Data Anggota UKM gagal ditambahkan');
        }

        return redirect()->route('anggota_ukm.index')->with('success', 'Data Anggota UKM berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaUKM $anggota_ukm)
    {
        return view('anggota-ukm.edit', [
            'anggotaUKM' => $anggota_ukm,
            'mahasiswa' => Mahasiswa::all(),
            'ukm' => UnitKegiatanMahasiswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaUKM $anggota_ukm)
    {
        $validated = $request->validate($this->rules);

        try {
            $anggota_ukm->update($validated);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('anggota_ukm.index')->with('error', 'Data Anggota UKM gagal diubah');
        }

        return redirect()->route('anggota_ukm.index')->with('success', 'Data Anggota UKM berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaUKM $anggota_ukm)
    {
        try {
            $anggota_ukm->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('anggota_ukm.index')->with('error', 'Data Anggota UKM gagal dihapus');
        }

        return redirect()->route('anggota_ukm.index')->with('success', 'Data Anggota UKM berhasil dihapus');
    }

    /**
     * The function exports data from a MahasiswaExport class to an Excel file and returns it as a
     * BinaryFileResponse.
     *
     * @return BinaryFileResponse a BinaryFileResponse.
     */
    public function exportExcel(): BinaryFileResponse
    {
        return Excel::download(new AnggotaUkmExport, 'anggota-ukm.xlsx');
    }

    /**
     * The function exports data from a MahasiswaExport object to a PDF file using the DOMPDF library.
     *
     * @return BinaryFileResponse a BinaryFileResponse.
     */
    public function exportPdf(): BinaryFileResponse
    {
        return Excel::download(new AnggotaUkmExport, 'anggota-ukm.pdf', ExcelExcel::DOMPDF);
    }
}
