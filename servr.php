<?php
// $conn = mysqli_connect('localhost','root','','gamers side');
$conn = mysqli_connect('localhost','socidtzt_gamerside','3ZQZj6Q^rXa+','socidtzt_gamerside');
if($conn){
	$sql= "SELECT * FROM comment limit 1";
	
	$results=mysqli_query($conn, $sql);
	
	$row=mysqli_fetch_row($results);
	if($row){
		// echo $row[0];
		// echo "<br>";
		// echo $row[1];
		// echo"<br>";
		$id=$row[0];
		$dltCmnd="DELETE FROM comment WHERE id=$id";
		$data=mysqli_query($conn, $dltCmnd);
		
		
	}else{
		header("Location: http://www.example.com/another-page.php");
	}
	

} else{
	echo "Not Connected";
}
?>
<!DOCTYPE html>
<html>
<body>

<!-- <p>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</p> -->

<input type="text" value="<?php echo"$row[1]" ?>" id="myInput">
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>

		
