<div class="col-md-3">
	<select class="form-control">
		<option>--Pilih Base--</option>
		<option>Sentani</option>
		<option>Nabire</option>
		<option>Jakarta</option>
	</select>
</div>

<div class="col-md-3">					
	<select class="form-control">
		<option>--Pilih Rack--</option>
		<option>A1</option>
		<option>A2</option>
		<option>A3</option>
		<option>A4</option>
		<option>B1</option>
		<option>B2</option>
		<option>B3</option>
		<option>B4</option>
	</select>
</div>
			
<div class="col-md-2">
	<button class="btn"><i class="fa fa-search"></i>Cari</button>
</div>
<br>
<br> 
<br>

<div class="col-md-12">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>No</th>
				<th>Part Name</th>
				<th>Part Number</th>
				<th>Serial Number</th>
			</tr>
		</thead>

		<tbody>
			<?php 
			$no=1;
			foreach ($data_parts as $row) 	
			{
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $row->name_part;?></td>
				<td><?php echo $row->part_number;?></td>
				<td><?php echo $row->serial_number;?></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>