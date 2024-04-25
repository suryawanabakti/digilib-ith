<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/assets/logo-ith.bee906d9.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/main.741d8512.css" />
    <title>
        {{ $literatur->judul }}
    </title>
</head>

<body class="min-vh-100 d-flex flex-column">
    <!-- ** Vars-->
    <nav class="navbar navbar-expand-md justify-content-between fixed-top bg-body-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/"><img class="me-2"
                    src="/assets/logo-ith.bee906d9.png" alt="Logo ITH" />Digilib ITH</a><button
                class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links"
                aria-controls="navbar-links" aria-label="Toggle navigation">
                <span class="bi-list fs-2"></span>
            </button>
            <div class="collapse navbar-collapse gap-3 justify-content-end" id="navbar-links">
                <div class="navbar-nav order-md-last flex-grow-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas.html">Fakultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq.html">FAQ</a>
                    </li>
                </div>
                <!-- Set default value-->
                <form class="d-flex gap-2" role="search" action="/search.html">
                    <input class="form-control" id="search-bar" type="search" placeholder="Cari literatur"
                        aria-label="Cari Literatur" value="" /><button class="btn btn-primary d-flex gap-2"
                        type="submit">
                        <i class="bi-search"></i>Cari
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="flex-grow-1 container mt-6">
        <section class="py-5" id="literature-detail">
            <span class="badge fw-normal text-bg-danger">Disertasi</span>
            <h1 class="mt-2">
                {{ $literatur->judul }}
            </h1>
            <p class="mb-0">
                <span class="fw-bold">{{ $literatur->user->nama }}</span>, @foreach ($literatur->kontributor as $kontributor)
                    {{ $kontributor->user->nama }},
                @endforeach

            </p>
            <div class="py-1 my-4 border-top border-bottom d-flex align-items-center justify-content-between">
                <div class="hstack gap-2 align-items-center">
                    <i class="bi-eye fs-5"></i>{{ $literatur->view }}
                </div>
                <div class="hstack gap-1">
                    <a href="/literatur/{{ $literatur->id }}/download" class="btn btn-icon link-dark"><i
                            class="bi-download"></i></a>
                    <btn class="btn btn-icon link-dark"><i class="bi-share"></i></btn>
                </div>
            </div>
            <div id="literature-detail-content">
                <div>
                    <h6>Abstrak:</h6>
                    <p>
                        {{ $literatur->abstrak }}
                    </p>
                </div>
                <div>
                    <h6 class="d-inline">Kata Kunci:</h6>
                    <p class="fst-italic d-inline">{{ $literatur->keyword }}</p>
                </div>
                <div>
                    <h6 class="d-inline">Penerbit:</h6>
                    <p class="d-inline">SAGE Publishing</p>
                </div>
                <div>
                    <h6 class="d-inline">Fakultas:</h6>
                    <p class="d-inline">{{ $literatur->user->prodi->fakultas->nama }}</p>
                </div>
                <div>
                    <h6 class="d-inline">Program Studi:</h6>
                    <p class="d-inline">{{ $literatur->user->prodi->nama }}</p>
                </div>
                {{-- <div>
                    <h6 class="d-inline">Staff yang Input/Edit:</h6>
                    <p class="d-inline">Ethelyn Guilliland</p>
                </div> --}}
            </div>
        </section>
    </div>
    <footer class="bg-dark text-bg-dark pt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <h6 class="mb-3">Link Lainnya</h6>
                    <div class="d-flex flex-column gap-2">
                        <a class="link-light link-opacity-75 fw-light" href="https://google.com" target="_blank"
                            rel="noopener noreferrer">Institut Teknologo B.J. Habibie</a><a
                            class="link-light link-opacity-75 fw-light" href="https://scholar.google.com"
                            target="_blank" rel="noopener noreferrer">Perpustakaan ITH</a><a
                            class="link-light link-opacity-75 fw-light" href="https://www.lipsum.com" target="_blank"
                            rel="noopener noreferrer">Link Lainnya</a><a class="link-light link-opacity-75 fw-light"
                            href="https://www.lipsum.com" target="_blank" rel="noopener noreferrer">Link Lainnya
                            Kedua</a><a class="link-light link-opacity-75 fw-light" href="https://www.lipsum.com"
                            target="_blank" rel="noopener noreferrer">Link Lainnya Terakhir</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h6 class="mb-3">Kontak</h6>
                    <div class="d-flex flex-column gap-2 text-light text-opacity-75 fw-light">
                        <p class="mb-0">
                            Phone:
                            <a class="link-light link-opacity-75" href="tel:0411092842" target="_blank"
                                rel="noopener noreferrer">0411 092842</a>
                        </p>
                        <p class="mb-0">
                            Whatsapp:
                            <a class="link-light link-opacity-75" href="https://wa.me/6282139292912" target="_blank"
                                rel="noopener noreferrer">+(62) 821 39292912</a>
                        </p>
                        <p class="mb-0">
                            Email:
                            <a class="link-light link-opacity-75" href="mailto:email@ith.ac.id" target="_blank"
                                rel="noopener noreferrer">email@ith.ac.id</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h6 class="mb-3">Kontak</h6>
                    <div class="d-flex flex-column gap-2 text-light text-opacity-75 fw-light">
                        <p class="mb-0">
                            Jl. Kamboja No. 654, Kel. Tulip, Kec. Bunga, Kota Makassar,
                            Sulawesi Selatan, Indonesia, 78901
                        </p>
                        <iframe class="rounded-2"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1646.731769851677!2d119.63252653922547!3d-4.028660989379977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bbb762bcd13d%3A0x95845218a1ae2419!2sInstitut%20Teknologi%20Bacharuddin%20Jusuf%20Habibie%20(%20ITH%20)%20Kampus%201%20Rektorat!5e0!3m2!1sen!2sid!4v1713331168258!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <div
                class="pb-4 d-flex flex-column flex-sm-row justify-content-sm-between align-items-center gap-2 text-sm-start text-center">
                <p class="mb-0 fw-light">
                    &copy; 2024, Institut Teknologi Bacharuddin Jusuf Habibie
                </p>
                <div class="d-flex gap-1 flex-sm-nowrap flex-wrap justify-content-sm-end justify-content-center">
                    <a class="btn btn-icon link-light" href="https://facebook.com" target="_blank"
                        rel="noopener noreferrer"><i class="bi-facebook"></i></a><a class="btn btn-icon link-light"
                        href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i
                            class="bi-instagram"></i></a><a class="btn btn-icon link-light"
                        href="https://linkedin.com" target="_blank" rel="noopener noreferrer"><i
                            class="bi-linkedin"></i></a><a class="btn btn-icon link-light" href="https://youtube.com"
                        target="_blank" rel="noopener noreferrer"><i class="bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="scripts/main.9c8d564c.js"></script>
</body>

</html>
