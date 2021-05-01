
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
				<option value="1"> 1TB</option>
				<option value="2">  2TB</option>
				<option value="4">4TB</option>
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
				<option value="1"> 1TB</option>
				<option value="2">  2TB</option>
				<option value="4">4TB</option>
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
				<option value="1"> 1TB</option>
				<option value="2">  2TB</option>
				<option value="4">4TB</option>
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
	$price1=0;
	$price2=0;
	$price3=0;
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
			if ($size1=='1') {
				$price1=52;
			}elseif ($size1=='2') {
				$price1=75;
			}elseif ($size1=='4') {
				$price1=150;
			}
			$subtotal1=($price1*$qty1)-(($dsc1/100)*($price1*$qty1));			
		}elseif($item1=='samsung' && !empty($qty1)) {
			if ($size1=='1') {
				$price1=50;
			}elseif ($size1=='2') {
				$price1=70;
			}elseif ($size1=='4') {
				$price1=145;
			}	
			$subtotal1=($price1*$qty1)-(($dsc1/100)*($price1*$qty1));
			//echo $subtotal1;	
		}elseif($item1=='seagate' && !empty($qty1)) {
			if ($size1=='1') {
				$price1=51;
			}elseif ($size1=='2') {
				$price1=73;
			}elseif ($size1=='4') {
				$price1=152;
			}	
			$subtotal1=($price1*$qty1)-(($dsc1/100)*($price1*$qty1));
			//echo $subtotal1;			
		}// akhir item1

		if ($item2=='toshiba' && !empty($qty2)) {
			if ($size2=='1') {
				$price2=52;
			}elseif ($size2=='2') {
				$price2=75;
			}elseif ($size2=='4') {
				$price2=150;
			}	
			$subtotal2=($price2*$qty2)-(($dsc2/100)*($price2*$qty2));
			//echo $subtotal2;			
		}elseif($item2=='samsung' && !empty($qty2)) {
			if ($size2=='1') {
				$price2=50;
			}elseif ($size2=='2') {
				$price2=70;
			}elseif ($size2=='4') {
				$price2=145;
			}	
			$subtotal2=($price2*$qty2)-(($dsc2/100)*($price2*$qty2));
			//echo $price;
			//echo "\nprice x qty:" .$price*$qty2;

			//echo "\nqty" .$qty2;
			//echo "\ndiscon:" .$dsc2;
			//echo "\n" .$subtotal2;				
		}elseif($item2=='seagate' && !empty($qty2)) {
			if ($size2=='1') {
				$price2=51;
			}elseif ($size2=='2') {
				$price2=73;
			}elseif ($size2=='4') {
				$price2=152;
			}	
			$subtotal2=($price2*$qty2)-(($dsc2/100)*($price2*$qty2));
			//echo $subtotal2;		
		}//akhir item2

		if ($item3=='toshiba' && !empty($qty3)) {
			if ($size3=='1') {
				$price3=52;
			}elseif ($size3=='2') {
				$price3=75;
			}elseif ($size3=='4') {
				$price3=150;
			}	
			$subtotal3=($price3*$qty3)-(($dsc3/100)*($price3*$qty3));
			//echo $price;
			//echo "\nprice x qty:" .$price*$qty3;

			//echo "\nqty" .$qty3;
			//echo "\ndiscon:" .$dsc3;
			//echo "\n" .$subtotal3;		
		}elseif($item3=='samsung' && !empty($qty3)) {
			if ($size3=='1') {
				$price3=50;
			}elseif ($size3=='2') {
				$price3=70;
			}elseif ($size3=='4') {
				$price3=145;
			}	
			$subtotal3=($price3*$qty3)-(($dsc3/100)*($price3*$qty3));
			//echo $price;
			//echo "\nprice x qty:" .$price*$qty3;

			//echo "\nqty" .$qty3;
			//echo "\ndiscon:" .$dsc3;
			//echo "\n" .$subtotal3;			
		}elseif($item3=='seagate' && !empty($qty3)) {
			if ($size3=='1') {
				$price3=51;
			}elseif ($size3=='2') {
				$price3=73;
			}elseif ($size3=='4') {
				$price3=152;
			}		
			$subtotal3=($price3*$qty3)-(($dsc3/100)*($price3*$qty3));
			//echo $subtotal3;	
		}//akhir item3
		$total=$subtotal1+$subtotal2+$subtotal3;
		$pajak=$total*(10/100);
		$bayar=$total+$pajak;
		//echo "Total:".$total;
		//echo "Pajak:".$pajak;
		//echo "Bayar:".$bayar;

		//tulis kefile
		$fh = fopen("struk.txt","w");

		if(!$fh){
			die("File tidak dapat dibuka");
		}

		fwrite($fh, str_pad('BL Store', 50, " ", STR_PAD_BOTH));
		fwrite($fh, "\n".str_pad('1911601100_Satria_Ardi_Perdana', 50, " ", STR_PAD_BOTH));
		fwrite($fh, "\n".str_pad('+==========+=====+=====+=======+=====+==========+', 100, " "));
		fwrite($fh, "\n".str_pad('|   Item   |Size | Qty | Price | Dsc | SubTotal |', 100, " "));
		fwrite($fh, "\n".str_pad('+==========+=====+=====+=======+=====+==========+', 100, " "));
		if(!empty($qty1)){
		 fwrite($fh, "\n".str_pad('|'.$item1.'   | '.$size1.'TB |  '.$qty1.'  | '.$price1.'   | '.$dsc1.'   |  '.number_format($subtotal1, 2).'    |', 100, " "));
		}
		if(!empty($qty2)){
		 fwrite($fh, "\n".str_pad('|'.$item2.'   | '.$size2.'TB |  '.$qty2.'  | '.$price2.'   | '.$dsc2.'   |  '.number_format($subtotal2, 2).'    |', 100, " "));
		}
		if(!empty($qty3)){
		 fwrite($fh, "\n".str_pad('|'.$item3.'   | '.$size3.'TB |  '.$qty3.'  | '.$price3.'   | '.$dsc3.'   |  '.number_format($subtotal3, 2).'    |', 100, " "));
		}
		fwrite($fh, "\n".str_pad('+==========+=====+=====+=======+=====+==========+', 100, " "));
		fwrite($fh, "\n".str_pad('Total: '.number_format($total, 2).' ', 100, " "));
		fwrite($fh, "\n".str_pad('Pajak: '.number_format($pajak, 2).' ', 100, " "));
		fwrite($fh, "\n".str_pad('Bayar: '.number_format($bayar, 2).' ', 100, " "));
		//fwrite($fh, str_pad('12346789123', 12, " "));

		fclose($fh);
		
	}//akhir isset($_POST['submit'])


?>