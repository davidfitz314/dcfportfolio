<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="projHead">
    <h1>
      3D RAT MAZE
    </h1>
  </div>


  <div class="basicProjectLayout">
    <div class="singleProjRight">
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
      <button> <a href="https://github.com/davidfitz314/RatMaze-3d-Assignment" target="_blank">Source Code</a></button>
    </div>

    <h4>Images</h4>
    <div class="singleProjLeft">
    <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/3dRatMazeImg/3dRatMazeViewTopPerspective.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeView1.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeView2.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeViewGoalView.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeFilesOverView.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeHeaderCode.JPG" class="eachSlide">
        <img src="/content/images/3dRatMazeImg/3dRatMazeRatHeaderCode.JPG" class="eachSlide">
      </div>
    </div>
  </div>
  <div class="imgButtons">
    <img onclick="currentSlide(1)" src="/content/images/3dRatMazeImg/3dRatMazeViewTopPerspective.JPG">
    <img onclick="currentSlide(2)" src="/content/images/3dRatMazeImg/3dRatMazeView1.JPG">
    <img onclick="currentSlide(3)" src="/content/images/3dRatMazeImg/3dRatMazeView2.JPG">
    <img onclick="currentSlide(4)" src="/content/images/3dRatMazeImg/3dRatMazeViewGoalView.JPG">
    <img onclick="currentSlide(5)" src="/content/images/3dRatMazeImg/3dRatMazeFilesOverView.JPG">
    <img onclick="currentSlide(6)" src="/content/images/3dRatMazeImg/3dRatMazeHeaderCode.JPG">
    <img onclick="currentSlide(7)" src="/content/images/3dRatMazeImg/3dRatMazeRatHeaderCode.JPG">
  </div>

  <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
