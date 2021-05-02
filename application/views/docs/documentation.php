<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Documentation</title>

    <link rel="shortcut icon" href="<?= base_url('assets/docs/images/favicon.ico') ?>" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?> ">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/stroke.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/prettyPhoto.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/style.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/js/syntax-highlighter/styles/shCore.css') ?>" media="all">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/js/syntax-highlighter/styles/shThemeRDark.css') ?>" media="all">

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/docs/css/custom.css') ?>">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
            document.documentElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector('#mode').addEventListener('click', () => {
                document.querySelector('html').classList.toggle('dark');
            })
        });
    </script>

    <div id="wrapper">

        <div id="mode">
            <div class="dark">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>lightmode</title>
                    <path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z">
                    </path>
                </svg>
            </div>
            <div class="light">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>darkmode</title>
                    <path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z">
                    </path>
                </svg>
            </div>
        </div>

        <div class="container">

            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Sistem Informasi Management</h1>
                            <p class="lead">SIM / App dokumentasi versi 1.0</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

                <hr>

            </section>
            <!-- end section -->

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#line1">Mulai</a></li>
                            <li><a href="#line2">Membuat akun baru</a></li>
                            <li><a href="#line3">Masuk kedalam sistem</a></li>
                            <li><a href="#line7">Sebagai Admin DC</a>
                                <ul class="nav">
                                    <li><a href="#line7_1">Tampilan Menu</a></li>
                                    <li><a href="#line7_2">Dashboard</a></li>
                                    <li><a href="#line7_3">Header Options</a></li>
                                    <li><a href="#line7_4">Font Options</a></li>
                                    <li><a href="#line7_5">Slider Options</a></li>
                                    <li><a href="#line7_6">Page Options</a></li>
                                    <li><a href="#line7_7">Import & Export</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sebagai Admin TU</a>
                                <ul class="nav">
                                    <li><a href="#">General Options</a></li>
                                    <li><a href="#">Style Options</a></li>
                                    <li><a href="#">Header Options</a></li>
                                    <li><a href="#">Font Options</a></li>
                                    <li><a href="#">Slider Options</a></li>
                                    <li><a href="#">Page Options</a></li>
                                    <li><a href="#">Import & Export</a></li>
                                </ul>
                            </li>
                            <li><a href="#line8">Support Desk</a></li>
                            <li><a href="#line9">Files & Sources</a></li>
                            <li><a href="#line10">Version History (Changelog)</a></li>
                            <li><a href="#line11">Copyright and license</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <section class="welcome">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Pengantar
                                    <hr>
                                </h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>App Name : </strong>Sistem Informasi Management Sekolah</li>
                                                <li><strong>App Version : </strong> v 1.0 beta</li>
                                                <li><strong>Author : </strong> <a href="https://ademaulana12.github.io/pages/" target="_blank">M Ade Maulana</a></li>
                                                <li><strong>Support : </strong> <a href="https://nusantara1.sch.id" target="_blank">https://nusantara1.sch.id</a></li>
                                                <li><strong>Permission : </strong> Private</li>
                                            </ul>
                                        </div>

                                        <hr>
                                        <div>
                                            <p>Pertama-tama, Terima kasih banyak telah mendukung tercapainya sebuah aplikasi yang dapat mendukung proses kerja agar lebih mudah. Diharapkan aplikasi ini dapat sesuai dengan kebutuhan yang ada pada sekolah saat ini.</p>

                                            <p>Dokumentasi ini dibuat untuk menjadi pedoman pada saat menggunakan aplikasi sistem informasi management sekolah agar dapat dengan mudah menggunakannya. Terdapat menu helpdesk untuk menghubungkan anda dengan tim data center yang terkait dengan aplikasi ini </p>

                                            <h4>Persyaratan</h4>
                                            <p>Sebelum menggunakan aplikasi ini kami menyarankan untuk memngunakan aplikasi ini dengan tools rekomendasi kami </p>
                                            <ol>
                                                <li>Web Browser seperti (Google Chrome or Mozilla Firefox)</li>
                                                <li>Internet yang stabil</li>
                                                <li>Microsoft office seperti Excel 2013 atau di atasnya (Untuk melakukan upload data) </li>
                                            </ol>
                                            <div class="intro2 clearfix">
                                                <p><i class="fa fa-exclamation-triangle"></i> Mohon selalu membuka dokumentasi untuk menghindari kesalahan pada saat mengolah data
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="line1" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Mulai</h2>
                            </div>
                            <!-- end col -->
                        </div>

                        <hr>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <p>Untuk menggunakan aplikasi ini silahkan anda membuka web browser yang sudah terinstal di perangkan anda, kemudian tuliskan alamat website yaitu <a href="#" target="_blank" rel="noopener noreferrer">http://example.com</a> pada web browser anda. <br>
                                    Pastikan untuk internet di ruangan anda selalu stabil, karna aplikasi ini menggunakan internet untuk mengambil sumber data pada program.
                                </p>

                                <h4>Perhatikan gambar dibawah ini</h4>

                                <img src="<?= base_url('assets/docs/images/tampilan1.png') ?>" alt="" class="img-responsive img-thumbnail">

                                <p>Jika anda menemui tampilan seperti di bawah ini, itu berarti database pada sistem tidak tersambung, pastikan internet terkoneksi dengan baik</p>

                                <img src="<?= base_url('assets/docs/images/tampilan2.png') ?>" alt="" class="img-responsive img-thumbnail">

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line2" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Membuat akun baru</h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <p>Untuk dapat menggunakan aplikasi ini anda di minta untuk membuat akun terlebih dahulu untuk dapat masuk ke sistem. <br> Perhatikan langkah - langkah dalam membuat akun baru di bawah ini</p>

                        <p>1. langkah pertama klik link registrasi di bawah tombol submit</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <p>2. Langkah pertama isikan data - data yang ada pada form sesuai dengan unit masing - masing</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <p>3. Langkah pertama isikan data - data yang ada pada form sesuai dengan unit masing - masing</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <p>4. Pada pilihan Unit silahkan pilih unit anda sesuai dengan tempat anda bekerja, kemudian tekan submit</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <p>5. Pada tahap ini akun anda sudah berhasil di buat, namun jika terdapat pesan error tercetak merah maka akun anda gagal di buat</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <div class="intro2 clearfix intro1">
                            <p><i class="fa fa-exclamation-triangle"></i> Setelah membuat akun mohon untuk menghubungi tim data center untuk mengaktifkan akun anda, berikan username dan unit tempat anda bekerja.
                            </p>
                        </div>


                    </section>
                    <!-- end section -->

                    <section id="line3" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Masuk ke dalam sistem</h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <p>setelah anda membuat akun dan berhasil di aktifkan oleh tim data center, sekaran anda sudah dapat menggunakan aplikasi tersebut, sebelumnya anda di minta untuk login kedalam aplikasi terlebih dahulu</p>

                        <p>Isikan username dan password yang sudah anda buat, perhatikan penggunaan angka huruf besar dan huruf kecil, karna sangat berpengaruh pada saat login aplikasi</p>
                        <img src="<?= base_url('assets/docs/images/upload/thumbnail.png') ?>" alt="" class="img-responsive img-thumbnail">

                        <p>Setelah anda berhasil masuk, anda akan di arahkan ke sebuah dashboar aplikasi sesuai dengan unit masing - masing</p>

                        <div class="intro2 clearfix intro1">
                            <p><i class="fa fa-exclamation-triangle"></i> Jika terdapat pesan error dan tidak dapat masuk kedalam sistem, pastikan anda membaca pesan error terlebih dahulu, dan jika masih belum mengerti silahkan hubungi tim data center.
                            </p>
                        </div>

                    </section>
                    <!-- end section -->

                    <section id="line7" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Use Option Panel
                                    <hr>
                                </h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_1">General Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_2">Style Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_3">Header Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_4">Font Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_5">Slider Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_6">Page Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_7">Import & Export Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. long
                                    established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line8" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Support Desk
                                    <hr>
                                </h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <p>Please remember you have purchased a very affordable theme and you have not paid for
                                    a full-time web design agency. Occasionally we will help with small tweaks, but
                                    these requests will be put on a lower priority due to their nature. Support is also
                                    100% optional and we provide it for your connivence, so please be patient, polite
                                    and respectful.</p>

                                <p>Please visit our <a href="http://themeforest.net/user/yourusername"><strong>profile
                                            page</strong></a> or ask question <a href="mailto:yourusername@gmail.com">@yourusername</a></p>

                                <strong>Support for my items includes:</strong>
                                <ul>
                                    <li>* Responding to questions or problems regarding the item and its features</li>
                                    <li>* Fixing bugs and reported issues</li>
                                    <li>* Providing updates to ensure compatibility with new software versions</li>
                                </ul>
                                <strong>Item support does not include:</strong>
                                <ul>
                                    <li>* Customization and installation services</li>
                                    <li>* Support for third party software and plug-ins</li>
                                </ul>

                            </div>

                            <div class="col-md-6">
                                <strong>Before seeking support, please...</strong>
                                <ul>
                                    <li>* Make sure your question is a valid Theme Issue and not a customization
                                        request.</li>
                                    <li>* Make sure you have read through the documentation and any related video guides
                                        before asking support on how to accomplish a task.</li>
                                    <li>* Make sure to double check the theme FAQs.</li>
                                    <li>* Try disabling any active plugins to make sure there isn't a conflict with a
                                        plugin. And if there is this way you can let us know.</li>
                                    <li>* If you have customized your theme and now have an issue, back-track to make
                                        sure you didn't make a mistake. If you have made changes and can't find the
                                        issue, please provide us with your changelog.</li>
                                    <li>* Almost 80% of the time we find that the solution to people's issues can be
                                        solved with a simple "Google Search". You might want to try that before seeking
                                        support. You might be able to fix the issue yourself much quicker than we can
                                        respond to your request.</li>
                                    <li>* Make sure to state the name of the theme you are having issues with when
                                        requesting support via ThemeForest.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line9" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Files & Sources
                                    <hr>
                                </h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Included Stylesheets</strong>

                                <p>These are the primary CSS files used for general front-end styling. Use these to
                                    customize your theme even further. All included JavaScript codes under
                                    <strong>yourthemename/css/</strong>
                                </p>

                                <ul>
                                    <li>1. style.css - Primary stylesheet</li>
                                    <li>2. bootstrap.css - Bootstrap stylesheet</li>
                                    <li>3. owl-carousel.css - OWL Carousel</li>
                                    <li>4. fontawesome.css - FontAwesome Font Icons stylesheet</li>
                                    <li>5. custom.css - Pathos Color Schemes stylesheet</li>
                                    <li>6. prettyPhoto.css - Lightbox effect css file</li>
                                    <li>7. flexslider.css - Flexslider css file</li>
                                    <li>8. et-line.css - Elegant icons css file</li>
                                    <li>9. carousel.css - OWL Carousel css file</li>
                                    <li>10. animate.css - CSS3 animations css file</li>
                                </ul>

                            </div>

                            <div class="col-md-6">
                                <strong>Included JavaScript</strong>

                                <p>These are the various attribution inks to the Javascript files included or modified
                                    to work with in this theme. All included JavaScript codes under
                                    <strong>yourthemename/js/</strong>
                                </p>

                                <ul>
                                    <li>1. bootstrap.js - Bootstrap JavaScript</li>
                                    <li>2. custom.js - All JavaScript Plugins</li>
                                    <li>3. retina.js - Retina JavaScript</li>
                                    <li>4. jquery.js - Base JavaScript</li>
                                    <li>5. prettyPhoto.js - Lightbox JavaScript</li>
                                    <li>6. owl-carousel.js - Lightbox JavaScript</li>
                                    <li>7. revslider.js - Revolution Slider JavaScript</li>
                                    <li>8. flexslider.js - Flexslider JavaScript</li>
                                    <li>9. awesome-grid.nin.js - Awesome grid portfolio JavaScript</li>
                                    <li>10. circle.js - Coming soon page JavaScript</li>
                                    <li>11. contact.js - Contact form validate JavaScript</li>
                                    <li>12. isotope.js - Masonry Portfolio JavaScript</li>
                                    <li>13. progress.js - Progress bar JavaScript</li>
                                    <li>14. rotate.js - Text rotate effect JavaScript</li>
                                    <li>15. wow.js - CSS3 animation JavaScript</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line10" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Version History (Changelog)
                                    <hr>
                                </h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">

                                <p>You can find the version history (changelog.txt) file on
                                    <strong>yourthemename-full.zip</strong> folder or you can check changelog on theme
                                    sale page.
                                </p>
                                <p>Once again, thank you so much for purchasing this theme. As I said at the beginning,
                                    I'd be glad to help you if you have any questions relating to this theme. No
                                    guarantees, but I'll do my best to assist. If you have a more general question
                                    relating to the themes on ThemeForest, you might consider visiting the forums and
                                    asking your question in the "Item Discussion" section.</p>

                                <hr>

                                <h4>Changelog</h4>

                                <pre class="brush: html">

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.4 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------

                                        - new revolution slider plugin version
                                        - fixed security issue with xss vulnerability
                                        - improved demo importer for certain server environments
                                        - updated WooCommerce template files for the outdated message in system status
                                        - added suhosin check in system status 
                                        - added information that explains ZipArchive is required on your server for importing demos 
                                        - portfolio Grid template improvement
                                        - added more information to demo popup message for individual demo requirements
                                        - RTL style improvements
                                        - breadcrumb function improved for various areas

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.3 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------
                                        - fixed responsive / retina issue for larger logos
                                        - fusion slider now uses responsive headings all the time
                                        - dropped custom Avada styles for select boxes in IE since it is not supported
                                        - fixed compatibility issue with Category Order and Taxonomy Terms Order plugin
                                        - fixed issue of full width background being affected by padding options
                                        - tested and fixed hellobar issue 
                                        - typography settings now apply to single post pages
                                        - improved smooth scroll in certain situations
                                        - youtube & vimeo videos will show at normal size in light box as long as video embed link is not used
                                        - fixed issue of â€œfixedâ€ featured image mode not working for carousels / recent work
                                        - fixed issue of header tagline font not working with font options

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.2 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------
                                        - fixed formatting issues with Turkish language files 
                                        - letter spacing menu option improvement
                                        - improved fusion slider max content width setting
                                        - removed the â€œdisable first featured image on productsâ€ setting since it does not apply
                                        - improved portfolio featured image loading
                                        - removed encoding from tracking code, space before head, space before body, and custom CSS to stop it from parsing code within TO and removing special characters e.g. +
                                        - woo login box now shows login fields for logged out users
                                        - woo cart / my account links now show on mobile 
                                        - fixed button styling issue with gravity forms


                                      </pre>

                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line11" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Copyright and license
                                    <hr>
                                </h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">

                                <p>Code released under the <a href="#" target="_blank">Un License</a> License.</p>
                                <p>For more information about copyright and license check <a href="https://choosealicense.com/" target="_blank">choosealicense.com</a>.</p>

                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="<?= base_url('assets/docs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/retina.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/jquery.fitvids.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/wow.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/jquery.prettyPhoto.js') ?>"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="<?= base_url('assets/docs/js/custom.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/main.js') ?>"></script>

    <script src="<?= base_url('assets/docs/js/syntax-highlighter/scripts/shCore.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/syntax-highlighter/scripts/shBrushXml.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/syntax-highlighter/scripts/shBrushCss.js') ?>"></script>
    <script src="<?= base_url('assets/docs/js/syntax-highlighter/scripts/shBrushJScript.js') ?>"></script>

</body>

</html>