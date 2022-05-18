<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SwalController extends Controller
{
    public function alertSuccess()
    {
        Alert::alert('Selamat!', 'Anda berhasil menjalankan Sweet Alert', 'success');
        return view('swal-laravel');
    }

    public function alertInfo()
    {
        Alert::alert('Selamat!', 'Anda berhasil menjalankan Sweet Alert', 'info');
        return view('swal-laravel');
    }

    public function success()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert');
        return view('swal-laravel');
    }

    public function info()
    {
        Alert::info('Selamat!', 'Anda berhasil menjalankan Sweet Alert');
        return view('swal-laravel');
    }

    public function html()
    {
        Alert::html(
            '<strong>Pesan sponsor</strong>',
            '<i>Belajar programming?</i> di <a href="https://www.duniailkom.com">
 Duniailkom </a> aja!',
            'success'
        );
        return view('swal-laravel');
    }

    public function toast()
    {
        Alert::toast('Anda mendapat 1 pesan baru', 'info');
        return view('swal-laravel');
    }

    public function helperAlert()
    {
        alert('Selamat!', 'Anda berhasil menjalankan Sweet Alert', 'success');
        return view('swal-laravel');
    }

    public function helperSuccess()
    {
        alert()->success('Selamat!', 'Anda berhasil menjalankan Sweet Alert');
        return view('swal-laravel');
    }

    public function helperInfo()
    {
        alert()->info('Selamat!', 'Anda berhasil menjalankan Sweet Alert');
        return view('swal-laravel');
    }

    public function helperToast()
    {
        toast('Menu yang dipilih tidak tersedia', 'warning');
        return view('swal-laravel');
    }

    public function autoClose()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert')
            ->autoClose(1000);
        return view('swal-laravel');
    }

    public function position()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert')
            ->position('bottom-end');
        return view('swal-laravel');
    }

    public function confirm()
    {
        Alert::warning('Konfirmasi', 'Apakah anda yakin akan menghapus data ini?')
            ->showConfirmButton('Ya, saya yakin', 'red');
        return view('swal-laravel');
    }

    public function cancel()
    {
        Alert::warning('Konfirmasi', 'Apakah anda yakin akan menghapus data ini?')
            ->showConfirmButton('Ya, saya yakin', 'red')
            ->showCancelButton('Tidak jadi', '#aaa');
        return view('swal-laravel');
    }

    public function addImage()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert')
            ->addImage('https://picsum.photos/450/200');
        return view('swal-laravel');
    }

    public function animation()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert')
            ->animation(
                'animate__animated animate__tada animate__faster',
                'animate__animated animate__rollOut animate__slower'
            );
        return view('swal-laravel');
    }

    public function proggressBar()
    {
        Alert::success('Selamat!', 'Anda berhasil menjalankan Sweet Alert')
            ->timerProgressBar()->autoClose(3000);
        return view('swal-laravel');
    }

    public function with()
    {
        return redirect('swal')->with('success', 'Data mahasiswa berhasil diinput');
    }

    public function withSuccess()
    {
        return redirect('swal')->withSuccess('Data mahasiswa berhasil diinput');
    }

    public function swalValidateSatu(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:10',
        ]);

        echo "Lolos Validasi";
    }

    public function swalValidateBanyak(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:10',
            'kepala_jurusan' => 'required',
            'daya_tampung' => 'required|min:10|integer',
        ]);

        if ($validator->fails()) {
            // Kirim hanya validasi pertama saja
            return back()->withErrors($validator->errors()->first())->withInput();
        } else {
            // Kode untuk proses ke database disini
            return redirect('swal')->withSuccess('Data jurusan berhasil diinput');
        }

        echo "Lolos Validasi";
    }

    public function delete()
    {
        return view('swal-delete')->with(['id' => 7, 'nama' => 'Novi Lestari']);
    }

    public function destroy($id)
 {
 Alert::alert('Berhasil',"Data dengan id $id berhasil di hapus",'success');
 return redirect('swal');
 }
}
