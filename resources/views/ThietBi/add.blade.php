@extends('layout.master')
@section('content')
<div class="page-wrapper" style="min-height: 667px;">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
<style>

input[type=text], input[type=date], input[type=number]{

width: 300px;

padding: 3px;

margin: 5px 0;

display: inline-block;

border: 1px solid #ccc;

border-radius: 4px;

box-sizing: border-box;



}

select[type=text]{

width: 300px;

padding: 5px;

margin: 5px 0;

display: inline-block;

border: 1px solid #ccc;

border-radius: 4px;

box-sizing: border-box;



background-color: #D8D8D8;

}

.btn{

width: 130px;

background-color: #009efb;

padding: 7px;

margin: 7px 0;

border: none;

border-radius: 4px;

cursor: pointer;

font-size: 20px;

opacity: 0.6;

margin-left: 5px;

}



.btn:hover {

opacity: 1;

color: white;

font-weight: bold;

}

.rgt1{

margin-top: 10px;

width: 130px;

background-color: #009efb;

height: 40px;

border: none;

border-radius: 4px;

cursor: pointer;

font-size: 20px;

opacity: 0.6;

margin-left: 5px;

text-align: center;

padding: 5px;

color: white;

}



.rgt1:hover{

opacity: 1;

}





.rgt_canl:hover{

opacity: 1;

text-decoration: none;

padding: 4px;

color: white;

}

.form-style-9{
max-width: 100%;
background: #FAFAFA;
padding: 30px;
margin: 50px auto;
box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
border-radius: 10px;
border: 6px solid #305A72;
}
.form-style-9 ul{
padding:0;
margin:0;
list-style:none;
}
.form-style-9 ul li{
display: block;
margin-bottom: 10px;
min-height: 35px;
}
.form-style-9 ul li  .field-style{
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
padding: 8px;
outline: none;
border: 1px solid #B0CFE0;
-webkit-transition: all 0.30s ease-in-out;
-moz-transition: all 0.30s ease-in-out;
-ms-transition: all 0.30s ease-in-out;
-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
box-shadow: 0 0 5px #B0CFE0;
border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
width: 30%;
}
.form-style-9 ul li .field-full{
width: 100%;
}
.form-style-9 ul li input.align-left{
float:left;
}
.form-style-9 ul li input.align-right{
float:right;
}
.form-style-9 ul li textarea{
width: 100%;
height: 100px;
}

.form-style-9 ul li input[type="button"],
.form-style-9 ul li input[type="submit"] {
-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
box-shadow: inset 0px 1px 0px 0px #3985B1;
background-color: #216288;
border: 1px solid #17445E;
display: inline-block;
cursor: pointer;
color: #FFFFFF;
padding: 8px 18px;
text-decoration: none;
font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover,
.form-style-9 ul li input[type="submit"]:hover {
background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
background-color: #28739E;
}





.form-style-10{
width:100%;
padding:15px;
margin:15px auto;
background: #FFF;
border-radius: 10px;
-webkit-border-radius:10px;
-moz-border-radius: 10px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
padding: 3px;
background: #E6E6E6;
border-radius: 3px;
margin-bottom: 3px;
}
.form-style-10 h1{
background: #2A88AD;
padding: 20px 30px 15px 30px;
margin: -30px -30px 30px -30px;
border-radius: 10px 10px 0 0;
-webkit-border-radius: 10px 10px 0 0;
-moz-border-radius: 10px 10px 0 0;
color: #fff;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
font: normal 30px 'Bitter', serif;
-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
display: block;
margin-top: 2px;
font: 13px Arial, Helvetica, sans-serif;
}


.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
display: block;
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
width: 100%;
padding: 8px;
border-radius: 6px;
-webkit-border-radius:6px;
-moz-border-radius:6px;
border: 2px solid #fff;
box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}
.form-style-10 input[type="button"],
.form-style-10 input[type="submit"]{
background: #2A88AD;
padding: 8px 20px 8px 20px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
color: #fff;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
font: normal 30px 'Bitter', serif;
-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
border: 1px solid #257C9E;
font-size: 15px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="submit"]:hover{
background: #2A6881;
-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
float: right;
width: 250px;
font: 12px Arial, Helvetica, sans-serif;
color: #4D4D4D;
margin-top: 10px;
text-align: right;
}

