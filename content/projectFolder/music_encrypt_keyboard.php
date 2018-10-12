<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjecetLayout">
    <hr />
    <h3>Music Encrypting/Decrypting KeyBoard</h3>
    <h4>OverView</h4>

    </p>
    C++ Application
    <br />
Special Libraries used for glut drawings and windows media.
<br />
Keys 1-7 are used for the piano and pressing them will play music and display a note on the screen. The notes will keep adding on to the screen until they reach the screen boundaries. Music uses a single method so only 1 note may be played at a time.
<br />
keys; 'e' and 'd' are the signals to begin encrypting or decrypting. After pressing 'e' or 'd' the string of text generated from the musical notes will be used to create the caesarean cipher.
<br />
A caesarean cypher is used to change blocks of text from a file into encrypted or decrypted blocks of text. Each music note holds a different caesarian cypher of encrypting based on its musical frequency. By combing multiple notes a document can have multiple block encryptions.
<br />
example: presing the keys '1', '2', and then '3' would create the string "DEF". then pressing 'e' would send the string into the encrypt method. the encrypt method will check the file size and divide it into x groups or in this case because of our string "DEF" it would be 3 groups. the first group will be ciphered using the frequency modulated by alphabet size of the note 'D'. the second group will be ciphered similarly but with the note 'E', and the third group is also similar.
<br />
#The output from the encryption will be a long string of text in a file as even spaces, return symbols, and some special characters have been ciphered.#
<br />
###the decrypt method follows a similar pattern as encrypt in order to be consistent.###</p>
    <h4>External Links</h4>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/Music-Encryption" target="_blank">click here</a></p>
    <h4>Images</h4>
    <!--<img id="myImg" src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" alt="Basic Keyboard With onscreen Notes">
    <img id="myImg" src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" alt="Basic Keyboard With onscreen Note 'E' pressed">
    <img id="myImg" src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" alt="Encrypted Text">
    <img id="myImg" src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" alt="Decrypted Text">
-->
<!--test section code courtesy of w3schools.com-->
    <!-- The slide show  -->
    <!-- Images used to open the slideshow -->
    <div class="trow">
      <div class="tcolumn">
        <img src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" onclick="openModal();currentSlide(1)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" onclick="openModal();currentSlide(2)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" onclick="openModal();currentSlide(3)" class="hover-shadow">
      </div>
      <div class="tcolumn">
        <img src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" onclick="openModal();currentSlide(4)" class="hover-shadow">
      </div>
    </div>

    <!-- The slideshow iteself -->
    <div id="pSlideShow" class="slideBG">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="slideshow-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" style="width:100%">
        </div>

        <!-- back/forward controls -->
        <a class="back" onclick="plusSlides(-1)">&#10094;</a>
        <a class="forward" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption/alt text -->
        <div class="alt-container">
          <p id="caption_alt"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="tcolumn">
          <img class="preview" src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" onclick="currentSlide(1)" alt="Keyboard">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" onclick="currentSlide(2)" alt="Keyboard Pressed">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" onclick="currentSlide(3)" alt="Encrypted">
        </div>

        <div class="tcolumn">
          <img class="preview" src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" onclick="currentSlide(4)" alt="Decrypted">
        </div>
      </div>
    </div>

<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
