<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<? echo '<link rel="stylesheet" type="text/css" href="' . base_url() . '/assets/stylesheets/admin.css">' ?>

	<? echo '<script type="text/javascript" src="' . base_url() . '/assets/js/jquery-2.1.4.min.js"></script>' ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Login</h2>
			<div class="col-xs-4 col-xs-offset-4">
				<div id="form-login">
					<?= form_open("cSesion/login") ?>
						<div class="form-group col-sm-12">
							<label for="txtNickname">Nickname </label>
		                    		<input id="txtNickname" name="txtNickname" class="form-control" maxlenght="50" placeholder="Nickname" type="text" required />
		                   	</div>

		                   	<div class="form-group col-sm-12">
							<label for="txtPassword">Password: </label>
		                    		<input id="txtPassword" name="txtPassword" class="form-control" maxlenght="50" placeholder="Password" type="pass" required />
		                   	</div>

		                   	<div class="clearfix"></div>

		                   	<input type="submit" class="btn btn-success" value="Submit"/>
		                   	<input type="reset" class="btn btn-warning" value="Clear"/>
		                   	<a href="<? echo base_url() ?>index.php/formulario/index" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Back</a>
	                   	<?= form_close() ?>

	                   	<div id="error">
						<? echo validation_errors(); ?>
					</div>
		            </div>
			</div>
		</div>
	</div>
</body>
</html>
