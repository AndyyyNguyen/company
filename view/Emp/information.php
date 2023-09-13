<?php require 'layout/header.php' ?>
<h1>Thông tin nhân viên</h1>
<table class="table table-hover">
    <tbody>
        <tr>
            <td>employee_id</td>
            <td><?= $emp->employee_id ?></td>
        </tr>
        <tr>
            <td>first_name</td>
            <td><?= $emp->first_name ?></td>
        </tr>
        <tr>
            <td>last_name</td>
            <td><?= $emp->last_name ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?= $emp->email ?></td>
        </tr>
        <tr>
            <td>phone_number</td>
            <td><?= $emp->phone_number ?></td>
        </tr>
        <tr>
            <td>hire_date</td>
            <td><?= $emp->hire_date ?></td>
        </tr>
        <tr>
            <td>salary</td>
            <td><?= number_format($emp->salary) ?></td>
        </tr>
        <tr>
            <td>department</td>
            <td><?= $dep->department_name ?></td>
        </tr>
    </tbody>
</table>
<?php require 'layout/footer.php' ?>