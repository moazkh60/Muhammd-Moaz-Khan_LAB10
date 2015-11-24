<!DOCTYPE html>
<html>
<head>
    <title>English Dictionary</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    </head>
<body align="center">



    <?PHP
$key = $_GET["key"];

$var=strtoupper($key);
$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); 


if (array_key_exists($var,$json))
  {
  echo "<h2>Word: <b>' $key '<b> </h2><br/> " . $json[$var];
  echo "<br/>";
  }else{
  echo "<h1 style='color:red'><b>Sorry!</b> Word Not found</h1>";

  }
$arrayKeys=array_keys($json);
  foreach($arrayKeys as $item ){
	  if(stristr($item,$var)!=FALSE){
		echo "<h3>> Word: $item: </h3><br/> " . $json[$item];
		echo "<br/>";
		
	  }

  }
?> 
  
</body>
</html>
