
<?php  
  session_start();
 include("config.php");
 include("fonction.php");

 $mapData = getMapData($_GET['etage']);

 $img = $mapData['img'];
 $blockDatas = $mapData['blocks'];


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="map.css">
	<meta charset="utf-8">
	<title>RDC</title>
</head>

<body>
	<header>
		<?php
			include 'menu.php';

		?>
	</header>
<!--Par convention : blockwraper = ensemble des blocks -->
<div class="blockwraper" >
		<div class="lesblocks" style="background-image: url(<?php echo $img?>)">
			<?php
			//pour chaque "blockData comme block"
				foreach ($blockDatas as $block) {
					$blockInfos = getBlockInfo($block['ID']);

					?>

				<div class="block" style="left: <?php echo $block['left'] ?>%; top: <?php echo $block['top'] ?>%; width: <?php echo $block['width'] ?>%; height: <?php echo $block['height']?>%;"
					onclick="alert (<?php
						echo "'Bench : ".$blockInfos['ID']." "?>\n<?php
						foreach ($blockInfos['datas'] as $blockInfo) {
							echo "O.E : ".$blockInfo['bench']." brassé sur le port ".$blockInfo['switch'].""?>\n <?php
						}?>')">
						
				</div>
					<?php
				}
			?>

		

	</div>
</div>



</body>	

</html>