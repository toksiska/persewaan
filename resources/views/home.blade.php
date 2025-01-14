<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Cicak Adventure</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Penyewaan Cicak Adventure</h1>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#rentals">Penyewaan</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="text-center py-5">
        <div class="container">
            <h2>Petualangan Menanti Anda!</h2>
            <p>Temukan pengalaman petualangan terbaik di sini. Harga sewa terjangkau dan aman dikantong</p>
        </div>
    </section>

    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami menyediakan berbagai jenis penyewaan untuk petualangan Anda, mulai dari peralatan hiking hingga peralatan camping. yukk kepoin kami</p>
        </div>
    </section>

    <section id="rentals" class="py-5">
        <div class="container">
            <h2>Penyewaan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tenda17.jpg" class="card-img-top" alt="Tenda Camping">
                        <div class="card-body">
                            <h5 class="card-title">Tenda Capacity 17 org </h5>
                            <button class="btn btn-success" onclick="book('tenda capacity 12 org')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tenda12 2layer.jpg" class="card-img-top" alt="Tenda Camping">
                        <div class="card-body">
                            <h5 class="card-title">Tenda Capacity 12 org</h5>
                            <button class="btn btn-success" onclick="book('Tenda Camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tenda6 2layer.jpg" class="card-img-top" alt="Tenda camping">
                        <div class="card-body">
                            <h5 class="card-title">Tenda Capacity 6 org</h5>
                            <button class="btn btn-success" onclick="book('Tenda camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tenda4.jpg" class="card-img-top" alt="Tenda camping">
                        <div class="card-body">
                            <h5 class="card-title">Tenda Capacity 4 org</h5>
                            <button class="btn btn-success" onclick="book('Tenda camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tenda2.jpg" class="card-img-top" alt="Tenda camping">
                        <div class="card-body">
                            <h5 class="card-title">Tenda Capacity 2 org</h5>
                            <button class="btn btn-success" onclick="book('Tenda camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/carier30.jpg" class="card-img-top" alt="tas camping">
                        <div class="card-body">
                            <h5 class="card-title">Tas Carrier 30 liter</h5>
                            <button class="btn btn-success" onclick="book('tas camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/carier40.jpg" class="card-img-top" alt="tas camping">
                        <div class="card-body">
                            <h5 class="card-title">Tas Carrier 40 liter</h5>
                            <button class="btn btn-success" onclick="book('tas camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/carier60.jpg" class="card-img-top" alt="tas camping">
                        <div class="card-body">
                            <h5 class="card-title">Tas Carrier 60 liter</h5>
                            <button class="btn btn-success" onclick="book('tas camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/carier80.jpg" class="card-img-top" alt="tas camping">
                        <div class="card-body">
                            <h5 class="card-title">Tas Carrier 80 liter</h5>
                            <button class="btn btn-success" onclick="book('tas camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/cookingset.jpg" class="card-img-top" alt="cookingset">
                        <div class="card-body">
                            <h5 class="card-title">Cooking Set </h5>
                            <button class="btn btn-success" onclick="book('cookingset')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/flyset.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Flyset</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/grilpanbulat.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Grill Pan Bulat </h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/grilpankotak.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Grill Pan Kotak</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/hammock.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Hammock</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/headlamp.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">HeadLamp</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/hidropack.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Hidropack</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/komporbox.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Kompor Box</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/komporkotak.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Kompor Kotak</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/kursilipatalloy.jpg" class="card-img-top" alt="kursi camping">
                        <div class="card-body">
                            <h5 class="card-title">Kursi Lipat Alloy</h5>
                            <button class="btn btn-success" onclick="book('kursi camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/kursilipatsped.jpg" class="card-img-top" alt="kursi camping">
                        <div class="card-body">
                            <h5 class="card-title">Kursi Lipat Speed</h5>
                            <button class="btn btn-success" onclick="book('kursi camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/lamputenda.jpg" class="card-img-top" alt="lampu tenda">
                        <div class="card-body">
                            <h5 class="card-title">Lampu Tenda</h5>
                            <button class="btn btn-success" onclick="book('lampu tenda')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/matras.jpg" class="card-img-top" alt="matras camping">
                        <div class="card-body">
                            <h5 class="card-title">Matras Camping</h5>
                            <button class="btn btn-success" onclick="book('matras camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/mejalipatalloy.jpg" class="card-img-top" alt="meja lipat">
                        <div class="card-body">
                            <h5 class="card-title">Meja Lipat Alloy</h5>
                            <button class="btn btn-success" onclick="book('meja lipat')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/mejalipatcordura.jpg" class="card-img-top" alt="meja lipat">
                        <div class="card-body">
                            <h5 class="card-title">Meja Lipat Cordura</h5>
                            <button class="btn btn-success" onclick="book('meja lipat')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/senterswat.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Senter Swatt</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/slepingbag.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Sleeping Bag </h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tiangflyset.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Tiang Flysheet</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/trekkingpole.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Trackhing Pole</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tripodlegacy.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Tripod Legacy</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tripotocta.jpg" class="card-img-top" alt="peralatan camping">
                        <div class="card-body">
                            <h5 class="card-title">Tripod Octa</h5>
                            <button class="btn btn-success" onclick="book('peralatan camping')">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Email: cicakadventure.com</p>
            <p>Telepon: 0812-3456-7890</p>
        </div>
    </section>

    <footer class="bg-success text-white text-center py-3">
        <p>&copy; 2025 Penyewaan Cicak Adventure. Semua hak dilindungi.</p>
    </footer