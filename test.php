<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="java.js"></script>
</head>
<body>
<form action="test3.php" method="post">
	<div class="test">
		<div>
			<div>
				<input type="text" name="username" />
				<select name="selectf">
					<option value="1">1</option>
					<option value="2">1</option>
					<option value="3">1</option>
				</select>
				<input type="date" data-date="" data-date-format="DD MMMM YYYY"  id="today_datePicker" name="roomtill">
				<input type="time" name="checkinafter" value="12:00">
			</div>
		</div>
	</div>
	<div class="tr">
		<h1 name="heading" id="one" value="test">test</h1>
	</div>
	<div>
		<button type="submit" onclick="" name="log-submit">submit</button>
	</div>
</form>

<script type="text/javascript">
    var today = new Date();
    var tomorrow = new Date();
    tomorrow.setDate(today.getDate()+1);
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    var ndd = String(tomorrow.getDate()).padStart(2, '0');
    var nmm = String(tomorrow.getMonth() + 1).padStart(2, '0'); //January is 0!
    var nyyyy = tomorrow.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    tomorrow = nyyyy + '-' + nmm + '-' + ndd;
    document.getElementById('today_datePicker').value=today;
    document.getElementById('tomorrow_datePicker').value=tomorrow;
  </script>
</body>
</html>
