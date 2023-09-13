<?php require 'layout/header.php' ?>
<h1>Edit</h1>
<form action="?a=update&c=dep" method="POST" class="form-dep-edit">
    <input type="hidden" name="department_id" value="<?= $dep->department_id ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Department_id</label>
                    <span><?= $dep->department_id ?></span>
                </div>
                <div class="form-group">
                    <label>Department_name</label>
                    <input type="text" class="form-control" placeholder="Your department_name " required name="department_name" value="<?= $dep->department_name ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require 'layout/footer.php' ?>