.form-style-10 label.deg{
width: 30%;
}
/*label {

font-size: 20px;

font-weight: bold;

padding: 2px;

background-color: #81DAF5;

border: solid 0px;

border-radius: 4px;

width: 150px;

text-align: center;

}*/

</style>



<div class="container">



<div class="form-style-10">
<h1>Nhập thông tin thiết bị<span>Technical information</span></h1>
<form action="" class="form-style-9" method="post">
<input type="hidden" name="_token" value="D5untuPId1tmOi2e1zlHxe7Bqa2drJrJmsxBzjF3">
<div class="inner-wrap">
<label>Tên thiết bị <span style="color: red">*</span></label>
<input type="text" name="name_device" required="">
</div>

<div class="inner-wrap">
 <label style="width: 30%">Nhóm thiết bị

    <select type="text" id="group" name="group">
      <option value="">Chọn nhóm thiết bị</option>
      <option value="N01">N01 Thiết bị chẩn đoán hình ảnh</option>
      <option value="N02">N02 Thiết bị hồi sức cấp cứu</option>
      <option value="N03">N03 Thiết bị lọc máu</option>
      <option value="N04">N04 Thiết bị phỏng mổ</option>
      <option value="N05">N05 Thiết bị chuyên khoa ung bướu và YHHN</option>
    </select>
  </label>

  <label style="width: 30%">Loại thiết bị


    <select class="field-style field-split align-right" id="searchDvt" type="text" name="device_type">

      <option value="">Chọn loại thiết bị</option>


      <option value="CPN01">Thiết bị chưa phân nhóm 01</option>


      <option value="CPN02">Thiết bị chưa phân nhóm 02</option>


      <option value="CPN03">Thiết bị chưa phân nhóm 03</option>


      <option value="CPN05">Thiết bị chưa phân nhóm 05</option>


      <option value="CPN04">Thiết bị chưa phân nhóm 04</option>


      <option value="CPN06">Thiết bị chưa phân nhóm 06</option>


    </select>
  </label>

  <label style="width: 30%">Mức độ rủi ro

    <select type="text" id="risk" name="risk">
      <option value="">Chọn mức độ rủi ro</option>

      <option value="A">A</option>

      <option value="B">B</option>

      <option value="C">C</option>

      <option value="D">D</option>

    </select>
  </label>
</div>

<div class="inner-wrap">
<label style="width: 30%">Số lượng<span style="color: red">*</span>
  <input type="text" name="number" required="">
</label>

<label style="width: 30%">Đơn vị<span style="color: red">*</span>

  <select type="text" id="unit" name="unit">
    <option value="">Chọn đơn vị</option>
    <option value="cai">cái</option>
    <option value="bo">bộ</option>
    <option value="hethong">hệ thống</option>

  </select>

</label>

<label style="width: 30%">Giá nhập
  <input type="text" name="price">
</label>
</div>

<div class="inner-wrap">

<label style="width: 30%">
    Serial<span style="color: red">*</span>
    <input type="text" name="serial" required="">
</label>

<label style="width: 30%">Model<span style="color: red">*</span>
  <input type="text" name="model" required="">
</label>

<label style="width: 30%">Nhà cung cấp
  <select type="text" name="provider">
    <option value="">Nhà cung cấp</option>
                            <option value="5">Công ty Phương Đông</option>
                <option value="7">Công ty Phương Tây</option>
                <option value="8">Công ty Phương Nam</option>
                <option value="9">Công ty Phương Bắc</option>
                <option value="10">Công ty cổ phần cồng nghệ Tây Bắc Á</option>
                <option value="11">Công ty TNHH Terumo Việt Nam</option>
                <option value="12">công ty TNHH khoáng sản Việt Nam</option>
                          </select>
</label>
</div>

<div class="inner-wrap">

<label style="width: 30%">Hãng sản xuất<span style="color: red">*</span>

  <input type="text" name="produce" required="">
</label>

