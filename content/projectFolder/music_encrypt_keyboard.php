<?php include '../defaultIncludes/header.php'; ?>
<div class="centeredWrapper">
  <a href="../projects">Return to projects directory</a>
  <div class="basicProjecetLayout">
    <hr />
    <h4>OverView</h4>
    <p>Music Encrypting/Decrypting KeyBoard</p>
    <p>For Source Code of this project please <a href="https://github.com/davidfitz314/Music-Encryption" target="_blank">click here</a></p>
    <h4>Images</h4>
    <img id="myImg" src="/content/images/Music_Encryption_Images/EncryptKeyBoard.JPG" alt="Basic Keyboard With onscreen Notes">
    <img id="myImg" src="/content/images/Music_Encryption_Images/EncryptKeyboardKeyPressed.JPG" alt="Basic Keyboard With onscreen Note 'E' pressed">
    <img id="myImg" src="/content/images/Music_Encryption_Images/Encrypted_Text.JPG" alt="Encrypted Text">
    <img id="myImg" src="/content/images/Music_Encryption_Images/Decrypted_Text.JPG" alt="Decrypted Text">

    <div id="myModel" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>

    <script>
    //get the modal
    var modal = document.getElementById('myModal');

    //get the image and insert it inside the modal - use its alt text as caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    </script>
    <p><i>insert pagination at base of each project page</i></p>
  </div>
</div>
<?php include '../defaultIncludes/footer.php'; ?>
