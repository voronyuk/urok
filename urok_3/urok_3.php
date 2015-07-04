<!DOCTYPE html>
<html>
        <head>
                <title>3 урок</title>
        </head>
	<body>
<h3 style="color:#ff9966">1 завдання</h3>
    <?
    function numbers_func($a=1) {
	    for ($i = 1 ; $i <= $a; $i++) {
        print $i;
			  			  }
    }
    print "<br/>";
    numbers_func(5);
    ?>
<br>
<h3 style="color:#ff9966">2 завдання</h3>
        <?
		$table ='<table border=1>';
		for ($i=1; $i<=10; $i++){
			$table.='<tr>';
			for ($j=1; $j<=10; $j++){
				$table.='<td>'.$i*$j.'</td>';
			}
			$table.='</tr>';
		}
	$table.='</table>';
	print $table;
	?>
	
<h3 style="color:#ff9966">3 завдання</h3>
    <?
	function number_to_text ($a = 1){
		
		switch ($a) {
        case 1:
                print "1.first <br/>";
				break;
        case 2:
                print "2.second <br/>";
				break;
		case 3:
                print "3.third <br/>";
				break;
		case 4:
                print "4.fourth <br/>";
				break;
		case 5:
                print "5.fifth <br/>";
				break;		
		}
	}
		
	$a = number_to_text(1);
	     print $a;
	$a = number_to_text(2);
	     print $a;
	$a = number_to_text(3);
		 print $a;
	$a = number_to_text(4);
	     print $a;
	$a = number_to_text(5);
	     print $a;
	?>
	
	
	</body>	
</html>