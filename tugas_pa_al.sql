Soal:
1. SQL untuk menampilkan dan memaksukkan tabel murid 
2. Tampilkan data dari data diatas yg jurusan rpl
3. Tampilkan data2 diatas yg ada di dlm kelas xi 
4. Tampilkan data jurusan rpl
Jawaban:
1. SELECT * FROM tabelakuwh , INSERT INTO tabelakuwh (id, nama, kelas, jurusan, alamat)
2. SELECT * FROM tabelakuwh WHERE jurusan = 'rpl';
3. SELECT * FROM tabelakuwh WHERE kelas = 'xi';
4. SELECT jurusan FROM tabelakuwh WHERE jurusan = 'rpl';

<main class="container py-4">

    <!-- Judul halaman -->
    <div class="mb-4">
        <h1 class="fw-bold">Dashboard Guru</h1>
        <p class="text-secondary">
            Selamat datang di ClassX.
        </p>
    </div>


    <!-- Statistik -->
    <div class="row g-4 mb-4">

        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <p class="text-secondary mb-1">Total Tugas</p>
                    <h2 class="fw-bold">12</h2>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <p class="text-secondary mb-1">Total Siswa</p>
                    <h2 class="fw-bold">32</h2>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <p class="text-secondary mb-1">Tugas Belum Dinilai</p>
                    <h2 class="fw-bold">5</h2>
                </div>
            </div>
        </div>

    </div>


    <!-- Tugas terbaru -->
    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="fw-bold mb-0">
                    Tugas Terbaru
                </h4>

                <a href="tugas.php" class="btn btn-primary btn-sm">
                    Lihat Semua
                </a>

            </div>


            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Tugas PHP</td>

                            <td>
                                10 Oktober 2026
                            </td>

                            <td>
                                <span class="badge text-bg-warning">
                                    Belum Dinilai
                                </span>
                            </td>

                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Lihat
                                </a>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>