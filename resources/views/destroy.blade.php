<!DOCTYPE html>
<html>
<body>


<h2>Cancel Bokking</h2>

<form  method="post" class="delete_form" > 
  <input type="text" name="_method" value="">
  <br>
  Enter Your Mail:<br>
  <input type="text" name="Enter Your Mail" value="">
  <br><br>
						<input type="submit" value="Book Now" onclick="showId()">
  
</form> 




</body>
</html>




<script type="text/javascript">
	console.log("Test");
   	function showId(){
        alert("your id is "+{{ $ids }});
    }
</script>

