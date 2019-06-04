<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("192.168.33.17", "pdo", "doing", "doing");

$product = new Product;

//$product->setId("5");

$service = new ServiceProduct($db, $product);

print_r($service->list());



/*try{
  $conn = new \PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");

   //$resultado = $link->exec($query);
  //print_r($resultado); apresenta quantas alterações foram realizadas

  $query = "select Host, User from user where Host=:host"; // order by User desc
  $stmt = $conn->prepare($query);
  $stmt->bindValue(':host',$_GET['host']);
  $stmt->execute();

  print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
  
  $result=$conn->query($query);

  foreach( $result as $user ){
    echo $user['Host']." ".$user['User'];
    echo "<br>";
  }

  //$list = $stmt->fetch(PDO::FETCH_ASSOC);
  //print_r($list);
  
  //$list2 = $stmt->fetchAll(PDO::FETCH_OBJ);
  //print_r($list2[0]->User." ".$list2[0]->Host);

} catch ( \PDOException $e){
  echo "Error! Mensagem: ".$e->getMessage()." Code: ".$e->getCode();
}*/


//$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
/*mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;

while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}*/