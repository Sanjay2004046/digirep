<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered table-hover table-striped">
	<thead>
		<th>#</th>
		<th>Name</th>
		<th>Department</th>
		<th>Date</th>
		<th>Reason</th>
		<th>Status</th>
	</thead>
		<tbody>
		<?php 
			$sql = "SELECT * FROM leaves WHERE status = 1";
			$que = mysqli_query($con,$sql);
			$cnt = 1;
			while ($result = mysqli_fetch_assoc($que)) {
			?>

			
		<tr>
			<td><?php echo $cnt;?></td>
			<td><?php echo $result['name']; ?></td>
			<td><?php echo $result['department']; ?></td>
			<td><?php echo $result['leavedate']; ?></td>
			<td><?php echo $result['leavereason']; ?></td>
			<td>
				<?php 
				if ($result['status'] == 0) {
					echo "<span class='badge badge-warning'>Pending</span>";
				}
				if($result['status']==1){
					echo "<span class='badge badge-success'>Approved</span>";
				}
				if($result['status']==2){
					echo "<span class='badge badge-danger'>Rejected</span>";
				}
		$cnt++;	}
				?>
			</td>
		</tr>

		</tbody>
	</table>
</body>
</html>