<main id="main" class="main">
    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <!-- <li class="breadcrumb-item">Pages</li> -->
                <!-- <li class="breadcrumb-item active"></li> -->
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <h3>Selamat datang, {{ Auth::user()->nama }}</h3>

            {{ __('You are logged in!') }}
        </div>
    </div>
</main>
