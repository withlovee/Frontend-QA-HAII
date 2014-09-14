<?php include('header.php'); ?>
		<div class="page-header">
			<h1 class="left">Daily Operations<br><small>แสดงปัญหาที่เกิดขึ้นตั้งแต่วันที่ 14 กันยายน 2557</small></h1>
			<div class="btn-group right">
				<a href="notifications2.php" class="btn btn-default">ดูปัญหาที่แก้ไขแล้ว</a>
				<a href="notifications.php" class="btn btn-default active">ดูปัญหาที่ยังไม่แก้ไข</a>
			</div>
			<div class="clear"></div>
		</div>
		<!--/.page-header -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#water" role="tab" data-toggle="tab">สถานีน้ำ</a></li>
			<li><a href="#rain" role="tab" data-toggle="tab">สถานีฝน</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="water">
				<form class="form-inline filters" role="form">
					<div class="form-group">
						<label for="">เลือกดูตาม</label>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ลุ่มแม่น้ำ</option>
							<option value="แม่น้ำแม่กลอง">แม่น้ำแม่กลอง</option>
							<option value="แม่น้ำท่าจีน">แม่น้ำท่าจีน</option>
							<option value="แม่น้ำเพชรบุรี">แม่น้ำเพชรบุรี</option>
							<option value="แม่น้ำสาละวิน">แม่น้ำสาละวิน</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">จังหวัด</option>
							<option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>						</select>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">รหัสสถานี</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ปัญหาทุกประเภท</option>
							<option value="">Out-of-Range (BD)</option>
							<option value="">Flat Value (FV)</option>
							<option value="">Missing Gap (MG)</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Go</button>
				</form>
				<table class="monitor-table table table-bordered table-condensed">
					<thead>
						<tr>
							<th width="35%">ชื่อสถานี</th>
							<th>วันที่</th>
							<th>เวลา</th>
							<th>ประเภทของปัญหา</th>
							<th>ค่าที่มีปัญหา</th>
							<th>ใช่ปัญหา</th>
							<th>ไม่ใช่ปัญหา</th>
						</tr>
					</thead>
					<tbody>
						<tr class="heading">
							<td colspan="7" class="text-center">ลุ่มน้ำปิง</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สามเงา ต. วังหมัน อ. สามเงา จ. ตาก</a></td>
							<td>2014-09-14</td>
							<td>21:10</td>
							<td>Out-of-Range</td>
							<td>2.36</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สันทราย ต. แม่แฝก อ. สันทราย จ. เชียงใหม่</a></td>
							<td>2014-09-14</td>
							<td>20:00</td>
							<td>Flat Value</td>
							<td>0.43</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">เมืองลำปาง ต. ต้นธงชัย อ. เมืองลำปาง จ. ลำปาง</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Out-of-Range</td>
							<td>0.62</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">ฮอด ต. หางดง อ. ฮอด จ. เชียงใหม่</a></td>
							<td>2014-09-14</td>
							<td>19:50</td>
							<td>Missing Gap</td>
							<td>0.86</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr class="heading">
							<td colspan="7" class="text-center">ลุ่มน้ำสาละวิน</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สวี2 ต.นาสัก อ.สวี จ.ชุมพร</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Out-of-Range</td>
							<td>0.86</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">เก้าเลี้ยว ต. หัวดง อ. เก้าเลี้ยว จ. นครสวรรค์</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Out-of-Range</td>
							<td>4.52</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สามเงา ต. วังหมัน อ. สามเงา จ. ตาก</a></td>
							<td>2014-09-14</td>
							<td>21:10</td>
							<td>Out-of-Range</td>
							<td>2.36</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="rain">
				<form class="form-inline filters" role="form">
					<div class="form-group">
						<label for="">เลือกดูตาม</label>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ลุ่มแม่น้ำ</option>
							<option value="แม่น้ำแม่กลอง">แม่น้ำแม่กลอง</option>
							<option value="แม่น้ำท่าจีน">แม่น้ำท่าจีน</option>
							<option value="แม่น้ำเพชรบุรี">แม่น้ำเพชรบุรี</option>
							<option value="แม่น้ำสาละวิน">แม่น้ำสาละวิน</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ภูมิภาค</option>
							<option value="กลาง">ภาคกลาง</option>
							<option value="ตะวันตก">ภาคตะวันตก</option>
							<option value="ตะวันออก">ภาคตะวันออก</option>
							<option value="ตะวันออกเฉียงเหนือ">ภาคตะวันออกเฉียงเหนือ</option>
							<option value="ใต้">ภาคใต้</option>
							<option value="เหนือ">ภาคเหนือ</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">จังหวัด</option>
							<option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>						</select>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">รหัสสถานี</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ปัญหาทุกประเภท</option>
							<option value="">Out-of-Range (BD)</option>
							<option value="">Flat Value (FV)</option>
							<option value="">Missing Gap (MG)</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Go</button>
				</form>
				<table class="monitor-table table table-bordered table-condensed">
					<thead>
						<tr>
							<th width="35%">ชื่อสถานี</th>
							<th>วันที่</th>
							<th>เวลา</th>
							<th>ประเภทของปัญหา</th>
							<th>ค่าที่มีปัญหา</th>
							<th>ใช่ปัญหา</th>
							<th>ไม่ใช่ปัญหา</th>
						</tr>
					</thead>
					<tbody>
						<tr class="heading">
							<td colspan="7" class="text-center">ลุ่มน้ำสาละวิน</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">เมืองกำแพงเพชร ต. ลานดอกไม้ อ. เมืองกำแพงเพชร จ. กำแพงเพชร</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Missing Gap</td>
							<td>1.34</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">เก้าเลี้ยว ต. หัวดง อ. เก้าเลี้ยว จ. นครสวรรค์</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Flat Value</td>
							<td>4.52</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สวี2 ต.นาสัก อ.สวี จ.ชุมพร</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Out-of-Range</td>
							<td>0.86</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr class="heading">
							<td colspan="7" class="text-center">ลุ่มน้ำปิง</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">สันทราย ต. แม่แฝก อ. สันทราย จ. เชียงใหม่</a></td>
							<td>2014-09-14</td>
							<td>20:00</td>
							<td>Flat Value</td>
							<td>0.43</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">ฮอด ต. หางดง อ. ฮอด จ. เชียงใหม่</a></td>
							<td>2014-09-14</td>
							<td>19:50</td>
							<td>Missing Gap</td>
							<td>0.86</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="" data-toggle="modal" data-target="#detail">เมืองลำปาง ต. ต้นธงชัย อ. เมืองลำปาง จ. ลำปาง</a></td>
							<td>2014-09-14</td>
							<td>21:00</td>
							<td>Out-of-Range</td>
							<td>0.62</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
									<span class="text">Error</span>
								</a>
							</td>
							<td>
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
									<span class="text">Not Error</span>
								</a>
							</td>
						</tr>
					</tbody>
				</table>				
			</div>
		</div>

<div class="modal fade" id="detail">
	<div class="modal-dialog large">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">ข้อมูลระดับน้ำของสถานีสวี2 (SVI002)</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<dl class="dl-horizontal dl-space">
							<dt>สถานี</dt><dd>สวี2 (SVI002)</dd>
							<dt>ตำบล</dt><dd>นาสัก</dd>
							<dt>อำเภอ</dt><dd>สวี</dd>
							<dt>จังหวัด</dt><dd>ชุมพร</dd>
							<dt>ภูมิภาค</dt><dd>ใต้</dd>
							<dt>ลุ่มแม่น้ำ</dt><dd>แม่น้ำป่าสัก</dd>
						</dl>
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-9">
					<img src="img/graph.png" alt="">
						
					</div>
					<!-- /.col-md-9 -->
				</div>
				<!-- /.row -->
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php include('footer.php'); ?>