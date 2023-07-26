<?php

namespace App\Controllers;

use App\Models\PemesananModel;
use App\Models\PendaftaranModel;
use App\Models\GaleriModel;
use App\Models\UserModel;
use App\Models\PenerimaModel;


class Home extends BaseController
{
    protected $PemesananModel;
    protected $PendaftaranModel;
    protected $GaleriModel;
    protected $UserModel;
    protected $PenerimaModel;
    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->PendaftaranModel = new PendaftaranModel();
        $this->GaleriModel = new GaleriModel();
        $this->UserModel = new UserModel();
        $this->PenerimaModel = new PenerimaModel();
    }

    public function index()
    {
        $dataGaleri = $this->GaleriModel->findAll();
        $totalPemesanan = $this->PemesananModel->countAllResults();
        $totalPendaftaran = $this->PendaftaranModel->countAllResults();
        $totalUser = $this->UserModel->countAllResults();
        $totalPenerima = $this->PenerimaModel->countAllResults();

        $data = [
            'title' => 'Data Galeri',
            'dataGaleri' => $dataGaleri,
            'totalPemesanan' => $totalPemesanan,
            'totalPendaftaran' => $totalPendaftaran,
            'totalUser' => $totalUser,
            'totalPenerima' => $totalPenerima,
        ];

        // return view('welcome_message');
        return view('v_home', $data);
    }

    public function pesan()
    {
        // session();
        $data = [
            'title' => "Halaman Pemesanan",
            'validation' => \Config\Services::validation()
        ];

        // return view('welcome_message');
        return view('v_pemesanan', $data);
    }

    public function save()
    {
        // Validasi Input
        if (!$this->validate([
            'email_pemesan' => 'required',
            'nama_pemesan' => 'required',
            'no_telepon' => 'required',
            'alamat_pemesan' => 'required',
            'instansi_pemesan' => 'required',
            'tanggal_transfer' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->back()->withInput();
            // return redirect()->to('pemesanan');
        }

        // Ambil Gambar
        $fileBukti = $this->request->getFile('bukti_transfer');

        // Buat nama gambar Random
        $namaBukti = $fileBukti->getRandomName();

        // Pindahkan FIle ke Folder Lain
        $fileBukti->move('home\asset\img', $namaBukti);

        $validation = \Config\Services::validation();

        $this->PemesananModel->save([
            'email_pemesan' => $this->request->getVar('email_pemesan'),
            'nama_pemesan' => $this->request->getVar('nama_pemesan'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'alamat_pemesan' => $this->request->getVar('alamat_pemesan'),
            'instansi_pemesan' => $this->request->getVar('instansi_pemesan'),
            'paket_pemesan' => $this->request->getVar('paket_pemesan'),
            'bukti_transfer' => $namaBukti,
            'tanggal_transfer' => $this->request->getVar('tanggal_transfer'),
            'validation' => \Config\Services::validation(),
        ]);

        return redirect()->to('berhasil');
    }

    public function berhasil()
    {
        // return view('welcome_message');
        return view('v_berhasil');
    }

    public function daftar()
    {
        // session();
        $data = [
            'title' => "Halaman Pendaftar",
            'validation' => \Config\Services::validation()
        ];
        // return view('welcome_message');
        return view('v_pendaftaran', $data);
    }

    public function save2()
    {
        // Validasi Input
        if (!$this->validate([
            'email_pendaftar' => 'required',
            'nama_pendaftar' => 'required',
            'no_tlpn' => 'required',
            'alamat_pendaftar' => 'required',
            'instansi_pendaftar' => 'required',
            'tanggal_antar' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->to('pemesanan');
        }

        // Ambil Gambar
        $fileGambar = $this->request->getFile('bukti_gambar');

        // Buat nama gambar Random
        $namaGambar = $fileGambar->getRandomName();

        // Pindahkan FIle ke Folder Lain
        $fileGambar->move('home\asset\img', $namaGambar);

        $this->PendaftaranModel->save([
            'email_pendaftar' => $this->request->getVar('email_pendaftar'),
            'nama_pendaftar' => $this->request->getVar('nama_pendaftar'),
            'no_tlpn' => $this->request->getVar('no_tlpn'),
            'alamat_pendaftar' => $this->request->getVar('alamat_pendaftar'),
            'instansi_pendaftar' => $this->request->getVar('instansi_pendaftar'),
            'jenis_qurban' => $this->request->getVar('jenis_qurban'),
            'bukti_gambar' => $namaGambar,
            'tanggal_antar' => $this->request->getVar('tanggal_antar')
        ]);

        return redirect()->to('berhasil');
    }

    public function penilaian()
    {
        // URL tujuan yang akan di-redirect
        $url = 'https://forms.gle/xSRJV3reYRExXJJr7';

        // Lakukan redirect ke URL tujuan
        return redirect()->to($url);
    }
}
