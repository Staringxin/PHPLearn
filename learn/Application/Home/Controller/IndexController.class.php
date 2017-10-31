<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
	public function index() {
		$this->display();
	}

	public function users() {
		$User = D("User");
		$res = $User->getUsers();
		var_dump($res);

		$User = M("User");
		$res = $User->select();
		var_dump($res);
	}

	public function regist() {
		if (!$_POST) {
			$this->display();
		} else {
			header('Content-Type:application/json; charset=utf-8');
			//数据校验
			$user_name = $_POST["username"];
			if (empty($user_name)) {
				$return['code'] = 0;
				$return['message'] = '用户名不能为空';
				exit(json_encode($return));
			}

			$user_pass = $_POST["password"];
			if (empty($user_pass)) {
				$return['code'] = 0;
				$return['message'] = '密码不能为空';
				exit(json_encode($return));
			}

			$phone = $_POST["phone"];
			if (empty($user_pass)) {
				$return['code'] = 0;
				$return['message'] = '请输入手机号';
				exit(json_encode($return));
			}
			if (!preg_match("/^1[34578]\d{9}$/", $phone)) {
				$return['code'] = 0;
				$return['message'] = '手机号格式不正确';
				exit(json_encode($return));
			}

			$email = $_POST["email"];
			if (empty($email)) {
				$return['code'] = 0;
				$return['message'] = '请输入邮箱';
				exit(json_encode($return));
			}
			if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email)) {
				$return['code'] = 0;
				$return['message'] = '邮箱格式不正确';
				exit(json_encode($return));
			}

			$sex = $_POST["sex"];
			if (!isset($sex)) {
				$return['code'] = 0;
				$return['message'] = '请输入性别';
				exit(json_encode($return));
			}
			if ($sex != 0 && $sex != 1) {
				$return['code'] = 0;
				$return['message'] = '性别格式不正确';
				exit(json_encode($return));
			}

			$User = D("User");
			$result = $User->exists($user_name);
			if (!empty($result)) {
				$return['code'] = 0;
				$return['message'] = '用户名已存在';
				exit(json_encode($return));
			}

			$res = $User->regist($user_name, $user_pass, $phone, $email, $sex);
			if (!$res) {
				$return['code'] = 0;
				$return['message'] = '注册失败，请稍后再试';
				exit(json_encode($return));
			}

			$return['code'] = 1;
			$return['message'] = '注册成功';
			echo json_encode($return);
		}
	}

	public function checkValid() {
		header('Content-Type:application/json; charset=utf-8');
		//数据校验
		if (!$_POST) {
			$return['code'] = 0;
			$return['message'] = '不支持的操作';
			exit(json_encode($return));
		}

		$user_name = $_POST["username"];
		if (empty($user_name)) {
			$return['code'] = 0;
			$return['message'] = '用户名不能为空';
			exit(json_encode($return));
		}

		$result = D("User")->exists($user_name);
		if (!empty($result)) {
			$return['code'] = 0;
			$return['message'] = '用户名已存在';
			exit(json_encode($return));
		}

		$return['code'] = 1;
		$return['message'] = '用户名可以使用';
		echo json_encode($return);
	}

	public function login() {
		//HTTP协议，传输json需要添加请求头
		header('Content-Type:application/json; charset=utf-8');

		//数据校验
		if (!$_POST) {
			$return['code'] = 0;
			$return['message'] = '不支持的操作';
			exit(json_encode($return));
		}

		$user_name = $_POST["username"];
		if (empty($user_name)) {
			$return['code'] = 0;
			$return['message'] = '用户名不能为空';
			exit(json_encode($return));
		}
		$user_pass = $_POST["password"];
		if (empty($user_pass)) {
			$return['code'] = 0;
			$return['message'] = '密码不能为空';
			exit(json_encode($return));
		}

		$result = D("User")->exists($user_name);
		if (empty($result)) {
			$return['code'] = 0;
			$return['message'] = '用户不存在';
			exit(json_encode($return));
		}

		if ($result['user_pass'] != $user_pass) {
			$return['code'] = 0;
			$return['message'] = '密码错误';
			exit(json_encode($return));
		}

		$return['code'] = 1;
		$return['message'] = '登录成功';
		echo json_encode($return);
	}
}