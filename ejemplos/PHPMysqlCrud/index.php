<?php include("db.php")?>
<?php include("includes/header.php")?>
<!--
	comando Emmet
.container.p-4>.row>(.col-md-4>.card.card-body>form>.form-group>imput.form-comtrol)+.col-md-8
-->
<main class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php  if(isset($_SESSION['message'])){  ?>
                  <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                  	<?= $_SESSION['message']?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
            <?php session_unset();} ?>


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
		<div class="col-md-8">
			<!-- table.table.table-bordered>thead>>tr>th*4 -->
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Title</th>
						<th>Desciption</th>
						<th>Create At</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$query = "SELECT * FROM task"; 
					$result_taks = mysqli_query($conn, $query);

					while($row = mysqli_fetch_array($result_taks)) { ?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['create_at']; ?></td>
					
						
						</tr>


					?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</main>

<?php include("includes/footer.php")?>


























