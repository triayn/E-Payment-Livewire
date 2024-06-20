<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pengguna</li>
                <li class="breadcrumb-item active">Tambah Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Pengguna</h5>

                        <!-- General Form Elements -->
                        <form wire:submit.prevent="create">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input wire:model="nama" type="text" class="form-control">
                                    @error('nama')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input wire:model="alamat" type="text" class="form-control">
                                    @error('alamat')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input wire:model="no_telpon" type="text" class="form-control">
                                    @error('no_telpon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input wire:model="email" type="email" class="form-control">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
                                <div class="col-sm-10">
                                    <input wire:model="password" type="password" class="form-control">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-5">
                                <button type="submit" class="btn btn-primary fload-end">Tambah</button>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->