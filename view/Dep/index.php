<?php require 'layout/header.php' ?>
<h1>Department List</h1>
<a href="?a=add&c=dep" class="btn btn-info">Add</a>
<?php require 'layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Department_id</th>
            <th>Department_name</th>
            <th>Employee_list</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = ($page - 1) * $item_per_page;
        foreach ($deps as $dep) :
            $stt++;
        ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= $dep->department_id ?></td>
                <td><?= $dep->department_name ?></td>
                <td><a class="btn btn-info btn-sm" href="?a=info&c=dep&id=<?= $dep->department_id ?>">View</a></td>
                <td><a class="btn btn-warning btn-sm" href="?a=edit&c=dep&id=<?= $dep->department_id ?>">Update</a></td>
                <td>
                    <button type="button" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-href="?a=delete&c=dep&id=<?= $dep->department_id ?>">
                        Delete
                    </button>
                </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require 'layout/pagination.php' ?>
<div>
    <span>Số lượng: <?= count($deps) ?></span>
</div>
<?php require 'layout/footer.php' ?>