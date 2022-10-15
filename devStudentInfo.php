<div class="row" style="margin-top: 10px;">

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            
                            
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                                           


<table class="table table-bordered table-responsive-xl table-hover display">
    <thead>
                          <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Registration Number</th>
                            <th>Programme</th>
                            <th>Mobile No.</th>
                            <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
                  $i=1;
                                    foreach ($obj->viewStudentProposal($projectID) as $std) {
                                        ?>
                                        <tr>
                                            <td>
                                               <?php echo $i; ?>
                                            </td>
                                            <td>
                                                
                                                <?php
                                                $name=$std['fName'] . " " . $std['mName'] . " " . $std['lName'];
                                                echo $name;
                                                ?>
                                                
                                            </td>
                                            
                                            <td>
                                                <?php
                                                echo $std['regNo'];
                                                ?>
                                            </td>

                                            
                                            <td>
                                                <?php
                                                echo $std['prgName'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                echo $std['telNo'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                echo $std['email'];
                                                ?>
                                            </td>

                      
                    </tr>
                                    <?php
                                    $i++;
                                    }
                                    ?>
                  
                      
                        </tbody>

 </table>

                    </div>
                        </div>
                    </div>
                </div>