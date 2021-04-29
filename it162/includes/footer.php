    <!-- footer starts here -->
    <footer>
      <p><small>&copy; 2021 - <?=date('Y')?> by <a href="contact.php">Ryan Novelli</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://novellidesign.org/scc/spring2021/it162/index.php" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>