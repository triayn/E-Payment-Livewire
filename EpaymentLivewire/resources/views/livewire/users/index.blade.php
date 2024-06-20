<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <!-- <li class="breadcrumb-item">Pages</li> -->
                <li class="breadcrumb-item active">Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-title">
            <div class="row" style="padding: 10px;">
                <div class="col-6">
                    <h5><strong>Daftar Pengguna</strong></h5>
                </div>
                <div class="col-6">
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-end" wire:navigate>Tambah Pengguna</a>
                </div>
            </div>
        </div>
        <div class=" card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->no_telpon }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a wire:navigate href="/pengguna/{{ $user->id }}/edit" class="btn btn-sm btn-warning" ><i class="bi bi-pen"> Edit</i></a>
                            <button wire:click="delete({{ $user->id }})" wire:confirm="Yakin ingin menghapus data?" class="btn btn-sm btn-danger"><i class="bi bi-trash"> Hapus</i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>

</main><!-- End #main -->