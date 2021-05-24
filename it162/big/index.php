<?php include "includes/header.php";?>    
 
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ryan.a.novelli@gmail.com";  //place your/your client's email address here
        $toName = "Ryan Novelli"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
    <p><a href="https://contentsnare.com/website-design-questionnaire" target="_blank">Create a website design questionnaire in 2021</a></p>
    <p><a href="https://www.framer.com/blog/posts/complete-guide-to-wireframing" target="_blank">The 2021 Guide to Wireframing a Website or Mobile App</a></p>
    <p><a href="https://directlinedev.com/blog/your-complete-guide-website-development-process" target="_blank">Your Complete Guide to the Website Development Process, 2021</a></p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>