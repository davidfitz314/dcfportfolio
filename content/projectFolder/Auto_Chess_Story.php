<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjectLayout">
    <hr />
    <h3>Automated Chess Story</h3>
    <h4>OverView</h4>
    <p>
      C++, Glut 3d, and Windows Visual Studio combined to make a visual representation of the first few moves of chess.
      <br />
      Chess game has been modified to have a more interesting move set and story instead of the standard chess game moves.
    </p>

    <h4>External Links</h4>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/CS3600-Chess/blob/master/README.md" target="_blank">click here</a></p>
    <h4>Images</h4>

    <!-- The slide show  -->
    <!-- Images used to open the slideshow -->
    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/AutoChessImg/AutoChessStory3.JPG" onclick="openSlideShow();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/AutoChessImg/AutoChessStory1.JPG" onclick="openSlideShow();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/AutoChessImg/AutoChessStory2.JPG" onclick="openSlideShow();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG" onclick="openSlideShow();currentSlide(4)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG" onclick="openSlideShow();currentSlide(5)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeSlideShow()">&times;</span>
      <div class="slideshow-content">

        <div class="eachSlides">
          <div class="numbertext">1 / 5</div>
          <img src="/content/images/AutoChessImg/AutoChessStory3.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">2 / 5</div>
          <img src="/content/images/AutoChessImg/AutoChessStory1.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">3 / 5</div>
          <img src="/content/images/AutoChessImg/AutoChessStory2.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 5</div>
          <img src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">5 / 5</div>
          <img src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG" style="width:100%">
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
          <img class="preview" src="/content/images/AutoChessImg/AutoChessStory3.JPG" onclick="currentSlide(1)" alt="Chess Story Img 1">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/AutoChessImg/AutoChessStory1.JPG" onclick="currentSlide(2)" alt="Chess Story Img 2">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/AutoChessImg/AutoChessStory2.JPG" onclick="currentSlide(3)" alt="Chess Story Img 3">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG" onclick="currentSlide(4)" alt="Chess Code Main Funct">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG" onclick="currentSlide(5)" alt="Chess Code 'Rook' example"">
        </div>
      </div>
    </div>

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