<label style="width: 30%">Xuất xứ<span style="color: red">*</span>

  <input type="text" name="country" required="">
</label>

<label style="width: 15%">Năm sản xuất<span style="color: red">*</span>

  <input class="date-own form-control" name="produce_date" required="">
</label>
</div>

<div class="inner-wrap">
  <label style="width: 20%">Kiểm định định kỳ<span style="color: red">*</span>

  <select type="text" name="maintain_date">

    <option value=""></option>

    <option value="Không bắt buộc">Không bắt buộc</option>

    <option value="1 tháng">1 tháng</option>

    <option value="2 tháng">2 tháng</option>

    <option value="3 tháng">3 tháng</option>

    <option value="6 tháng">6 tháng</option>

    <option value="12 tháng">12 tháng</option>

    <option value="12 tháng">18 tháng</option>

    <option value="12 tháng">24 tháng</option>

    <option value="12 tháng">36 tháng</option>

  </select>
</label>

<label style="width: 20%">Ngày kiểm định lần đầu
  <input type="date" name="dv_inspect_first_date">
</label>

<label style="width: 20%">Ngày nhập kho
  <input type="date" id="warehouse_date" name="warehouse_date" value="2021-05-03">
</label>

<label style="width: 20%">Ngày hết hạn bảo hành
  <input type="date" name="dv_guarantee_expire_date">
</label>
</div>

<div class="inner-wrap">
  <label style="width: 40%">Thông số kỹ thuật
  <textarea cols="40" rows="3" name="dv_specifications"></textarea>
</label>

<label style="width: 40%">Cấu hình kỹ thuật
  <textarea cols="40" rows="3" name="dv_configuration"> </textarea>
</label>
</div>

<div class="inner-wrap">
<label style="width: 25%">Giá trị ban đầu<br>
  <input style="float: left;width: 40%;" type="number" name="khbd">
  <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
</label>

<label style="width: 25%">Khấu hao hàng năm<br>
  <input style="width: 40%; float: left;" type="number" name="khhn">
  <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
</label>
</div>

<div class="inner-wrap">
<label style="width: 35%">Khoa-Phòng ban
  <select type="text" name="department">
    <option value="">Chọn Khoa - Phòng ban</option>
                                        <option value="1">Phòng Vật tư - Thiết bị y tế</option>
                <option value="2">Khoa GMHS</option>
                <option value="3">Khoa Giải phẫu bệnh- tế bào</option>
                <option value="5">Khoa Khám Bệnh</option>
                <option value="6">Khoa Xét Nghiệm</option>
                <option value="7">Khoa Y học hạt nhân</option>
                <option value="9">Khoa CĐHA</option>
                <option value="12">Khoa Ngoại Châm tê</option>
                <option value="15">Khoa Nội 1</option>
                <option value="16">Khoa Tia Xạ</option>
                <option value="17">Khoa Xạ trị</option>
                          </select>
</label>

<label style="width: 30%">Tình trạng

  <select type="text" id="status" name="status">
    <option value="0">Chọn tình trạng</option>

    <option value="0">Mới</option>

    <option value="1">Đang sử dụng</option>

    <option value="2">Đang hỏng</option>

    <option value="3">Đang sửa chữa</option>

    <option value="4">Ngưng sử dụng</option>
    <option value="5">Ngưng sử dụng</option>

  </select>
</label>

<label style="width: 15%">Năm sử dụng

  <input type="text" id="use_year" name="use_year">
</label>
</div>
<br><br>

<div class="inner-wrap">
<label style="width: 50%">Cán bộ phòng VT phụ trách

  <select type="text" id="VT_user" name="VT_user">

  </select>
</label>

<label style="width: 40%">Cán bộ sử dụng

  <input type="text" name="VT_used" disabled="VT_used">
</label>
</div>

<div class="inner-wrap">
<label style="width: 50%">Cán bộ khoa phòng phụ trách

  <select type="text" id="department_user" name="department_user">

  </select>
</label>

<label style="width: 40%">Cán bộ được đào tạo

  <input type="text" name="user_train" disabled="">
</label>
</div>

