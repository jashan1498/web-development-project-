      <?php
      include_once "getLocationInfo.php";


      $ticket = array();


      $ticket[0] = array("from" => "wuhan","where" => "shanghai","ddate" => "1/05/2019","adate" => "2/06/2019","price"=>"$40","duration"=>"13h","meals" => 2,"baggage" =>"30kg","stops"=>3);

      if (isset($_POST["submit"])) {
        if (isset($_POST["from"])) {
          if (isset($_POST["where"])) {

        $fromId =  $_POST["from"];
        $whereId =  $_POST["where"];
        $flight_type = $_POST["flight_type"];
        $ddate =  $_POST["ddate"];
        if ( $flight_type == "one") {
          $adate = "";
        }else {
          $adate =  $_POST["adate"];

        }
        $fromPos =  fetchLocationData($fromId);
        $wherePos =  fetchLocationData($whereId);
        $price = 500;
        $duration = 14;
        $from = reduceLen($fromPos[0]['name']);
        $where = reduceLen($wherePos[0]["name"]);

        $latitudeFrom = $fromPos[0]["latitude"];
        $longitudeFrom = $fromPos[0]['longitude'];
        $latitudeTo = $wherePos[0]['latitude'];
        $longitudeTo = $wherePos[0]['longitude'];

        inflate($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo,$from,$where,$adate,$ddate);
      }
    }
  }
      function inflate($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo,$from,$where,$adate,$ddate){
          $distance = getDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo);
        for ($i = 0 ; $i < 5; $i++) {

          $duration = validateDuration($distance/10000 * 10 + (($i*rand(1,3))*3),5 - $i);
          $price = validatePrice($duration * ((rand($i,2)*rand(1,2)))+150,$i);

          $meals = rand(0,2);
          $baggage = rand(20,46);
          $stops = ceil($duration/2.5);

          $ticket[$i] = array("from" => $from,"where" => $where,"ddate" => $ddate,"adate" => $adate,"price"=>$price,"duration"=>$duration,"meals" => $meals,"baggage" =>$baggage,"stops"=>$stops);
        }
        loaddata($ticket);
      }
      function reduceLen($str){
        if (strlen($str) > 15 ) {
        $str =   split(",",$str)[0];
        }
        return $str;

      }

      function getDistance(  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000){

        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
      }

      function validateDuration($duration,$i){
        if ($i == 0) {
          $i = 1;
        }else{
            $i++;
        }
        if ($duration <= 0) {
          $duration =  $i*$i*rand(0,3);
        }
        else if($duration >= 40){
          $duration = $i * 8 + rand(1,3);
        }
        $duration = ceil($duration)."h";
          return $duration;
      }

      function validatePrice($price,$i){
        if ($i == 0) {
          $i+2;
        }else{
            $i++;
        }
        if ($price <= 100) {
          $price =  $price * $i ;
        }
        else if($price >= 20000){
           $price = $price * .3456;
        }
        $price = "$".ceil($price);
          return $price ;
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web development project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="flight_page_buy/fonts/icomoon/style.css">

  <link rel="stylesheet" href="flight_page_buy/css/bootstrap.min.css">
  <link rel="stylesheet" href="flight_page_buy/css/magnific-popup.css">
  <link rel="stylesheet" href="flight_page_buy/css/jquery-ui.css">
  <link rel="stylesheet" href="flight_page_buy/css/owl.carousel.min.css">
  <link rel="stylesheet" href="flight_page_buy/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="flight_page_buy/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="flight_page_buy/css/mediaelementplayer.css">
  <link rel="stylesheet" href="flight_page_buy/css/animate.css">
  <link rel="stylesheet" href="flight_page_buy/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="flight_page_buy/css/fl-bigmug-line.css">

  <link rel="stylesheet" href="flight_page_buy/css/aos.css">

  <link rel="stylesheet" href="flight_page_buy/css/style.css">

  <style media="screen">

  .higher{
    margin-bottom: 50px;
  }

</style>
</head>
<body>
  <?php function loaddata($ticket){ ?>

  <div class="site-loader"></div>

  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2>Your Flight Results</h2>
          </div>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////// -->



          <div class="row mb-5">

      <?php     for ($i=0; $i < sizeof($ticket) ; $i++) { ?>

        <div class="col-md-6 col-lg-4 mb-4">
          <form class="" action="book_now.php" method="post">


          <a  class="prop-entry d-block">
            <figure>
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">

              <div class="inner " >
              <button type="submit" name="submit"  class="price rounded" value=""> <?php echo $ticket[$i]['price']?></button>
                <div class="higher">
                  <div class="" style="float:left">
                    <h3 class="title">From</h3>

                    <p class="location" name="from" ><?php echo $ticket[$i]['from']; ?></p>
                  </div>
                  <div class="" style="float:right;">
                    <h3 class="title">To</h3>
                    <p class="location" name="where"><?php echo $ticket[$i]['where']; ?> </p>
                  </div>
                </div>
              </div>
              <div class="prop-more-info " style="">
                <div class="inner d-flex" style="display:flex;width:400px;">
                  <div class="col">
                    <span>Duration:</span>
                    <strong><?php echo $ticket[$i]['duration']; ?></strong>
                  </div>
                  <div class="col">
                    <span>Stops:</span>
                    <strong><?php echo $ticket[$i]['stops']; ?></strong>
                  </div>
                  <div class="col">
                    <span>Meals:</span>
                    <strong><?php echo $ticket[$i]['meals'];?></strong>
                  </div>
                  <div class="col">
                    <span>Baggage:</span>
                    <strong><?php echo $ticket[$i]['baggage']; ?></strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <div class="" style="visibility:hidden">
          <input type="hidden" name="from" value="<?php echo $ticket[$i]['from']; ?>"></input>
          <input type="hidden" name="where" value="<?php echo $ticket[$i]['where']; ?>"></input>
          <input type="hidden" name="adate" value="<?php echo $ticket[$i]['adate']; ?>">
          <input type="hidden" name="ddate" value="<?php echo $ticket[$i]['ddate']; ?>">
          <input type="hidden" name="price" value="<?php echo $ticket[$i]['price']; ?>">
          </div>
        </form>

        </div>



    <?php  }  ?>



      </div>



<?php  } ?>


      <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <span>...</span>
            <a href="#">5</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="flight_page_buy/js/jquery-3.3.1.min.js"></script>
  <script src="flight_page_buy/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="flight_page_buy/js/jquery-ui.js"></script>
  <script src="flight_page_buy/js/popper.min.js"></script>
  <script src="flight_page_buy/js/bootstrap.min.js"></script>
  <script src="flight_page_buy/js/owl.carousel.min.js"></script>
  <script src="flight_page_buy/js/mediaelement-and-player.min.js"></script>
  <script src="flight_page_buy/js/jquery.stellar.min.js"></script>
  <script src="flight_page_buy/js/jquery.countdown.min.js"></script>
  <script src="flight_page_buy/js/jquery.magnific-popup.min.js"></script>
  <script src="flight_page_buy/js/bootstrap-datepicker.min.js"></script>
  <script src="flight_page_buy/js/aos.js"></script>
  <script src="flight_page_buy/js/main.js"></script>

</body>
</html>
