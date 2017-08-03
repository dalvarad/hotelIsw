<!DOCTYPE html>
<html>
<head>
	<title>date</title>
	<link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset ('datetimepicker/jquery.datetimepicker.css')}}"/ >
	<script src="{{asset ('datetimepicker/jquery.js')}}"></script>
	<script src="{{asset ('datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>
</head>
<body>
<div align="center">
	<input id="datetimepicker" type="date" >

</div>
	<script type="text/javascript">
		jQuery('#datetimepicker').datetimepicker();
	</script>
</body>
</html>