<?php
include './views/components/BasicHeader.php';
include './controllers/ClerkController.php';
basicHeader("Register List");

$clerkController = new clerkController();
        
$pending_list = $clerkController->findAllPendingStudent();

$registered_list = $clerkController->findAllRegisteredStudent();

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Delete_Student_Id'])) {
        $msg = "The new student successfully deleted";
    } else if (isset($_POST['Confirm_Student_Id'])) {
        $msg = "The new student successfully added";
    }

}

?>
<section class="container">
    <div class="columns">
        <div class="column col-10 col-mx-auto">
            <br><br>
            <?php
            if (!empty($msg)) {
                ?>
                <div x-data="{
                    displayError: true,
                    close() {
                        this.displayError = false;
                    }
                }" x-show="displayError" x-transition.duration.500ms>
                    <div class="toast toast-primary mx-2">
                        <button class="btn btn-clear float-right" x-on:click="close()"></button>
                        <?php echo $msg; ?>
                    </div>
                    <br><br>
                </div>
                <?php
            }
            ?>
            <h5 class="text-center"><strong>Pending List</strong></h5>
            <hr><br>
            <table class="table table-scroll table-striped table-hover">
                <thead>
                    <tr>
                        <th class="px-2">#</th>
                        <th class="px-2">Full Name</th>
                        <th class="px-2">IC Number</th>
                        <th class="px-2">Age</th>
                        <th class="px-2">Phone Number</th>
                        <th class="px-2">Email</th>
                        <th class="px-2">Category of study</th>
                        <th class="px-2">Parent Name</th>
                        <th class="px-2">Parent Phone Number</th>
                        <th class="px-2">Home Address</th>
                        <th class="px-2">School Address</th>
                        <th class="px-2">Subject to take</th>
                        <th class="px-2">Payment method<br> for Initial fee</th>
                        <th class="px-2">Action</th>
                    </tr>
                </thead>
<?php
$count = 1;
foreach ($pending_list as $student) {
?>
                <tbody>
                    <tr>
                        <td class="px-2"><?php echo $count; ?></td>
                        <td class="px-2"><?php echo $student['name']; ?></td>
                        <td class="px-2"><?php echo $student['icNum']; ?></td>
                        <td class="px-2"><?php echo $student['age']; ?></td>
                        <td class="px-2"><?php echo $student['phoneNum']; ?></td>
                        <td class="px-2"><?php echo $student['email']; ?></td>
                        <td class="px-2"><?php echo $student['category']; ?></td>
                        <td class="px-2"><?php echo $student['parentName']; ?></td>
                        <td class="px-2"><?php echo $student['parentPhoneNum']; ?></td>
                        <td class="px-2"><?php echo $student['homeAddr'] ?></td>
                        <td class="px-2"><?php echo $student['schoolAddr'] ?></td>
                        <td class="px-2"><?php echo $student['subjects'] ?></td>
                        <td class="px-2"><?php echo $student['methodPay'] ?>
    <?php 
    if (!empty($student['receipt'])) {
    ?>
                            (<a href="/storage/<?php echo $student['receipt'] ?>" target="_blank" rel="noopener noreferrer"><?php echo $student['receipt'] ?></a>)
                        </td>
    <?php
    }
    ?>
                        <td class="px-2">
                            <form action="./clerk.php?tab=student&section=register-list" method="post" style="display:inline;">
                                <button class="btn" type="submit" name="Delete_Student_Id" value="<?php echo $count; ?>">Remove</button>&nbsp;
                            </form>
                            <form action="./clerk.php?tab=student&section=register-list" method="post" style="display:inline;">
                                <button class="btn btn-primary" type="submit" name="Confirm_Student_Id" value="<?php echo $count; ?>">Confirm</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
<?php
    $count += 1;
}
?>       
            </table>
            <br><br><br>
            <h5 class="text-center"><strong>Official List</strong></h5>
            <hr><br>
            <div class="columns">
                <div class="column col-4 col-mx-auto">
                    <div class="input-group">
                        <input type="text" class="form-input" placeholder="Search Student">
                        <button class="btn btn-primary input-group-btn"><i class="icon icon-search"></i></button>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-scroll table-striped table-hover">
                <thead>
                    <tr>
                        <th class="px-2">#</th>
                        <th class="px-2">Full Name</th>
                        <th class="px-2">IC Number</th>
                        <th class="px-2">Age</th>
                        <th class="px-2">Phone Number</th>
                        <th class="px-2">Email</th>
                        <th class="px-2">Category of study</th>
                        <th class="px-2">Parent Name</th>
                        <th class="px-2">Parent Phone Number</th>
                        <th class="px-2">Home Address</th>
                        <th class="px-2">School Address</th>
                        <th class="px-2">Subject to take</th>
                    </tr>
                </thead>
<?php
$count = 1;
foreach ($registered_list as $student) {
?>
                <tbody>
                    <tr>
                        <td class="px-2"><?php echo $count; ?></td>
                        <td class="px-2"><?php echo $student['name']; ?></td>
                        <td class="px-2"><?php echo $student['icNum']; ?></td>
                        <td class="px-2"><?php echo $student['age']; ?></td>
                        <td class="px-2"><?php echo $student['phoneNumber']; ?></td>
                        <td class="px-2"><?php echo $student['email']; ?></td>
                        <td class="px-2"><?php echo $student['category']; ?></td>
                        <td class="px-2"><?php echo $student['parentName']; ?></td>
                        <td class="px-2"><?php echo $student['parentPhoneNum']; ?></td>
                        <td class="px-2"><?php echo $student['homeAddr']; ?></td>
                        <td class="px-2"><?php echo $student['schoolAddr']; ?></td>
                        <td class="px-2"><?php echo $student['subjects']; ?></td>
                    </tr>
                </tbody>
<?php
    $count += 1;
}
?>
            </table>
            <br><br><br>
        </div>
    </div>
</section>