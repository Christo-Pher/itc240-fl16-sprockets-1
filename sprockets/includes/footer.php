            <!-- footer starts here -->

    </div><!--close main-article-->

	    <div class="sidebar_container">       
		
		  <div class="sidebar">
            <div class="sidebar_item">
 
<?php
                
    switch(THIS_PAGE){
        
    case 'index.php':
            echo "<h3>Randomized Superheroes:</h3>";
            echo randomize($heros);
    break;
    case 'contact.php':
            echo "<h3>Rotating Astrological Info:</h3>";
            echo rotate($planets);
    break;
        
        
    default:
        $title = THIS_PAGE;
}
  
?>
                
                <h2>Gobbledygook:</h2>
              <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
            </div><!--close sidebar_item--> 
          </div><!--close sidebar-->     		
		
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Latest Update</h2>
              <h3>January 2014</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		    </div><!--close sidebar_item--> 
          </div><!--close sidebar-->
		
		  <div class="sidebar">
            <div class="sidebar_item">
              <h3>December 2013</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		    </div><!--close sidebar_item--> 
          </div><!--close sidebar-->  
		
        </div><!--close sidebar_container-->	
      
	  </div><!--close content--> 
	  
	</div><!--close site_content--> 
  
  </div><!--close main-->
  
  <div id="footer">
      <em>&copy; 2015-<?=date('Y')?></em>
	  <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | website template by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a>
  </div><!--close footer-->  
  
</body>
</html>