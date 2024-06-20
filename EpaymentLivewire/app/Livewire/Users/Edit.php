<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
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

    public $user;
    
    public function mount($id)
    {
        $this->user = User::find($id);
        $this->nama = $this->user->nama;
        $this->no_telpon = $this->user->no_telpon;
        $this->alamat = $this->user->alamat;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
    }

    public function render()
    {
        return view('livewire.users.edit');
    }

    public function update()
    {
        $this->validate();
        $this->user->update($this->all());
        session()->flash('message', 'Data berhasil diupdate');
        return $this->redirect('/pengguna', navigate:true);
    }
}
