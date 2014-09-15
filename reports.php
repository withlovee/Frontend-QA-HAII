<?php include('header.php'); ?>
<link rel="stylesheet" href="css/watable.css">
<script src="js/jquery.watable.js"></script>
		<div class="page-header">
			<h1 class="left">Report Generation</h1>
			<div class="clear"></div>
		</div>
		<!--/.page-header -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#water" role="tab" data-toggle="tab">สถานีน้ำ</a></li>
			<li><a href="#rain" role="tab" data-toggle="tab">สถานีฝน</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="water">
				<h3>สร้างรายงานใหม่</h3>
				<form class="filters" role="form">
					<div class="form-inline" style="display:none">
						<div class="form-group">
							<label for="">เลือกเฉพาะ</label>
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
							<label for="">ส่งรายงานไปที่</label>
							<input type="email" class="form-control" placeholder="vibhavee.t@gmail.com">
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
					</div>
					<p></p>
					<div class="form-inline">
						<div class="form-group">
							<label for="">ส่งรายงานไปที่</label>
							<input type="email" class="form-control" placeholder="vibhavee.t@gmail.com">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Go</button>
						</div>
					</div>
				</form>
				<p>** รายงานจะถูกส่งไปที่อีเมล์ที่ท่านกรอกไว้ทันที่ระบบทำงานเสร็จ</p>
				<h3>รายงานเดือนสิงหาคม 2557</h3>
				<div id="div1" class="table-full" style="width:100%"></div>
				<button type="submit" class="btn btn-lg btn-primary">Download (CSV)</button>
				<p>&nbsp;</p>
			</div>
			<div class="tab-pane" id="rain">
				<h3>สร้างรายงานใหม่</h3>
				<form class="filters" role="form">
					<div class="form-inline" style="display: none;">
						<div class="form-group">
							<label for="">เลือกเฉพาะ</label>
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
							<label for="">ส่งรายงานไปที่</label>
							<input type="email" class="form-control" placeholder="vibhavee.t@gmail.com">
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
					</div>
					<p></p>
					<div class="form-inline">
						<div class="form-group">
							<label for="">ส่งรายงานไปที่</label>
							<input type="email" class="form-control" placeholder="vibhavee.t@gmail.com">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Go</button>
						</div>
					</div>
				</form>
				<p>!!! ตาราง !!!</p>
			</div>
