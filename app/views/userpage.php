<?php
namespace PMAN\views;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PMAN HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome <?php print $_SESSION['user']['fn'].' '.$_SESSION['user']['ln']; ?></h2>           

<!--   <table class="table table-striped">
    <thead>
      <tr>
        <th>First</th>
        <th>Last</th>
        <th>User</th>
      </tr>
    </thead>
    <tbody>

    <?php if ($_SESSION['user']['rl'] == 1) {
    $pdo = $this->pdo;
    $stmt = $pdo->prepare('SELECT first_name, last_name, uzr FROM uzrs');
    $stmt->execute();
    while ($user = $stmt->fetch(\PDO::FETCH_ASSOC)) {

//    	foreach ($vars as $user) {
        ?>
 
    		<tr>
            <td><?=$user['first_name']?></td>
            <td><?=$user['last_name']?></td>
            <td><?=$user['uzr']?></td>
            
		    </tr>  
    	<?php
    }
} else {
    ?>
      <tr>
        <td><?=$_SESSION['user']['fn']?></td>
        <td><?=$_SESSION['user']['ln']?></td>
        <td><?=$_SESSION['user']['uzr']?></td>
      </tr>    
    <?php
} ?>
    </tbody>
  </table>
 -->
<!--   <p><a href='../app/controllers/logout.php'>Logout</a></p>
 -->  
 
  <p><a href='../controllers/logout.php'>Logout</a></p>

  <h2>Dashboard</h2>           
  <p><a href='../controllers/logout.php'>Production Status</a></p>
  <p><a href='../controllers/logout.php'>Service Call</a></p>
  <p><a href='../controllers/logout.php'>System Update</a></p>
  <h2>Tracking</h2>           
  <p><a href='../controllers/logout.php'>CEA</a></p>
  <p><a href='../controllers/logout.php'>KMA</a></p>
  <p><a href='../controllers/logout.php'>ECDU</a></p>
  <p><a href='../controllers/logout.php'>INSR</a></p>

</div>

</body>
</html>
