<?php include "includes/header.php";?>    

    <p>CSS flexbox allows for nicely formatted HTML by aligning items vertically and horizontally using rows and columns. Items will "flex" to different sizes in order to fill space, making responsive design easier. It's intuitive, supported in all modern browsers, and great to use for components of an application and small-scale layouts. Chris Coyier at CSS-Tricks puts it like this, “The main idea behind the flex layout is to give the container the ability to alter its items’ width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow. (Coyier)”</p>
    <p>On the surface, you have a “flex container” with children, or “flex items,” which are the elements contained within. These containers are placed along “flex lines.” Nick Schäferhoff at Torque Magazine explains the basic concept as, “Lines and items can be manipulated in layout, size, spacing, and more along both the vertical and horizontal axis using a multitude of operators. This allows you to best take advantage of the available space and lets elements arrange themselves automatically according to it. (Schäferhoff)” He goes on to note optimal usage, “While you can use flexbox to build entire web pages, however, that’s not the recommended use case. For larger layouts, consider Grid. Flexbox, on the other hand, is most appropriate for small-scale layouts and applications (Schäferhoff)”</p>
    <p>When using Flexbox, it is important to understand the two axes, as described on MDN Web Docs, “When working with flexbox you need to think in terms of two axes — the main axis and the cross axis. The main axis is defined by the flex-direction property, and the cross axis runs perpendicular to it. Everything we do with flexbox refers back to these axes, so it is worth understanding how they work from the outset. (MDN Web Docs)” The main axis, defined by flex-direction, has four possible values: row, row-reverse, column, and column-reverse. The cross-axis runs perpendicular to how the main-axis is set. Understanding which axis is which is crucial when aligning and justifying flex items; flexbox has many different properties that align and justify content along one axis or the other.</p>
    <p>Flexbox has become very common in web design, so it’s worth learning how it works and when to use it. Consider playing games like Flexbox Froggy or Flexbox Defense to build and sharpen skills, or the app Flexyboxes to see and adjust code examples in real-time. Overall, Flexbox offers many benefits for dynamic layouts, smaller page elements, and mobile design; consider if this CSS module may be the better solution for your application.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p>Coyier, Chris. “A Complete Guide to Flexbox: CSS-Tricks.” CSS-Tricks, 7 Apr. 2021 <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">CSS-Tricks.com</a></p>
    <p>Schäferhoff, Nick. “A CSS Flexbox Tutorial for Beginners - What It Is and How to Use It.” Torque Magazine, 27 Feb. 2020 <a href="https://torquemag.io/2020/02/flexbox-tutorial" target="_blank">Torque Magazine</a></p>
    <p>MDN Web Docs. “Basic Concepts of Flexbox - CSS: Cascading Style Sheets: MDN.” CSS: Cascading Style Sheets | MDN <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">MDN Web Docs</a></p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>