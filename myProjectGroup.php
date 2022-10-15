<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: transparent;">
                            <h4>
                                Group Name:<span style="color:blue; padding-left: 5px;">
                                     <?php 
                                    foreach ($obj->myTitle($stdID) as $prj)
                                    {
                                        echo $prj['title'];
                                    }
                                    ?>
                                    </span>
                             </h4>
                            </div>
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                        	
<!--<h4>Group Members</h4>-->
<table class="table table-bordered table-responsive-xl table-hover display">
    <tr>
        <th>Reg.Number</th>
        <th>Name</th>
        <th>Sex</th>
        <th>Programme Name</th>
    </tr>
<?php foreach ($obj->viewStudentProposal($projectID) as $std) 
{
    $name=strtoupper($std['fName'] . " " . $std['mName'] . " " . $std['lName']);
    ?>
    <tr>
        <td><?php echo $std['regNo'];?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $std['gender'];?></td>
        <td><?php echo $std['prgCode'];?></td>
    </tr>
    <?php
}
        ?>
 </table>
 <div class="row">
    <div class="col-lg-4">
        <a href="addMember.php" class="btn btn-primary"><i class="ace-icon fa fa-plus-circle bigger-120 green"></i> Add Member</a>
    </div>
 </div>
                        </div>
                    	</div>
                    </div>
</div>