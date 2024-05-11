@extends('guest')
@section('content')
    <div class="flex-grow-1">
        <section class="text-white position-relative d-flex flex-column align-items-center justify-content-center"
            id="hero">
            <div class="position-relative z-1 container" id="hero-content">
                <h1 class="mb-3">
                    Perpustakaan Digital <br class="d-none d-sm-inline" />Institut
                    Teknologi B.J. Habibie
                </h1>
                <!-- Set default value-->
                <form class="d-flex gap-2" role="search" action="/search">
                    <input class="form-control" id="search-bar" type="search" placeholder="Cari literatur"
                        aria-label="Cari Literatur" value="" /><button class="btn btn-primary d-flex gap-2"
                        type="submit">
                        <i class="bi-search"></i>Cari
                    </button>
                </form>
            </div>
            <picture class="position-absolute z-0 pe-none">
                <source srcset="assets/hero-image.67c0d1ee.webp" type="image/webp" />
                <img class="object-fit-cover w-100 h-100" src="assets/hero-image.956415f6.jpg" alt="Kampus" />
            </picture>
        </section>
        <section class="container py-5" id="literature">
            <h1 class="mb-4">Literatur Terbaru</h1>
            <div class="row g-4 mb-4">
                @foreach ($daftarLiteratur->take(4) as $literatur)
                    <article class="literature col-md-6">
                        <div class="mb-2 d-flex gap-2 align-items-center">
                            <span class="badge fw-normal text-bg-danger">{{ $literatur->jenis_koleksi }}</span>
                            <p class="mb-0">{{ $literatur->created_at->format('Y') }}</p>
                        </div>
                        <a href="/literatur/{{ $literatur->id }}">
                            <h5>
                                {{ $literatur->judul }}
                            </h5>
                        </a>
                        <p class="mb-0">
                            <span class="fw-bold">{{ $literatur->user->nama }}</span>,
                            @foreach ($literatur->kontributor as $kontributor)
                                {{ $kontributor->user->nama }},
                            @endforeach
                            <i class="bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-html="true"
                                data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;{{ $literatur->user->name }}&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;
                @foreach ($literatur->kontributor as $kontributor)
                {{ $kontributor->user->nama }}, @endforeach
			&lt;/div&gt;"></i>
                        </p>
                    </article>
                @endforeach



            </div>
            <label class="btn btn-primary" for="search-bar">Cari literatur lain</label>
        </section>
        <section class="text-bg-primary bg-primary-subtle py-5" id="fakultas">
            <div
                class="container d-flex flex-md-row flex-column align-items-md-center align-items-start justify-items-end gap-4">
                <div>
                    <h1 class="mb-4">Fakultas</h1>
                    <a class="btn btn-primary" href="/fakultas.html">Lihat semua fakultas</a>
                </div>
                <div id="image-collage">
                    <img src="https://picsum.photos/id/10/800/600" /><img src="https://picsum.photos/id/11/800/600" /><img
                        src="https://picsum.photos/id/15/800/600" />
                </div>
            </div>
        </section>
    </div>
@endsection
