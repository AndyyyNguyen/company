<?php require 'layout/header.php' ?>
<h1>Edit</h1>
<form action="?a=update" method="POST" class="form-emp-edit">
    <input type="hidden" name="employee_id" value="<?= $emp->employee_id ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>First_name</label>
                    <input type="text" class="form-control" placeholder="Your first_name " required name="first_name" value="<?= $emp->first_name ?>">
                </div>
                <div class="form-group">
                    <label>Last_name</label>
                    <input type="text" class="form-control" placeholder="Your last_name" required name="last_name" value="<?= $emp->last_name ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your email" required name="email" value="<?= $emp->email ?>">
                </div>
                <div class="form-group">
                    <label>Phone_number</label>
                    <input type="tel" class="form-control" placeholder="Your phone_number" required name="phone_number" value="<?= $emp->phone_number ?>">
                </div>
                <div class="form-group">
                    <label>Hire_date</label>
                    <input type="date" class="form-control" placeholder="Your hire_date" required name="hire_date" value="<?= $emp->hire_date ?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="number" class="form-control" placeholder="Your salary" required name="salary" value="<?= $emp->salary ?>">
                </div>
                <div class="form-group">
                    <label>Department_id</label>
                    <input type="number" class="form-control" placeholder="Your department_id" required name="department_id" value="<?= $emp->department_id ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require 'layout/footer.php' ?>