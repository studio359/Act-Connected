<?php defined( '_JEXEC' ) or die; 
// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;
// generator tag
$this->setGenerator(null);
// CSS
$doc->addStyleSheet($tpath.'/css/styles.css');
$doc->addStyleSheet($tpath.'/fancybox/source/jquery.fancybox.css');
// JS
$doc->addScript($tpath.'/js/jquery-1.11.1.min.js');
$doc->addScript($tpath.'/js/scripts.min.js');
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<?php
// Remove Scripts
$doc = JFactory::getDocument();
if (isset($this->_script['text/javascript']))
{ $this->_script['text/javascript'] = preg_replace('%window\.addEvent\    (\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%',     '', $this->_script['text/javascript']);
if (empty($this->_script['text/javascript']))
unset($this->_script['text/javascript']);}
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[JURI::root(true) . '/components/com_k2/js/k2.js?v2.6.8&amp;sitepath=/escape-technology/']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
unset($this->_styleSheets[JURI::root(true).'/media/system/css/modal.css']);
?>
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
  <div id="wrapper">
    <div id="pagewrap">
      <div class="background">
      </div>
      <div id="top-color">
      </div>
      <jdoc:include type="modules" name="menu" style="none" />
      <jdoc:include type="modules" name="wide-top-0" style="none" />
      <jdoc:include type="modules" name="wide-top-1" style="none" />
      <jdoc:include type="component" />
      <div class="border-wrap">
        <div id="welcome-close" class="border-circle"></div>
        <div class="border-indented"></div>        
      </div>
      <jdoc:include type="modules" name="wide-bottom-1" style="none" />
    </div>
  </div>  
<footer>
</footer>
</body>
</html>