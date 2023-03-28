<?php
  include('connect.php');


  $sql_youtubeData = "SELECT * FROM youtubedata ORDER BY id desc";
  $query_youtubeData = mysqli_query($con, $sql_youtubeData);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Youtube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div id="popup-box">
      <img src="notice.png" class="img-fluid">
      <p class="popup-text">You can upload video top of the navbar click upload button and fill the input box and upload your video</p>
      <p class="popup-text" style="font-size: 30px;">Thak You!!!</p>
      <button class="btn btn-dark" id="close-button">Close</button>
    </div>



    <?php include('include/navbar.php'); ?>
  
    <div class="container my-5">
      <div class="row">
        <?php
          while($data = mysqli_fetch_array($query_youtubeData)) {
            $id = $data['id'];
            $title = $data['title'];
            $thubnail = $data['thubnail'];
            $channel_name = $data['channel_name'];
            $channel_logo = $data['channel_logo'];
        ?>
        <div class="col-sm-3">
          <div class="hold">
            <a href="play.php?id=<?php echo $id ?>">
              <img src="<?php echo $thubnail ?>" class="img-fluid" id="thumbnail">
              <div>
               <div class='channel'>
                 <img src="<?php echo $channel_logo ?>" class="img-fluid" id="channel_icon">
               </div>
               <div class='title'>
                 <h6 title="<?php echo $title ?>"><?php echo $title ?></h6>
               </div>
              </div>
            </a>
          </div>
        </div>
      <?php }?>
      </div>
    </div>

    <script type="text/javascript">
      window.onload = function() {
        if (localStorage.getItem("popupShown") !== "true") {
          document.getElementById("popup-box").style.display = "block";
          localStorage.setItem("popupShown", "true");
        }
      };

      document.getElementById("close-button").onclick = function() {
        document.getElementById("popup-box").style.display = "none";
      };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>