<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjectLayout">
    <hr />
    <h3>JavaScript Max Priority Queue</h3>
    <h4>OverView</h4>
    <p>
      A priority queue for integers. All duplicate integers increment the initial integer priority by 1.
    <br />
Built using a heap data structure with a hash look up table to maintain an overall runtime of O(log n).
    </p>

    <h4>External Links</h4>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/PriorityQueue" target="_blank">click here</a></p>
    <h4>Images</h4>

    <!-- The slide show  -->
    <!-- Images used to open the slideshow -->
    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/JSMQueueImg/JSMQueueReadME.JPG" onclick="openSlideShow();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt1.JPG" onclick="openSlideShow();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt2.JPG" onclick="openSlideShow();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt3.JPG" onclick="openSlideShow();currentSlide(4)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeSlideShow()">&times;</span>
      <div class="slideshow-content">

        <div class="eachSlides">
          <div class="numbertext">1 / 4</div>
          <img src="/content/images/JSMQueueImg/JSMQueueReadME.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">2 / 4</div>
          <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt1.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">3 / 4</div>
          <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt2.JPG" style="width:100%">
        </div>

        <div class="eachSlides">
          <div class="numbertext">4 / 4</div>
          <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt3.JPG" style="width:100%">
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
          <img class="preview" src="/content/images/JSMQueueImg/JSMQueueReadME.JPG" onclick="currentSlide(1)" alt="JS Max Queue Read Me Functions">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt1.JPG" onclick="currentSlide(2)" alt="JS Max Queue Functions prt 1">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt2.JPG" onclick="currentSlide(3)" alt="JS Max Queue Functions prt 2">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt3.JPG" onclick="currentSlide(4)" alt="JS Max Queue Functions prt 3">
        </div>
      </div>
    </div>

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
