<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="basicProjectLayout">
    <a href="../projects">Return to projects directory</a>
    <hr />
    <h3>BirdAndB.com</h3>

    <h4>OverView</h4>
    <p>BirdAndB.com is a website I built alongside the Graphic Designer Jamie Chapman, made to help aid young adults in learning about psyiology and psychology of life in relation to sex and sexuality.</p>
    <h4>External Links</h4>
    <a href="http://www.birdandb.com/" target="_blank"><b>Click Here to Visit birdandb.com</b></a>
    <br />
    <a href="https://github.com/davidfitz314/BirdandB" target="_blank">Click Here to View Site Code Repository</a>

    <h4>Images</h4>

    <div class="slideshowImgs">
      <img src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG" class="eachSlide">
      <img src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG" class="eachSlide">
      <img src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG" class="eachSlide">
      <img src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG" class="eachSlide">
      <img src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG" class="eachSlide">
      <img src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG" class="eachSlide">
    </div>

    <div class="imgButtons">
      <img onclick="currentDiv(1)" src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG">
      <img onclick="currentDiv(2)" src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG">
      <img onclick="currentDiv(3)" src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG">
      <img onclick="currentDiv(4)" src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG">
      <img onclick="currentDiv(5)" src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG">
      <img onclick="currentDiv(6)" src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>



    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
