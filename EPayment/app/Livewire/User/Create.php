<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nama;
    public $no_telpon;
    public $alamat;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $email;
    public $role;
    public $password;
    public $image;

    protected $rules = [
        'nama' => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
        'no_telpon' => 'required|min:11|max:15|regex:/^\+?[0-9]+$/',
        'alamat' => 'required|min:3',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'min:3|regex:/^[a-zA-Z\s]+$/',
        'tanggal_lahir' => 'date',
        'email' => 'required|email|unique:users,email',
        'role' => 'required',
        'password' => 'required|min:6|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
        'image' => 'max:2048',
        // 'image' => 'image|mimes:jpeg,jpg,png|max:2048',
    ];

    protected $messages = [
        'nama.required' => 'Nama wajib diisi',
        'nama.min' => 'Nama minimal 3 karakter',
        'nama.regex' => 'Nama hanya boleh berisi huruf.',
        'no_telpon.required' => 'No handphone wajib diisi',
        'no_telpon.min' => 'No handphone minimal 11 karakter',
        'no_telpon.max' => 'No handphone maksimal 15 karakter',
        'no_telpon.regex' => 'Nomor hanya boleh berisi angka dan karakter "+".',
        'alamat.required' => 'Alamat wajib diisi',
        'alamat.min' => 'Alamat minimal 3 karakter',
        'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        'tempat_lahir.min' => 'Tempat lahir minimal 3 karakter',
        'tempat_lahir.regex' => 'Tempat lahir hanya boleh berisi huruf.',
        'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak benar',
        'email.unique' => 'Email sudah terdaftar',
        'role.required' => 'Role wajib diisi',
        'password.required' => 'Kata sandi wajib diisi',
        'password.min' => 'Panjang kata sandi minimal 6 karakter.',
        'password.regex' => 'Kata sandi harus kombinasi huruf dan angka',
        // 'image.image' => 'File harus berupa gambar.',
        // 'image.mimes' => 'Format gambar tidak valid. Hanya diperbolehkan: jpeg, jpg, png.',
        'image.max' => 'Ukuran gambar maksimal 2048 KB.',
    ];

    public function render()
    {
        return view('livewire.user.create');
    }

    public function create()
    {
        $this->validate();

        try {
            $imagePath = null;
            if ($this->image) {
                $imagePath = $this->image->storeAs('public/user', $this->image->hashName());
            }

            User::create([
                'nama'              => $this->nama,
                'no_telpon'         => $this->no_telpon,
                'alamat'            => $this->alamat,
                'jenis_kelamin'     => $this->jenis_kelamin,
                'tempat_lahir'      => $this->tempat_lahir,
                'tanggal_lahir'     => $this->tanggal_lahir,
                'role'              => $this->role,
                'email'             => $this->email,
                'password'          => Hash::make($this->password),
                'image'             => $imagePath
            ]);

            session()->flash('success', 'Pengguna berhasil ditambahkan!');
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return $this->redirect('/pengguna', navigate: true);
    }
}
