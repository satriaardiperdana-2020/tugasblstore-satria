
<h1>BL Store</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table cellpadding="5" border="0" width="500">
	<tr>
		<td width="125" align="center">ITEM</td>
		<td width="125" align="center">SIZE</td>
		<td width="125" align="center">QTY</td>
		<td width="125" align="center">DSC(%)</td>
	</tr>
	
</table>
<table cellpadding="5" border="1" width="500">
	<tr>
		<td width="125">
			<select name="item1">
				<option value="toshiba">Toshiba</option>
				<option value="samsung">Samsung</option>
				<option value="seagate">Seagate</option>
			</select>
		</td>
		<td width="125">
			<select name="size1">
				<option value="satuTB"> 1TB</option>
				<option value="duaTB">  2TB</option>
				<option value="empatTB">4TB</option>
			</select>
		</td>
		<td width="125">
			<input type="text" name="qty1" size="2">
		</td>
		<td width="125">
			<input type="text" name="dsc1" size="2" value="0">
		</td>
	</tr>
	
</table>
<table cellpadding="5" border="1" width="500">
	<tr>
		<td width="125">
			<select name="item2">
				<option value="toshiba">Toshiba</option>
				<option value="samsung">Samsung</option>
				<option value="seagate">Seagate</option>
			</select>
		</td>
		<td width="125">
			<select name="size2">
				<option value="satuTB"> 1TB</option>
				<option value="duaTB">  2TB</option>
				<option value="empatTB">4TB</option>
			</select>
		</td>
		<td width="125">
			<input type="text" name="qty2" size="2">
		</td>
		<td width="125">
			<input type="text" name="dsc2" size="2" value="0">
		</td>
	</tr>
	
</table>
<table cellpadding="5" border="1" width="500">
	<tr>
		<td width="125">
			<select name="item3">
				<option value="toshiba">Toshiba</option>
				<option value="samsung">Samsung</option>
				<option value="seagate">Seagate</option>
			</select>
		</td>
		<td width="125">
			<select name="size3">
				<option value="satuTB"> 1TB</option>
				<option value="duaTB">  2TB</option>
				<option value="empatTB">4TB</option>
			</select>
		</td>
		<td width="125">
			<input type="text" name="qty3" size="2">
		</td>
		<td width="125">
			<input type="text" name="dsc3" size="2" value="0">
		</td>
	</tr>
	<tr>
		<td colspan='4'><input type="submit" name="submit" value="Cetak"></td>
	</tr>
	
</table>	
</form>


