<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Frame Layout</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Button -->
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 text-end">
                <a href="{{ url('tugas2') }}" class="btn btn-nav">
                    Go to Tugas 2 →
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- First Frame -->
        <div class="row">
            <div class="col-12">
                <div class="frame frame-first">
                    <h3>Name and Address</h3>
                    <p><strong>Nama:</strong> Muhamad Julian Firdaus</p>
                    <p><strong>Alamat:</strong> Kab. Tangerang</p>
                </div>
            </div>
        </div>

        <!-- Second and Third Frame -->
        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <div class="frame frame-second">
                    <h3>Bulleted list of qualifications</h3>
                    <ul>
                        <li>Sarjana Teknik Informatika, Universitas Indonesia (2018)</li>
                        <li>Sertifikat Web Development - Full Stack (2019)</li>
                        <li>Pengalaman 5 tahun sebagai Software Developer</li>
                        <li>Menguasai PHP, JavaScript, Python, dan MySQL</li>
                        <li>Familiar dengan Framework Laravel dan React</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="frame frame-third">
                    <h3>Links to favourite sites</h3>
                    <ul class="list-unstyled">
                        <li>📌 <a href="https://github.com" target="_blank">GitHub</a> - Repository kode saya</li>
                        <li>📌 <a href="https://stackoverflow.com" target="_blank">Stack Overflow</a> - Forum programmer</li>
                        <li>📌 <a href="https://medium.com" target="_blank">Medium</a> - Artikel teknologi</li>
                        <li>📌 <a href="https://dev.to" target="_blank">Dev.to</a> - Komunitas developer</li>
                        <li>📌 <a href="https://youtube.com" target="_blank">YouTube</a> - Tutorial programming</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fourth, Fifth, and Sixth Frame -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-0">
                <div class="frame frame-fourth">
                    <h3>Scrolling message</h3>
                    <div class="scroll-container">
                        <p class="scrolling-text">
                            🚀 Selamat datang di halaman profil saya! Saya adalah seorang developer yang passionate dalam menciptakan solusi teknologi inovatif. Mari berkolaborasi!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-0">
                <div class="frame frame-fifth">
                    <h3>Blinking reminders</h3>
                    <p class="blink blink-red">⚠️ PENTING!</p>
                    <p>• Meeting dengan klien: Jumat, 10:00 WIB</p>
                    <p>• Deadline project: 15 November 2025</p>
                    <p class="blink blink-blue">📧 Cek email setiap hari!</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="frame frame-sixth">
                    <h3>Image</h3>
                    <div class="profile-image-wrapper mx-auto">
                        <img id="img1" src="{{ asset('thumbnails/kayoko.jpg') }}" alt="Flower 1">
                    </div>
                    <p class="text-center mt-3"><em>Foto Profil</em></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>