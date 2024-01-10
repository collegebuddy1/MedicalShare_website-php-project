<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ShopStyle.css">
    <title>Shop</title>
</head>

<body>

    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");

    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main>
        <div class='container'>
            <div class='box'>
                <img src='$row[image]'>
                <h2>$row[name]</h2>
                <p>$row[description]</p>
                <span>$$row[price]</span>
                <div class='rate'>
                    <i class='filled fas fa-star'></i>
                    <i class='filled fas fa-star'></i>
                    <i class='filled fas fa-star'></i>
                    <i class='filled fas fa-star'></i>
                    <i class='fa-regular fa-star'></i>
                </div>
                <div class='options'>
                    <a href='#'>Buy It Now</a>
                    <a href='#'>Add to Cart</a>
                </div>
            </div>
        </div>
        </main>
        </center>
        ";
    }


    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>