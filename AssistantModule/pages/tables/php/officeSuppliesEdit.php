<?php
$con=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());

if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from supplies WHERE supply_id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
      //  $per_supplierName=$row[1];
        $per_supplyDescription=$row[2];
        $per_supplyUnit=$row[4];
        $per_supplyQuantityInStock=$row[5];
        $per_supplyUnitPrice=$row[6];
        $per_supplyReorderLevel=$row[8];
        $per_supplyExpirationDate=$row[9];
        $per_supplyGoodCondition=$row[10];
        $per_supplyDamaged=$row[11];

    }//end while
?>
    <form class="form-horizontal" method="post" action ="php/suppliesFunctions.php">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Supply</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                             <div class="form-group">
                            <label hidden="true" class="col-sm-4 control-label" for="txtid">Supply ID</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" id="txtid" name="txtid" hidden value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                            <label class="col-sm-4 control-label" for="txtsupplyDescription">Description</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtsupplyDescription" name="txtsupplyDescription" value="<?php echo $per_supplyDescription;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtUnit">Unit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtUnit" name="txtUnit" value="<?php echo $per_supplyUnit;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtQuantityInStock">Quantity In Stock</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtQuantityInStock" name="txtQuantityInStock" value="<?php echo $per_supplyQuantityInStock;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtUnitPrice">Unit Price</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtUnitPrice" name="txtUnitPrice" value="<?php echo $per_supplyUnitPrice;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtReorderLevel">Reorder Level</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtReorderLevel" name="txtReorderLevel" value="<?php echo $per_supplyReorderLevel;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtExpirationDate">Expiration Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="txtExpirationDate" name="txtExpirationDate" placeholder="yyyy-mm-dd" value="<?php echo $per_supplyExpirationDate;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtGoodCondition">Good Condition</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtGoodCondition" name="txtGoodCondition" value="<?php echo $per_supplyGoodCondition;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtDamaged">Damaged</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtDamaged" name="txtDamaged" value="<?php echo $per_supplyDamaged;?>">
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="../officeSupplies.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="offEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>