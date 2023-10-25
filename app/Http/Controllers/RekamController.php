<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Rekam;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class RekamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pasien' => 'required|string|max:255',
            'dokter' => 'required|string|max:255',
            'kondisi' => 'required|string|max:255',
            'suhu' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $rekam = new Rekam();
        $rekam->pasien = $request->input('pasien');
        $rekam->dokter = $request->input('dokter');
        $rekam->kondisi = $request->input('kondisi');
        $rekam->suhu = $request->input('suhu');

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/pictures');
            $rekam->picture = str_replace('public/', '', $picturePath);
        }

        $rekam->save();

        return redirect()->route('admin.rekam.create')->with('status', 'Data berhasil ditambahkan!');
    }

    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('admin.rekam.create', [
            'pasien' => $pasien,
            'dokter' => $dokter,
        ]);
    }

    public function show() : View
    {
        $rekams = DB::table('rekams')
        ->join('pasiens', 'rekams.pasien', '=', 'pasiens.id')
        ->join('dokters', 'rekams.dokter', '=', 'dokters.id')
        ->select('rekams.*', 'pasiens.nama as nama_pasien', 'dokters.nama as nama_dokter')
        ->get();

        return view('admin.rekam.list', [
            'rekams' => $rekams,
        ]);
    }

    public function pasien() : View
    {
        $rekams = DB::table('rekams')
        ->join('pasiens', 'rekams.pasien', '=', 'pasiens.id')
        ->join('dokters', 'rekams.dokter', '=', 'dokters.id')
        ->select('rekams.*', 'pasiens.nama as nama_pasien', 'dokters.nama as nama_dokter')
        ->orderBy('pasiens.nama') // Urut berdasarkan nama dokter
        ->get();

        return view('admin.rekam.pasien', [
            'rekams' => $rekams,
        ]);
    }

    public function dokter() : View
    {
        $rekams = DB::table('rekams')
        ->join('pasiens', 'rekams.pasien', '=', 'pasiens.id')
        ->join('dokters', 'rekams.dokter', '=', 'dokters.id')
        ->select('rekams.*', 'pasiens.nama as nama_pasien', 'dokters.nama as nama_dokter')
        ->orderBy('dokters.nama') // Urut berdasarkan nama dokter
        ->get();

        return view('admin.rekam.dokter', [
            'rekams' => $rekams,
        ]);
    }

    public function edit($id)
    {
        $rekam = DB::table('rekams')
        ->join('pasiens', 'rekams.pasien', '=', 'pasiens.id')
        ->join('dokters', 'rekams.dokter', '=', 'dokters.id')
        ->select('rekams.*', 'pasiens.nama as nama_pasien', 'dokters.nama as nama_dokter')
        ->where('rekams.id', '=', $id)
        ->first();

        if (!$rekam) {
            return redirect()->route('admin.rekam.list')->with('error', 'Item' . $id . ' not found');
        }
        
        return view('admin.rekam.edit', [
            'title' => 'Edit Rekam',
            'rekam' => $rekam,
        ]);
    }

    public function destroy($id)
    {
        $rekam = Rekam::find($id);
        $nama = $rekam->nama;
    
        if (!$rekam) {
            return redirect()->route('admin.rekam.list')->with('error', 'Item not found');
        }
    
        $rekam->delete();
    
        return back()->with('status', 'Item ' . $nama . ' deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $rekam = Rekam::find($id);
        $nama = $rekam->nama;
    
        if (!$rekam) {
            return redirect()->route('admin.rekam.list')->with('error', 'Item' . $nama . ' not found');
        }
    
        $validated = $request->validate([
            'pasien' => 'required|string|max:255',
            'dokter' => 'required|string|max:255',
            'kondisi' => 'required|string|max:255',
            'suhu' => 'required|numeric|between:35,45.5',
        ]);
        
        $rekam->pasien = $validated['pasien'];
        $rekam->dokter = $validated['dokter'];
        $rekam->kondisi = $validated['kondisi'];
        $rekam->suhu = $validated['suhu'];
    
        $rekam->save();
    
        return back()->with('status', 'Items ' . $nama . ' updated successfully');
    }
}
