<?php 


function
webpage_header($title = "", $style_sheet_url = "")
{
  $output = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n ";

  $output .= "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">\n";

  $output .= "<head>\n";
  $output .= "<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\"/>\n";
  $output .= "<meta http-equiv=\"Content-Style-Type\" content=\"text/css\"/>\n";

  $output .= "<title>". $title."</title>\n";

// The style sheets

// First load the default style sheet.
  $output .= "<link href=\"../styles/trs-style-secondary.css\"";
  $output .= " rel=\"stylesheet\" type=\"text/css\" />\n";


//Now process any additional style sheets
  if ( !empty( $style_sheet_url ))
    {
      $output .= "<link href=\"" . $style_sheet_url;
      $output .= "\" rel=\"stylesheet\" type=\"text/css\">\n";    
    }
   $output .= "<link rel=\"icon\" href=\"../images-static/latinsq.png\" type=\"image/png\" />\n";

// Mathjax
    // Config:
    //<script type="text/x-mathjax-config">MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$']], displayMath: [['$$','$$']],processEscapes: true}});</script>
    $output .= '<script type="text/x-mathjax-config">MathJax.Hub.Config({tex2jax: {inlineMath: [['."'$','$']],displayMath: [['$$','$$']],processEscapes: true}});</script>\n";
    $output .= "<script type=\"text/x-mathjax-config\"> MathJax.Hub.Config({ TeX: { extensions: [\"AMSmath.js\", \"AMSsymbols.js\"] }}); </script>\n";
    // Mathjax itself:
    $output .= '<script src="http://www.math.dartmouth.edu/include/MathJax/MathJax.js?config=default" type="text/javascript"></script>'."\n";


  $output .= "</head>\n";
  $output .= "<body>\n\n";
  $output .= "<div id=\"main\">\n\n";

  $output .= "<div id=\"leftgraphic\"> <!-- *********Start left graphic ****** -->\n";
  $output .= "<a href=\"../index.php\">";
  $output .= "<img src=\"../". random_image("photos/sidebar/")."\"  alt=\"Sidebar image\" width=\"150\" /></a>\n";
  $output .= "</div>  <!-- **** end left graphic***** -->\n\n\n";
  $output .= "<div id=\"rightcolumn\">\n";

  return $output;
}





function
webpage_footer($modification_date = "", $modified_by = "")
{

$output = "<h4>Back to <small><a href=\"../index.php\">the homepage</a></small></h4>\n";

  $output .= "<hr align=\"left\" width=\"10%\" /><p><small>\n";

   if ( empty($modification_date) ) 
    {$modification_date =date("F d, Y", filemtime($_SERVER["SCRIPT_FILENAME"]));
    }
  $output .= "Last modified on " . $modification_date;
  if ( !empty($modified_by) )
    {
      $output .= " by " . $modified_by ;
    }
 $output .= "</small></p>\n";


  $output .= "</div><!-- End of div right column -->\n"; // End footer
  $output .= "</div><!-- End of div main -->\n"; 
  
  

  $output .= "</body>\n";
  $output .= "</html>";

  return $output;
}



?>