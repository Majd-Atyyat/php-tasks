<?PHP
  session_start();
 
  if(isset($_SESSION['views'])){
     $_SESSION['views'] = $_SESSION['views']+ 1;
  }else{
     $_SESSION['views'] = 1;
  }
  echo "you have viewed this page ". $_SESSION['views'];
?>
