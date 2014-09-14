<?php include('header.php'); ?>
		<div class="page-header">
			<h1>Dashboard</h1>
		</div>
		<!--/.page-header -->
		<div class="row">
			<div class="col-md-5">
				<img src="img/map.png" alt="">
			</div>
			<!-- /.col-md-4 -->
			<div class="col-md-7">
				<h3>Real-time Out-of-Range Value Detection<br><small>(นับตั้งแต่ 7.01 น. ของวันที่ 14 กันยายน 2557 จนถึงปัจจุบัน)</small></h3>
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#water" role="tab" data-toggle="tab">สถานีน้ำ</a></li>
					<li><a href="#rain" role="tab" data-toggle="tab">สถานีฝน</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="water">
						<table class="monitor-table table table-bordered table-condensed">
							<thead>
								<tr>
									<th width="60%">ชื่อสถานี</th>
									<th width="20%">เวลาล่าสุด</th>
									<th>จำนวนปัญหา</th>
								</tr>
							</thead>
							<tbody>
								<tr class="heading">
									<td colspan="4" class="text-center">ลุ่มน้ำปิง</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">สามเงา ต. วังหมัน อ. สามเงา จ. ตาก</a></td>
									<td>21:10</td>
									<td>19</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">สันทราย ต. แม่แฝก อ. สันทราย จ. เชียงใหม่</a></td>
									<td>20:00</td>
									<td>18</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">เมืองลำปาง ต. ต้นธงชัย อ. เมืองลำปาง จ. ลำปาง</a></td>
									<td>21:00</td>
									<td>18</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">ฮอด ต. หางดง อ. ฮอด จ. เชียงใหม่</a></td>
									<td>19:50</td>
									<td>5</td>
								</tr>
								<tr class="heading">
									<td colspan="4" class="text-center">ลุ่มน้ำสาละวิน</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">สวี2 ต.นาสัก อ.สวี จ.ชุมพร</a></td>
									<td>21:00</td>
									<td>25</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">เก้าเลี้ยว ต. หัวดง อ. เก้าเลี้ยว จ. นครสวรรค์</a></td>
									<td>21:00</td>
									<td>12</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">สามเงา ต. วังหมัน อ. สามเงา จ. ตาก</a></td>
									<td>21:10</td>
									<td>2</td>
								</tr>
							</tbody>
						</table>
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<div class="tab-pane" id="rain">
						<table class="monitor-table table table-bordered table-condensed">
							<thead>
								<tr>
									<th width="50%">ชื่อสถานี</th>
									<th>เวลา</th>
									<th>จำนวนปัญหา</th>
								</tr>
							</thead>
							<tbody>
								<tr class="heading">
									<td colspan="4" class="text-center">ลุ่มน้ำปิง</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">เมืองลำปาง ต. ต้นธงชัย อ. เมืองลำปาง จ. ลำปาง</a></td>
									<td>21:00</td>
									<td>20</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">ฮอด ต. หางดง อ. ฮอด จ. เชียงใหม่</a></td>
									<td>19:50</td>
									<td>18</td>
								</tr>
								<tr class="heading">
									<td colspan="4" class="text-center">ลุ่มน้ำสาละวิน</td>
								</tr>
								<tr>
									<td><a href="" data-toggle="modal" data-target="#detail">สวี2 ต.นาสัก อ.สวี จ.ชุมพร</a></td>
									<td>21:00</td>
									<td>15</td>
								</tr>
							</tbody>
						</table>
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
				<h3>รานงานของวันที่ 14 กันยายน 2557 (เมื่อวาน)</h3>
				<div class="row">
					<div class="col-sm-6">
						<h4>ข้อมูลน้ำ</h4>
						<img src="img/dashboard2.png" class="img-responsive" alt="">
					</div>
					<!-- /.col-sm-6 -->
					<div class="col-sm-6">
						<h4>ข้อมูลฝน</h4>
						<img src="img/dashboard2.png" class="img-responsive" alt="">
					</div>
					<!-- /.col-sm-6 -->
				</div>
				<!-- /.row -->
				<p>&nbsp;</p>
<?php include('footer.php'); ?>