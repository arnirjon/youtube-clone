<?php
  include('connect.php');

  $sql_youtubeData = "SELECT * FROM youtubedata";
  $query_youtubeData = mysqli_query($con, $sql_youtubeData);

  if(isset($_POST['videoupload'])) {
    $title = $_POST['title'];
    $thubnail = $_POST['thubnail'];
    $description = $_POST['description'];
    $video_link = $_POST['video_link'];
    $channel_name = $_POST['channel_name'];
    $channel_logo = $_POST['channel_logo'];

    $sql = "INSERT INTO `youtubedata` (`id`, `title`, `thubnail`, `description`, `video_link`, `channel_name`, `channel_logo`) VALUES (NULL, '$title', '$thubnail', '$description', '$video_link', '$channel_name', '$channel_logo');";

    $query = mysqli_query($con, $sql);

    if($query) {
      echo "Video upload successfully";
    }
    else {
      echo $sql;
    }

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
  </head>
  <body>
  
    <div class="container my-5">
      <h3>Upload Video <span><i class="fa-solid fa-circle-question"></i></span></h3><br>
      <form action="" method="POST">
        <div class="mb-3">
          <input type="text" class="form-control" name="title" placeholder="Video Title">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="thubnail" placeholder="Video Thubnail">
          <div id="emailHelp" class="form-text">Thubnail or image link paste here for some limitation i can't use extra folder for images</div>
        </div>
        <div class="mb-3">
          <textarea class="form-control" name="description" rows="6" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="video_link" placeholder="Video Link">
          <div id="emailHelp" class="form-text">From youtube video and click share button to emmbed code and src code link paste here</div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="channel_name" placeholder="Channel Name">
          <div id="emailHelp" class="form-text">There is no signup option thats why you need to type your channel name</div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="channel_logo" placeholder="Channel Logo">
          <div id="emailHelp" class="form-text">There is no signup option thats why you need to upload your channel logo</div>
        </div>
        <button class="btn btn-dark" name="videoupload">Upload</button>
      </form>
    </div>

    <script>
      CKEDITOR.replace( 'description' );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>