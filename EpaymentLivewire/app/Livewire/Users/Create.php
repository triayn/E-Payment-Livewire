<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Title('Tambah Pengguna')]
    
    #[Validate('required', message:"Nama wajib diisi")]
    #[Validate('min:3', message:"Nama minimal 3 karakter")]
    public $nama;
    
    #[Validate('required', message:"No handphone wajib diisi")]
    #[Validate('min:11', message:"No handphone minimal 11 karakter")]
    #[Validate('max:13', message:"No handphone maksimal 13 karakter")]
    public $no_telpon;

    #[Validate('required', message:"Alamat wajib diisi")]
    #[Validate('min:3', message:"Alamat minimal 3 karakter")]
    public $alamat;

    #[Validate('required', message:"Email wajib diisi")]
    public $email;

    #[Validate('required', message:"Kata sandi wajib diisi")]
    public $password;
    
    public function render()
    {
        return view('livewire.users.create');
    }

    public function create(){
        $this->validate();
        User::create($this->all());
        return $this->redirect('/pengguna', navigate:true);
    }
}
