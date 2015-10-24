<?php
    /**
     * Created by PhpStorm.
     * User: android
     * Date: 2015/10/24
     * Time: 15:31
     */


    namespace Home\Controller;

    use Home\Model\GodModel;
    use Think\Controller\RestController;

    Class GodController extends RestController
    {


        function index()
        {

        }

        function rest_get()
        {
            header("Content-type:text/html;charset=utf-8");

            $god = new GodModel();

            print_r($_GET);
            $data = array_keys($_GET);
            $value =  $data[0];

            var_dump($_GET);
            var_dump($value);

            if (empty($_GET[$value])) {
                $data = $god->select($_GET[$value]);

               foreach ($data as $key) {
                    echo ( $key[$value] );
               }
            }else{
                $data = $god->select($_GET[$value]);
                foreach ($data as $key) {
                    echo ( $key[$value] );
                }
            }
        }

        function rest_post()
        {

            $god = new GodModel();

            $god->add($_GET);

            echo '添加成功';

        }

        function rest_put()
        {



            $god = new GodModel();

            $data = array_keys($_GET);


            $name = $data[0];
            $valueName = $data[1];
            $where[$name] = $_GET[$name];

            $save[$name] = $_GET[$valueName];
            $god->where($where)->save($save);



        }

        function rest_delete()
        {
            $god = new GodModel();

            $data = array_keys($_GET);


            $name = $data[0];

            $where[$name] = $_GET[$name];


            $god->where($where)->delete();


        }


    }
