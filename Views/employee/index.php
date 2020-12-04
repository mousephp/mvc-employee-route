



<div class="container">
	<h2><a href="?controller=employee&action=create" class="btn btn-success">Thêm employee</a></h2>
	
	<table class="table" border="1" cellpadding="0" cellspacing="0">
		<thead class="table-primary">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Employee type</th>
				<th>Tùy chọn</th>
			</tr>
		</thead>
		<tbody>
			<?php if (!empty($dsnv)){ ?>

				<?php foreach ($dsnv as $row): ?>		
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td>
							<?php echo ($row['sex']==2)? 'Nam' : 'Nu' ;?>

						</td>
						<td><?php echo ($row['employee_type']==0) ? 'Nhân viên hợp đồng' : 'Nhân viên chính thức'; ?></td>
						<td>
							<a href="index?controller=employee&action=edit&id=<?php  echo $row['id']; ?>">edit</a> |
							<a href="index?controller=employee&action=delete&id=<?php  echo $row['id']; ?>">delete</a>
						</td>
					</tr>
				<?php endforeach ?>

				<?php }else{ ?>
				<h2>không có bản ghi nào</h2>
			<?php } ?>
		</tbody>
	</table>
</div>