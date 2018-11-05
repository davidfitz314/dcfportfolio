<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjectLayout">
    <hr />
    <h3>PowerBall Statistics</h3>
    <h4>OverView</h4>
    <p>
      Just a calculation program of the frequency rates on the popular gambling game PowerBall
<br />
Written in C++ using microsoft visual studio.
<br />
To update powerball inputs, go to the powerball.txt file and add each element in seperating each number with a space and then for different powerball draws seperate them with a new line.
<br />
After running the statistics will be places into the file 'stats.txt'
<br />
When running, a new build may be required before hand.
    </p>

    <h4>External Links</h4>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/Powerball-Statistics" target="_blank">click here</a></p>
    <h4>Images</h4>

    <!-- The slide show  -->
    <div class="slideshowImgs">
      <img src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG" class="eachSlide">
      <img src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG" class="eachSlide">
      <img src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG" class="eachSlide">
      <img src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG" class="eachSlide">
    </div>

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG">
      <img onclick="currentSlide(2)" src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG">
      <img onclick="currentSlide(3)" src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG">
      <img onclick="currentSlide(4)" src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG">
    </div>
    

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
