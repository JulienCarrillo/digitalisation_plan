
<?php
function getMapData($mapID){
	$map = [
		'img' => '',
		'blocks' => ''
	];

	

	switch ($mapID) {
		case '1':
			$map['img'] = 'RDC.png';
			$map['blocks'] = [
				[
					'ID' => 1,
					'width' => 3,
					'height' => 9,
					'top' => 35,
					'left' => 15.5,
					'color' => 'red',
				],
				[
					'ID' => 2,
					'left'=> 21.5,
				    'top'=>35,
				    'width'=>3,
				    'height'=> 9,
					'color' => 'blue',
				],
				[
					'ID' => 3,
					'width' => 3,
					'height' => 4,
					'top' => 39,
					'left' => 28.9,
					'color' => 'green',
				],
				[
					'ID' => 4,
					'width' => 3,
					'height' => 4,
					'top' => 39,
					'left' => 31.5,
					'color' => 'purple',
				],
				[
					'ID' => 5,
					'width' => 4,
					'height' => 9,
					'top' => 36,
					'left' => 38,
					'color' => 'orange',
				],
				[
					'ID' => 6,
					'width' => 4,
					'height' => 9,
					'top' => 34,
					'left' => 44.3,
					'color' => 'blue',
				],
				[
					'ID' => 7,
					'width' => 4,
					'height' => 10,
					'top' => 34,
					'left' => 52,
					'color' => 'red',
				],
				[
					'ID' => 8,
					'width' => 3,
					'height' => 5,
					'top' => 35,
					'left' => 58.5,
					'color' => 'red',
				],
				[
					'ID' => 8,
					'width' => 3,
					'height' => 5,
					'top' => 41,
					'left' => 58.5,
					'color' => 'red',
				],
				[
					'ID' => 9,
					'width' => 4,
					'height' => 10,
					'top' => 35,
					'left' => 65.5,
					'color' => 'blue',
				],
				[
					'ID' => 10,
					'width' => 3,
					'height' => 10,
					'top' => 36,
					'left' => 72.5,
					'color' => 'green',
				],
				[
					'ID' => 11,
					'width' => 3,
					'height' => 5,
					'top' => 38,
					'left' => 78.5,
					'color' => 'purple',
				],
				[
					'ID' => 12,
					'width' => 3,
					'height' => 10,
					'top' => 53,
					'left' => 39.5,
					'color' => 'blue',
				],
				[
					'ID' => 13,
					'width' => 3,
					'height' => 5,
					'top' => 57,
					'left' => 45.5,
					'color' => 'green',
				],
				[
					'ID' => 14,
					'width' => 3,
					'height' => 10,
					'top' => 53,
					'left' => 54,
					'color' => 'purple',
				],
				[
					'ID' => 15,
					'width' => 3,
					'height' => 10,
					'top' => 74,
					'left' => 23.5,
					'color' => 'blue',
				],
				[
					'ID' => 16,
					'width' => 3,
					'height' => 10,
					'top' => 73,
					'left' => 30.5,
					'color' => 'green',
				],
				[
					'ID' => 17,
					'width' => 3,
					'height' => 11,
					'top' => 72,
					'left' => 39.5,
					'color' => 'purple',
				],
				[
					'ID' => 18,
					'width' => 3,
					'height' => 10,
					'top' => 74,
					'left' => 46.7,
					'color' => 'blue',
				],
				[
					'ID' => 19,
					'width' => 3,
					'height' => 10,
					'top' => 74,
					'left' => 54.1,
					'color' => 'green',
				],
				[
					'ID' => 20,
					'width' => 3,
					'height' => 10,
					'top' => 74,
					'left' => 62.4,
					'color' => 'purple',
				],
			];
			break;

			case '2':
			$map['img'] = 'etage2.png';
			$map['blocks'] = [
				[
					'ID' => 21,
					'width' => 3,
					'height' => 11,
					'top' => 36,
					'left' => 15,
					'color' => 'red',
				],
				[
					'ID' => 22,
					'left'=> 24.1,
				    'top'=>36,
				    'width'=>3,
				    'height'=> 11,
					'color' => 'blue',
				],
				[
					'ID' => 23,
					'width' => 3,
					'height' => 4,
					'top' => 43.6,
					'left' => 31.5,
					'color' => 'green',
				],
				[
					'ID' => 24,
					'width' => 3,
					'height' => 4,
					'top' => 43.6,
					'left' => 34.6,
					'color' => 'purple',
				],
				[
					'ID' => 25,
					'width' => 3,
					'height' => 11,
					'top' => 36,
					'left' => 42.5,
					'color' => 'orange',
				],
				[
					'ID' => 26,
					'width' => 3,
					'height' => 6,
					'top' => 38,
					'left' => 51.6,
					'color' => 'blue',
				],
				[
					'ID' => 27,
					'width' => 4,
					'height' => 5,
					'top' => 42,
					'left' => 57,
					'color' => 'red',
				],
			
				[
					'ID' => 29,
					'width' => 4,
					'height' => 10,
					'top' => 37,
					'left' => 64,
					'color' => 'blue',
				],
				[
					'ID' => 30,
					'width' => 4,
					'height' => 5,
					'top' => 43,
					'left' => 72.5,
					'color' => 'green',
				],
				[
					'ID' => 31,
					'width' => 3,
					'height' => 7,
					'top' => 40,
					'left' => 78.5,
					'color' => 'purple',
				],
				[
					'ID' => 32,
					'width' => 3,
					'height' => 13,
					'top' => 62,
					'left' => 53.5,
					'color' => 'blue',
				],
				[
					'ID' => 33,
					'width' => 3,
					'height' => 5,
					'top' => 58,
					'left' => 60.9,
					'color' => 'green',
				],
				[
					'ID' => 34,
					'width' => 3,
					'height' => 8,
					'top' => 67,
					'left' => 60.8,
					'color' => 'purple',
				],
				[
					'ID' => 35,
					'width' => 3,
					'height' => 14,
					'top' => 61,
					'left' => 68,
					'color' => 'blue',
				],
				[
					'ID' => 36,
					'width' => 3,
					'height' => 11,
					'top' => 63,
					'left' => 76.8,
					'color' => 'green',
				],
				
			];


			break;

			case '3':
			$map['img'] = 'etage3.png';
			$map['blocks'] = [
				[
					'ID' => 37,
					'width' => 2,
					'height' =>7,
					'top' => 37,
					'left' => 15,
					'color' => 'red',
				],
				[
					'ID' => 38,
					'left'=> 19.5,
				    'top'=>37,
				    'width'=>2,
				    'height'=>7,
					'color' => 'blue',
				],
				[
					'ID' => 39,
					'width' => 2,
					'height' =>3,
					'top' => 38.4,
					'left' => 23.7,
					'color' => 'green',
				],
				[
					'ID' => 40,
					'width' => 2,
					'height' =>3,
					'top' => 42,
					'left' => 23.7,
					'color' => 'purple',
				],
				[
					'ID' => 41,
					'width' => 2,
					'height' =>6,
					'top' => 37.5,
					'left' => 27.6,
					'color' => 'orange',
				],
				[
					'ID' => 42,
					'width' => 2,
					'height' => 6,
					'top' => 37.5,
					'left' => 31.3,
					'color' => 'blue',
				],
				[
					'ID' => 43,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 40.2,
					'color' => 'red',
				],
				[
					'ID' => 44,
					'width' => 2,
					'height' =>6,
					'top' => 37.7,
					'left' => 44.5,
					'color' => 'red',
				],
				[
					'ID' => 45,
					'width' => 2,
					'height' => 6,
					'top' => 37.5,
					'left' => 48.8,
					'color' => 'blue',
				],
				[
					'ID' => 46,
					'width' => 2,
					'height' => 3,
					'top' => 38,
					'left' => 52.7,
					'color' => 'green',
				],
				[
					'ID' => 47,
					'width' => 2,
					'height' =>3,
					'top' => 42,
					'left' => 52.7,
					'color' => 'purple',
				],
				[
					'ID' => 48,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 56.5,
					'color' => 'blue',
				],
				[
					'ID' => 49,
					'width' => 2,
					'height' =>6,
					'top' => 37.7,
					'left' => 60.5,
					'color' => 'green',
				],
				[
					'ID' => 50,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 64,
					'color' => 'purple',
				],
				[
					'ID' => 51,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 76.5,
					'color' => 'blue',
				],
				[
					'ID' => 52,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 80.5,
					'color' => 'green',
				],
				[
					'ID' => 53,
					'width' => 2,
					'height' => 3,
					'top' => 38.1,
					'left' => 84.4,
					'color' => 'purple',
				],
				[
					'ID' => 54,
					'width' => 2,
					'height' => 3,
					'top' => 41.7,
					'left' => 84.4,
					'color' => 'blue',
				],
				[
					'ID' => 55,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 88.8,
					'color' => 'green',
				],
				[
					'ID' => 56,
					'width' => 2,
					'height' => 6,
					'top' => 37.7,
					'left' => 92.4,
					'color' => 'purple',
				],
				[
					'ID' => 57,
					'width' => 2,
					'height' => 6,
					'top' => 50.6,
					'left' => 17.4,
					'color' => 'red',
				],
				[
					'ID' => 58,
					'left'=> 21,
				    'top'=>50.6,
				    'width'=>2,
				    'height'=> 6,
					'color' => 'blue',
				],
				[
					'ID' => 59,
					'width' => 2,
					'height' => 3,
					'top' => 49.2,
					'left' => 25.2,
					'color' => 'green',
				],
				[
					'ID' => 60,
					'width' => 2,
					'height' => 3,
					'top' => 52.6,
					'left' => 25.2,
					'color' => 'purple',
				],
				[
					'ID' => 61,
					'width' => 2,
					'height' => 6,
					'top' => 48.6,
					'left' => 30,
					'color' => 'orange',
				],
				[
					'ID' => 62,
					'width' => 2,
					'height' => 4,
					'top' => 53.6,
					'left' => 50.8,
					'color' => 'blue',
				],
				[
					'ID' => 62,
					'width' => 2,
					'height' =>  6,
					'top' => 51.6,
					'left' => 54.5,
					'color' => 'red',
				],
				[
					'ID' => 67,
					'width' => 2,
					'height' => 6,
					'top' => 50.6,
					'left' => 78.2,
					'color' => 'red',
				],
				[
					'ID' => 65,
					'width' => 2,
					'height' => 6,
					'top' => 50.6,
					'left' => 81.9,
					'color' => 'red',
				],
				[
					'ID' => 66,
					'width' => 2,
					'height' =>  3,
					'top' => 52.6,
					'left' => 85.9,
					'color' => 'blue',
				],
				[
					'ID' => 67,
					'width' => 2,
					'height' =>  3,
					'top' => 48.7,
					'left' => 85.9,
					'color' => 'green',
				],
				[
					'ID' => 68,
					'width' => 2,
					'height' => 6,
					'top' => 50.6,
					'left' => 90,
					'color' => 'purple',
				],
				[
					'ID' => 69,
					'width' => 2,
					'height' =>  6,
					'top' => 50.6,
					'left' => 93.5,
					'color' => 'blue',
				],
				[
					'ID' => 70,
					'width' => 2,
					'height' => 6,
					'top' => 58.6,
					'left' => 30,
					'color' => 'red',
				],
				[
					'ID' => 71,
					'left'=> 33.6,
				    'top'=>58.6,
				    'width'=>2,
				    'height'=> 6,
					'color' => 'blue',
				],
				[
					'ID' => 72,
					'width' => 2,
					'height' => 6,
					'top' => 58.2,
					'left' => 38.9,
					'color' => 'green',
				],
				[
					'ID' => 73,
					'width' => 2,
					'height' => 6,
					'top' => 58.6,
					'left' => 42.6,
					'color' => 'purple',
				],
				[
					'ID' => 74,
					'width' => 2,
					'height' => 6,
					'top' => 58.6,
					'left' => 63,
					'color' => 'orange',
				],
				[
					'ID' => 75,
					'width' => 2,
					'height' => 6,
					'top' => 58.6,
					'left' => 66.6,
					'color' => 'blue',
				],
				[
					'ID' => 76,
					'width' => 2,
					'height' =>  6,
					'top' => 58.6,
					'left' => 71.5,
					'color' => 'red',
				],
				[
					'ID' => 77,
					'width' => 2,
					'height' => 6,
					'top' => 58.6,
					'left' => 75,
					'color' => 'red',
				],
			];

			break;

	}

	return $map;
}


function getBlockInfo($blockID){

// Connexion base de donnée 
try
{
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}	
$sql =  'SELECT * FROM MAP WHERE blockID='.$blockID.'';
$datas=array();
foreach  ($db->query($sql) as $row) {
    $datas[]= [
    	'bench'=>$row['bench'],
    	'switch'=>$row['switch'],
    ];
}



	return [
		'ID' => $blockID,
		'datas'=> $datas
	];
}

?>