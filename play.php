<?php
  include('connect.php');

  $sql_youtubeData = "SELECT * FROM youtubedata";
  $query_youtubeData = mysqli_query($con, $sql_youtubeData);

  $data = mysqli_fetch_all($query_youtubeData, MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play Youtube video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php include('include/navbar.php'); ?>

    <div class="container-fluid">
      <div style="padding: 30px;">
        <div class="row">
          <?php foreach ($data as $row): ?>
          <div class="col-sm-9">
            <div class="video-container">
              <iframe src="<?php echo $row['video_link']; ?>" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="section">
                    <h5 class="playVideotitle"><?php echo $row['title']; ?></h5>
                  <div class="">
                    <div class='channel'>
                      <img src="<?php echo $row['channel_logo']; ?>" class="img-fluid" id="channel_icon">
                    </div>
                    <div class='title'>
                      <h6 class="channelName" title="Bachelor Point | Season 4 | EPISODE 77 | Kajal Arefin Ome | Dhruba Tv Drama Serial">SET India</h6>
                      <p class="subscriberCount">125M subscriber</p>
                    </div>
                    <div class='subscribe'>
                      <button class="subscribeButton">Subscribe</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Like share and other option -->
              </div>
            </div>
            <div class="description">
              <div class="description">
                <div class="short-text" id="truncate">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="long-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <button class="show-more">Show More</button>
                <button class="show-less">Show Less</button>
              </div>
            </div>
            <div class="comment my-3">
              <p>24 Comments</p>
              <div class="row">
                <div class="col-2" style="width: 64px;">
                  <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector.png" class="img-fluid" id="commentLogo">
                </div>
                <div class="col-10">
                  <input type="text" name="comment" class="comment_input" placeholder="Add Comment">
                </div>
              </div>
            </div>

            <br>
            <div class="commentRead">
              <div class="user-info">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="User Image">
                <div class="user-details">
                  <h6>John Doe <span class="commentDate">12 days ago</span></h6>
                </div>
              </div>
              <p class="commentTxt">This is the comment</p>
            </div>
            <div class="commentRead">
              <div class="user-info">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="User Image">
                <div class="user-details">
                  <h6>John Doe <span class="commentDate">12 days ago</span></h6>
                </div>
              </div>
              <p class="commentTxt">Laughter Punch With An Action Hero Team</p>
            </div>

            <?php break; endforeach; ?>


          </div>

          <div class="col-sm-3">
            <?php foreach ($data as $row): ?>
            <div class="sideHold">
              <div class="sideChannel">
                <img src="<?php echo $row['thubnail']; ?>" style="width: 166px;">
              </div>
              <div class="sideTitle">
                <h6><?php echo $row['title']; ?></h6>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript">
  var showMore = document.querySelector('.show-more');
var showLess = document.querySelector('.show-less');
var shortText = document.querySelector('.short-text');
var longText = document.querySelector('.long-text');

showMore.addEventListener('click', function() {
  longText.style.display = 'block';
  shortText.style.display = 'none';
  showMore.style.display = 'none';
  showLess.style.display = 'inline-block';
});

showLess.addEventListener('click', function() {
  longText.style.display = 'none';
  shortText.style.display = 'block';
  showLess.style.display = 'none';
  showMore.style.display = 'inline-block';
});


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>