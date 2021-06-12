@extends('layout.master')
@section('content')
<div class="page-wrapper" style="min-height: 367px;">








    <style type="text/css">

      table{

        width: 100%

      }

      table th {

        text-align: center;

        background-color: #009efb;

        color: white

      }

      table td {

        text-align: center;

      }

      /* Style the tab */

      .tab {

        overflow: hidden;

        /*border: 1px solid #ccc;*/

        background-color: #f1f1f1;

        margin: 0 auto;

      }



      /* Style the buttons inside the tab */

      .tab a {

        background-color: inherit;

        float:left;

        border: none;

        outline: none;

        cursor: pointer;

        padding: 14px 16px;

        transition: 0.3s;

        font-size: 13px;

        text-decoration: none;

      }



      /* Change background color of buttons on hover */

      .tab a:hover {

        background-color: #ddd;

      }



      /* Create an active/current tablink class */

      .tab a.active {

        background-color: #ccc;

      }



      /* Style the tab content */

      .tabcontent {

        display: none;

        padding: 6px 12px;

        /*border: 1px solid #ccc;*/

        border-top: none;

      }

      .tablinks{

       width: 14.28571428571%

     }

     .fa-arrow-circle-o-up:hover{

      border-radius: 4px;

      background-color: green;

    }

    .fa-pencil-square-o:hover{

      border-radius: 4px;

      background-color: yellow;

    }

    .fa-medkit:hover{

      border-radius: 4px;

      color: #FA8258;

    }



    /* The popup form - hidden by default */

    .form-popup {

      display: none;

      position: fixed;

      top: 300px;

      bottom: 200px;

      left: 500px;

      border: 3px solid #f1f1f1;

      z-index: 9;

    }



    /* Add styles to the form container */

    .form-container {

      max-width: 800px;

      padding: 10px;

      background-color: #BDBDBD;

      max-height: 500px;

      border-radius: 5px;

    }

    /* Full-width input fields */

    .form-container input[type=text], .form-container input[type=password], .form-container select[type=text] {

      width: 100%;

      padding: 15px;

      margin: 5px 0 5px 0;

      border: none;

      background: #f1f1f1;

    }



    /* When the inputs get focus, do something */

    .form-container input[type=text]:focus, .form-container input[type=password]:focus,.form-container select[type=text]:focus {

      background-color: #ddd;

      outline: none;

    }



    /* Set a style for the submit/login button */

    .form-container .btn {

      background-color: #4CAF50;

      font-size: 20px;

      color: white;

      padding: 10px 10px;

      border: none;

      cursor: pointer;

      width: 150px;

      margin-left:10px;

      opacity: 0.7;

    }



    /* Add a red background color to the cancel button */

    .form-container .cancel {

      background-color: red;

    }



    /* Add some hover effects to buttons */

    .form-container .btn:hover, .open-button:hover {

      opacity: 1;

    }

    </style>

    <script type="text/javascript">

      $("body").on("click", "#luuAnh", function () {

        console.log('a');

        var allowedFiles = [".png", ".jpg", ".giff", ".tiff"];

        var fileUpload = $("#fileUpload");

        var lblError = $("#lblError");

        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");

        if (!regex.test(fileUpload.val().toLowerCase())) {

          lblError.html("Chỉ chấp nhận file chứa đuôi: <b>" + allowedFiles.join(', ') + "</b> only.");

          return false;

        }

        lblError.html('');

        return true;

      });

    </script>



    <div class="content">

      <div class="row">

        <div class="col-sm-4 col-3">

          <h4 class="page-title">Danh sách thiết bị</h4>

          Tổng số thiết bị chưa bàn giao: 13
        </div>

        <div class="col-sm-4 col-5 text-right m-b-10">

        </div>

        <div class="col-sm-4 col-4 text-right m-b-10">

          <a href="http://demo.qltbyt.com/ktv/device/add" class="btn btn-rounded float-right" style="background-color: #009efb; color: white"><i class="fa fa-plus"></i> Thêm thiết bị mới</a>

        </div>

      </div>

      <!-- tìm kiếm -->

      <form>

        <div class="content">

          <div class="row">

            <div class="col-sm-3 col-3">

              <input class="form-control" name="dv_name" style=" border-radius: 10px;" placeholder="Tên thiết bị...">

            </div>

            <div class="col-sm-3 col-3">

              <input class="form-control" name="model" style=" border-radius: 10px;" placeholder="Model...">

            </div>

            <div class="col-sm-3 col-3">

              <input class="form-control" name="serial" style=" border-radius: 10px;" placeholder="Serial...">

            </div>

            <div class="col-sm-3 col-3">

              <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1" name="department_id" class="form-control">


                <option value="">Chọn khoa phòng</option>


                <option value="1">Phòng Vật tư - Thiết bị y tế</option>


                <option value="2">Khoa GMHS</option>


                <option value="3">Khoa Giải phẫu bệnh- tế bào</option>


                <option value="5">Khoa Khám Bệnh</option>


                <option value="6">Khoa Xét Nghiệm</option>


                <option value="7">Khoa Y học hạt nhân</option>


                <option value="9">Khoa CĐHA</option>


                <option value="12">Khoa Ngoại Châm tê</option>


                <option value="15">Khoa Nội 1</option>


              </select>

            </div>

          </div>

          <br>

          <div class="row">

            <div class="col-sm-3 col-3">

              <input class="form-control" name="dv_id" style=" border-radius: 10px;" placeholder="Mã thiết bị">

            </div>

            <div class="col-sm-3 col-3">

              <input class="form-control" name="import_id" style=" border-radius: 10px;" placeholder="Dự án, gói thầu">

            </div>

            <div class="col-sm-3 col-3">

              <input class="form-control" name="manufacturer" style=" border-radius: 10px;" placeholder="Hãng sản xuất">

            </div>

            <div class="col-sm-3 col-3">

              <select style=" height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1" name="dv_type_id" class="form-control">


                <option value="">Loại thiết bị</option>


                <option value="CDHAtest">Thiết bị chẩn đoán hình ảnh test</option>


                <option value="CPN01">Thiết bị chưa phân nhóm 01</option>


                <option value="CPN02">Thiết bị chưa phân nhóm 02</option>


                <option value="CPN03">Thiết bị chưa phân nhóm 03</option>


                <option value="CPN05">Thiết bị chưa phân nhóm 05</option>


                <option value="CPN04">Thiết bị chưa phân nhóm 04</option>


                <option value="CPN06">Thiết bị chưa phân nhóm 06</option>


                <option value="A01">Thiết bị loại A01</option>


                <option value="A02">Thiết bị loại A02</option>


                <option value="B02">Thiết bị loại B02</option>


                <option value="B01">Thiết bị loại B01</option>


                <option value="C01">Thiết bị loại C01</option>


                <option value="C02">Thiết bị loại C02</option>


                <option value="D01">Thiết bị loại D01</option>


                <option value="D02">Thiết bị loại D02</option>


                <option value="B03">Thiết bị loại B03</option>


                <option value="B04">Thiết bị loại B04</option>


              </select>

            </div>

          </div>

          <br>

          <div class="row">

            <div class="col-sm-9 col-9" style="text-align: center;">

            </div>

            <div class="col-sm-1 col-1" style="text-align: center;">

              <a href="http://demo.qltbyt.com/ktv/get/import/devices" style="float: left;" class="btn btn-success btn-rounded"><i class="fa fa-file-excel-o"></i> Import</a>

            </div>

            <div class="col-sm-2 col-2" style="text-align: center;">

              <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: left;"><i class="fa fa-search"></i> Tìm kiếm</button>

            </div>

          </div>

        </div>

      </form>

      <br>

      <div class="">

        <div class="tab">

          <a href="http://demo.qltbyt.com/ktv/device/list/all" class="tablinks">Tất cả</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/new" style="background-color: #ccc;">Chưa bàn giao</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/used">Đang sử dụng</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/broken">Đang báo hỏng</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/fix">Đang sửa chữa</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/die">Đã ngưng sử dụng</a>

          <a class="tablinks" href="http://demo.qltbyt.com/ktv/device/list/sale">Đã thanh lý</a>

        </div>

        <br>

        <div id="unused" class="tabcontent" style="display: block;">

          <table class="table table-condensed table-bordered table-hover">

            <thead>

              <tr><th>STT</th>

              <th>Mã thiết bị</th>

              <th>Tên thiết bị</th>

              <th>Model</th>

              <th>Serial</th>

              <th>Hãng sản xuất</th>

              <th width="10%">Action</th>

            </tr></thead>

            <tbody>



              <tr>

                <td>1</td>

                <td>CNS-27062020-18</td>

                <td>Hệ thống nội soi phế quản</td>

                <td>EB1570K</td>

                <td>G121991</td>

                <td>Pentax</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/18"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="18"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/18"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>2</td>

                <td>BNS-27062020-17</td>

                <td>Hệ thống noi soi dạ dày, đại tràng</td>

                <td>EPK-1000</td>

                <td>G121072</td>

                <td>Pentax</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/17"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="17"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/17"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>3</td>

                <td>BGP1-26062020-15</td>

                <td>Máy cắt tiêu bản tay quay</td>

                <td>HM325</td>

                <td>54280</td>

                <td>Thermo scientific Microm</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/15"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="15"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/15"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>4</td>

                <td>BGP1-26062020-14</td>

                <td>Máy xử lý mô tế bảo tự động</td>

                <td>Excelsior ES</td>

                <td>EX41271203</td>

                <td>Thermo scientific Shandon</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/14"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="14"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/14"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>5</td>

                <td>BGP1-26062020-12</td>

                <td>Máy chuyển bệnh phẩm</td>

                <td>TP 1020</td>

                <td>42230535</td>

                <td>Leica</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/12"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="12"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/12"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>6</td>

                <td>CGP1-26062020-11</td>

                <td>Máy đúc bệnh phẩm</td>

                <td>B641300011</td>

                <td>1294081211454;</td>

                <td>Thermo</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/11"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="11"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/11"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>7</td>

                <td>BCDHA1-26062020-10</td>

                <td>Máy Monitor theo dõi bệnh nhân</td>

                <td>BSM-35626</td>

                <td>19564</td>

                <td>NihonKoden</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/10"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="10"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/10"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>8</td>

                <td>ACDHA1-26062020-9</td>

                <td>Máy in phim khô Laser</td>

                <td>Dry View 5850</td>

                <td>58555723</td>

                <td>Carestream</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/9"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="9"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/9"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>9</td>

                <td>CCDHA1-26062020-8</td>

                <td>Máy siêu âm màu</td>

                <td>logic P3 Express</td>

                <td>60534W55</td>

                <td>GE HealthCare</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/8"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="8"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/8"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>10</td>

                <td>BCDHA1-26062020-7</td>

                <td>Máy siêu âm đen trắng</td>

                <td>Logic C3 Premium</td>

                <td>212385WX9, 212386WX7</td>

                <td>GE HealthCare</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/7"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="7"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/7"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>11</td>

                <td>BCDHA1-26062020-5</td>

                <td>Máy siêu âm 3 đầu dò</td>

                <td>prosound @6</td>

                <td>204U9963</td>

                <td>Hitachi Aloka</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/5"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="5"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/5"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>12</td>

                <td>BCDHA1-26062020-4</td>

                <td>CT Scaner 8 dãy đầu dò</td>

                <td>BrightSpeed Edge</td>

                <td>296753HM7</td>

                <td>GE HealthCare</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/4"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="4"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/4"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


              <tr>

                <td>13</td>

                <td>BCDHA1-26062020-3</td>

                <td>Hệ thống máy chụp mạch một bình diện cảm ứng phẳng</td>

                <td>Bransist Alexa</td>

                <td>4194ED222001</td>

                <td>GE HealthCare</td>

                <td>

                  <a href="http://demo.qltbyt.com/ktv/device/add/accessory/3"><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;

                  <a class="ban_giao" data-deviceid="3"><i class="fa fa-arrow-circle-o-up" style="font-size: 15px;cursor: pointer;" title="Bàn giao" aria-hidden="true"></i></a>&nbsp;

                  <a href="http://demo.qltbyt.com/ktv/device/edit/3"><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin" aria-hidden="true"></i></a>&nbsp;

                </td>

              </tr>


            </tbody>

          </table>

          <div class="page-nav text-right">

            <nav aria-label="Page navigation">


            </nav>

          </div>

        </div>

      </div>

    </div>

    <div class="form-popup" id="myForm">

      <form action="http://demo.qltbyt.com/ktv/device/move/id" class="form-container form1" enctype="multipart/form-data" method="post">

        <input type="hidden" name="_token" value="urdb9B22kl8ROfTKRJbOmpsOQAUQ4kiAm6W2t5BP">
        <table style="font-size: 17px;" border="0">

          <tbody><tr>

            <td colspan="2"><label for="email" style="text-align: center; font-size: 22px;"><b>Chọn khoa phòng bàn giao</b></label></td>

          </tr>

          <tr>

            <td colspan="2">

              <select class="form-control" id="slDept" name="select_dept" style="font-style: 15px;">

                <option value="">Lựa chọn khoa phòng</option>



                <option value="1">Phòng Vật tư - Thiết bị y tế</option>


                <option value="2">Khoa GMHS</option>


                <option value="3">Khoa Giải phẫu bệnh- tế bào</option>


                <option value="5">Khoa Khám Bệnh</option>


                <option value="6">Khoa Xét Nghiệm</option>


                <option value="7">Khoa Y học hạt nhân</option>


                <option value="9">Khoa CĐHA</option>


                <option value="12">Khoa Ngoại Châm tê</option>


                <option value="15">Khoa Nội 1</option>



              </select>

            </td>

          </tr>

          <tr><td class="2"><br></td></tr>

          <tr>

            <td colspan="2">




              <select style="width: 100%" class="form-control" id="searchUser" name="receiver" required="">

                  <option value="">Chọn người phụ trách ở khoa</option>


                  <option value="nvkxn">Nhân viên khoa Xét nghiệm -- nvkxn </option>


                  <option value="nvkpt@gmail.com">Nhân Viên khoa PT-GMHS -- nvkpt@gmail.com </option>


                  <option value="nvkkb@gmail.com">Nhân viên khoa Khám bệnh -- nvkkb@gmail.com </option>


                  <option value="IDxyz">Nhân viên khoa CĐHA -- IDxyz </option>


                  <option value="nvkyhhn">Nhân viên khoa Y học Hạt nhân -- nvkyhhn </option>


                  <option value="nvphc@gmail.com">Nhân viên phòng Hành chính -- nvphc@gmail.com </option>


                  <option value="nvkkb2@gmail.com">Nhân viên khoa Khám bệnh 2 -- nvkkb2@gmail.com </option>


                  <option value="nvkyhhn2@gmail.com">Nhân viên Khoa Y học Hạt nhân 2 -- nvkyhhn2@gmail.com </option>


                  <option value="test@gmail.com">test@gmail.com -- test@gmail.com </option>


                  <option value="nvkcdha@gmail.com">Nhân viên Khoa Chẩn đoán hình ảnh -- nvkcdha@gmail.com </option>


                  <option value="nvkp">Nguyễn Văn B -- nvkp </option>

                   --&gt;

              </select>

              </td>

            </tr>

            <tr>

              <td colspan="2"><br></td>

            </tr>

            <tr>

              <!--multiple="true"; name="file[]" multiple-->

              <td colspan="2"><input type="file" id="fileUpload" name="image">

              <!--<td colspan="2"><input type="file" id="fileUpload" name="file[]" multiple> -->



                <br>

                <span id="lblError" style="color: red;"></span>

                <br>

              </td>

            </tr>

            <tr>

              <td colspan="2"><button style="margin-left: 30px;" type="submit" id="luuAnh" class="btn" onclick="return confirm('Bạn có chắc chắn bàn giao thiết bị?')">Lưu   </button>

              <button type="button" class="btn cancel" onclick="closeForm()">Hủy</button></td>

            </tr>

            <input type="hidden" name="_token" value="urdb9B22kl8ROfTKRJbOmpsOQAUQ4kiAm6W2t5BP">
          </tbody></table>

        </form>

      </div>



      <script>

        var id

        $(document).ready(function(){

          $('#searchUser').select2({});

        })

        function openForm() {



        // document.getElementById("myForm").style.display = "block";

      }



      function closeForm() {

        document.getElementById("myForm").style.display = "none";

      }



      $(document).on('click', '.ban_giao', function(){

        // Lấy id của data

        var id = $(this).attr('data-deviceid');

        // Lấy action hiện tại của form theo class

        var action = $('.form1').attr('action');

        // Thay thế id data vào đoạn action của form

        var actions= $('.form1').attr('action', action.replace('id',id));

        // Hiện form

        document.getElementById("myForm").style.display = "block";

      });

      $('#slDept').on('change', function(){

        $.ajaxSetup({

          headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

        });

        g = $("#slDept option:selected").val();

            //  alert("Selected Option Text: "+optionText);

            if(g != '')

            {

              var url =  "http://demo.qltbyt.com/ktv/device/move/+id+"

              $.ajax({

               url: url,

             method:"POST", // phương thức gửi dữ liệu.

             data:{query:g},

                success:function(data){ //dữ liệu nhận về

                  console.log(data);

                  $('#searchUser').html(data.msg);

                },

                error: function(err){

                  console.log("Co loi xay ra");

                }

              })

            }

          })

        </script>

        {{-- <script src="assets/js/jquery-3.2.1.min.js"></script>

        <script src="assets/js/popper.min.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>

        <script src="assets/js/Chart.bundle.js"></script>

        <script src="assets/js/chart.js"></script>

        <script src="assets/js/app.js"></script> --}}










            </div>
@endsection
