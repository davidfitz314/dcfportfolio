<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      OUR WORLD LANGUAGES FLASH CARDS - OWL FlashCards
    </h1>
  </div>

<div class="basicProjectLayout">

//requires a unique header for publishing
<p>OWL-FlashCards</p>
<p>Our World Languages Flash Cards</p>
<p>by DCFApps</p>
<h4>...page currently under construction...</h4>
<p><i>insert pagination at base of each project page</i></p>

  <div class="slideshowImgs">
    <img src="" class="eachSlide">
    <img src="" class="eachSlide">
    <img src="" class="eachSlide">
    <img src="" class="eachSlide">
    <img src="" class="eachSlide">
    <img src="" class="eachSlide">
  </div>

  <div class="imgButtons">
    <img onclick="currentSlide(1)" src="">
    <img onclick="currentSlide(2)" src="">
    <img onclick="currentSlide(3)" src="">
    <img onclick="currentSlide(4)" src="">
    <img onclick="currentSlide(5)" src="">
    <img onclick="currentSlide(6)" src="">
  </div>

  <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href=""><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
