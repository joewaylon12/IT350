<?php
session_start(); 

if (!isset($_SESSION['var'])){
        header("Location: contact.php");
}

$menu = array(
  'home'  => array('text'=>'Home',  'url'=>'?p=home'),
  'contact'  => array('text'=>'Contact',  'url'=>'?p=contact'),
  'about' => array('text'=>'About', 'url'=>'?p=about'),
);

class CNavigation {
  public static function GenerateMenu($items) {
    $html = "<nav>\n";
    foreach($items as $item) {
      $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};

echo CNavigation::GenerateMenu($menu);
echo "Joe Waylon Upshaw <br>";
echo "Phone Number: (817)915-5153 <br>";

echo"<form action='logout.php'><button type='submit'>LOGOUT</button></form>"

?>