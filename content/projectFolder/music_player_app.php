<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      Music Player App
    </h1>
  </div>


  <div class="basicProjectLayout">
    <div class="singleProjLeft">
    <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/MusicPlayerAppImg/main_screen1.png" class="eachSlide">
        <img src="/content/images/MusicPlayerAppImg/main_screen2.png" class="eachSlide">
        <img src="/content/images/MusicPlayerAppImg/player_screen.png" class="eachSlide">
        <img src="/content/images/MusicPlayerAppImg/player_screen_notification.png" class="eachSlide">
        <img src="/content/images/MusicPlayerAppImg/notification_bar.png" class="eachSlide">
        <img src="/content/images/MusicPlayerAppImg/small_screen_player.png" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>Grathers songs on phone into one location, allows user to click on song to select it for playing. Also allows user to sort songs into alphabetical order by pressing the sort button.
      </p>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/Music-Player-App" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/MusicPlayerAppImg/main_screen1.png">
      <img onclick="currentSlide(2)" src="/content/images/MusicPlayerAppImg/main_screen2.png">
      <img onclick="currentSlide(3)" src="/content/images/MusicPlayerAppImg/player_screen.png">
      <img onclick="currentSlide(4)" src="/content/images/MusicPlayerAppImg/player_screen_notification.png">
      <img onclick="currentSlide(5)" src="/content/images/MusicPlayerAppImg/notification_bar.png">
      <img onclick="currentSlide(6)" src="/content/images/MusicPlayerAppImg/small_screen_player.png">
    </div>

    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href=""><img src="/content/images/arrowleft.png" alt="Left Arrow"> No More Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/birdandb">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
