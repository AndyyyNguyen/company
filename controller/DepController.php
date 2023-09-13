<?php
class DepController
{
    function index()
    {
        $search = $_GET['search'] ?? null;
        $page = $_GET['page'] ?? 1;
        $item_per_page = 10;
        $depRepository = new DepRepository;
        if ($search) {
            $deps = $depRepository->getByPattern($search, $page, $item_per_page);
            $totalDep = $depRepository->getByPattern($search);
        } else {
            $deps = $depRepository->getAll($page, $item_per_page);
            $totalDep = $depRepository->getAll();
        }
        $totalPage = ceil(count($totalDep) / $item_per_page);
        require 'view/Dep/index.php';
    }

    function info()
    {
        $department_id = $_GET['id'];
        $cond = "WHERE department_id = $department_id";
        $empRepository = new EmpRepository;
        $emps = $empRepository->fetchAll($cond);
        require 'view/Dep/information.php';
    }

    function add()
    {
        require 'view/Dep/add.php';
    }

    function insert()
    {
        $data = $_POST;
        $department_id = $data['department_id'];
        $department_name = $data['department_name'];
        $depRepository = new DepRepository;
        $dep = $depRepository->save($data);
        if (!($depRepository->getOneById($department_id))) {
            $_SESSION['error'] = "Department_id này đã được tạo. Vui lòng chọn Department_id khác";
            header('location:/?c=dep');
            exit;
        }
        if (!$dep) {
            $_SESSION['error'] = "Lỗi:" . $depRepository->error;
            header('location:/?c=dep');
            exit;
        }
        $_SESSION['success'] = "Đã thêm thành công phòng ban $department_name";
        header('location: /?c=dep');
    }

    function edit()
    {
        $department_id = $_GET['id'];
        $depRepository = new DepRepository;
        $dep = $depRepository->getOneById($department_id);
        require 'view/Dep/edit.php';
    }

    function update()
    {
        $data = $_POST;
        $department_name = $data['department_name'];
        $depRepository = new DepRepository;
        $dep = $depRepository->update($data);
        if (!$dep) {
            $_SESSION['error'] = "Lỗi:" . $depRepository->error;
            header('location:/');
            exit;
        }
        $_SESSION['success'] = "Đã update thành công phòng ban $department_name";
        header('location: /');
    }

    function delete()
    {
        $department_id = $_GET['id'];
        $depRepository = new DepRepository;
        $dep = $depRepository->getOneById($department_id);
        $department_name = $dep->department_name;
        $dep = $depRepository->delete($department_id);

        $empRepository = new EmpRepository;
        $cond = "WHERE department_id = $department_id";
        $emps = $empRepository->fetchAll($cond);
        if (count($emps)) {
            $number = count($emps);
            $_SESSION['error'] = "Không thể xóa phòng ban này vì có $number nhân viên";
            header('location:/?c=dep');
            exit;
        }
        if (!$dep) {
            $_SESSION['error'] = "Lỗi:" . $depRepository->error;
            header('location:/?c=dep');
            exit;
        }
        $_SESSION['success'] = "Đã xóa thành công phòng ban $department_name ";
        header('location: /?c=dep');
    }
}
