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
                    <a href="" class="btn custom-button float-end" wire:navigate>Tambah Pengguna</a>
                </div>
            </div>
        </div>
        <div class=" card-body">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-1"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <a wire:navigate href="/pengguna/{{ $product->id }}/edit" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                            <a wire:navigate href="/pengguna/{{ $product->id }}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></a>
                            <button data-bs-toggle="modal" data-bs-target="#smallModal-{{ $product->id }}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            <div class="modal fade" id="smallModal-{{ $product->id }}" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus Data Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus data pengguna dengan nama {{ $product->nama }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button wire:click="delete({{ $product->id }})" type="button" class="btn custom-button">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>

</main><!-- End #main -->