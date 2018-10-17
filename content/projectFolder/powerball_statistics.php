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
    <!-- Images used to open the slideshow -->
    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG" onclick="openSlideShow();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG" onclick="openSlideShow();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG" onclick="openSlideShow();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG" onclick="openSlideShow();currentSlide(4)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeSlideShow()">&times;</span>
      <div class="slideshow-content">

        <div class="eachSlides">
          <div class="numbertext">1 / 4</div>
          <img src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">2 / 4</div>
          <img src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">3 / 4</div>
          <img src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 4</div>
          <img src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG" style="width:100%">
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
          <img class="preview" src="/content/images/PowerballStatisticsImg/PBStatsMainFunct.JPG" onclick="currentSlide(1)" alt="PB Main Function (short)">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/PowerballStatisticsImg/PBStatsNumbers.JPG" onclick="currentSlide(2)" alt="PB Numbers List (short)">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/PowerballStatisticsImg/PBStatsNumPercentage.JPG" onclick="currentSlide(3)" alt="PB Number Percentage (short)">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/PowerballStatisticsImg/PBStatsNumPopularity.JPG" onclick="currentSlide(4)" alt="PB Number Popularity (short)">
        </div>
      </div>
    </div>

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
