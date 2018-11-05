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
    <div class="slideshowImgs">
      <img src="/content/images/AutoChessImg/AutoChessStory3.JPG" class="eachSlide">
      <img src="/content/images/AutoChessImg/AutoChessStory1.JPG" class="eachSlide">
      <img src="/content/images/AutoChessImg/AutoChessStory2.JPG" class="eachSlide">
      <img src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG" class="eachSlide">
      <img src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG" class="eachSlide">
    </div>

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/AutoChessImg/AutoChessStory3.JPG">
      <img onclick="currentSlide(2)" src="/content/images/AutoChessImg/AutoChessStory1.JPG">
      <img onclick="currentSlide(3)" src="/content/images/AutoChessImg/AutoChessStory2.JPG">
      <img onclick="currentSlide(4)" src="/content/images/AutoChessImg/AutoChessStoryMainFunct.JPG">
      <img onclick="currentSlide(5)" src="/content/images/AutoChessImg/AutoChessStoryRookCode.JPG">
    </div>

  
<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
