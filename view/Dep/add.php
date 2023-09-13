<?php require 'layout/header.php' ?>
<h1>Thêm đăng ký departments</h1>
<form action="?a=insert&c=dep" method="POST" class="form-dep-create">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Department_id</label>
                    <input type="text" class="form-control" placeholder="Your Department_id" required name="department_id">
                </div>
                <div class="form-group">
                    <label>Department_name</label>
                    <input type="text" class="form-control" placeholder="Your Department_name" required name="department_name">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require 'layout/footer.php' ?>