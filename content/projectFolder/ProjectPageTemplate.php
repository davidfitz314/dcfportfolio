<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      Title
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <div class="slideshowImgs">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
        <img src="/content/images/(img_folder)/" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>about app section</p>

      <span class="bluePLink">
        <a href="" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(2)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(3)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(4)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(5)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(6)" src="/content/images/(img_folder)/">
      <img onclick="currentSlide(7)" src="/content/images/(img_folder)/">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

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
