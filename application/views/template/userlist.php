<div class="row">
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Admin ID</td>
                    <td>Lastname</td>
                    <td>Firstname</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Admin Type</td>
                    <td></td>
                </tr>
            </thead>
                <?php foreach($user as $ad): ?>
                    <tr>
                        <td><?php echo $ad->admin_id; ?></td>
                        <td><?php echo $ad->admin_lname; ?></td>
                        <td><?php echo $ad->admin_fname; ?></td>
                        <td><?php echo $ad->admin_email; ?></td>
                        <td><?php echo $ad->gender; ?></td>
                        <td><?php echo $ad->admin_type; ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>
              
