<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','itproject'); 
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql=" SELECT * FROM purchaseorder WHERE purchaseOrder_id='$id'";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
		$per_id=$row[0];
        $per_purchasesOrderDate=$row[1];
        $per_purchasesOrderTime=$row[2];
		$per_purchasesDescription=$row[3];
        $per_purchasesQuantity=$row[4];
        $per_purchasesUnit=$row[5];
        $per_purchasesDeliveryDate=$row[6];
        $per_purchasesUnitPrice=$row[7];
		$per_purchasesTotalAmount=$row[8];

    }//end while
?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Purchases</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtorderdate">Order Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="txtorderdate" name="txtorderdate" value="<?php echo $per_purchasesOrderDate;?>">
                            </div>
						</div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtordertime">Order Time</label>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" id="txtordertime" name="txtordertime" value="<?php echo $per_purchasesOrderTime;?>">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtdescription">Description</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtdescription" name="txtdescription" value="<?php echo $per_purchasesDescription;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtquantity">Quantity</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtquantity" name="txtquantity" value="<?php echo $per_purchasesQuantity;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtunit">Unit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtunit" name="txtunit" value="<?php echo $per_purchasesUnit;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtdeliverydate">Delivery Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="txtdeliverydate" name="txtdeliverydate" value="<?php echo $per_purchasesDeliveryDate;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtunitprice">Unit Price</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtunitprice" name="txtunitprice" value="<?php echo $per_purchasesUnitPrice;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txttotalamount">Total Amount</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txttotalamount" name="txttotalamount" value="<?php echo $per_purchasesTotalAmount;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="purchases.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>









