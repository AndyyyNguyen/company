<?php
class AuthController
{
    function login()
    {
        $emailInput = $_POST['email'];
        $passwordInput = $_POST['password'];
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->findEmail($emailInput);
        if (!$customer) {
            $_SESSION['error'] = "Không tồn tại email, Vui lòng nhập lại";
            header('location: /');
            exit;
        }
        if (!password_verify($passwordInput, $customer->password)) {
            $_SESSION['error'] = "password sai, vui lòng nhập lại";
            header('location: /');
            exit;
        }
        if ($customer->is_active == 0) {
            $_SESSION['error'] = "tài khoản chưa được kích hoạt, Vui lòng check email";
            header('location: /');
            exit;
        }
        $_SESSION['email'] = $emailInput;
        $_SESSION['name'] = $customer->name;
        header('location: /');
    }

    function logout()
    {
        session_destroy();
        header('location:/');
    }
}
