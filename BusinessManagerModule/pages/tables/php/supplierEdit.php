<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','itproject'); 
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from suppliers WHERE suppliers_id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
        $per_supplierName=$row[1];
        $per_supplierContact=$row[2];
        $per_supplierAddress=$row[3];
        $per_supplierProduct=$row[5];
        $per_supplierStatus=$row[4];
        $per_supplierRemarks=$row[6];

    }//end while
?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Supplier</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                             <div class="form-group">
                            <label hidden="true" class="col-sm-4 control-label" for="txtid">Suppliers ID</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" id="txtid" name="txtid" hidden value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                            <label class="col-sm-4 control-label" for="txtsuppliername">Supplier Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtsuppliername" name="txtsuppliername" value="<?php echo $per_supplierName;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtcontactno">Contact No.</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtcontactno" name="txtcontactno" value="<?php echo $per_supplierContact;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtaddress">Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtaddress" name="txtaddress" value="<?php echo $per_supplierAddress;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtprodtype">Product Type</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtprodtype" name="txtprodtype" value="<?php echo $per_supplierProduct;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtstatus">Supplier Status</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtstatus" name="txtstatus" value="<?php echo $per_supplierStatus;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtremarks">Remarks</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtremarks" name="txtremarks" value="<?php echo $per_supplierRemarks;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <<div class="modal-footer">
                <a href="data3.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>









