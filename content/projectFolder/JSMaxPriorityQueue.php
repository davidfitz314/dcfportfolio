<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      JAVASCRIPT MAX PRIORITY QUEUE
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/JSMQueueImg/JSMQueueReadME.JPG" class="eachSlide">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt1.JPG" class="eachSlide">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt2.JPG" class="eachSlide">
        <img src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt3.JPG" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>
        A priority queue for integers.
        <br />
        All duplicate integers increment the initial integer priority by 1.
      <br />
  Built using a heap data structure with a hash look up table to maintain an overall runtime of O(log n).
      </p>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/PriorityQueue" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/JSMQueueImg/JSMQueueReadME.JPG">
      <img onclick="currentSlide(2)" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt1.JPG">
      <img onclick="currentSlide(3)" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt2.JPG">
      <img onclick="currentSlide(4)" src="/content/images/JSMQueueImg/JSMQueueFunctionsPrt3.JPG">
    </div>

    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href="/content/projectFolder/powerball_statistics"><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/Auto_Chess_Story">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
