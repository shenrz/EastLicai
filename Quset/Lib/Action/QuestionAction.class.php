<?php

class QuestionAction extends CommonAction {

    //问题总览页面
    function index() {
        $this->display();
    }

    //问题详细页
    function view() {
        if (empty($_GET['id'])) {
            $this->assign("jumpUrl", __APP__);
            $this->error("对不起。您无权访问该网页");
        } else {
            $id = $_GET['id'];
            $view = new Model("question");
            $result = $view->getById($id);
            $this->assign("show",$result);
            $this->display();
        }
    }

    //首页显示模块
    function ShowIndex() {
        $this->display();
    }

    //增加问题
    function add() {
        $this->display();
    }
    //增加问题操作
    function addDb()
    {
        $question = new Model();
        if($question->create())
        {
            $question->add();
            $this->success("添加问题成功");
        }else
        {
            $this->error($question->getError());
        }
    }

    //回答问题
    function answer() {
        $this->display();
    }

}

?>