<script type="text/javascript">
				$(document).ready( function() {

					//An example with all options.
					 var waTable = $('#div1').WATable({
						debug:true,                 //Prints some debug info to console
						pageSize: 20,                //Initial pagesize
						transition: 'fade',       //Type of transition when paging (bounce, fade, flip, rotate, scroll, slide).Requires https://github.com/daneden/animate.css.
						transitionDuration: 0.1,    //Duration of transition in seconds.
						filter: true,               //Show filter fields
						sorting: true,              //Enable sorting
						sortEmptyLast:true,         //Empty values will be shown last
						columnPicker: true,         //Show the columnPicker button
						pageSizes: [10,50,100,"All"],  //Set custom pageSizes. Leave empty array to hide button.
						hidePagerOnEmpty: true,     //Removes the pager if data is empty.
						checkboxes: false,           //Make rows checkable. (Note. You need a column with the 'unique' property)
						checkAllToggle:true,        //Show the check-all toggle
						preFill: true,              //Initially fills the table with empty rows (as many as the pagesize).
						//url: '/someWebservice'    //Url to a webservice if not setting data manually as we do in this example
						//urlData: { report:1 }     //Any data you need to pass to the webservice
						//urlPost: true             //Use POST httpmethod to webservice. Default is GET.
						types: {                    //Following are some specific properties related to the data types
							string: {
								//filterTooltip: "Giggedi..."    //What to say in tooltip when hoovering filter fields. Set false to remove.
								//placeHolder: "Type here..."    //What to say in placeholder filter fields. Set false for empty.
							},
							number: {
								decimals: 1   //Sets decimal precision for float types
							},
							bool: {
								//filterTooltip: false
							},
							date: {
							  utc: true,            //Show time as universal time, ie without timezones.
							  //format: 'yy/dd/MM',   //The format. See all possible formats here http://arshaw.com/xdate/#Formatting.
							  datePicker: true      //Requires "Datepicker for Bootstrap" plugin (http://www.eyecon.ro/bootstrap-datepicker).
							}
						},
						actions: false,
						// {                //This generates a button where you can add elements.
						//     filter: false,         //If true, the filter fields can be toggled visible and hidden.
						//     columnPicker: false,   //if true, the columnPicker can be toggled visible and hidden.
						//     custom: [             //Add any other elements here. Here is a refresh and export example.
						//       // $('<a href="#" class="refresh"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a>'),
						//       // $('<a href="#" class="export_all"><span class="glyphicon glyphicon-share"></span>&nbsp;Export all rows</a>'),
						//       // $('<a href="#" class="export_checked"><span class="glyphicon glyphicon-share"></span>&nbsp;Export checked rows</a>'),
						//       // $('<a href="#" class="export_filtered"><span class="glyphicon glyphicon-share"></span>&nbsp;Export filtered rows</a>')
						//     ]
						// },
						tableCreated: function(data) {    //Fires when the table is created / recreated. Use it if you want to manipulate the table in any way.
							console.log('table created'); //data.table holds the html table element.
							console.log(data);            //'this' keyword also holds the html table element.
						},
						rowClicked: function(data) {      //Fires when a row is clicked (Note. You need a column with the 'unique' property).
							console.log('row clicked');   //data.event holds the original jQuery event.
							console.log(data);            //data.row holds the underlying row you supplied.
														  //data.column holds the underlying column you supplied.
														  //data.checked is true if row is checked.
														  //'this' keyword holds the clicked element.
							if ( $(this).hasClass('userId') ) {
							  data.event.preventDefault();
							  alert('You clicked userId: ' + data.row.userId);
							}
						},
						columnClicked: function(data) {    //Fires when a column is clicked
						  console.log('column clicked');  //data.event holds the original jQuery event
						  console.log(data);              //data.column holds the underlying column you supplied
														  //data.descending is true when sorted descending (duh)
						},
						pageChanged: function(data) {      //Fires when manually changing page
						  console.log('page changed');    //data.event holds the original jQuery event
						  console.log(data);              //data.page holds the new page index
						},
						pageSizeChanged: function(data) {  //Fires when manually changing pagesize
						  console.log('pagesize changed');//data.event holds teh original event
						  console.log(data);              //data.pageSize holds the new pagesize
						}
					}).data('WATable');  //This step reaches into the html data property to get the actual WATable object. Important if you want a reference to it as we want here.

					//Generate some data
					var data = getData();
					waTable.setData(data);  //Sets the data.
					//waTable.setData(data, true); //Sets the data but prevents any previously set columns from being overwritten
					//waTable.setData(data, false, false); //Sets the data and prevents any previously checked rows from being reset

					var allRows = waTable.getData(false); //Gets the data you previously set.
					var checkedRows = waTable.getData(true); //Gets the data you previously set, but with checked rows only.
					var filteredRows = waTable.getData(false, true); //Gets the data you previously set, but with filtered rows only.

					var pageSize = waTable.option("pageSize"); //Get option
					//waTable.option("pageSize", pageSize); //Set option

					//Example event handler triggered by the custom refresh link above.
					$('body').on('click', '.refresh', function(e) {
						e.preventDefault();
						var data = getData();
						waTable.setData(data, true);
					});
					//Example event handler triggered by the custom export links above.
					$('body').on('click', '.export_checked, .export_filtered, .export_all', function(e) {
						e.preventDefault();
						var elem = $(e.target);
						var data;
						if (elem.hasClass('export_all')) data = waTable.getData(false);
						else if (elem.hasClass('export_checked')) data = waTable.getData(true);
						else if (elem.hasClass('export_filtered')) data = waTable.getData(false, true);
						console.log(data.rows.length + ' rows returned');
						console.log(data);
						alert(data.rows.length + ' rows returned.\nSee console for details.');
					});

				});

				//Generates some data. This step is of course normally done by your web server.
				function getData() {

					//First define the columns
					var cols = {
						id: {
							index: 1, //The order this column should appear in the table
							type: "number",
							sortOrder: "asc",
							unique: true,
							friendly: "ID",
						},
						stationId: {
							index: 1, //The order this column should appear in the table
							type: "string", //The type. Possible are string, number, bool, date(in milliseconds).
							friendly: "รหัสสถานี",  //Name that will be used in header. Can also be any html as shown here.
							// format: "<a href='#' class='userId' target='_blank'>{0}</a>",  //Used to format the data anything you want. Use {0} as placeholder for the actual data.
							unique: true,  //This is required if you want checkable rows, or to use the rowClicked callback. Be certain the values are really unique or weird things will happen.
							// sortOrder: "asc", //Data will initially be sorted by this column. Possible are "asc" or "desc"
							tooltip: false,
							placeHolder: "BKK001"
						},
						stationName: {
							index: 2,
							type: "string",
							friendly: "ชื่อสถานี",
							tooltip: false, //Show some additional info about column
							placeHolder: "กรุงเทพ1" //Overrides default placeholder and placeholder specified in data types(row 34).
						},
						num: {
							index: 3,
							type: "string",
							friendly: "จำนวนข้อมูล",
							hidden: false,
							sorting: false, //dont allow sorting
							filter: false //Removes filter field for this column
						},
						bd: {
							index: 4,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Out-of-Range",
							placeHolder: "1..20",
						},
						fv: {
							index: 5,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Flat Value",
							placeHolder: "1..20",
						},
						mg: {
							index: 6,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Missing Gap",
							placeHolder: "1..20",
						},
						ol: {
							index: 7,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Outlier",
							placeHolder: "1..20",
						},
						hm: {
							index: 8,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Homogeneity",
							placeHolder: "1..20",
						},
						mp: {
							index: 7,
							type: "number",
							decimals: 2, //Force decimal precision
							friendly: "Missing Pattern",
							placeHolder: "1..20",
						}
					};

					/*
					  Create the actual data.
					  Whats worth mentioning is that you can use a 'format' property just as in the column definition,
					  but on a row level. See below on how we create a weightFormat property. This will be used when rendering the weight column.
					  Also, you can pre-check rows with the 'checked' property and prevent rows from being checkable with the 'checkable' property.
					*/
					var rows = [];
					var i = 1;
					while(i <= 1000)
					{
						var bd = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var fv = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var mg = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var ol = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var hm = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var mp = (Math.floor(Math.random()*6)+1) + (Math.floor(Math.random()*100)/100);
						var bdClass = bd <4 ? 'green' : bd <50 && bd >=4 ? 'yellow' : 'red';
						var fvClass = fv <4 ? 'green' : fv <50 && fv >=4 ? 'yellow' : 'red';
						var mgClass = mg <4 ? 'green' : mg <50 && mg >=4 ? 'yellow' : 'red';
						var olClass = ol <4 ? 'green' : ol <50 && ol >=4 ? 'yellow' : 'red';
						var hmClass = hm <4 ? 'green' : hm <50 && hm >=4 ? 'yellow' : 'red';
						var mpClass = mp <4 ? 'green' : mp <50 && mp >=4 ? 'yellow' : 'red';

						//We leave some fields intentionally undefined, so you can see how sorting/filtering works with these.
						var doc = {
							id: i,
							stationId: "BKK"+i,
							stationName: "กรุงเทพ"+i,
							num: Math.floor(Math.random()*200000).toLocaleString(),
							bd: bd,
							bdFormat:  "<div class='" + bdClass + "'>{0}</div>",
							fv: fv,
							fvFormat:  "<div class='" + fvClass + "'>{0}</div>",
							mg: mg,
							mgFormat:  "<div class='" + mgClass + "'>{0}</div>",
							ol: ol,
							olFormat:  "<div class='" + olClass + "'>{0}</div>",
							hm: hm,
							hmFormat:  "<div class='" + hmClass + "'>{0}</div>",
							mp: mp,
							mpFormat:  "<div class='" + mpClass + "'>{0}</div>",
						};
						rows.push(doc);
						i++;
					}

					//Create the returning object. Besides cols and rows, you can also pass any other object you would need later on.
					var data = {
						cols: cols,
						rows: rows,
						otherStuff: {
							thatIMight: 1,
							needLater: true
						}
					};

					return data;
				}
			</script>
<?php include('footer.php'); ?>