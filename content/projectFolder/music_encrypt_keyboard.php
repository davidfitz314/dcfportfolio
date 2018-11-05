<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjectLayout">
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

    <!-- The slide show  -->
    <div class="slideshowImgs">
      <img src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" class="eachSlide">
      <img src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" class="eachSlide">
      <img src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" class="eachSlide">
      <img src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" class="eachSlide">
    </div>

    <div class="imgButtons">
      <img onclick="currentSlide(1)" src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG">
      <img onclick="currentSlide(2)" src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG">
      <img onclick="currentSlide(3)" src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG">
      <img onclick="currentSlide(4)" src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG">
    </div>
    
<?php include '../defaultIncludes/JavascriptSlideShowScript.php'; ?>

    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
