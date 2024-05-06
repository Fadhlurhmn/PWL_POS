<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadRenameController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'nama_file' => 'required'
        ]);

        $namaFile = $request->nama_file;
        $extfile = $request->berkas->getClientOriginalExtension();
        $namaFileWithExt = $namaFile . '.' . $extfile;

        $path = $request->berkas->move(public_path('gambar'), $namaFileWithExt);

        $pathBaru = asset('gambar/' . $namaFileWithExt);

        return "<img src='$pathBaru' alt='Uploaded Image'>";
    }
}
