<?php 
    if(isset($_POST['res'])){
     $res = $_POST['disp'];
     $res = eval('return '.$res.';');
    }
   ?> 
   
<html>
<head>
<title>CALCULATOR</title>
<style>
input {
    background-color: black; 
    border: 10;
    color: white;
    width: 100%;
    padding: 10px 20px;
    text-align: center;
    font-size: 15px;
}
</style>
</head>
<body>
	<form name = "cal" method="post">
		<center>
		<h2> SIMPLE CALCULATOR USING PHP </h2>
		<table >
			<tr>
					<td colspan="3"><input type="text" name="disp"  value="<?php if(isset($res)){ echo $res;}?>"/></td>
					<td><input color="red" type="button" value="c" onclick="cal.disp.value = '' "/></td>
			</tr>
			
			<tr>
					<td><input type="button" value="7" onclick="cal.disp.value += '7' "/></td> 
					<td><input type="button" value="8" onclick="cal.disp.value += '8' "/></td> 
					<td><input type="button" value="9" onclick="cal.disp.value += '9' "/></td> 
					<td><input type="button" value="+" onclick="cal.disp.value += '+' "/></td> 
			</tr>
			
			<tr>
					<td><input type="button" value="4" onclick="cal.disp.value += '4' "/></td> 
					<td><input type="button" value="5" onclick="cal.disp.value += '5' "/></td> 
					<td><input type="button" value="6" onclick="cal.disp.value += '6' "/></td> 
					<td><input type="button" value="-" onclick="cal.disp.value += '-' "/></td> 
			</tr>
			
			<tr>
					<td><input type="button" value="1" onclick="cal.disp.value += '1' "/></td> 
					<td><input type="button" value="2" onclick="cal.disp.value += '2' "/></td> 
					<td><input type="button" value="3" onclick="cal.disp.value += '3' "/></td> 
					<td><input type="button" value="*" onclick="cal.disp.value += '*' "/></td> 
			</tr>
			
			<tr>
					<td><input type="button" value="." onclick="cal.disp.value += '.' "/></td> 
					<td><input type="button" value="0" onclick="cal.disp.value += '0' "/></td> 
					<td><input type="submit" value="=" name = "res" /></td> 
					<td><input type="button" value="/" onclick="cal.disp.value += '/' "/></td> 
			</tr>
			
								
		</table>
		</center>
	</form>
</body>
</html>
