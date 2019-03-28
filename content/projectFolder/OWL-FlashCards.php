<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      OWL (Our World Languages) FlashCards
    </h1>
    <h2>Level 1 en-cn</h2>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <div class="slideshowImgs">
        <img src="/content/images/OWL_Images/HomePage_Greeting_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/CardMenu_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/Card_help_screen_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/Card_English_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/Card_Chinese_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/Card_Search_Chinese_cropped.png" class="eachSlide">
        <img src="/content/images/OWL_Images/Card_Language_Setting_cropped.png" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      //requires a unique header for publishing
      <p>OWL-FlashCards</p>
      <p>Our World Languages Flash Cards</p>
      <p>by DCFApps</p>
      <h4>...page currently under construction...</h4>

      <span class="bluePLink"
        <a href='https://play.google.com/store/apps/details?id=com.dcfportfolio.owlflashcardsen_cnlevel1&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_gb/badges/images/generic/en_badge_web_generic.png'/></a>
      </span>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/OWLFlashCardsencnlevel1" target="_blank">View Source Code Repository</a>
      </span>
      <span class="bluePLink">
        <a href="/content/images/Downloadables/app.aab" download>Download App Directly</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/OWL_Images/HomePage_Greeting_cropped.png">
      <img onclick="currentSlide(2)" src="/content/images/OWL_Images/CardMenu_cropped.png">
      <img onclick="currentSlide(3)" src="/content/images/OWL_Images/Card_help_screen_cropped.png">
      <img onclick="currentSlide(4)" src="/content/images/OWL_Images/Card_English_cropped.png">
      <img onclick="currentSlide(5)" src="/content/images/OWL_Images/Card_Chinese_cropped.png">
      <img onclick="currentSlide(6)" src="/content/images/OWL_Images/Card_Language_Setting_cropped.png">
      <img onclick="currentSlide(7)" src="/content/images/OWL_Images/Card_Search_Chinese_cropped.png">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <p>Google Play and the Google Play logo are trademarks of Google LLC.</p>

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
