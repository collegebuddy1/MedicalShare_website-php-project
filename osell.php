<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="sellstyle.css">
    <title>اختر</title>
</head>
<body> 
    <div class="cont">
        <div class="header">
            <h5>اختر الفئه</h5>
        </div>
        <select class="form-control txt padd" onchange="window.location.href=this.value">
            <option>اختر النوع</option>
            <option value="sell.php">حبوب</option>
            <option value="sell.php">شرب</option>
        </select>
        <hr>
        <select class="form-control txt padd" onchange="window.location.href=this.value">
            <option>اختر النوع</option>
            <option value="sell.php">حبوب</option>
            <option value="sell.php">شرب</option>
        </select>
        <hr>
        <select class="form-control txt padd last" onchange="window.location.href=this.value">
            <option>اختر النوع</option>
            <option value="sell.php">حبوب</option>
            <option value="sell.php">شرب</option>
        </select>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"crossorigin="anonymous"></script>
</body>
</html>