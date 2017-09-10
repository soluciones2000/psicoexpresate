<?php
//CSS variables
$fontsize = 10;
$day_font_size = 14;
$table_width = 600;
$cellpadding = 0;
$cellspacing = 0;
$daycell_width = 150;
$dayname_border = 0;
$daynameborder_color = "#efefef;";
?>
<style>
body{
	font-family:Trebuchet MS, Arial, Verdana;
	font-size:<?=$fontsize?>px;
}

.daycell{
	float:left; 
	border:5px solid black; 
	width:<?=$daycell_width?>px; 
	border-radius: 50 50px 50px 50;
}

.dayname{
	color:red;
	font-weight:bold;
	border-radius: 5px 5px 5px 5px;
	border:<?=$dayname_border?>px solid <?=$daynameborder_color?>;
	background-color:#efefef;
	padding:2px 2px 2px 2px;
	margin-top:15px;
}

.daynum{
	color:blue;
	font-weight:bold;
	font-size:<?=$day_font_size?>px;
}

</style>
<?php
/*PHP Calendar script*/
//the current date
date_default_timezone_set('America/Caracas');

$curr_year = date("Y");
$curr_month = date("m");
$curr_day = date("d");
$curr_date = $curr_year."/".$curr_month."/".$curr_day;


//GET variables
$get_month = $_GET["month"];
$get_year = $_GET["year"];
if ($get_month==""){$get_month = $curr_month;}
if ($get_year==""){$get_year = $curr_year;}


if ($get_month>1){
	$prevmonth = $get_month - 1;
	$get_year = $get_year;
	$next_year = $get_year;
}

if ($get_month < 12){
	$nextmonth = $get_month + 1;
	$get_year = $get_year;
	$prev_year = $get_year;
	$next_year = $get_year;
}

if ($get_month==1){
	$prevmonth = 12;
	$prev_year = $get_year -1;
	$nextmonth = 2;
	$next_year = $get_year;
}

if ($get_month == 12){
	$nextmonth = 1;
	$get_year = $get_year;
	$prev_year = $get_year;
	$next_year = $get_year + 1;
}


switch ($get_month) {
	case "01":
		$month_name = "Enero";
		break;
	case "02":
		$month_name = "Febrero";
		break;
	case "03":
		$month_name = "Marzo";
		break;
	case "04":
		$month_name = "Abril";
		break;
	case "05":
		$month_name = "Mayo";
		break;
	case "06":
		$month_name = "Junio";
		break;
	case "07":
		$month_name = "Julio";
		break;
	case "08":
		$month_name = "Agosto";
		break;
	case "09":
		$month_name = "Septiembre";
		break;
	case "10":
		$month_name = "Octubre";
		break;
	case "11":
		$month_name = "Noviembre";
		break;
	case "12":
		$month_name = "Diciembre";
		break;										
	default:
		break;
}

//Step 2 - find the number of days of current month
$month_num_days = cal_days_in_month(CAL_GREGORIAN, $get_month, $get_year);
echo "<table width='$table_width' align='center' cellpadding='$cellpadding' cellspacing='$cellspacing'>";
echo "<tr align='center'>
		<td align='center' colspan='7'>
			<h1>Calendario de eventos de Psicoexpresate</h1>
		</td>
	  </tr>";
$j=0;
echo "<tr>
<!--		<td align='left'><a href='php-calendar.php?month=$prevmonth&year=$prev_year'>Anterior</a></td>-->
		<td align='center' colspan='7'>$month_name $get_year</td>
<!--		<td align='right'><a href='php-calendar.php?month=$nextmonth&year=$next_year'>Próximo</a></td>-->
	  </tr>";
echo "<tr>";
for($i=1;$i<=$month_num_days;$i++){
	if ($i<10){
		$ii="0".$i;
	}else{
		$ii = $i;
	}
	//Step 3 - find name of day
	$dayname="";
	$dayname = date("l", mktime(0,0,0,$get_month,$i,$get_year));
	switch ($dayname) {
		case "Monday":
			$dayname = "Lunes";
			break;
		case "Tuesday":
			$dayname = "Martes";
			break;
		case "Wednesday":
			$dayname = "Miercoles";
			break;
		case "Thursday":
			$dayname = "Jueves";
			break;
		case "Friday":
			$dayname = "Viernes";
			break;
		case "Saturday":
			$dayname = "Sabado";
			break;
		case "Sunday":
			$dayname = "Domingo";
			break;
		default:
			break;
	}
	$dayname = substr($dayname, 0, 3);

	$mmonth = date("m");
	$dday = date("d");
	$yyear = date("Y");
	
	if ($curr_year==$yyear && $curr_month==$mmonth && $dday==$i){
		$bgcolor = "#efefef;";
	}else{
		$bgcolor = "#ffffff;";
	}
	
	echo "<td style='' align='center' valign='top'>
			<span style=''>&nbsp;</span>
			<span class='daycell' style='background-color:$bgcolor'>
			<span class='dayname'>$dayname</span><br>
			<span class='daynum'>$ii</span><br>
			<br>
			<br>
			<br>
			</span>
		  </td>";
	$j++;
	if ($j==7){
		$j=0;
		echo "</tr><tr>";
	}
}
echo "</div>";
?>