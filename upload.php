<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
          <input type="text" class="form-control" name="description" placeholder="Description">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="video" placeholder="Video Link">
          <div id="emailHelp" class="form-text">From youtube video and click share button to emmbed code and src code link paste here</div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="channelName" placeholder="Channel Name">
          <div id="emailHelp" class="form-text">There is no signup option thats why you need to type your channel name</div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="channellogo" placeholder="Channel Logo">
          <div id="emailHelp" class="form-text">There is no signup option thats why you need to upload your channel logo</div>
        </div>
        <button class="btn btn-dark" class="videoupload">Upload</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>