<main id="main" class="main">

    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <!-- <li class="breadcrumb-item">Pages</li> -->
                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-title">
            <div class="row" style="padding: 10px;">
                <div class="col-6">
                    <h5 style="margin-left: 20px;"><strong>Data Produk</strong></h5>
                </div>
                <div class="col-6">
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-end" style="margin-right: 20px;" wire:navigate>Tambah Produk</a>
                </div>
            </div>
        </div>
        <div class=" card-body">

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $product->kode_produk }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>{{ $product->ukuran }}</td>
                        <td>
                            <a wire:navigate href="" class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a>
                            <a wire:navigate href="" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></a>
                            <button wire:click="" wire:confirm="Yakin ingin menghapus data?" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>

</main><!-- End #main -->