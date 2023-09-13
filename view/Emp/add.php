<?php require 'layout/header.php' ?>
<h1>Thêm đăng ký Employee</h1>
<form action="?a=insert" method="POST" class="form-emp-create">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Employee_id</label>
                    <input type="number" class="form-control" placeholder="Your employee_id" required name="employee_id">
                </div>
                <div class="form-group">
                    <label>First_name</label>
                    <input type="text" class="form-control" placeholder="Your first_name bạn" required name="first_name">
                </div>
                <div class="form-group">
                    <label>Last_name</label>
                    <input type="text" class="form-control" placeholder="Your last_name" required name="last_name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your email" required name="email">
                </div>
                <div class="form-group">
                    <label>Phone_number</label>
                    <input type="tel" class="form-control" placeholder="Your phone_number" required name="phone_number">
                </div>
                <div class="form-group">
                    <label>Hire_date</label>
                    <input type="date" class="form-control" placeholder="Your hire_date" required name="hire_date">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="number" class="form-control" placeholder="Your salary" required name="salary">
                </div>
                <div class="form-group">
                    <label>Department_name</label>
                    <select class="form-control" id="department_name" name="department_name" required>
                        <option value=""></option>
                        <?php foreach ($totalDep as $dep) : ?>
                            <option value="<?= $dep->department_name ?>"><?= $dep->department_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require 'layout/footer.php' ?>