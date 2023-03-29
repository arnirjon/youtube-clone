<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>



    <?php include('include/navbar.php'); ?>
    <br><br>
<?php
  include('connect.php');


  if(isset($_GET['search'])) { //1st
    $search = $_GET['search'];
    $nosearch  = 0;

    $search_sql = "SELECT * FROM youtubedata WHERE title LIKE '%$search%'";
    $search_query = mysqli_query($con, $search_sql);

    if(mysqli_num_rows($search_query) > 0) { //2nd


      // Create table head
      echo "
      <div class='container'>

      ";

      // Data loop
      while($data = mysqli_fetch_assoc($search_query)) { //4th

        $id = $data['id'];
        $title = $data['title'];
        $thubnail = $data['thubnail'];
        $channel_name = $data['channel_name'];

        if(!empty($search)) { //if data will be exist than work this section and print search data
          echo "
            

          <a href='play.php?id=$id'>
            <div class='sideHold' style='height: 186px;'>
              <div class='sideChannel'>
                <img src='$thubnail' style='width: 300px;'>
              </div>
              <div class='sideTitle' style='padding-left: 312px;'>
                <h4>$title</h4>
                <p class='sideVideotitle'>$channel_name</p>
              </div>
            </div>
          </a>






          ";
        }

      }//4th // Data loop

      echo "</div>"; // End table head     

    } //2nd

    else { //3rd
      echo "
      <div class='container'>
        <div style='position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);'>
          <img src='img/noresult.png' class='img-fluid'>
          <div style='text-align: center; padding: 30px;'>
            <h4>No results found</h4>
            <p>Try different keywords or remove search filters</p>
          </div>
        </div>
      </div>
      ";
    } //3rd

  } //1st
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>