<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      BIRDANDB.COM
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <div class="slideshowImgs">
        <img src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG" class="eachSlide">
        <img src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG" class="eachSlide">
        <img src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG" class="eachSlide">
        <img src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG" class="eachSlide">
        <img src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG" class="eachSlide">
        <img src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>BirdAndB.com is a website I built alongside the Graphic Designer Jamie Chapman, made to help aid young adults in learning about psyiology and psychology of life in relation to sex and sexuality.</p>

      <span class="bluePLink">
        <a href="http://www.birdandb.com/" target="_blank">Visit birdandb.com</a>
      </span>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/BirdandB" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG">
      <img onclick="currentSlide(2)" src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG">
      <img onclick="currentSlide(3)" src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG">
      <img onclick="currentSlide(4)" src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG">
      <img onclick="currentSlide(5)" src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG">
      <img onclick="currentSlide(6)" src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href=""><img src="/content/images/arrowleft.png" alt="Left Arrow"> No More Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/music_encrypt_keyboard">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
