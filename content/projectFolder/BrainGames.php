<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      3 Brain Games
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <div class="slideshowImgs">
        <img src="/content/images/BrainGamesImgs/title.png" class="eachSlide">
        <img src="/content/images/BrainGamesImgs/simon.png" class="eachSlide">
        <img src="/content/images/BrainGamesImgs/towers_1.png" class="eachSlide">
        <img src="/content/images/BrainGamesImgs/towers_2.png" class="eachSlide">
        <img src="/content/images/BrainGamesImgs/piano.png" class="eachSlide">
        <img src="/content/images/BrainGamesImgs/scores.png" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>3 fun games to stimulate cognitive thinking.
        <br />Includes Simple Simon, Towers of Hanoi, and a Piano Player.
        <br />After each game notifications alert users to new Highscores, or for past highscores, users can navigate to the highscores page.
      </p>

      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/3BrainGames" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/BrainGamesImgs/title.png">
      <img onclick="currentSlide(2)" src="/content/images/BrainGamesImgs/simon.png">
      <img onclick="currentSlide(3)" src="/content/images/BrainGamesImgs/towers_1.png">
      <img onclick="currentSlide(4)" src="/content/images/BrainGamesImgs/towers_2.png">
      <img onclick="currentSlide(5)" src="/content/images/BrainGamesImgs/piano.png">
      <img onclick="currentSlide(6)" src="/content/images/BrainGamesImgs/scores.png">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href="/content/projectFolder/OWL-FlashCards"><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/InterviewApp">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
