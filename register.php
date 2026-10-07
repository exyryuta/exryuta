<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Yuk!</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">
            ClassX
        </a>
 
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarClassX">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarClassX">
            <ul class="navbar-nav ms-auto">

                <!-- <li class="nav-item">
                    <a class="nav-link active" href="register.php">
                        Register
                    </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="tugas.php">Tugas</a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="absensi.php">Absensi</a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="pengumuman.php">
                        Pengumuman
                    </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        Profile
                    </a>
                </li> -->

                <li class="nav-item">
                    <a class="btn btn-light ms-lg-2" href="index.php">
                        Login
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


    <main>
        <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">

            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="text-center mb-4">Login ClassX</h2>

                    <form action="proses_regis.php" method="POST">

                        <div class="mb-3">
                            <label for="username" class="form-label">
                                Username
                            </label>
                            <input type="text" id="username"
                                   name="username"
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password
                            </label>
                            <input type="password" id="password"
                                   name="password"
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email" id="email"
                                   name="email"
                                   class="form-control" required>
                        </div>

                         <!-- <div class="mb-3">
                            <label for="kelas" class="form-label">
                                Kelas
                            </label>
                            <input type="text" id="kelas"
                                   name="kelas"
                                   class="form-control" required>
                        </div> -->

                        <button type="submit"
                                class="btn btn-primary w-100" name="regis">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </main>
</body>
</html>