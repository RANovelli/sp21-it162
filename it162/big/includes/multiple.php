<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>
    <label>
        1. Who is the final decision maker for your site?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>

<div>
    <label>
        2. New site or redesign?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>

 <div>
    <label>
        3. What are your goals for this site?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>

<div>
    <label>
        4. How many people on staff? Please list them and their roles.<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>    

<div>
    <label>
        5. What is your budget and deadline for this project?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>    

<div>
    <label>
        6. Please list five sites that you like, and what you like about them.<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div> 
    
<div>
    <label>
        7. What are some things, content-wise, you would like to avoid having on your site?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
    
<div>
    <label>
        8. Do you already have a logo and content ready in digital format?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
    
<div>
    <label>
        9. Will you be doing online sales? If so, what are the products and estimated sales figures?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
    
<div>
    <label>
        10. Who is your potential website audience, and what is their predominant platform for viewing the site?<br /><input type="text" name="Name" required="required" placeholder="Your answer" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>     
    
<div>	
    <label>
        Additional Info:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Any other thoughts, concerns, or suggestions are welcome and encouraged!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

