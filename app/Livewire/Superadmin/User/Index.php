<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User; // Mengimpor model User untuk akses database
use Livewire\Component; // Mengimpor base class Livewire
use Livewire\WithPagination; // Menggunakan trait agar paginasi tidak refresh halaman

class Index extends Component
{
    use WithPagination; // Mengaktifkan fitur paginasi Livewire di dalam class ini

    // Menentukan bahwa tampilan tombol navigasi halaman menggunakan gaya Bootstrap
    protected $paginationTheme = 'bootstrap';

    // Properti publik untuk menyimpan jumlah data per halaman (bisa diubah dari UI)
    public $paginate = '10 ';

    // Properti publik untuk menyimpan kata kunci pencarian nama user
    public $search = ' ';

    /**
     * Fungsi render yang akan dijalankan otomatis setiap ada perubahan data/state
     */
    public function render()
    {
        // Menyiapkan data yang akan dikirim ke file tampilan (view)
        $data = [
            'user' => User::where('name', 'like', '%' . $this->search . '%') // Cari user berdasarkan nama yang mirip dengan input search
                ->orderBy('role', 'asc') // Urutkan hasil berdasarkan role secara alfabetis (A-Z)
                ->paginate($this->paginate), // Pecah data menjadi beberapa halaman sesuai jumlah di properti $paginate
        ];

        // Mengembalikan tampilan blade dan menyertakan variabel $data di atas
        return view('livewire.superadmin.user.index', $data);
    }
}
