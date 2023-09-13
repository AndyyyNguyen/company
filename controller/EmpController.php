<?php
class EmpController
{
    function index()
    {
        $search = $_GET['search'] ?? null;
        $page = $_GET['page'] ?? 1;
        $item_per_page = 10;
        $empRepository = new EmpRepository;
        if ($search) {
            $emps = $empRepository->getByPattern($search, $page, $item_per_page);
            $totalEmp = $empRepository->getByPattern($search);
        } else {
            $emps = $empRepository->getAll($page, $item_per_page);
            $totalEmp = $empRepository->getAll();
        }
        $totalPage = ceil(count($totalEmp) / $item_per_page);
        require 'view/Emp/index.php';
    }

    function info()
    {
        $employee_id = $_GET['id'];
        $empRepository = new EmpRepository;
        $emp = $empRepository->getOneById($employee_id);
        $department_id = $emp->department_id;
        $depRepository = new DepRepository;
        $dep = $depRepository->getOneById($department_id);
        require 'view/Emp/information.php';
    }

    function add()
    {
        $depRepository = new DepRepository;
        $totalDep = $depRepository->getAll();
        require 'view/Emp/add.php';
    }

    function insert()
    {
        $data = $_POST;
        $employee_id = $data['employee_id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $empRepository = new EmpRepository;
        $emp = $empRepository->save($data);
        $depRepository = new DepRepository;
        $deps = $depRepository->getAll();
        if ($data['department_id'] > count($deps) || count($depRepository->getOneById($employee_id))) {
            $_SESSION['error'] = "Không thể thêm nhân viên $first_name $last_name vào các phòng ban không có sẵn hoặc nhân viên này trùng $employee_id với nhân viên đã thêm ";
            header('location: /');
            exit;
        }

        if (!$emp) {
            $_SESSION['error'] = "Lỗi:" . $empRepository->error;
            header('location:/');
            exit;
        }
        $_SESSION['success'] = "Đã thêm thành công nhân viên $first_name $last_name";
        header('location: /');
    }

    function edit()
    {
        $employee_id = $_GET['id'];
        $empRepository = new EmpRepository;
        $emp = $empRepository->getOneById($employee_id);
        require 'view/Emp/edit.php';
    }

    function update()
    {
        $data = $_POST;
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $empRepository = new EmpRepository;
        $emp = $empRepository->update($data);
        if ($emp) {
            $_SESSION['success'] = "Đã update thành công nhân viên $first_name $last_name";
            header('location: /');
            exit;
        }
        $_SESSION['error'] = "Lỗi:" . $empRepository->error;
        header('location:/');
    }

    function delete()
    {
        $employee_id = $_GET['id'];
        $empRepository = new EmpRepository;
        $emp = $empRepository->getOneById($employee_id);
        $first_name = $emp->first_name;
        $last_name = $emp->last_name;
        $emp = $empRepository->delete($employee_id);
        if ($emp) {
            $_SESSION['success'] = "Đã xóa thành công nhân viên $first_name $last_name ";
            header('location: /');
            exit;
        }
        $_SESSION['error'] = "Lỗi:" . $empRepository->error;
        header('location:/');
    }
}