<?php

	
	$item1=null;
	$item2=null;
	$item3=null;
	$size1=0;
	$size2=0;
	$size3=0;
	$qty1=0;
	$qty2=0;
	$qty3=0;
	$dsc1=0;
	$dsc2=0;
	$dsc3=0;
	$price=0;
	$pajak=0;
	$total=0;
	$subtotal1=0;
	$subtotal2=0;
	$subtotal3=0;
	$total=0;
	$pajak=0;
	$bayar=0;
	if (isset($_POST['submit'])) {
		$item1= $_POST['item1'];
		$item2= $_POST['item2'];
		$item3= $_POST['item3'];
		$size1 = $_POST['size1'];
		$size2 = $_POST['size2'];
		$size3 = $_POST['size3'];
		$qty1 = $_POST['qty1'];
		$qty2 = $_POST['qty2'];
		$qty3 = $_POST['qty3'];
		$dsc1 = $_POST['dsc1'];
		$dsc2 = $_POST['dsc2'];
		$dsc3 = $_POST['dsc3'];

		if ($item1=='toshiba' && !empty($qty1)) {
			if ($size1=='satuTB') {
				$price=52;
			}elseif ($size1=='duaTB') {
				$price=75;
			}elseif ($size1=='empatTB') {
				$price=150;
			}
			$subtotal1=($price*$qty1)-(($dsc1/100)*($price*$qty1));
			echo $price;
			echo $qty1;
			echo $dsc1;
			echo $subtotal1;			
		}elseif($item1=='samsung' && !empty($qty1)) {
			if ($size1=='satuTB') {
				$price=50;
			}elseif ($size1=='duaTB') {
				$price=70;
			}elseif ($size1=='empatTB') {
				$price=145;
			}	
			$subtotal1=($price*$qty1)-(($dsc1/100)*($price*$qty1));
			echo $subtotal1;	
		}elseif($item1=='seagate' && !empty($qty1)) {
			if ($size1=='satuTB') {
				$price=51;
			}elseif ($size1=='duaTB') {
				$price=73;
			}elseif ($size1=='empatTB') {
				$price=152;
			}	
			$subtotal1=($price*$qty1)-(($dsc1/100)*($price*$qty1));
			echo $subtotal1;			
		}// akhir item1

		if ($item2=='toshiba' && !empty($qty2)) {
			if ($size2=='satuTB') {
				$price=52;
			}elseif ($size2=='duaTB') {
				$price=75;
			}elseif ($size2=='empatTB') {
				$price=150;
			}	
			$subtotal2=($price*$qty2)-(($dsc2/100)*($price*$qty2));
			echo $subtotal2;			
		}elseif($item2=='samsung' && !empty($qty2)) {
			if ($size2=='satuTB') {
				$price=50;
			}elseif ($size2=='duaTB') {
				$price=70;
			}elseif ($size2=='empatTB') {
				$price=145;
			}	
			$subtotal2=($price*$qty2)-(($dsc2/100)*($price*$qty2));
			echo $price;
			echo "\nprice x qty:" .$price*$qty2;

			echo "\nqty" .$qty2;
			echo "\ndiscon:" .$dsc2;
			echo "\n" .$subtotal2;				
		}elseif($item2=='seagate' && !empty($qty2)) {
			if ($size2=='satuTB') {
				$price=51;
			}elseif ($size2=='duaTB') {
				$price=73;
			}elseif ($size2=='empatTB') {
				$price=152;
			}	
			$subtotal2=($price*$qty2)-(($dsc2/100)*($price*$qty2));
			echo $subtotal2;		
		}//akhir item2

		if ($item3=='toshiba' && !empty($qty3)) {
			if ($size3=='satuTB') {
				$price=52;
			}elseif ($size3=='duaTB') {
				$price=75;
			}elseif ($size3=='empatTB') {
				$price=150;
			}	
			$subtotal3=($price*$qty3)-(($dsc3/100)*($price*$qty3));
			echo $price;
			echo "\nprice x qty:" .$price*$qty3;

			echo "\nqty" .$qty3;
			echo "\ndiscon:" .$dsc3;
			echo "\n" .$subtotal3;		
		}elseif($item3=='samsung' && !empty($qty3)) {
			if ($size3=='satuTB') {
				$price=50;
			}elseif ($size3=='duaTB') {
				$price=70;
			}elseif ($size3=='empatTB') {
				$price=145;
			}	
			$subtotal3=($price*$qty3)-(($dsc3/100)*($price*$qty3));
			echo $price;
			echo "\nprice x qty:" .$price*$qty3;

			echo "\nqty" .$qty3;
			echo "\ndiscon:" .$dsc3;
			echo "\n" .$subtotal3;			
		}elseif($item3=='seagate' && !empty($qty3)) {
			if ($size3=='satuTB') {
				$price=51;
			}elseif ($size3=='duaTB') {
				$price=73;
			}elseif ($size3=='empatTB') {
				$price=152;
			}		
			$subtotal3=($price*$qty3)-(($dsc3/100)*($price*$qty3));
			echo $subtotal3;	
		}//akhir item3
		$total=$subtotal1+$subtotal2+$subtotal3;
		$pajak=$total*(10/100);
		$bayar=$total+$pajak;
		echo "Total:".$total;
		echo "Pajak:".$pajak;
		echo "Bayar:".$bayar;

		
		
	}//akhir isset($_POST['submit'])


?>