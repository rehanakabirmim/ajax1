<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 border border-success p-3 m-3">
				<div class="form-group mt-3">
					<label for="">First Number</label>
					<input type="text" class="form-control fNumber" >
				</div>
				<div class="form-group mt-3">
					<label for="">Second Number</label>
					<input type="text" class="form-control sNumber" >
				</div>
				<div class="form-group mt-3">
					<label for="">Result</label>
					<input type="text" class="form-control result">
				</div>
				<div class="form-group mt-3">
					<input type="submit" value="+" class="btn btn-info add">
					<input type="submit" value="/" class="btn btn-danger div">
					<input type="submit" value="*" class="btn btn-success mult">
					<input type="submit" value="-" class="btn btn-warning sub">
				</div>

			</div>
			<div class="col-md-8">
				<h1 id="res"></h1>
			</div>
		</div>
	</div>

	
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="ajax.js"></script>


</body>
</html>