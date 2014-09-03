<?php include('header.php'); ?>
		<div class="page-header">
			<h1 class="left">Monitor</h1>
			<div class="btn-group right">
				<a href="index2.php" class="btn btn-default">Flag ปัญหาแล้ว</a>
				<a href="index.php" class="btn btn-default active">ยังไม่ Flag ปัญหา</a>
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
							<option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก             ">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>						</select>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">อำเภอ</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ตำบล</option>
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
							<option value="">Boundary (BD)</option>
							<option value="">Flat Value (FV)</option>
							<option value="">Missing Gap (MG)</option>
							<option value="">Outlier (OL)</option>
							<option value="">Homogeneity (HM)</option>
							<option value="">Missing Pattern (MP)</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Go</button>
				</form>
				<div class="list-group updates">
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีป่าสัก2 (PAS002)</span>
										<span class="problem">Missing Gap</span>
										<span class="value">NA แก้เป็น 2.5</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีน่าน6 (NAN006)</span>
										<span class="problem">Boundary</span>
										<span class="value">0.86 แก้เป็น 1</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีชี1 (CHI001)</span>
										<span class="problem">Flat Value</span>
										<span class="value">111.91 แก้เป็น 100</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีป่าสัก2 (PAS002)</span>
										<span class="problem">Missing Gap</span>
										<span class="value">NA แก้เป็น 2.5</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีน่าน6 (NAN006)</span>
										<span class="problem">Boundary</span>
										<span class="value">0.86 แก้เป็น 1</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีชี1 (CHI001)</span>
										<span class="problem">Flat Value</span>
										<span class="value">111.91 แก้เป็น 100</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
				</div>
				<!-- /.list-group -->
			</div>
			<div class="tab-pane" id="rain">
				<form class="form-inline filters" role="form">
					<div class="form-group">
						<label for="">เลือกดูตาม</label>
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
							<option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก             ">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>						</select>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">อำเภอ</option>
						</select>
					</div>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">ตำบล</option>
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
							<option value="">Boundary (BD)</option>
							<option value="">Flat Value (FV)</option>
							<option value="">Missing Gap (MG)</option>
							<option value="">Outlier (OL)</option>
							<option value="">Homogeneity (HM)</option>
							<option value="">Missing Pattern (MP)</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Go</button>
				</form>
				<div class="list-group updates">
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีน่าน6 (NAN006)</span>
										<span class="problem">Boundary</span>
										<span class="value">0.86 แก้เป็น 1</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีชี1 (CHI001)</span>
										<span class="problem">Flat Value</span>
										<span class="value">111.91 แก้เป็น 100</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
					<div class="list-group-item unread" data-toggle="modal" data-target="#detail">
						<div class="wrapper">
							<div class="text-wrapper">
								<div class="status">
									<i class="glyphicon glyphicon-question-sign"></i>
								</div>
								<div class="content">
									<p class="list-group-item-text">2011-10-25 ถึง 2011-12-10 (66 วัน)</p>
									<p class="list-group-item-heading">
										<span class="station">สถานีชี1 (CHI001)</span>
										<span class="problem">Flat Value</span>
										<span class="value">111.91 แก้เป็น 100</span>
									</p>
								</div>
							</div>
							<div class="operations">
								<span class="text">Error</span>
								<span class="glyphicon glyphicon-remove"></span>
								<span class="text">Not Error</span>
								<span class="glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<!-- /.wrapper -->
					</div>
				</div>
				<!-- /.list-group -->
				
			</div>
		</div>

<div class="modal fade" id="detail">
	<div class="modal-dialog large">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">แก้ไขข้อมูลระดับน้ำของสถานีสวี2 (SVI002)</h4>
			</div>
			<div class="modal-body">
				<p class="text-center">
					<img src="img/graph.png" alt="">
				</p>
				<!-- /.text-center -->
				<div class="row">
					<div class="col-md-5">
						<h3>ข้อมูลของสถานี</h3>
						<dl class="dl-horizontal dl-space">
							<dt>สถานี</dt><dd>สวี2 (SVI002)</dd>
							<dt>ตำบล</dt><dd>นาสัก</dd>
							<dt>อำเภอ</dt><dd>สวี</dd>
							<dt>จังหวัด</dt><dd>ชุมพร</dd>
							<dt>ภูมิภาค</dt><dd>ใต้</dd>
						</dl>
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-7">
						<h3>ประวัติการแก้ไข</h3>
						<table class="table table-condensed">
							<thead>
								<tr>
									<td width="19%">ค่าเดิม</td>
									<td width="18%">ค่าที่แก้ไข</td>
									<td width="18%">วิธีแก้ไข</td>
									<td width="40%">เวลาที่แก้ไข</td>
									<td width="5%"></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>89.23</td>
									<td>1.2e+006</td>
									<td>Auto</td>
									<td>2014-08-28 14:26:05</td>
									<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
								<tr>
									<td>1.2e+006</td>
									<td>83</td>
									<td>Manual</td>
									<td>2014-08-28 16:20:15</td>
									<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
								<tr>
									<td>83</td>
									<td><input type="text" class="form-control input-sm" placeholder="ค่าใหม่"></td>
									<td>Manual</td>
									<td colspan="2"><input type="submit" class="btn btn-primary btn-sm" value="เพิ่ม"></td>
								</tr>
							</tbody>
						</table>
						<!-- /.table -->
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php include('footer.php'); ?>