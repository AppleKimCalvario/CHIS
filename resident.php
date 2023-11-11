<?php
// Include your database connection and header
include('dbcon.php');
include('header.php');

if (isset($_SESSION['mhw_id']) && isset($_SESSION['mhw_n=fname'])) {

}
?>

<!--DISPLAY ERROR MESSAGE STARTS-->
<?php

if(isset($_GET['message'])){
    /*echo "<script>";
    echo "alert('FAILED TO ADD RESIDENT! PLEASE INPUT THE REQUIRED FIELDS.');";
    echo "window.location.href = 'resident.php';";
    echo "</script>";*/
    echo'<h5 id="mess">'.$_GET['message'].'</h5>';
}

?>

<script>
    // Wait for 5 seconds and then hide the message
    setTimeout(function() {
        document.getElementById('mess').style.display = 'none';
    }, 2000); // 5000 milliseconds = 5 seconds
</script>
<!--DISPLAY ERROR MESSAGE ENDS-->
<h1>Hello, <?php echo $_SESSION['mhw_fname']; ?></h1>
<div class="content">
    <div class="box1">
        <h2>RESIDENT LIST</h2>
        
    </div>
    <table class="table smaller-table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Added</th> 
                <th>Barangay</th>
                <th>Age</th>
                <th>Added By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!--query-->
            <?php
            
            $query = "SELECT * FROM `resident_list`";

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("query Failed".mysqli_error( $conn));
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    $full_name = $row['res_firstname'] . ' ' . $row['res_lastname'];
                    ?>
                    <tr>
                        <td><?php echo $row['res_id']; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $row['date_added']; ?></td>
                        <td><?php echo $row['res_barangay']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['worker_id']; ?></td>
                    </tr>
                    <?php
                }
            }    
            ?>
        </tbody>
    </table>
    

    <?php

    if(isset($_GET['insert_msg'])){
        echo "<script>";
		echo "alert('ADDED SUCCESSFULLY!');";
		echo "window.location.href = 'resident.php';";
		echo "</script>";
    }
    ?>

    <!-- ADD RESIDENT FORM  -->
    <form action="insert.php" method="post" class="needs-validation" novalidate>
    <div class="modal fade bd-example-modal-lg" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD RESIDENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>  
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <h6 for="inputfname">First Name</h6>
                            <input type="text" class="form-control" name="inputfname" id="inputfname" placeholder="First Name" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
                            <div class="invalid-feedback">
                                Please enter a valid first name.
                            </div>
                        </div>

                        <script>
                            document.getElementById('inputfname').addEventListener('input', function () {
                                var isValid = /^[A-Za-z]+$/.test(this.value);
                                if (!isValid) {
                                    this.classList.add('is-invalid');
                                } else {
                                    this.classList.remove('is-invalid');
                                }
                            });
                        </script>

                        <div class="form-group col-md-4">
                            <h6 for="inputfname">Middle Name</h6>
                            <input type="text" class="form-control" name="inputmname" id="inputmname" placeholder="Middle Name" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
                            <div class="invalid-feedback">
                                Please enter a valid middle name.
                            </div>
                        </div>

                        <script>
                            document.getElementById('inputmname').addEventListener('input', function () {
                                var isValid = /^[A-Za-z]+$/.test(this.value);
                                if (!isValid) {
                                    this.classList.add('is-invalid');
                                } else {
                                    this.classList.remove('is-invalid');
                                }
                            });
                        </script>
                        
                        <div class="form-group col-md-4">
                            <h6 for="inputfname">Last Name</h6>
                            <input type="text" class="form-control" name="inputlname" id="inputlname" placeholder="Last Name" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
                            <div class="invalid-feedback">
                                Please enter a valid last name.
                            </div>
                        </div>

                        <script>
                            document.getElementById('inputlname').addEventListener('input', function () {
                                var isValid = /^[A-Za-z]+$/.test(this.value);
                                if (!isValid) {
                                    this.classList.add('is-invalid');
                                } else {
                                    this.classList.remove('is-invalid');
                                }
                            });
                        </script>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <h6 for="sex">Sex</h6>
                            <select name="sex" class="form-control" required>
                                <option value="" selected>Select Sex</option>
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid sex.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <h6 for="inputdob">Date of Birth</h6>
                            <input type="date" class="form-control" name="inputdob" placeholder="Date of Birth" required>
                        </div>
                        <div class="form-group col-md-4">
                            <h6 for="inputAge">Age</h6>
                            <input type="text" class="form-control" name="inputAge" placeholder="Age" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <h6 for="civilstatus">Civil Status</h6>
                            <select name="civilstatus" class="form-control" required>
                                <option selected>Civil Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widowed</option>
                                <option>Separated</option>
                                <option>Annulled</option>
                                <option>Common Law</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <h6 for="sampleworker">Worker</h6>
                            <input type="text" class="form-control" name="sampleworker" placeholder="Sample Worker ID" required>
                        </div>
                        <div class="form-group col-md-4">
                            <h6 for="inputfname">Barangay</h6>
                            <select name="inputbarangay" class="form-control" required>
                                <option selected>Select Barangay</option>
                                <option>Asdum</option>
                                <option>Cabanbanan</option>
                                <option>Calabagas</option>
                                <option>Fabrica</option>
                                <option>Iraya Sur</option>
                                <option>Man-ogob</option>
                                <option>Poblacion District I</option>
                                <option>Poblacion Distric II</option>
                                <option>San Jose</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="add_resident" value="ADD">
                </div>
            </div>
        </div>
    </div>
    </form>
     <!-- ADD RESIDENT FORM ends  -->
    
    </div>
    <div class="add_button">
    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD RESIDENT</button>
    </div>


</div>



<?php include('footer.php');?>



    