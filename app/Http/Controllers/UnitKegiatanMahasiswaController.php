<?php

namespace App\Http\Controllers;

use App\Exports\UnitKegiatanMahasiswaExport;
use App\Models\UnitKegiatanMahasiswa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UnitKegiatanMahasiswaController extends Controller
{
    private $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('unit-kegiatan-mahasiswa.index', [
            'unitKegiatanMahasiswas' => UnitKegiatanMahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit-kegiatan-mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        try {
            UnitKegiatanMahasiswa::create($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Data Unit Kegiatan Mahasiswa gagal ditambahkan');
        }

        return redirect()->route('unit_kegiatan_mahasiswa.index')->with('success', 'Data Unit Kegiatan Mahasiswa berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnitKegiatanMahasiswa $unitKegiatanMahasiswa)
    {
        return view('unit-kegiatan-mahasiswa.edit', compact('unitKegiatanMahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnitKegiatanMahasiswa $unitKegiatanMahasiswa)
    {
        $this->validate($request, $this->rules);

        try {
            $unitKegiatanMahasiswa->update($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Data Unit Kegiatan Mahasiswa gagal diubah');
        }
        return redirect()->route('unit_kegiatan_mahasiswa.index')->with('success', 'Data Unit Kegiatan Mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnitKegiatanMahasiswa $unitKegiatanMahasiswa)
    {
        try {
            $unitKegiatanMahasiswa->delete();
        } catch (QueryException $q) {
            if ($q->getCode() == 23000) {
                return redirect()->back()->with('error', 'Data Unit Kegiatan Mahasiswa gagal dihapus karena terkait dengan data lainnya');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Data Unit Kegiatan Mahasiswa gagal dihapus');
        }
        return redirect()->route('unit_kegiatan_mahasiswa.index')->with('success', 'Data Unit Kegiatan Mahasiswa berhasil dihapus');
    }

    /**
     * The function exports data from a MahasiswaExport class to an Excel file and returns it as a
     * BinaryFileResponse.
     *
     * @return BinaryFileResponse a BinaryFileResponse.
     */
    public function exportExcel(): BinaryFileResponse
    {
        return Excel::download(new UnitKegiatanMahasiswaExport, 'unit-kegiatan-mahasiswa.xlsx');
    }

    /**
     * The function exports data from a MahasiswaExport object to a PDF file using the DOMPDF library.
     *
     * @return BinaryFileResponse a BinaryFileResponse.
     */
    public function exportPdf(): BinaryFileResponse
    {
        return Excel::download(new UnitKegiatanMahasiswaExport, 'unit-kegiatan-mahasiswa.pdf', ExcelExcel::DOMPDF);
    }
}
