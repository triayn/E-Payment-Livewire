<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Pengguna')]

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::all()
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            // Hapus gambar dari storage jika ada
            if ($user->image) {
                Storage::disk('public')->delete('user/' . $user->image);
            }

            // Hapus pengguna
            $user->delete();
            session()->flash('success', 'Pengguna berhasil dihapus');
        } else {
            session()->flash('error', 'Pengguna tidak ditemukan');
        }

        return $this->redirect('/pengguna', navigate: true);
    }
}
