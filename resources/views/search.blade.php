@extends('guest')
@section('content')
    <div class="flex-grow-1 container mt-6">
        <section class="py-5" id="search">
            <div
                class="d-flex justify-content-sm-start justify-content-between align-items-sm-end align-items-start flex-column flex-sm-row gap-3">
                <div class="flex-grow-1">
                    <h1>Hasil Pencarian</h1>
                    <p class="mb-0">
                        Ditemukan 213 hasil dari <strong>the history of anci</strong>
                    </p>
                </div>
                <div id="sort-wrapper">
                    <div class="form-floating">
                        <select class="form-select" id="sort" aria-labelledby="sort-label">
                            <option value="">Relevance</option>
                            <option value="date,asc">Newest</option>
                            <option value="date,desc">Oldest</option>
                            <option value="title,asc">Title A-Z</option>
                            <option value="title,asc">Title Z-A</option>
                        </select><label id="sort-label" for="sort">Urutan</label>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <div class="row g-4">
                <div class="col-lg-3 col-md-4" id="filter">
                    <div class="accordion-item accordion border-0 rounded-0">
                        <h6 class="mb-0 accordion-button collapsed border rounded" data-bs-toggle="collapse"
                            data-bs-target="#filter-content" aria-expanded="false" aria-controls="filter-content">
                            Filter
                        </h6>
                    </div>
                    <form class="accordion-collapse collapse" id="filter-content">
                        <div>
                            <p class="mb-2">Jenis</p>
                            <div class="filter-list">
                                <div class="form-check">
                                    <input class="form-check-input" id="disertasi-0" type="checkbox" value="" /><label
                                        class="form-check-label" for="disertasi-0">Disertasi<span
                                            class="text-body-tertiary">
                                            (2)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="tesis-1" type="checkbox" value="" /><label
                                        class="form-check-label" for="tesis-1">Tesis<span class="text-body-tertiary">
                                            (85)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="tugas-akhir-2" type="checkbox"
                                        value="" /><label class="form-check-label" for="tugas-akhir-2">Tugas
                                        Akhir<span class="text-body-tertiary"></span></label>
                                </div>
                            </div>
                            <button
                                class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 d-none text-start"
                                type="button">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </div>
                        <div>
                            <p class="mb-2">Fakultas</p>
                            <div class="filter-list">
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-komputer-0" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-komputer-0">Ilmu
                                        Komputer<span class="text-body-tertiary">
                                            (53)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="kedokteran-hewan-1" type="checkbox"
                                        value="" /><label class="form-check-label" for="kedokteran-hewan-1">Kedokteran
                                        Hewan<span class="text-body-tertiary">
                                            (3)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="seni-rupa-dan-desain-2" type="checkbox"
                                        value="" /><label class="form-check-label" for="seni-rupa-dan-desain-2">Seni
                                        Rupa dan Desain<span class="text-body-tertiary">
                                            (82)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ekonomi-dan-bisnis-3" type="checkbox"
                                        value="" /><label class="form-check-label" for="ekonomi-dan-bisnis-3">Ekonomi
                                        dan Bisnis<span class="text-body-tertiary">
                                            (113)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-elektro-4" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-elektro-4">Teknik
                                        Elektro<span class="text-body-tertiary">
                                            (32)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-sosial-dan-politik-5" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="ilmu-sosial-dan-politik-5">Ilmu Sosial dan Politik<span
                                            class="text-body-tertiary">
                                            (42)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-keperawatan-6" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-keperawatan-6">Ilmu
                                        Keperawatan<span class="text-body-tertiary">
                                            (114)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="hukum-7" type="checkbox"
                                        value="" /><label class="form-check-label" for="hukum-7">Hukum<span
                                            class="text-body-tertiary"> (94)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-sipil-8" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-sipil-8">Teknik
                                        Sipil<span class="text-body-tertiary">
                                            (39)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sastra-dan-budaya-9" type="checkbox"
                                        value="" /><label class="form-check-label" for="sastra-dan-budaya-9">Sastra
                                        dan Budaya<span class="text-body-tertiary">
                                            (55)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="psikologi-10" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="psikologi-10">Psikologi<span class="text-body-tertiary">
                                            (27)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="pertanian-11" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="pertanian-11">Pertanian<span class="text-body-tertiary">
                                            (108)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-komunikasi-12" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-komunikasi-12">Ilmu
                                        Komunikasi<span class="text-body-tertiary">
                                            (75)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="kedokteran-13" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="kedokteran-13">Kedokteran<span class="text-body-tertiary">
                                            (7)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-pendidikan-14" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-pendidikan-14">Ilmu
                                        Pendidikan<span class="text-body-tertiary">
                                            (42)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-mesin-15" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-mesin-15">Teknik
                                        Mesin<span class="text-body-tertiary">
                                            (64)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-lingkungan-16" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-lingkungan-16">Ilmu
                                        Lingkungan<span class="text-body-tertiary">
                                            (27)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-administrasi-17" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-administrasi-17">Ilmu
                                        Administrasi<span class="text-body-tertiary">
                                            (69)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknologi-informasi-18" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="teknologi-informasi-18">Teknologi Informasi<span
                                            class="text-body-tertiary"></span></label>
                                </div>
                            </div>
                            <button
                                class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 d-none text-start"
                                type="button">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </div>
                        <div>
                            <p class="mb-2">Program Studi</p>
                            <div class="form-floating mb-2">
                                <select class="form-select" id="strata" aria-labelledby="strata-label">
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select><label id="strata-label" for="strata">Strata</label>
                            </div>
                            <div class="filter-list">
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-sipil-0" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-sipil-0">Teknik
                                        Sipil<span class="text-body-tertiary">
                                            (109)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-elektro-1" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-elektro-1">Teknik
                                        Elektro<span class="text-body-tertiary">
                                            (66)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-komputer-2" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-komputer-2">Ilmu
                                        Komputer<span class="text-body-tertiary">
                                            (4)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-ekonomi-3" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-ekonomi-3">Ilmu
                                        Ekonomi<span class="text-body-tertiary">
                                            (8)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="manajemen-bisnis-4" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="manajemen-bisnis-4">Manajemen Bisnis<span class="text-body-tertiary">
                                            (71)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="psikologi-5" type="checkbox"
                                        value="" /><label class="form-check-label" for="psikologi-5">Psikologi<span
                                            class="text-body-tertiary">
                                            (100)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="kedokteran-6" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="kedokteran-6">Kedokteran<span class="text-body-tertiary">
                                            (16)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="hukum-7" type="checkbox"
                                        value="" /><label class="form-check-label" for="hukum-7">Hukum<span
                                            class="text-body-tertiary"> (49)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="pendidikan-8" type="checkbox"
                                        value="" /><label class="form-check-label"
                                        for="pendidikan-8">Pendidikan<span class="text-body-tertiary">
                                            (112)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="seni-dan-desain-9" type="checkbox"
                                        value="" /><label class="form-check-label" for="seni-dan-desain-9">Seni
                                        dan Desain<span class="text-body-tertiary">
                                            (81)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-politik-10" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-politik-10">Ilmu
                                        Politik<span class="text-body-tertiary">
                                            (77)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="ilmu-biologi-11" type="checkbox"
                                        value="" /><label class="form-check-label" for="ilmu-biologi-11">Ilmu
                                        Biologi<span class="text-body-tertiary">
                                            (70)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="teknik-kimia-12" type="checkbox"
                                        value="" /><label class="form-check-label" for="teknik-kimia-12">Teknik
                                        Kimia<span class="text-body-tertiary"></span></label>
                                </div>
                            </div>
                            <button
                                class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 d-none text-start"
                                type="button">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">
                            Filter
                        </button>
                    </form>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="vstack gap-4">
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-danger">Disertasi</span>
                                <p class="mb-0">SAGE Publishing | 2023</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>
                                    The History of Ancient Civilizations Vestibulum at Urna
                                    Sodales Nunc Ultricies Pretium Vitae a Neque Pellentesque
                                    Habitant Morbi Tristique Senectus Et Netus Et Malesuada
                                    Fames Ac Turpis Egestas
                                </h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Inessa Pryke</span>, Dr. Laura Martinez,
                                Prof. Brian Garcia<i class="bi-info-circle ms-2" data-bs-toggle="tooltip"
                                    data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Inessa Pryke&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Dr. Laura Martinez, Prof. Brian Garcia
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-19">
                                <p class="my-2">
                                    Aliquam eu magna ullamcorper, tempus velit ac, pellentesque
                                    diam. Suspendisse bibendum, arcu a scelerisque sodales,
                                    magna erat finibus arcu, fringilla egestas erat felis nec
                                    diam. Quisque pellentesque ex in sem viverra, a fermentum
                                    elit dictum. Ut efficitur pellentesque efficitur. In eu
                                    neque vel odio tincidunt semper. Integer luctus purus elit,
                                    a pretium est congue lobortis. Vestibulum at urna sodales
                                    nunc ultricies pretium vitae a neque.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Women's Studies, Film Studies</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-19"
                                aria-expanded="false" aria-controls="literature-content-19">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-info">Tugas Akhir</span>
                                <p class="mb-0">Springer | 2022</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>
                                    Exploring Sustainable Development Practices Et Viverra Massa
                                    Ligula Dolor Tellus Rhoncus Ipsum
                                </h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Dame Gounard</span>, Prof. Brian
                                Garcia<i class="bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Dame Gounard&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Prof. Brian Garcia
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-28">
                                <p class="my-2">
                                    Phasellus commodo vitae odio nec condimentum. Etiam tellus
                                    neque, semper vitae tellus vel, auctor tincidunt velit.
                                    Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Curabitur at laoreet
                                    elit. Mauris tincidunt pulvinar ipsum sed ullamcorper. Nunc
                                    cursus a orci id dapibus. Nam vel ante convallis, efficitur
                                    odio ac, scelerisque turpis. In et vehicula elit. Donec
                                    eleifend orci lectus, vel consectetur magna volutpat vitae.
                                    Donec elit mi, varius at ipsum a, pharetra fringilla lacus.
                                    Suspendisse quis cursus ipsum. Vestibulum blandit vestibulum
                                    iaculis. Proin consectetur ut urna vel consequat. Fusce
                                    tempor, elit id tempor maximus, dolor tellus rhoncus ipsum,
                                    et viverra massa ligula dignissim dui.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Women's Studies, Film Studies</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-28"
                                aria-expanded="false" aria-controls="literature-content-28">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-info">Tugas Akhir</span>
                                <p class="mb-0">Taylor &amp; Francis | 2022</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>The Impact of Technology on Education</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Ermin Mate</span>, Dr. Jessica Lee<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Ermin Mate&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Dr. Jessica Lee
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-8">
                                <p class="my-2">
                                    Phasellus commodo vitae odio nec condimentum. Etiam tellus
                                    neque, semper vitae tellus vel, auctor tincidunt velit.
                                    Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Curabitur at laoreet
                                    elit. Mauris tincidunt pulvinar ipsum sed ullamcorper. Nunc
                                    cursus a orci id dapibus. Nam vel ante convallis, efficitur
                                    odio ac, scelerisque turpis. In et vehicula elit. Donec
                                    eleifend orci lectus, vel consectetur magna volutpat vitae.
                                    Donec elit mi, varius at ipsum a, pharetra fringilla lacus.
                                    Suspendisse quis cursus ipsum. Vestibulum blandit vestibulum
                                    iaculis. Proin consectetur ut urna vel consequat. Fusce
                                    tempor, elit id tempor maximus, dolor tellus rhoncus ipsum,
                                    et viverra massa ligula dignissim dui.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Sociology, Geography, Anthropology, Economics, Political
                                        Science</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-8"
                                aria-expanded="false" aria-controls="literature-content-8">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-warning">Tesis</span>
                                <p class="mb-0">Taylor &amp; Francis | 2022</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>
                                    Analyzing the Effects of Climate Change on Agriculture
                                </h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Cheston Lupton</span>, Prof. Kevin
                                Thompson<i class="bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Cheston Lupton&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Prof. Kevin Thompson
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-1">
                                <p class="my-2">
                                    Phasellus commodo convallis velit sit amet laoreet.
                                    Vestibulum molestie, arcu in venenatis scelerisque, ex eros
                                    gravida diam, quis ultrices neque elit a dolor. Etiam quam
                                    diam, pretium eu metus vel, tincidunt malesuada risus. Donec
                                    dapibus molestie nibh, ut viverra urna interdum ut.
                                    Curabitur sit amet velit ut nibh tempus malesuada. Aenean
                                    viverra vitae dui quis fringilla. Suspendisse et magna ut
                                    turpis semper maximus. Donec egestas sit amet sapien sed
                                    ornare. Donec feugiat mauris id eleifend egestas. Vivamus
                                    scelerisque fermentum gravida. Sed lacinia nulla diam, in
                                    volutpat nisi iaculis vel.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Philosophy, Art History, Engineering</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-1"
                                aria-expanded="false" aria-controls="literature-content-1">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-danger">Disertasi</span>
                                <p class="mb-0">Springer | 2021</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>The Impact of Technology on Education</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Jarib Snary</span>, Dr. Sarah Smith<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Jarib Snary&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Dr. Sarah Smith
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-20">
                                <p class="my-2">
                                    Phasellus commodo vitae odio nec condimentum. Etiam tellus
                                    neque, semper vitae tellus vel, auctor tincidunt velit.
                                    Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Curabitur at laoreet
                                    elit. Mauris tincidunt pulvinar ipsum sed ullamcorper. Nunc
                                    cursus a orci id dapibus. Nam vel ante convallis, efficitur
                                    odio ac, scelerisque turpis. In et vehicula elit. Donec
                                    eleifend orci lectus, vel consectetur magna volutpat vitae.
                                    Donec elit mi, varius at ipsum a, pharetra fringilla lacus.
                                    Suspendisse quis cursus ipsum. Vestibulum blandit vestibulum
                                    iaculis. Proin consectetur ut urna vel consequat. Fusce
                                    tempor, elit id tempor maximus, dolor tellus rhoncus ipsum,
                                    et viverra massa ligula dignissim dui.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Computer Science, Environmental Science</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-20"
                                aria-expanded="false" aria-controls="literature-content-20">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-warning">Tesis</span>
                                <p class="mb-0">SAGE Publishing | 2021</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>The History of Ancient Civilizations</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Keir McGill</span>, Dr. Emily Johnson<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Keir McGill&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Dr. Emily Johnson
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-4">
                                <p class="my-2">
                                    Phasellus commodo vitae odio nec condimentum. Etiam tellus
                                    neque, semper vitae tellus vel, auctor tincidunt velit.
                                    Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Curabitur at laoreet
                                    elit. Mauris tincidunt pulvinar ipsum sed ullamcorper. Nunc
                                    cursus a orci id dapibus. Nam vel ante convallis, efficitur
                                    odio ac, scelerisque turpis. In et vehicula elit. Donec
                                    eleifend orci lectus, vel consectetur magna volutpat vitae.
                                    Donec elit mi, varius at ipsum a, pharetra fringilla lacus.
                                    Suspendisse quis cursus ipsum. Vestibulum blandit vestibulum
                                    iaculis. Proin consectetur ut urna vel consequat. Fusce
                                    tempor, elit id tempor maximus, dolor tellus rhoncus ipsum,
                                    et viverra massa ligula dignissim dui.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Music Theory, Criminal Justice, Public Health, Education,
                                        Business Administration</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-4"
                                aria-expanded="false" aria-controls="literature-content-4">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-danger">Disertasi</span>
                                <p class="mb-0">Wiley | 2020</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>Gender Equality in the Workplace</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Vite Bim</span>, Prof. David Wilson<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Vite Bim&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Prof. David Wilson
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-13">
                                <p class="my-2">
                                    Nunc ullamcorper purus magna, ut sollicitudin libero blandit
                                    commodo. Vivamus vitae urna ac nibh cursus volutpat.
                                    Vestibulum at orci vulputate, consectetur augue at, cursus
                                    ante. Nunc fringilla euismod neque, ut dictum diam laoreet
                                    sed. Praesent risus dui, sagittis vitae bibendum vel,
                                    eleifend quis massa. Etiam sollicitudin rhoncus efficitur.
                                    Morbi ut luctus magna.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Philosophy, Art History, Engineering</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-13"
                                aria-expanded="false" aria-controls="literature-content-13">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-warning">Tesis</span>
                                <p class="mb-0">Wiley | 2020</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>Analyzing Consumer Behavior in E-commerce</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Corly Abazi</span>, Dr. Jessica Lee<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Corly Abazi&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Dr. Jessica Lee
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-26">
                                <p class="my-2">
                                    Phasellus commodo convallis velit sit amet laoreet.
                                    Vestibulum molestie, arcu in venenatis scelerisque, ex eros
                                    gravida diam, quis ultrices neque elit a dolor. Etiam quam
                                    diam, pretium eu metus vel, tincidunt malesuada risus. Donec
                                    dapibus molestie nibh, ut viverra urna interdum ut.
                                    Curabitur sit amet velit ut nibh tempus malesuada. Aenean
                                    viverra vitae dui quis fringilla. Suspendisse et magna ut
                                    turpis semper maximus. Donec egestas sit amet sapien sed
                                    ornare. Donec feugiat mauris id eleifend egestas. Vivamus
                                    scelerisque fermentum gravida. Sed lacinia nulla diam, in
                                    volutpat nisi iaculis vel.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Music Theory, Criminal Justice, Public Health, Education,
                                        Business Administration</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-26"
                                aria-expanded="false" aria-controls="literature-content-26">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-warning">Tesis</span>
                                <p class="mb-0">SAGE Publishing | 2019</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>The Future of Artificial Intelligence in Business</h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Vera Fegan</span>, Prof. John Doe<i class="bi-info-circle ms-2"
                                    data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Vera Fegan&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Prof. John Doe
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-11">
                                <p class="my-2">
                                    Nunc ullamcorper purus magna, ut sollicitudin libero blandit
                                    commodo. Vivamus vitae urna ac nibh cursus volutpat.
                                    Vestibulum at orci vulputate, consectetur augue at, cursus
                                    ante. Nunc fringilla euismod neque, ut dictum diam laoreet
                                    sed. Praesent risus dui, sagittis vitae bibendum vel,
                                    eleifend quis massa. Etiam sollicitudin rhoncus efficitur.
                                    Morbi ut luctus magna.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Music Theory, Criminal Justice, Public Health, Education,
                                        Business Administration</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-11"
                                aria-expanded="false" aria-controls="literature-content-11">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                        <article class="literature">
                            <div class="mb-2 d-flex gap-2 align-items-center">
                                <span class="badge fw-normal text-bg-info">Tugas Akhir</span>
                                <p class="mb-0">Wiley | 2019</p>
                            </div>
                            <a href="/literature-detail.html">
                                <h5>
                                    Understanding Climate Change Adaptation Strategies
                                </h5>
                            </a>
                            <p class="mb-0">
                                <span class="fw-bold">Adrienne Fosh</span>, Prof. Kevin
                                Thompson<i class="bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="&lt;div class='text-start'&gt;
				&lt;b&gt;Penulis: &lt;/b&gt;Adrienne Fosh&lt;br/&gt;
				&lt;b&gt;Kontributor: &lt;/b&gt;Prof. Kevin Thompson
			&lt;/div&gt;"></i>
                            </p>
                            <div class="content collapse" id="literature-content-21">
                                <p class="my-2">
                                    Fusce placerat, nisi quis semper mattis, risus orci pretium
                                    ipsum, eget volutpat libero arcu ac odio. Vestibulum
                                    imperdiet dolor vel eros vulputate, et luctus sapien tempor.
                                    Aliquam porta efficitur blandit. Mauris consequat elit a
                                    mauris blandit finibus. Duis lobortis tincidunt finibus. Ut
                                    elementum condimentum tellus, ac facilisis justo ullamcorper
                                    eu. Nulla pulvinar egestas lectus, vel vulputate ipsum
                                    venenatis et. Quisque pharetra, erat id iaculis lacinia, est
                                    sapien sollicitudin felis, in luctus magna ligula nec nisl.
                                </p>
                                <p>
                                    Kata Kunci:
                                    <span class="fst-italic">Music Theory, Criminal Justice, Public Health, Education,
                                        Business Administration</span>
                                </p>
                            </div>
                            <button class="btn btn-link link-dark p-0 mt-2 d-flex align-items-center gap-2 text-start"
                                type="button" data-bs-toggle="collapse" data-bs-target="#literature-content-21"
                                aria-expanded="false" aria-controls="literature-content-21">
                                <span>Lihat lebih banyak</span><i class="bi-chevron-down"></i>
                            </button>
                        </article>
                    </div>
                    <nav class="mt-4" aria-label="Navigasi halaman literatur">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <div class="page-link">...</div>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
