<?php include('header.php'); ?>
		<div class="page-header">
			<h1 class="left">Export</h1>
			<div class="clear"></div>
		</div>
		<!--/.page-header -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#water" role="tab" data-toggle="tab">สถานีน้ำ</a></li>
            <li><a href="#rain" role="tab" data-toggle="tab">สถานีฝน</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="water">
	    		<div class="filters">
	                <div class="form-inline">
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
	                            <option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>                        </select>
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
	                </div>
	                <p></p>
	                <div class="form-inline">
	                    <div class="form-group">
	                        <label for="">ตั้งแต่</label>
	                        <input type="date" class="form-control">
	                        <input type="time" class="form-control">
	                    </div>
	                    <div class="form-group">
	                        <label for="">ถึง</label>
	                        <input type="date" class="form-control">
	                        <input type="time" class="form-control">
	                    </div>
	                    <a href="export2.php" type="submit" class="btn btn-primary">Go</a>
	                </div>
	    		</div>
	            <p>&nbsp;</p>
	        </div>
            <div class="tab-pane" id="rain">
	    		<div class="filters">
	                <div class="form-inline">
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
	                            <option value="ตะวันตก">กาญจนบุรี</option><option value="ตะวันตก">ตาก</option><option value="ตะวันตก             ">ประจวบคีรีขันธ์</option><option value="ตะวันตก             ">เพชรบุรี</option><option value="ตะวันตก             ">ราชบุรี</option><option value="ตะวันออกเฉียงเหนือ  ">กาฬสินธุ์</option><option value="ตะวันออกเฉียงเหนือ  ">ขอนแก่น</option><option value="ตะวันออกเฉียงเหนือ  ">ชัยภูมิ</option><option value="ตะวันออกเฉียงเหนือ  ">นครพนม</option><option value="ตะวันออกเฉียงเหนือ  ">นครราชสีมา</option><option value="ตะวันออกเฉียงเหนือ  ">บึงกาฬ</option><option value="ตะวันออกเฉียงเหนือ  ">บุรีรัมย์</option><option value="ตะวันออกเฉียงเหนือ  ">มหาสารคาม</option><option value="ตะวันออกเฉียงเหนือ  ">มุกดาหาร</option><option value="ตะวันออกเฉียงเหนือ  ">ยโสธร</option><option value="ตะวันออกเฉียงเหนือ  ">ร้อยเอ็ด</option><option value="ตะวันออกเฉียงเหนือ  ">เลย</option><option value="ตะวันออกเฉียงเหนือ  ">ศรีสะเกษ</option><option value="ตะวันออกเฉียงเหนือ  ">สกลนคร</option><option value="ตะวันออกเฉียงเหนือ  ">สุรินทร์</option><option value="ตะวันออกเฉียงเหนือ  ">หนองคาย</option><option value="ตะวันออกเฉียงเหนือ  ">หนองบัวลำภู</option><option value="ตะวันออกเฉียงเหนือ  ">อำนาจเจริญ</option><option value="ตะวันออกเฉียงเหนือ  ">อุดรธานี</option><option value="ตะวันออกเฉียงเหนือ  ">อุบลราชธานี</option><option value="ใต้                 ">กระบี่</option><option value="ใต้                 ">ชุมพร</option><option value="ใต้                 ">ตรัง</option><option value="ใต้                 ">นครศรีธรรมราช</option><option value="ใต้                 ">นราธิวาส</option><option value="ใต้                 ">ปัตตานี</option><option value="ใต้                 ">พังงา</option><option value="ใต้                 ">พัทลุง</option><option value="ใต้                 ">ภูเก็ต</option><option value="ใต้                 ">ยะลา</option><option value="ใต้                 ">ระนอง</option><option value="ใต้                 ">สงขลา</option><option value="ใต้                 ">สตูล</option><option value="ใต้                 ">สุราษฎร์ธานี</option><option value="กลาง                ">กรุงเทพมหานคร</option><option value="กลาง                ">กำแพงเพชร</option><option value="กลาง                ">ชัยนาท</option><option value="กลาง                ">นครนายก</option><option value="กลาง                ">นครปฐม</option><option value="กลาง                ">นครสวรรค์</option><option value="กลาง                ">นนทบุรี</option><option value="กลาง                ">ปทุมธานี</option><option value="กลาง                ">พระนครศรีอยุธยา</option><option value="กลาง                ">พิจิตร</option><option value="กลาง                ">พิษณุโลก</option><option value="กลาง                ">เพชรบูรณ์</option><option value="กลาง                ">ลพบุรี</option><option value="กลาง                ">สมุทรปราการ</option><option value="กลาง                ">สมุทรสงคราม</option><option value="กลาง                ">สมุทรสาคร</option><option value="กลาง                ">สระบุรี</option><option value="กลาง                ">สิงห์บุรี</option><option value="กลาง                ">สุโขทัย</option><option value="กลาง                ">สุพรรณบุรี</option><option value="กลาง                ">อ่างทอง</option><option value="กลาง                ">อุทัยธานี</option><option value="กลาง                "></option><option value="ตะวันออก            ">จันทบุรี</option><option value="ตะวันออก            ">ฉะเชิงเทรา</option><option value="ตะวันออก            ">ชลบุรี</option><option value="ตะวันออก            ">ตราด</option><option value="ตะวันออก            ">ปราจีนบุรี</option><option value="ตะวันออก            ">ระยอง</option><option value="ตะวันออก            ">สระแก้ว</option><option value="เหนือ               ">เชียงราย</option><option value="เหนือ               ">เชียงใหม่</option><option value="เหนือ               ">น่าน</option><option value="เหนือ               ">พะเยา</option><option value="เหนือ               ">แพร่</option><option value="เหนือ               ">แม่ฮ่องสอน</option><option value="เหนือ               ">ลำปาง</option><option value="เหนือ               ">ลำพูน</option><option value="เหนือ               ">อุตรดิตถ์</option>                        </select>
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
	                </div>
	                <p></p>
	                <div class="form-inline">
	                    <div class="form-group">
	                        <label for="">ตั้งแต่</label>
	                        <input type="date" class="form-control">
	                        <input type="time" class="form-control">
	                    </div>
	                    <div class="form-group">
	                        <label for="">ถึง</label>
	                        <input type="date" class="form-control">
	                        <input type="time" class="form-control">
	                    </div>
	                    <button type="submit" class="btn btn-primary">Go</button>
	                </div>
	    		</div>
	            <p>&nbsp;</p>
            </div
<?php include('footer.php'); ?>