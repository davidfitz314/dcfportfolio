<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <div class="projHead">
    <h1>
      MUSIC ENCRYPTION KEYBOARD
    </h1>
  </div>

  <div class="basicProjectLayout">
    <div class="singleProjLeft">
      <!-- The slide show  -->
      <div class="slideshowImgs">
        <img src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" class="eachSlide">
        <img src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" class="eachSlide">
        <img src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" class="eachSlide">
        <img src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" class="eachSlide">
      </div>
    </div>

    <div class="singleProjRight">
      <h2>OverView</h2>
      <p>
        Play music to generate an encryption/decryption key, uses a caesarean cypher based off the notes value.<br />
        After pressing 'e' or 'd' the string of text generated from the musical notes will be used to create the caesarean cipher in blocks corresponding to each note.
      </p>
      <span class="bluePLink">
        <a href="https://github.com/davidfitz314/Music-Encryption" target="_blank">View Source Code Repository</a>
      </span>
    </div>
  </div>

  <div class="basicProjectLayout">
    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG">
      <img onclick="currentSlide(2)" src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG">
      <img onclick="currentSlide(3)" src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG">
      <img onclick="currentSlide(4)" src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG">
    </div>
    <?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>
  </div>

  <div class="pagePagination">
    <span class="ppLeft">
      <a href="/content/projectFolder/birdandb"><img src="/content/images/arrowleft.png" alt="Left Arrow"> Go To Previous Project</a>
    </span>
    <a href="/content/projects">Return To Projects Directory</a>
    <span class="ppRight">
      <a href="/content/projectFolder/powerball_statistics">Go To Next Project <img src="/content/images/arrowright.png" alt="Right Arrow"></a>
    </span>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
