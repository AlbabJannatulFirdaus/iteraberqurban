<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\PendaftaranModel;
use App\Models\UserModel;
use App\Models\TabunganModel;
use App\Models\DataQurbanModel;
use App\Models\PenerimaModel;
use App\Models\GaleriModel;
// use App\Models\PostsModel;

class Dashboard extends BaseController
{
    protected $PemesananModel;
    protected $PendaftaranModel;
    protected $UserModel;
    protected $DataQurbanModel;
    protected $PenerimaModel;
    protected $GaleriModel;
    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->PendaftaranModel = new PendaftaranModel();
        $this->UserModel = new UserModel();
        $this->TabunganModel = new TabunganModel();
        $this->DataQurbanModel = new DataQurbanModel();
        $this->PenerimaModel = new PenerimaModel();
        $this->GaleriModel = new GaleriModel();
    }

    function index()
    {
        $totalPemesanan = $this->PemesananModel->countAllResults();
        $totalPendaftaran = $this->PendaftaranModel->countAllResults();
        $totalUser = $this->UserModel->countAllResults();
        $totalPenerima = $this->PenerimaModel->countAllResults();

        $data = [
            'title' => 'Halaman Dashboard',
            'totalPemesanan' => $totalPemesanan,
            'totalPendaftaran' => $totalPendaftaran,
            'totalUser' => $totalUser,
            'totalPenerima' => $totalPenerima,
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_dashboard', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function dataqurban()
    {
        $dataQurban = $this->DataQurbanModel->getDataQurban();
        $pemesanan = $this->PemesananModel->findAll();
        $pendaftaran = $this->PendaftaranModel->findAll();
        $user = $this->UserModel->findAll();

        $data = [
            'title' => 'Data Qurban',
            'dataQurban' => $dataQurban,
            'pemesanan' => $pemesanan,
            'pendaftaran' => $pendaftaran,
            'user' => $user,
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_dataqurban', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function tabungan()
    {
        $user = $this->UserModel->findAll();
        $tabungan = $this->TabunganModel->findAll();
        $data = [
            'title' => "Halaman Dashboard Tabungan",
            'tabungan' => $tabungan,
            'user' => $user
        ];



        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_tabungan', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function detail_tabungan($username_user)
    {
        $detailtabungan = $this->TabunganModel->dataTabungan($username_user);
        $userInfo = $this->UserModel->getUserByUsername($username_user);

        $data = [
            'title' => "Halaman Detail Tabungan",
            'validation' => \Config\Services::validation(),
            'userInfo' => $userInfo,
            'detailtabungan' => $detailtabungan
        ];

        // Hitung total tabungan secara kumulatif
        $totalTabungan = 0;

        $data['totalTabungan'] = $totalTabungan;

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_detailtabungan', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function delete_tabungan($id_tabungan)
    {
        // cari Gambar
        $buktitb = $this->TabunganModel->find($id_tabungan);

        // Hapus Gambar
        unlink('home\asset\img/' . $buktitb['gambar_galeri']);

        $this->TabunganModel->hapusData($id_tabungan);
        session()->setFlashdata('status', 'Data berhasil dihapus');
        return redirect()->back();
    }

    function pendaftaran()
    {
        $pendaftaran = $this->PendaftaranModel->findAll();

        $data = [
            'title' => "Halaman Dashboard Pendaftaran",
            'pendaftaran' => $pendaftaran
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_pendaftaran', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function edit_pendaftaran($id_pendaftaran)
    {
        $data = [
            'title' => "Halaman Edit Pendaftarn",
            'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->PendaftaranModel->dataPendaftaran($id_pendaftaran)
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_editpendaftaran', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function updatedaftar($id_pendaftaran)
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

        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            // Buat nama gambar Random
            $namaGambar = $fileGambar->getRandomName();

            // Pindahkan FIle ke Folder Lain
            $fileGambar->move('home\asset\img', $namaGambar);

            unlink('home\asset\img/' . $this->request->getVar('gambarLama'));
        }


        $this->PendaftaranModel->save([
            'id_pendaftaran' => $id_pendaftaran,
            'email_pendaftar' => $this->request->getVar('email_pendaftar'),
            'nama_pendaftar' => $this->request->getVar('nama_pendaftar'),
            'no_tlpn' => $this->request->getVar('no_tlpn'),
            'alamat_pendaftar' => $this->request->getVar('alamat_pendaftar'),
            'instansi_pendaftar' => $this->request->getVar('instansi_pendaftar'),
            'jenis_qurban' => $this->request->getVar('jenis_qurban'),
            'bukti_gambar' => $namaGambar,
            'tanggal_antar' => $this->request->getVar('tanggal_antar')
        ]);

        session()->setFlashdata('status', 'Data berhasil diubah');

        return redirect()->to('admin/dashboard/pendaftaran');
    }

    function delete_pendaftaran($id_pendaftaran)
    {
        // cari Gambar
        $gambar = $this->PendaftaranModel->find($id_pendaftaran);

        // Hapus Gambar
        unlink('home\asset\img/' . $gambar['bukti_gambar']);

        $this->PendaftaranModel->hapusData($id_pendaftaran);
        session()->setFlashdata('status', 'Data berhasil dihapus');
        return redirect()->to('admin/dashboard/pendaftaran');
    }

    function pemesanan()
    {
        $pemesanan = $this->PemesananModel->findAll();

        $data = [
            'title' => "Halaman Dashboard Pemesanan",
            'pemesanan' => $pemesanan
        ];


        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_pemesanan', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function edit_pemesanan($id_pemesanan)
    {
        $data = [
            'title' => "Halaman Edit Pemesanan",
            'validation' => \Config\Services::validation(),
            'pemesanan' => $this->PemesananModel->dataPemesanan($id_pemesanan)
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_editpemesanan', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function updatepesan($id_pemesanan)
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
            // return redirect()->to('pemesanan');
        }

        // Ambil Gambar
        $fileBukti = $this->request->getFile('bukti_transfer');

        if ($fileBukti->getError() == 4) {
            $namaBukti = $this->request->getVar('buktiLama');
        } else {
            // Buat nama gambar Random
            $namaBukti = $fileBukti->getRandomName();

            // Pindahkan FIle ke Folder Lain
            $fileBukti->move('home\asset\img', $namaBukti);

            unlink('home\asset\img/' . $this->request->getVar('buktiLama'));
        }


        $this->PemesananModel->save([
            'id_pemesanan' => $id_pemesanan,
            'email_pemesan' => $this->request->getVar('email_pemesan'),
            'nama_pemesan' => $this->request->getVar('nama_pemesan'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'alamat_pemesan' => $this->request->getVar('alamat_pemesan'),
            'instansi_pemesan' => $this->request->getVar('instansi_pemesan'),
            'paket_pemesan' => $this->request->getVar('paket_pemesan'),
            'bukti_transfer' => $namaBukti,
            'tanggal_transfer' => $this->request->getVar('tanggal_transfer')
        ]);

        session()->setFlashdata('status', 'Data berhasil diubah');

        return redirect()->to('admin/dashboard/pemesanan');
    }

    function delete_pemesanan($id_pemesanan)
    {
        // cari Gambar
        $bukti = $this->PemesananModel->find($id_pemesanan);

        // Hapus Gambar
        unlink('home\asset\img/' . $bukti['bukti_transfer']);


        $this->PemesananModel->hapusData($id_pemesanan);
        session()->setFlashdata('status', 'Data berhasil dihapus');
        return redirect()->to('admin/dashboard/pemesanan');
    }

    function penerima()
    {
        $dataPenerima = $this->PenerimaModel->findAll();

        $data = [
            'title' => 'Data Penerima',
            'dataPenerima' => $dataPenerima,
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_penerima', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function tambah_penerima()
    {
        $data = [
            'title' => "Halaman Dashboard Tambah Penerima",
            'validation' => \Config\Services::validation()
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_tambahpenerima', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    public function store()
    {

        // Validasi input data sebelum disimpan
        $validationRules = [
            'nama_penerima' => 'required',
            'instansi_penerima' => 'required',
            'alamat_penerima' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Jika data valid, simpan data ke tabel penerima
        $this->PenerimaModel->save([
            'nama_penerima' => $this->request->getPost('nama_penerima'),
            'instansi_penerima' => $this->request->getPost('instansi_penerima'),
            'alamat_penerima' => $this->request->getPost('alamat_penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        session()->setFlashdata('status', 'Data penerima berhasil ditambahkan.');

        return redirect()->to('admin/dashboard/penerima');
    }

    public function editpenerima($id_penerima)
    {
        $dataPenerima = $this->PenerimaModel->find($id_penerima);

        if (empty($dataPenerima)) {
            return redirect()->to('penerima')->with('error', 'Data penerima tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Data Penerima',
            'dataPenerima' => $dataPenerima,
        ];

        // Tampilkan form untuk mengedit data penerima
        echo view('admin/v_header', $data);
        echo view('admin/v_editpenerima', $data);
        echo view('admin/v_footer', $data);
    }

    public function updatepenerima($id_penerima)
    {

        // Validasi input data sebelum diupdate
        $validationRules = [
            'nama_penerima' => 'required',
            'instansi_penerima' => 'required',
            'alamat_penerima' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Jika data valid, update data penerima ke tabel penerima
        $this->PenerimaModel->save([
            'id_penerima' => $id_penerima,
            'nama_penerima' => $this->request->getPost('nama_penerima'),
            'instansi_penerima' => $this->request->getPost('instansi_penerima'),
            'alamat_penerima' => $this->request->getPost('alamat_penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        session()->setFlashdata('status', 'Data berhasil diubah');

        return redirect()->to('admin/dashboard/penerima');
    }

    public function deletepenerima($id_penerima)
    {
        $this->PenerimaModel->delete($id_penerima);

        session()->setFlashdata('status', 'Data berhasil dihapus!');
        return redirect()->to('admin/dashboard/penerima');
    }

    function galeri()
    {
        $dataGaleri = $this->GaleriModel->findAll();

        $data = [
            'title' => 'Data Galeri',
            'dataGaleri' => $dataGaleri,
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_galeri', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function tambah_galeri()
    {
        $data = [
            'title' => "Halaman Dashboard Tambah Galeri",
            'validation' => \Config\Services::validation()
        ];

        // header
        echo view('admin/v_header', $data);
        echo view('admin/v_tambahgaleri', $data);
        echo view('admin/v_footer', $data);
        // footer
    }

    function rekap()
    {
        // Validasi Input
        if (!$this->validate([
            'judul_galeri' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->back()->withInput();
            // return redirect()->to('pemesanan');
        }

        // Ambil Gambar
        $galeriGambar = $this->request->getFile('gambar_galeri');

        // Buat nama gambar Random
        $namaGaleri = $galeriGambar->getRandomName();

        // Pindahkan FIle ke Folder Lain
        $galeriGambar->move('home\asset\img', $namaGaleri);

        $this->GaleriModel->save([
            'judul_galeri' => $this->request->getVar('judul_galeri'),
            'gambar_galeri' => $namaGaleri,
        ]);

        session()->setFlashdata('status', 'Data berhasil di tambah');
        return redirect()->to('admin/dashboard/galeri');
    }

    public function deletegaleri($id_galeri)
    {
        $this->GaleriModel->delete($id_galeri);

        session()->setFlashdata('status', 'Data berhasil dihapus!');
        return redirect()->to('admin/dashboard/galeri');
    }
}
