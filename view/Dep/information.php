<?php require 'layout/header.php' ?>
<h1>Thông tin nhân viên</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Employee_id</th>
            <th>Firstname</th>
            <th>Last name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emps as $emp) : ?>
        <tr>
            <td><?= $emp->employee_id ?></td>
            <td><?= $emp->first_name ?></td>
            <td><?= $emp->last_name ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require 'layout/footer.php' ?>