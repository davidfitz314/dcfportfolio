<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      POWERBALL STATISTICS
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG" class="eachSlide">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG" class="eachSlide">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG" class="eachSlide">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>
        A calculation program for the frequency rates on the popular gambling game PowerBall. <br />
        Stats are grouped by single number popularity, and frequency rates of follow up numbers.
      </p>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/Powerball-Statistics" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG">
      <img onclick="currentSlide(2)" src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG">
      <img onclick="currentSlide(3)" src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG">
      <img onclick="currentSlide(4)" src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href="/content/projectFolder/music_encrypt_keyboard"><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/JSMaxPriorityQueue">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
