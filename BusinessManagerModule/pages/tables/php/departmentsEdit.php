<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','itproject'); 
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from departments WHERE department_id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_depId=$row[0];
        $per_departmentName=$row[1];
        $per_branchLocation=$row[2];
        $per_reqId=$row[3];
        $per_userId=$row[5];
        $per_suppId=$row[4];

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
                            <label hidden="true" class="col-sm-4 control-label" for="txtid">Department ID</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" id="txtid" name="txtid" hidden value="<?php echo $per_depId;?>" readonly>
                            </div>
                            </div>
                            <label class="col-sm-4 control-label" for="txtdepartmentname">Department Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtdepartmentname" name="txtdepartmentname" value="<?php echo $per_departmentName;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtcontactno">Location</label>
                            <div class="col-sm-6">
                                <input type="radio" id="txtlocation" name="txtlocation" value="Baguio City"> Baguio City <br>
                                                  <input type="radio" id="txtlocation" name="txtlocation" value="La Trinidad"> La Trinidad <br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="departments.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>









