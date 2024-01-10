<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="sellstyle.css">
    <title>بيع</title>
</head>

<body>
    <div class="cont">
        <div class="header">
            <h5>اختر الفئه</h5>
        </div>
        <div class="label">
            <h5>تأكيد بعض التفاصيل</h5>
        </div>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label label">اسم الاعلان</label>
                <input type="text" class="form-control txt" id="exampleInputEmail1" name="pname" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text txt">اذكر أهم مميزات منتجك (مثل العلامة التجارية، الطراز، العمر
                    والنوع)</div>
            </div>
            <label for="exampleInputEmail1s" class="form-label label">النوع</label>
            <br>
            <select class="form-control txt">
                <option>Default select</option>
                <option>Default select</option>
                <option>Default select</option>
            </select>
            <br>
            <label for="exampleInputEmail1" class="form-label label">الحاله</label>
            <br>
            <div class="form-check form-check-inline r">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">جديد</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">مستعمل</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label label">الوصف</label>
                <textarea class="form-control txt" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            <label for="exampleFormControlTextarea1" class="form-label label">السعر</label>
            <input type="text" class="form-control txt" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">
            <label for="exampleFormControlTextarea1" class="form-label label">قم بتحميل الصور</label>
            <div class="mb-3">
                <input class="form-control txt" type="file" name="image" id="formFileMultiple" multiple>
            </div>
            <br>
            <hr>
            <h5 class="label">راجع التفاصيل الخاصة بك</h5>
            <label for="exampleFormControlTextarea1" class="form-label label">الاسم</label>
            <input type="text" class="form-control txt" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleFormControlTextarea1" class="form-label label">رقم الهاتف المحمول </label>
            <input type="tel" class="form-control txt" id="exampleInputEmail1" aria-describedby="emailHelp">
            <br>
            <hr>
            <div class="col-12">
                <button type="submit" name="pub" class="btn btn-primary btnn">انشر اعلانك </button>
            </div>
            <a href="shop.php" style="text-decoration: none; font-size: 25px; color: #00b57f;">المنتجات</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>