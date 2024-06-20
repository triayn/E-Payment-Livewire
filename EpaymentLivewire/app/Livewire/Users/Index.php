<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Pengguna')]

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::all()
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            session()->flash('success', 'Pengguna berhasil dihapus');
        } else {
            session()->flash('error', 'Pengguna tidak ditemukan');
        }
        return $this->redirect('/pengguna', navigate: true);
    }
}
