<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\TabunganModel;

class Dashboard extends BaseController
{
    protected $TabunganModel;
    public function __construct()
    {
        $this->TabunganModel = new TabunganModel();
    }

    function index()
    {
        $data = [];
        $data['tamplateJudul'] = "Halaman Dashboard";

        // header
        echo view('user/v_header', $data);
        echo view('user/v_dashboard', $data);
        echo view('user/v_footer', $data);
        // footer
    }

    function tabungan()
    {
        $tabungan = $this->TabunganModel->where('username_user', session()->get('akun_username_user'))->findAll();

        $data = [
            'title' => "Halaman Dashboard Tabungan",
            'tabungan' => $tabungan
        ];

        // Hitung total tabungan secara kumulatif
        $totalTabungan = 0;

        $data['totalTabungan'] = $totalTabungan;

        // header
        echo view('user/v_header', $data);
        echo view('user/v_tabungan', $data);
        echo view('user/v_footer', $data);
        // footer
    }

    function menabung()
    {
        $data = [
            'title' => "Halaman Dashboard Menabung",
            'validation' => \Config\Services::validation()
        ];

        // header
        echo view('user/v_header', $data);
        echo view('user/v_menabung', $data);
        echo view('user/v_footer', $data);
        // footer
    }

    public function create()
    {
        // Validasi Input
        if (!$this->validate([
            'besar_tabungan' => 'required',
            'tgl_tabungan' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->back()->withInput();
            // return redirect()->to('pemesanan');
        }

        // Ambil Gambar
        $fileGambar = $this->request->getFile('bukti_tabungan');

        // Buat nama gambar Random
        $namaGambar = $fileGambar->getRandomName();

        // Pindahkan FIle ke Folder Lain
        $fileGambar->move('home\asset\img', $namaGambar);

        $this->TabunganModel->save([
            'username_user'       => session()->get('akun_username_user'),
            'besar_tabungan' => $this->request->getVar('besar_tabungan'),
            'bukti_tabungan' => $namaGambar,
            'tgl_tabungan' => $this->request->getVar('tgl_tabungan'),
        ]);

        session()->setFlashdata('status', 'Data berhasil di tambah');
        return redirect()->to('user/dashboard/tabungan');
    }
}
