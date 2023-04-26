<?php
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$title = ($id == 0) ? "Galerie de imagini" : "Pagina " . $id;
?>
<!doctype html>
<html lang="en-US">
  <head>
    <title>
      <?php echo $title;?>
    </title>
    <style>
      tr:nth-child(odd){background-color:#6ff0f5;}
      td:hover {background-color:#ff00f5;}
	  #table1 {width:100%;}
      .center {
        display: flex;
        justify-content: center;
      }
    </style>
    <script src="javascript.js"></script>
  </head>
  <body>
    <h1 id="titlu"><?php echo $title;?></h1>
<?php
	class Element
	{
		public $id = 0;
		public $numeImagine = "";
		public $descriere = "";
	}
	if($id == 0)
	{
		$elements = array();
		try {
		$conn = new PDO('mysql:host=localhost;dbname=imagini', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$sql = "SELECT * FROM continut";
		}
		catch(PDOException $ex){
			die('Eroare de conectare');
		}
		foreach ($conn->query($sql) as $row) 
		{ 
		  $element = new Element();
		  $element->id = $row['id'];
		  $element->numeImagine = $row['caleImagine'];
		  $element->descriere = $row['descriere'];
		  $elements[] = $element;
		}
		$conn = null;
?>
		<table id="table1">
		<?php
			for($i = 0; $i <= (count($elements) - 1) / 2; $i++)
			{
		?>
			<tr>
				<?php
					for($j = 0; $j < 2; $j++)
					{
				?>
					<td style="width:50%">
						<?php $c = 2 * $i + $j;
						if($c < count($elements)) {?> 
						<a href="index.php?id=<?php echo $c + 1;?>"><img src="Images/<?php echo $elements[$c]->numeImagine?>" align="left" width="100" height="100" title="<?php echo $elements[$c]->numeImagine?>"/></a>
						<?php echo $elements[$c]->descriere; }?>
					</td>
				<?php
					}
				?>
			</tr>
		<?php
			}
		?>
		</table>
<?php
	}
	else
	{
		try {
		$conn = new PDO('mysql:host=localhost;dbname=imagini', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$sql = "SELECT * FROM continut where id = :id";
		$st = $conn->prepare($sql);
		$st->bindValue(":id", $id, PDO::PARAM_INT);
		$st->execute();
		$row = $st->fetch();
		}
		catch(PDOException $ex){
			die('Eroare de conectare');
		}
		$element = new Element();
		$element->id = $row['id'];
		$element->numeImagine = $row['caleImagine'];
		$element->descriere = $row['descriere'];
		$total = $conn->query("SELECT count(*) as total FROM continut")->fetch()['total'];
		$next = ($id == $total)? 1 : $id + 1;
		$prev = ($id == 1)? $total : $id - 1;
		$conn = null;
?>
		<table id="table2">
			<tr>
				<td colspan="3">
					<img src="Images/<?php echo $element->numeImagine?>" title="<?php echo $element->numeImagine;?>" id="image" width="800" height="800"/>
				</td>
			</tr>
			<tr>
				<td>
					<a id="prev" href="index.php?id=<?php echo $prev?>" class="center"><button style="text-align:left;">&lt;</button></a>
				</td>
				<td>
					<a href="index.php?id=0" class="center"><button class="center;">Back</button></a>
				</td>
				<td>
					<a id="next" href="index.php?id=<?php echo $next?>" class="center"><button style="text-align:right;">&gt;</button</a>
				</td>
			</tr>	
		</table>
<?php
	}
?>
</body>
</html>