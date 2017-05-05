<?php
include '../_layouts/header.php';
?>

<!-- MENU TOOLS -->
<div class="well"  style="background-color:grey;">
    <a href="http://system.dev/wisescan/admin/home/" style="color: white;"> < back / cancel</a>
    <button onclick="showForm()">show</button>
    <button onclick="hideForm()">hide</button>
</div>

<div class="well" style="background-color:grey;">
    
    <div class="input-group" style="float:left; padding-left: 30px;">
        
        <div style="padding-top:10px;padding-bottom: 10px;">
            <h4 style="color: white;" class="frmCtrl">BarCode </h4>
            <input type="text" class="form-control frmCtrl" size="45">
        </div>
        <br>
        <div style="padding-top:10px;padding-bottom: 10px;">
            <h4 style="color: white;" class="frmCtrl">S/N Number </h4>
             <input type="text" class="form-control frmCtrl" size="45">
        </div>
        <br>
        <div style="padding-top:10px;padding-bottom: 10px;">
            <h4 style="color: white;" class="frmCtrl">Model No </h4>
             <input type="text" class="form-control frmCtrl" size="45">
        </div>
        <hr>
    </div>

    <div class="input-group" style="float:left; padding-left: 30px;">
        <div style="padding-top:10px;padding-bottom: 10px;">
            <h4 style="color: white;" class="frmCtrl">Description </h4>
            <input type="text" class="form-control frmCtrl" size="45">
        </div>
        <br>
        <div style="padding-top:10px;padding-bottom: 10px;">
            <h4 style="color: white;" class="frmCtrl">Manufacturer </h4>
            <input type="text" class="form-control frmCtrl" size="45">
        </div>
        <br>
        <div style="padding-top:10px;padding-bottom: 10px;">
        	<h4 style="color: white;" class="frmCtrl">Category </h4>
        	<input type="text" class="form-control frmCtrl" size="45">
        </div>
        <br>
    </div>
    
    <div style="float: none; padding-top: 30px;">
    	<button class="btn btn-default frmCtrl" type="button" style="width:100%;">
    		<h4>Register Asset</h4>
    	</button>
    </div>
    
</div>

<?php
	include '../_layouts/sub_menu_right.php';
	echo "  </div>";
	include '../_layouts/footer.php';
?>