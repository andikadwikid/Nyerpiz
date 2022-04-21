@extends('landingpage.layout.app')
@section('content')
    <div class="">

        <section class="position-relative bg-light pb-40 mb-80">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand h4 text-decoration-none" href="#"><img
                            src="{{ asset('landingpage/images/nyerpiz.PNG') }}" alt="" width="150"></a>
                    <div class="d-lg-none">
                        <button class="btn btn-sm navbar-burger">
                            <svg class="d-block" width="16" height="16" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Mobile menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg></button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto me-4">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                        </ul>
                        <div class="d-none d-lg-block"><a class="btn btn-secondary" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container pt-12 text-center">

                <h1 class="mt-8 mb-8 mb-lg-12">Ayo, Nyerpis Sekarang !</h1>
                <p class="max-w-3xl mx-auto mb-8 mb-lg-12 lead text-muted">
                    Perbaiki Barang-barang Elektronik mu yang rusak disini. Silahkan Klik tombol dibawah ini dan Isi
                    Form nya</p>
                <div class="text-center mb-20">
                    <a class="btn btn-primary d-block d-sm-inline-block mb-2 mb-sm-0 me-sm-4" href="#">Klik disini !</a>
                </div>
                <div class="position-relative max-w-3xl mx-auto">
                    <div class="position-absolute start-0 end-0 mb-n24">
                        <img class="img-fluid rounded w-100" style="object-fit: cover; height: 384px;"
                            src="{{ asset('landingpage/images/img-6-1.png') }}" alt=""><img
                            class="d-lg-none position-absolute end-0 bottom-0 mb-n12"
                            src="{{ asset('landingpage/zeus-assets/icons/dots/yellow-dot-right-shield-blue-line.svg') }}"
                            alt="">
                    </div>
                </div>
            </div>
            <img class="d-none d-lg-block position-absolute top-0 start-0 mt-32"
                src="{{ asset('landingpage/zeus-assets/icons/dots/red-dot-left-bars.svg') }}" alt=""><img
                class="d-none d-lg-block position-absolute end-0"
                src="{{ asset('landingpage/zeus-assets/icons/dots/yellow-dot-right-shield-blue-line.svg') }}" alt="">
            <div class="d-none navbar-menu position-relative">
                <div class="navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark" style="opacity: 75%;">
                </div>
                <nav
                    class="position-fixed top-0 start-0 bottom-0 d-flex flex-column w-75 max-w-sm py-6 px-6 bg-white overflow-auto">
                    <div class="d-flex align-items-center mb-10">
                        <a class="me-auto h4 mb-0 text-decoration-none" href="#"><img
                                src="{{ asset('landingpage/images/nyerpiz.PNG') }}" alt="" width="150"></a>
                        <button class="navbar-close btn-close" type="button" aria-label="Close"></button>
                    </div>
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-4"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item mb-4"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item mb-4"><a class="nav-link" href="#">Contact</a></li>
                            <li class="nav-item mb-4"><a class="nav-link" href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="py-6"><a class="w-100 btn btn-secondary" href="#">Login</a></div>
                        <p class="mb-4 small text-center text-muted">
                            <span>© {{ date('Y') }} Nyerpiz.</span>
                        </p>
                    </div>
                </nav>
            </div>
        </section>

        <section class="position-relative py-20"><img class="d-none d-lg-block position-absolute top-0 start-0 mt-20"
                src="{{ asset('landingpage/zeus-assets/icons/dots/blue-dot-left-bars.svg') }}" alt=""><img
                class="d-none d-lg-block position-absolute top-0 end-0 mt-52"
                src="{{ asset('landingpage/zeus-assets/icons/dots/yellow-dot-right-shield.svg') }}" alt="">
            <div class="container">
                <div class="max-w-2xl mx-auto mb-20 text-center">

                    <h2 class="mt-8 mb-10">Nyerpiz</h2>
                </div>

                <div class="max-w-2xl mx-auto mb-20 title-content text-justify text-black-50">
                    <p style="text-align: justify;" class="lead text-muted">Sebuah website yang menyediakan penawaran
                        jasa reparasi atau perbaikan
                        produk-produk elektronik seperti Televisi,mesin cuci,pompa air, kipas angin,
                        dll kecuali AC,Kulkas,dan alat pendingin lainnya. Dan juga menawarkan jasa instalasi
                        kelistrikan dan perairan, perakitan sound system, dan setting kendaraan roda dua/motor.
                        Kami mempunyai toko fisik yang beralamat di Jl.peta barat Rawa lele Rt07/010 blok b no.28
                        kalideres Jakarta Barat. Walaupun umur dari usaha jasa reparasi ini masih terbilang baru, tetapi
                        teknisi disini sudah memliki pengalaman kurang lebih sekitar 20 tahun.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Instalasi Listrik</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted text-justify">Layanan Instalasi
                            kelistrikan di kediaman mu mulai dari pasang perangkat listrik seperti stopkontak,
                            saklar,fitting lampu, dll. Langsung saja klik tombol dibawah ini untuk instalasi kelistrikan
                            dirumah mu yang baru dibangun atau direnovasi!.</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Sepeda Motor</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted">Layanan nyerpis Sepeda motor /
                            kendaraan roda dua yang bermasalah dan layanan lainnya mulai dari ganti oli, ganti filter
                            oli, dan ganti atau pasang spare part lainnya. Silahkan klik dibawah untuk Nyerpis sepeda
                            motor mu!</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Kipas Angin</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted">Semua Jenis Kipas angin mulai
                            dari yang digantung, duduk, dan berdiri bisa diperbaiki dan digulung ulang disini! Silahkan
                            klik dibawah untuk Nyerpis Kipas Angin mu!</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Speaker Wireless</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted">Speaker Wireless yang
                            menggunakan teknologi bluetooth ini dapat memungkinkan Anda menggunakannya di mana pun tanpa
                            perlu kabel sambungan. Jika speaker wireless mu rusak, tidak mau pairing ke bluetooth lain
                            yang ada di device kamu, atau suara nya ada masalah, Silahkan klik dibawah untuk Nyerpis
                            Speaker wireless mu!</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Genset</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted">Beberapa jenis genset seperti
                            genset bensin, gas dan juga genset portable. Jika Genset mu tidak berfungsi normal,
                            berasap,sampai mati total, Silahkan klik dibawah untuk Nyerpis Genset mu!</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-16">

                        <h3 style="text-align: justify;" class="mt-4 mb-4">Dan Lain-lain</h3>
                        <p style="text-align: justify;" class="mb-4 mb-lg-6 text-muted">Seperti Blender, Rice Cooker,
                            Pompa Air. Jika barang elektronik mu tidak disebutkan disini, silahkan hubungi via whatsapp
                            dibawah ini !</p>
                        <a class="h6" href="#">Klik disini !</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20">
            <div class="container mb-20">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 mb-12 mb-lg-0">
                        <div class="max-w-lg">
                            <h4 style="text-align: justify;">Kamu juga bisa datang langsung ke Bengkel Elektronik/Toko
                                Service reparasi elektronik pak salam pada alamat di bawah ini </h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h3 class="mb-4 h4">Bengkel Elektronik</h3>
                        <p style="text-align: justify;" class="mb-10 mb-lg-8 text-muted">Jl.peta barat, Rawa lele,
                            Rt07/010 blok b,Gg.Melati (no.28)
                            Kalideres, Kecamatan Kalideres, Kota Jakarta Barat, Jakarta 11840</p>
                        <h3 class="mb-4 h4">Contacts</h3>
                        <p class="text-muted"><a href="http://wa.me/6287775150499" target="_blank">0877-7515-0499</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <style type="text/css" media="screen">
                    iframe {
                        width: 100%;
                        height: auto;
                        min-height: 400px;
                    }

                </style>
                <div id="map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.806997956898!2d106.6871652!3d-6.143663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f99c11fff3e3%3A0xc755aa7e1c43c6c4!2sToko%20service%2Freparasi%20elektronik%20pak%20salam!5e0!3m2!1sen!2sid!4v1622298204640!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy" width="600" height="450"></iframe></div>
            </div>
        </section>

        <section class="position-relative py-20 py-lg-40" style="background-color: #EBF8FF;"><img
                class="d-none d-lg-block position-absolute top-0 start-0 mt-32"
                src="{{ asset('landingpage/zeus-assets/icons/dots/yellow-dot-left-bars.svg') }}}" alt=""><img
                class="position-absolute d-lg-none top-0 end-0 mt-4" style="height: 56px;"
                src="{{ asset('landingpage/zeus-assets/icons/dots/yellow-dot-right-shield.svg') }}" alt=""><img
                class="d-none d-lg-block position-absolute top-0 end-0 mt-64"
                src="{{ asset('landingpage/zeus-assets/icons/dots/red-dot-right-shield.svg') }}" alt="">
            <div class="position-relative container">
                <div class="max-w-3xl mx-auto text-center">

                    <h2 class="mt-8 mb-6 mb-lg-10">Barang rusak kamu sedang diserpis dan penasaran udah sampai mana
                        prosesnya ? Cek prosesnya disini !</h2>
                    <p class="mb-6 mb-lg-12 lead text-muted"></p>
                    <a class="btn btn-primary me-4" href="#">Cek Status Barang</a>
                </div>
            </div>
        </section>

        <section class="py-24 bg-light">
            <div class="container">
                <div class="mw-xl mx-auto text-center mb-20 mb-xl-16">
                    <h1 class="mb-6 lh-sm px-xl-12 font-heading">Frequently asked questions (FAQ)</h1>
                    <p class="lh-lg mb-0">Pertanyaan yang sering dipertanyakan (FAQ)</p>
                </div>
                <div class="row mb-20 mb-xl-24">
                    <div class="col-12 col-md-6 px-xl-4 mb-8">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Bagaimana cara
                                reparasi atau memperbaiki barang elektronik saya yang rusak disini ?</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Pertama, Bisa isi form untuk
                                pengajuan barang elektronik rusak yang ingin diperbaiki (klik tombol "Nyerpis" pada menu
                                diatas). Lalu isi semua kolom nya, dan daftarkan. Kemudian admin kami akan menghubungi
                                paling lama dalam waktu 1x24 jam untuk konfirmasi biaya dan pengambilan barang yang
                                rusak. Setelah sepakat dan barang sudah diantarkan ke toko, kamu bisa memonitor
                                proses/status reparasi barang kamu di menu "Cek Status". Jika status barang sudah
                                berubah menjadi selesai, maka barang siap untuk diambil.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-xl-4 mb-8">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Apakah bisa teknisinya
                                saja yang datang kerumah untuk memperbaiki barang elektronik saya ?</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Tergantung, Jika layanan
                                seperti Instalasi listrik, Teknisi bisa dipanggil kerumah. Tetapi kalau seperti reparasi
                                barang-barang elektronik seperti televisi,rice cooker, dsb itu tidak bisa dikarenakan
                                diperlukan alat-alat reparasi pendukung yang banyak dan tidak bisa dibawa-bawa.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-xl-4 mb-8">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Bagaimana jika alamat
                                tempat tinggal kita jauh dari lokasi toko ?</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Barang rusak bisa dikirim
                                secara mandiri oleh customer atau melalui jasa pengiriman ojek online dan biaya
                                pengiriman ditanggung sendiri.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-xl-4 mb-8">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Saya takut jika
                                harganya terlalu mahal</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Tidak perlu takut, karena
                                sebelum barang direparasi, kami mengkonfirmasi terkait biaya yang dikeluarkan oleh
                                customer. Jadi jika customer menyutujui, maka barang akan diambil/dikirim ke toko untuk
                                direparasi. Jika tidak setuju karna terlalu mmahal, maka proses nyerpis akan dibatalkan
                                dan tidak mengeluarkan biaya sepeserpun.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-xl-4 mb-8 mb-md-0">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Bagaimana jika barang
                                ketika sampai rumah tetap bermasalah atau tidak berfungsi secara normal ?</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Bawa kembali, Kita periksa dan
                                reparasi kembali tanpa tambahan biaya untuk jasa.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 px-xl-4">
                        <div class="bg-white py-12 px-6 px-md-16">
                            <img class="img-fluid" src="{{ asset('landingpage/pstls-assets/icons/faq-info.svg') }}"
                                alt="">
                            <h5 style="text-align: justify;" class="mt-6 lh-lg mb-5 font-heading">Bagaimana jika barang
                                selesai, tetapi tidak diambil ?</h5>
                            <p style="text-align: justify;" class="text-muted lh-lg mb-0">Barang tersebut akan tetap
                                kami tahan dan jika melebihi waktu 3 bulan belum juga diambil, maka barang tersebut kami
                                jual. Tetapi tenang saja, Uang hasil penjualan barang tersebut akan tetap kami berikan
                                kepada customer, kami hanya mengambil bagian dari biaya untuk jasa nyerpis nya saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 py-lg-20">
            <div class="container">
                <div class="mb-8 pb-20 border-bottom">
                    <div class="text-center">
                        <a class="d-inline-block mb-8 h4 text-decoration-none" href="#"><img
                                src="{{ asset('landingpage/images/nyerpiz.PNG') }}" alt="" width="200"></a>
                        <ul class="mb-8 d-flex flex-wrap gap-4 align-items-center justify-content-center list-unstyled"
                            style="font-size: 14px;">
                            <li class="mb-2 mb-md-0"><a class="text-decoration-none link-dark fw-bold" href="#">Home</a>
                            </li>
                            <li class="mb-2 mb-md-0"><a class="text-decoration-none link-dark fw-bold"
                                    href="#">About</a></li>
                            <li class="mb-2 mb-md-0"><a class="text-decoration-none link-dark fw-bold"
                                    href="#">Contact</a></li>
                            <li class="mb-2 mb-md-0"><a class="text-decoration-none link-dark fw-bold" href="#">FAQ</a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a class="d-flex justify-content-center align-items-center me-4 bg-light rounded-circle"
                                href="#" style="width: 40px; height: 40px;">
                                <svg class="text-muted" width="7" height="12" viewbox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.0898 11.8182V6.51068H5.90537L6.17776 4.44164H4.0898V3.12086C4.0898 2.52201 4.25864 2.1139 5.13515 2.1139L6.25125 2.11345V0.26283C6.05824 0.238228 5.39569 0.181824 4.62456 0.181824C3.01431 0.181824 1.9119 1.14588 1.9119 2.91594V4.44164H0.0908203V6.51068H1.9119V11.8182H4.0898Z"
                                        fill="currentColor"></path>
                                </svg></a>
                            <a class="d-flex justify-content-center align-items-center me-4 bg-light rounded-circle"
                                href="#" style="width: 40px; height: 40px;">
                                <svg class="text-muted" width="13" height="11" viewbox="0 0 13 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5455 2.09728C12.0904 2.29892 11.6022 2.43566 11.0892 2.49671C11.613 2.18304 12.014 1.6855 12.204 1.09447C11.7127 1.38496 11.1703 1.59589 10.5924 1.71023C10.1296 1.21655 9.47138 0.909058 8.74128 0.909058C7.34059 0.909058 6.20489 2.04475 6.20489 3.44467C6.20489 3.64322 6.2273 3.83714 6.27057 4.02257C4.16298 3.91671 2.29411 2.90696 1.0433 1.37259C0.824652 1.74653 0.700269 2.18225 0.700269 2.64736C0.700269 3.52734 1.14837 4.30379 1.82825 4.75805C1.41259 4.74415 1.02166 4.62981 0.67942 4.43975V4.47142C0.67942 5.69983 1.55399 6.72504 2.71362 6.95837C2.50116 7.01554 2.27712 7.04722 2.04534 7.04722C1.88156 7.04722 1.72318 7.031 1.56788 7.00009C1.89081 8.00831 2.8272 8.74148 3.93663 8.76158C3.06902 9.44146 1.97504 9.84552 0.786814 9.84552C0.582087 9.84552 0.38043 9.83316 0.181885 9.81076C1.30445 10.5316 2.63716 10.9519 4.06952 10.9519C8.73514 10.9519 11.2854 7.0874 11.2854 3.73595L11.2769 3.4076C11.7752 3.05219 12.2063 2.60564 12.5455 2.09728Z"
                                        fill="currentColor"></path>
                                </svg></a>
                            <a class="d-flex justify-content-center align-items-center me-4 bg-light rounded-circle"
                                href="#" style="width: 40px; height: 40px;">
                                <svg class="text-muted" width="14" height="14" viewbox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.06713 0.454529H9.9328C11.9249 0.454529 13.5456 2.07519 13.5455 4.06715V9.93282C13.5455 11.9248 11.9249 13.5454 9.9328 13.5454H4.06713C2.07518 13.5454 0.45459 11.9249 0.45459 9.93282V4.06715C0.45459 2.07519 2.07518 0.454529 4.06713 0.454529ZM9.9329 12.3839C11.2845 12.3839 12.3841 11.2844 12.3841 9.93282H12.384V4.06714C12.384 2.71563 11.2844 1.61601 9.93282 1.61601H4.06715C2.71564 1.61601 1.61609 2.71563 1.61609 4.06714V9.93282C1.61609 11.2844 2.71564 12.384 4.06715 12.3839H9.9329ZM3.57148 7.00005C3.57148 5.10947 5.10951 3.5714 7.00005 3.5714C8.8906 3.5714 10.4286 5.10947 10.4286 7.00005C10.4286 8.89056 8.8906 10.4285 7.00005 10.4285C5.10951 10.4285 3.57148 8.89056 3.57148 7.00005ZM4.75203 6.99998C4.75203 8.23951 5.76054 9.24788 7.00004 9.24788C8.23955 9.24788 9.24806 8.23951 9.24806 6.99998C9.24806 5.76036 8.23963 4.75191 7.00004 4.75191C5.76046 4.75191 4.75203 5.76036 4.75203 6.99998Z"
                                        fill="currentColor"></path>
                                </svg></a>
                            <a class="d-flex justify-content-center align-items-center me-4 bg-light rounded-circle"
                                href="#" style="width: 40px; height: 40px;">
                                <svg class="text-muted" width="12" height="12" viewbox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8 0H1.2C0.54 0 0 0.54 0 1.2V10.8C0 11.46 0.54 12 1.2 12H10.8C11.46 12 12 11.46 12 10.8V1.2C12 0.54 11.46 0 10.8 0ZM3.6 10.2H1.8V4.8H3.6V10.2ZM2.7 3.78C2.1 3.78 1.62 3.3 1.62 2.7C1.62 2.1 2.1 1.62 2.7 1.62C3.3 1.62 3.78 2.1 3.78 2.7C3.78 3.3 3.3 3.78 2.7 3.78ZM10.2 10.2H8.4V7.02C8.4 6.54002 7.98 6.12 7.5 6.12C7.02 6.12 6.6 6.54002 6.6 7.02V10.2H4.8V4.8H6.6V5.52C6.9 5.04 7.56 4.68 8.1 4.68C9.24 4.68 10.2 5.64 10.2 6.78V10.2Z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <p class="text-center text-muted small">All rights reserved © Nyerpiz {{ date('Y') }}</p>
            </div>
        </section>
    </div>
@endsection
