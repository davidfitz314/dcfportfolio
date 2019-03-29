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
      <h2>OverView</h2>
      <!--//requires a unique header for publishing?-->
      <p>
        Over 200 words and translations in a categorized and easy to use app.
        <br />Each card starts in either English or Chinese depening on your settings, and allows you to tap the card to switch to its translation.
        <br />Also comes with a search method to let you speedily look up a word in the card Database, regardless of it being in Chinese or English.</p>

        <div class="owl_google_decorations">
          <a href='https://play.google.com/store/apps/details?id=com.dcfportfolio.owlflashcardsen_cnlevel1&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_gb/badges/images/generic/en_badge_web_generic.png'/></a>
        </div>
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
      <a href=""><img src="/content/images/arrowleft.png" alt="Left Arrow"> No Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/BrainGames">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
