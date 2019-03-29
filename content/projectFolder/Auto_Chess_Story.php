<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      AUTOMATED CHESS STORY
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/AutoChessImg/AutoChessStory3.JPG" class="eachSlide">
        <img src="/content/images/AutoChessImg/AutoChessStory1.JPG" class="eachSlide">
        <img src="/content/images/AutoChessImg/AutoChessStory2.JPG" class="eachSlide">
        <img src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG" class="eachSlide">
        <img src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>
        C++, Glut 3d, and Windows Visual Studio combined to make a visual representation of the first few moves of chess.<br />
        But this chess game has been modified to have a more interesting move set and story instead of the standard chess game moves.
      </p>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/CS3600-Chess/blob/master/README.md" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/AutoChessImg/AutoChessStory3.JPG">
      <img onclick="currentSlide(2)" src="/content/images/AutoChessImg/AutoChessStory1.JPG">
      <img onclick="currentSlide(3)" src="/content/images/AutoChessImg/AutoChessStory2.JPG">
      <img onclick="currentSlide(4)" src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG">
      <img onclick="currentSlide(5)" src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href="/content/projectFolder/JSMaxPriorityQueue"><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/3d_rat_maze">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