<div class="inner-wrap">
<label style="width: 35%">Đơn vị bảo trì
  <select type="text" name="maintain">
    <option value="">Chọn Khoa - Phòng ban</option>
                            <option value="5">Công ty Phương Đông</option>
                <option value="7">Công ty Phương Tây</option>
                <option value="8">Công ty Phương Nam</option>
                <option value="9">Công ty Phương Bắc</option>
                <option value="10">Công ty cổ phần cồng nghệ Tây Bắc Á</option>
                <option value="11">Công ty TNHH Terumo Việt Nam</option>
                <option value="12">công ty TNHH khoáng sản Việt Nam</option>
                          </select>
</label>

<label style="width: 40%; float: right;">Đơn vị sửa chữa
  <select type="text" name="company_fix">
    <option value="">Chọn Khoa - Phòng ban</option>
                            <option value="5">Công ty Phương Đông</option>
                <option value="7">Công ty Phương Tây</option>
                <option value="8">Công ty Phương Nam</option>
                <option value="9">Công ty Phương Bắc</option>
                <option value="10">Công ty cổ phần cồng nghệ Tây Bắc Á</option>
                <option value="11">Công ty TNHH Terumo Việt Nam</option>
                <option value="12">công ty TNHH khoáng sản Việt Nam</option>
                          </select>
</label>
</div>

<div class="inner-wrap">
<label style="width: 45%">Dự án thầu

  <input type="text" name="project">
</label>

<label style="width: 45%">Quy trình sử dụng

  <input type="text" name="process">
</label>
</div>

<div class="inner-wrap">
<label style="font-size: 25px;">Tài liệu liên quan</label><br>
<label style="width: 30%; ">Ảnh thiết bị

  <input type="file" id="fileUpload" name="image" multiple="multiple">

    <br>

    <span id="lblError" style="color: red;"></span>

    <br>


</label>

<label style="width: 40%; float: right;">File liên quan

  <input type="file" id="fileUpload" name="file" multiple="multiple">

    <br>

    <span id="lblError" style="color: red;"></span>

    <br>


</label>
</div>

<div class="inner-wrap">
<label style="width: 30%">Người nhập thông tin
                <input type="text" name="user_data_input" value="Nhân viên Phòng VT" disabled="">
</label>

<label style="width: 30%">Ngày nhập thông tin
  <input type="date" id="import_date" name="import_date" value="2021-05-03">
</label>
</div>

<div class="rows">

    <div class=" col-sm-2 col-1" style="text-align: center;">

      <input type="submit" value="Nhập thiết bị" style="float: left; font-size: 15px; margin-left : 800px" class="btn btn-success btn-rounded">

    </div>

</div>

</form>
<br><br>

<input type="hidden" name="_token" value="D5untuPId1tmOi2e1zlHxe7Bqa2drJrJmsxBzjF3">

</div>

<script>

var today = new Date();

var dd = today.getDate();

var mm = today.getMonth()+1;

var yyyy = today.getFullYear();

if(dd<10)

{

dd='0'+dd;

}

if(mm<10)

{

mm='0'+mm;

}

var today_str = dd+ '.' + mm + '.' +yyyy;

var g='X';

var dvt='XXX';

var text;

var dv = '60';

console.log(dv);

$(document).ready(function(){





$('#group').on('change',function(){

$('#searchDvt').html('');

$.ajaxSetup({

headers: {

  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});

g = $("#group option:selected").val();

//  alert("Selected Option Text: "+optionText);

if(g != '')

{

 $.ajax({

   url:"http://ubhn.qltbyt.com/ktv/device/add/success",

  method:"POST", // phương thức gửi dữ liệu.

  data:{query:g},

    success:function(data){ //dữ liệu nhận về

      console.log(data);

      $('#searchDvt').html(data.msg);

    },

    error: function(err){

      console.log("Co loi xay ra");

    }

  })

}



});



$('#searchDvt').on('change',function(){

dvt = $("#searchDvt option:selected").val();

});



$('#luu').click(function(){

text = g+dvt+'-'+today_str+'-'+dv;



$('#dvId').val(text);

});

});





</script>








</div>





</div>
@endsection
