<?php
    // Definisikan variabel dinamis
    $judul_section = "☆*:.｡Bibble Bake｡.:*☆";
    $subjudul_section = "\"The Artisan Doughnut\" that gonna make you fall in love at first bite ♡";
    $deskripsi_section = "Bibble Bake is a popular café and bakery located in Yogyakarta, Indonesia. Known for its cozy ambiance and unique offerings, Bibble Bake specializes in a variety of baked goods, such as pastries, cakes, and bread. They also serve a selection of coffee and drinks, making it a great spot for a casual hangout or a relaxing break.\n\nWhat sets Bibble Bake apart is its artistic and modern interior, designed to provide a comfortable space for customers to enjoy their food and beverages. The bakery is often praised for its delicious treats and high-quality ingredients. It's a favorite among locals and tourists alike, offering a combination of Western-style baked goods with a touch of Indonesian influence.";
    $gambar_section = "donat2.jpg";
    $teks_tombol = "Click down below to order!";
    $tombol_label = "Here!";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main-section {
            padding: 60px 0;
            text-align: center;
        }
        .main-section img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <section class="main-section">
        <div class="container">
            <h1 style="color: pink; margin: 50px;" class="display-4"> <?php echo $judul_section; ?> </h1>
            <h2 style="color: gray; margin: 50px;"> <?php echo $subjudul_section; ?> </h2>
            <p style="background-color: papayawhip; margin: 16px; padding: 20px"> <?php echo nl2br($deskripsi_section); ?> </p>
            <img src="<?php echo $gambar_section; ?>" alt="Gambar Donat">
            <p id="textElement" style="margin: 20px; font-size: 20px;"> <?php echo $teks_tombol; ?> </p>
            <button id="changeTextButton" class="btn btn-primary"> <?php echo $tombol_label; ?> </button>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript untuk mengubah teks saat tombol ditekan
        document.getElementById('changeTextButton').addEventListener('click', function() {
            document.getElementById('textElement').innerText = 'Thank you for your order!';
        });
    </script>
</body>
</html>