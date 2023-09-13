<?php require 'layout/header.php' ?>
<h1>Employee List</h1>
<a href="?a=add" class="btn btn-info">Add</a>
<?php require 'layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Employee_id</th>
            <th>Firstname</th>
            <th>Last name</th>
            <th>Department_name</th>
            <th>Information</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = ($page - 1) * $item_per_page;
        foreach ($emps as $emp) :
            $stt++;
        ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= $emp->employee_id ?></td>
                <td><?= $emp->first_name ?></td>
                <td><?= $emp->last_name ?></td>
                <td><?= $emp->department_name ?></td>
                <td><a class="btn btn-info btn-sm" href="?a=info&id=<?= $emp->employee_id ?>">View</a></td>
                <td><a class="btn btn-warning btn-sm" href="?a=edit&id=<?= $emp->employee_id ?>">Update</a></td>
                <td>
                    <button type="button" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-href="?a=delete&id=<?= $emp->employee_id ?>">
                        Delete
                    </button>
                </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require 'layout/pagination.php' ?>
<div>
    <span>Số lượng: <?= count($emps) ?></span>
</div>
<?php require 'layout/footer.php' ?>