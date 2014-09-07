<?php include('header.php'); ?>
<link rel="stylesheet" href="js/jqGrid/css/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="js/jqGrid/css/ui.jqgrid.css">
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jqGrid/js/i18n/grid.locale-en.js"></script>
<script src="js/jqGrid/js/jquery.jqGrid.min.js"></script>
		<div class="page-header">
			<h1 class="left">Settings</h1>
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
				</div>
				<div id="div1" class="table-full" style="width:100%"></div>
				<table id="list48"></table>
				<div id="plist48"></div>
				<button id="edit">Edit</button>
<script>
var mydata = [
		{action:"", id:"BKK1",gapmax:"14",flatmax:"1",note:"note",boundmin:"10.00",total:"2111.00"} ,
		{action:"", id:"BKK2",gapmax:"15",flatmax:"12",note:"note2",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK3",gapmax:"11",flatmax:"13",note:"note3",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK4",gapmax:"14",flatmax:"1",note:"note",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK5",gapmax:"15",flatmax:"12",note:"note2",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK6",gapmax:"16",flatmax:"13",note:"note3",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK7",gapmax:"14",flatmax:"1",note:"note",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK8",gapmax:"13",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"21.00",total:"320.00"},
		{action:"", id:"BKK9",gapmax:"11",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK11",gapmax:"11",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK12",gapmax:"12",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK13",gapmax:"11",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK14",gapmax:"14",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK15",gapmax:"15",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK16",gapmax:"16",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK17",gapmax:"14",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK18",gapmax:"13",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK19",gapmax:"11",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK21",gapmax:"11",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK22",gapmax:"12",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK23",gapmax:"11",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK24",gapmax:"14",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK25",gapmax:"15",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK26",gapmax:"16",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"},
		{action:"", id:"BKK27",gapmax:"14",flatmax:"1",note:"note",boundmax:"200.00",boundmin:"10.00",total:"210.00"},
		{action:"", id:"BKK28",gapmax:"13",flatmax:"12",note:"note2",boundmax:"300.00",boundmin:"20.00",total:"320.00"},
		{action:"", id:"BKK29",gapmax:"11",flatmax:"13",note:"note3",boundmax:"400.00",boundmin:"30.00",total:"430.00"}
	];
table = jQuery("#list48");
lastSel = null;
table.jqGrid({
	data: mydata,
	datatype: "local",
	height: 'auto',
	rowNum: 30,
	rowList: [10,20,30],
	colNames:[
	'แก้ไข',
	'รหัส',
	'Maximum gap day', 
	'Maximum flat day', 
	'Minimum value',
	'Maximum value',
	'Outsource difference',
	'EPS',
	'Merge gap',
	'Minimum day',
	'EPS',
	'minPts'
	],
	viewrecords: true,
	colModel:[
		{name:'action', width:35, index:'action', sortable:false, formatter: displayButtons},
		{name:'id',index:'id', width:60, sorttype:"string"},
		{name:'gapmax',index:'gapmax', width:50, sorttype:"int", editable:true},
		{name:'flatmax',index:'flatmax', width:50, editable:true},
		{name:'boundmin',index:'boundmin', width:50, sorttype:"float", formatter:"number", editable:true},
		{name:'boundmax',index:'boundmax', width:50, sorttype:"float", editable:true},		
		{name:'bounddiff',index:'total', width:50,sorttype:"int", editable:true},
		{name:'missingeps',index:'missingeps', width:50, sorttype:"float", editable:true},
		{name:'missinggap',index:'missinggap', width:50, sorttype:"int", editable:true},
		{name:'missingday',index:'missingday', width:50, sorttype:"int", editable:true},
		{name:'outliereps',index:'outliereps', width:50, sorttype:"float", editable:true},
		{name:'outliermin',index:'outliermin', width:50, sorttype:"int", editable:true},
	],
	width: 1000,
	pager: "#plist48",
	viewrecords: true,
	sortname: 'name',
	grouping:false,
	groupingView : {
		groupField : ['name']
	},
	caption: "",
	editurl:"someurl.php",
});
function displayButtons(cellvalue, options, rowObject) {
	return "<input type='button' value='Edit' onclick=\"edit('" + options.rowId + "');\"  />";
	// console.log(options);
	// var edit = "<input style='...' type='button' value='Edit' onclick=\"jQuery('#list48').editRow('" + options.rowId + "');\"  />", 
	// 	 save = "<input style='...' type='button' value='Save' onclick=\"jQuery('#list48').saveRow('" + options.rowId + "');\"  />", 
	// 	 restore = "<input style='...' type='button' value='Restore' onclick=\"jQuery('#list48').restoreRow('" + options.rowId + "');\" />";
	// return edit+save+restore;
}
table.jqGrid('setGroupHeaders', {
	useColSpanStyle: false, 
	groupHeaders:[
		{startColumnName: 'gapmax', numberOfColumns: 1, titleText: 'Missing Gap'},
		{startColumnName: 'flatmax', numberOfColumns: 1, titleText: 'Flat Value'},
		{startColumnName: 'boundmin', numberOfColumns: 3, titleText: 'Boundary'},
		{startColumnName: 'missingeps', numberOfColumns: 3, titleText: 'Missing Pattern'},
		{startColumnName: 'outliereps', numberOfColumns: 2, titleText: 'Outlier'},
	],
});
function edit(id){
	console.log(id);
	/* Doc: http://www.trirand.com/jqgridwiki/doku.php?id=wiki:form_editing&s[]=editgridrow */
	jQuery("#list48").jqGrid('editGridRow',id,{
		height: "435",
		reloadAfterSubmit: true,
		width: "400"
	});
}
</script>
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
				</div>
				<p>!!! ตาราง !!!</p>
			</div>
			<p>&nbsp;</p>
<?php include('footer.php'); ?>