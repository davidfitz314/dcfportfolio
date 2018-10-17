<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="basicProjectLayout">
    <a href="../projects">Return to projects directory</a>
    <hr />
    <h3>BirdAndB.com</h3>

    <h4>OverView</h4>
    <p>BirdAndB.com is a website I built alongside the Graphic Designer Jamie Chapman, made to help aid young adults in learning about psyiology and psychology of life in relation to a developing sexuality awareness.</p>
    <h4>External Links</h4>
    <a href="http://www.birdandb.com/" target="_blank"><b>Click Here to Visit birdandb.com</b></a>
    <br />
    <a href="https://github.com/davidfitz314/BirdandB" target="_blank">Click Here to View Site Code Repository</a>

    <h4>Images</h4>

    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG" onclick="openSlideShow();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG" onclick="openSlideShow();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG" onclick="openSlideShow();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG" onclick="openSlideShow();currentSlide(4)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG" onclick="openSlideShow();currentSlide(5)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG" onclick="openSlideShow();currentSlide(6)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeSlideShow()">&times;</span>
      <div class="slideshow-content">

        <div class="eachSlides">
          <div class="numbertext">1 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">2 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">3 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">5 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 6</div>
          <img src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG" style="width:100%">
        </div>

        <!-- back/forward controls -->
        <a class="back" onclick="changeSlides(-1)">&#10094;</a>
        <a class="forward" onclick="changeSlides(1)">&#10095;</a>

        <!-- Caption/alt text -->
        <div class="alt-container">
          <p id="caption_alt"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbindexpagescreenshot.JPG" onclick="currentSlide(1)" alt="Keyboard">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbchap11screenshot.JPG" onclick="currentSlide(2)" alt="Keyboard Pressed">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbchap11chinasegmentscreenshot.JPG" onclick="currentSlide(3)" alt="Encrypted">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbchap4screenshot.JPG" onclick="currentSlide(4)" alt="Decrypted">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbchap4tooltipscreenshot.JPG" onclick="currentSlide(5)" alt="Decrypted">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Birdandb_Images/birdandbchap14workscitedscreenshot.JPG" onclick="currentSlide(6)" alt="Decrypted">
        </div>
      </div>
    </div>

    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>



    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
