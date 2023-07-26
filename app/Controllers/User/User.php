<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Config\Config;

class User extends BaseController
{
    protected $UserModel;
    function __construct()
    {
        $this->m_user = new UserModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }
    public function login()
    {
        if (get_cookie('cookie_user2') && get_cookie('cookie_password2')) {
            $username_user = get_cookie('cookie_user2');
            $password_user = get_cookie('cookie_password2');

            $dataUser = $this->m_user->getData($username_user);
            if ($password_user != $dataUser['password_user']) {
                $err[] = "Akun yang kamu masukkan tidak sesuai";
                return redirect()->to('user/login');
            }

            $akunuser = [
                'akun_username_user' => $username_user,
                'akun_nama_user' => $dataUser['nama_user'],
                'akun_email_user' => $dataUser['email_user']
            ];
            session()->set($akunuser);
            return redirect()->to("user/hasil");
        }
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username_user' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi'
                    ]
                ],
                'password_user' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi'
                    ]
                ]
            ];
            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", $this->validation->getErrors());
                return redirect()->to("user/login");
            }

            $username_user = $this->request->getVar('username_user');
            $password_user = $this->request->getVar('password_user');
            $remember_user2 = $this->request->getVar('remember_user2');

            $dataUser = $this->m_user->getData($username_user);
            if (!password_verify($password_user, $dataUser['password_user'])) {
                $err[] = "Akun yang anda masukkan tidak sesuai.";
                session()->setFlashdata('username_user', $username_user);
                session()->setFlashdata('warning', $err);
                return redirect()->to("user/login");
            }

            if ($remember_user2 == '1') {
                set_cookie("cookie_user2", $username_user, 3600 * 24 * 30);
                set_cookie("cookie_password2", $dataUser['password_user'], 3600 * 24 * 30);
            }

            $akunuser = [
                'akun_username_user' => $dataUser['username_user'],
                'akun_nama_user' => $dataUser['nama_user'],
                'akun_email_user' => $dataUser['email_user']
            ];
            session()->set($akunuser);
            return redirect()->to("user/hasil")->withCookies();
        }
        echo view('user/v_login', $data);
    }

    function hasil()
    {
        return redirect()->to('user/dashboard');
        // print_r(session()->get());
        // echo "ISIAN COOKIE USERNAME " . get_cookie("cookie_user2") . " DAN PASSWORD " . get_cookie("cookie_password2");
    }

    function logout()
    {
        delete_cookie("cookie_user2");
        delete_cookie("cookie_password2");
        session()->destroy();
        if (session()->get('akun_username_user') != '') {
            session()->setFlashdata("success", "Anda berhasil logout");
        }
        echo view("user/v_login");
    }

    function lupapassword()
    {
        $err = [];
        if ($this->request->getMethod() == 'post') {
            $username_user = $this->request->getVar('username_user');
            if ($username_user == '') {
                $err[] = "Silakan masukkan username atau email yang anda punya";
            }
            if (empty($err)) {
                $data = $this->m_user->getData($username_user);
                if (empty($data)) {
                    $err[] = "Akun yang kamu masukkan tidak terdata";
                }
            }
            if (empty($err)) {
                $email = $data['email_user'];
                $token = md5(date('ymdhis'));

                $link = site_url("user/resetpassword/?email_user=$email&token=$token");
                $attachment = "";
                $to = $email;
                $title = "Reset Password";
                $message = "Berikut ini adalah link untuk melakukan reset password Anda.";
                $message .= "Silakan klik link berikut ini $link";

                kirim_email($attachment, $to, $title, $message);

                $dataUpdate = [
                    'email_user' => $email,
                    'token' => $token
                ];
                $this->m_user->updateData($dataUpdate);
                session()->setFlashdata("success", "Email untuk recovery sudah kami kirimkan ke email anda");
            }
            if ($err) {
                session()->setFlashdata("username_user", $username_user);
                session()->setFlashdata("warning", $err);
            }
            return redirect()->to("user/lupapassword");
        }
        echo view("user/v_lupapassword");
    }

    function resetpassword()
    {
        $err = [];
        $email_user = $this->request->getVar('email_user');
        $token = $this->request->getVar('token');
        if ($email_user != '' and $token != '') {
            $dataUser = $this->m_user->getData($email_user); //<-- cek di tabel user
            if ($dataUser['token'] != $token) {
                $err[] = "Token tidak valid";
            }
        } else {
            $err[] = "Parameter yang dikirimkan tidak valid";
        }

        if ($err) {
            session()->setFlashdata("warning", $err);
        }

        if ($this->request->getMethod() == 'post') {
            $aturan = [
                'password_user' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk password adalah 5 karakter'
                    ]
                ],
                'konfirmasi_password_user' => [
                    'rules' => 'required|min_length[5]|matches[password]',
                    'errors' => [
                        'required' => 'Konfirmasi password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk konfirmasi password adalah 5 karakter',
                        'matches' => 'Konfirmasi password tidak sesuai dengan password yang diisikan'
                    ]
                ]
            ];

            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $dataUpdate = [
                    'email_user' => $email_user,
                    'password_user' => password_user_hash($this->request->getVar('password_user'), PASSWORD_DEFAULT),
                    'token' => null
                ];
                $this->m_user->updateData($dataUpdate);
                session()->setFlashdata('success', 'Password berhasil direset, silakan login');

                delete_cookie('cookie_user2');
                delete_cookie('cookie_password2');

                return redirect()->to('user/login')->withCookies();
            }
        }

        echo view("user/v_resetpassword");
    }

    function register()
    {
        $data = [
            'title' => "Halaman Register",
            'validation' => \Config\Services::validation()
        ];

        echo view('user/v_register', $data);
    }

    function daftar()
    {
        // Validasi Input
        if (!$this->validate([
            'email_user' => 'required',
            'nama_user' => 'required',
            'username_user' => 'required',
            'password_user' => 'required',
            'no_user' => 'required',
            'alamat_user' => 'required',
            'instansi' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->back()->withInput();
            // return redirect()->to('pemesanan');
        }

        $validation = \Config\Services::validation();

        // Mendapatkan password dari inputan
        $password_user = $this->request->getVar('password_user');

        // Melakukan hash pada password
        $hashedPassword = password_hash($password_user, PASSWORD_DEFAULT);

        $this->m_user->save([
            'email_user' => $this->request->getVar('email_user'),
            'nama_user' => $this->request->getVar('nama_user'),
            'password_user' => $hashedPassword,
            'username_user' => $this->request->getVar('username_user'),
            'no_user' => $this->request->getVar('no_user'),
            'alamat_user' => $this->request->getVar('alamat_user'),
            'instansi' => $this->request->getVar('instansi'),
            'target_qurban' => $this->request->getVar('target_qurban')
        ]);

        return redirect()->to('user/login');
    }
}
