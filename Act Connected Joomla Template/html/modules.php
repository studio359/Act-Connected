<?php 
  function modChrome_container( $module, &$params, &$attribs ) 
  {
    echo "<div class=\"container\"><div class=\"col-12\"".$module->content."</div></div>";
  }

  function modChrome_banner( $module, &$params, &$attribs ) 
  {
    echo "<div class=\"container banner\"><div class=\"col-12\"".$module->content."</div></div>";
  }

  function modChrome_fader( $module, &$params, &$attribs ) 
  {
    echo "<div class=\"fader\">".$module->content."</div>";
  }

  function modChrome_language( $module, &$params, &$attribs ) 
  {
    echo "<div class=\"row language\">";
    echo "<div class=\"container\">";
    echo $module->content;
    echo "</div></div>";
  }
?>