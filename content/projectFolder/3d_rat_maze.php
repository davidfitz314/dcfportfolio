<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjectLayout">
    <hr />
    <h3>3D Rat Maze</h3>
    <h4>OverView</h4>
    <p>
      C++, 3D Glut, and Wondows Visual Studio project.
      <br />
      Generates a radmonizecd maze within set area, with overlapping pictures for walls, flooring, and ceiling.
      <br />
      A user controlled mouse is placed on the starting point (blue floor tile), and attempts to reach the end (green floor tile).
      <br />
      Mouse moves with user mouse clicks left and right for turning and center button for forward.
      <br />
      In event there is no center mouse button keyboard buttons 'z' and 'x' act as a replacement, for starting movement and stopping.
    </p>

    <h4>External Links</h4>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/RatMaze-3d-Assignment" target="_blank">click here</a></p>
    <h4>Images</h4>

    <!-- The slide show  -->
    <!-- Images used to open the slideshow -->
    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeViewTopPerspective.JPG" onclick="openSlideShow();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeView1.JPG" onclick="openSlideShow();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeView2.JPG" onclick="openSlideShow();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeViewGoalView.JPG" onclick="openSlideShow();currentSlide(4)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeFilesOverView.JPG" onclick="openSlideShow();currentSlide(5)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeHeaderCode.JPG" onclick="openSlideShow();currentSlide(6)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/3dRatMazeImg/3dRatMazeRatHeaderCode.JPG" onclick="openSlideShow();currentSlide(7)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeSlideShow()">&times;</span>
      <div class="slideshow-content">

        <div class="eachSlides">
          <div class="numbertext">1 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeViewTopPerspective.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">2 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeView1.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">3 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeView2.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeViewGoalView.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">5 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeFilesOverView.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">6 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeHeaderCode.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">7 / 7</div>
          <img src="/content/images/3dRatMazeImg/3dRatMazeRatHeaderCode.JPG" style="width:100%">
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
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeViewTopPerspective.JPG" onclick="currentSlide(1)" alt="Rat Maze Top View Image">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeView1.JPG" onclick="currentSlide(2)" alt="Rat Maze Runner Perspective pt 1">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeView2.JPG" onclick="currentSlide(3)" alt="Rat Maze Runner Perspective pt 2">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeViewGoalView.JPG" onclick="currentSlide(4)" alt="Rat Maze Runner Perspective Goal in View">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeFilesOverView.JPG" onclick="currentSlide(5)" alt="List of Files in 3d Rat Maze Repository">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeHeaderCode.JPG" onclick="currentSlide(6)" alt="'Maze.h' code (short)">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/3dRatMazeImg/3dRatMazeRatHeaderCode.JPG" onclick="currentSlide(7)" alt="'Rat.h' code (short)">
        </div>
      </div>
    </div>

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
