<?php include('headerr.php');?>
<?php include('navfooter.php');?>

<!-- offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Give your Workout <br> A New Style!</h1>
                    <p>Success is not always about greatness. It is about consistency.
                        Consistent <br> hard work gains success. Greatness will come
                    </p>
                    <a href="" class="btn">Buy Now &#8594;</a>
                    <a href="" class="btn">Donate Now &#8594;</a>
            </div>
            <div class="col-2  ass">
                     <img src="images/image1.png">
            </div>
        </div>
    </div>
  </div>

  <!-- ---------testimonial ------ -->
  <div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/medicine1.png" alt="">
                <h3>Capsules</h3>
            </div>
            <div class="col-5">
                <img src="images/medicine2.png" alt="">
                <h3>Liquid</h3>
        </div>
            <div class="col-5">
            <img src="images/medicine3.png" alt="">
            <h3>Injections</h3>
         </div>
            <div class="col-5">
            <img src="images/medicine4.png" alt="">
            <h3>Medical</h3>
         </div>
            <div class="col-5">
        <img src="images/medicine4.png" alt="">
        <h3>Medical</h3>
            </div>
        </div>
    </div>
  </div>


  <!-- -----------brands---------- -->
  <div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/prand1.png">
            </div>
            <div class="col-5">
                <img src="images/prand2.png">
            </div>
            <div class="col-5">
                <img src="images/prand3.png">
            </div>
            <div class="col-5">
                <img src="images/prand4.png">
            </div>
            <div class="col-5">
                <img src="images/prand5.png">
            </div>
        </div>
    </div>
  </div>
  <?php
include('footer.php');
?>

    <!-- js for toggle menu -->
    <script>
        var menuItems = document.getElementById("menuItems");
        function dropdown(){
        if(menuItems.style.maxHeight == "0px")
        {
            menuItems.style.maxHeight = "200px";
        }
        else
        {
            menuItems.style.maxHeight = "0px";
        }
    }
    </script>
</body>
</html>