<?php include("db.php")?>
<?php include("includes/header.php")?>
<!--
	comando Emmet
.container.p-4>.row>(.col-md-4>.card.card-body>form>.form-group>imput.form-comtrol)+.col-md-8
-->
<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-body">
				<form action="save_task.php" method="POST">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
						<textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
					</div>
					<!-- input:submit.btn.btn-success.btn-block -->
					<input type="submit" value="Save Task" class="btn btn-success btn-block" name="save_task">
				</form>
			</div>
		</div>
		<div class="col-md-8"></div>
	</div>
</div>

<?php include("includes/footer.php")?>


























