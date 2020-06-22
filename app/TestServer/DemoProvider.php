<?php
    namespace App\TestServer;
    class DemoProvider implements  DemoInterface{
        public function demo01(){
            return "demo01";
        }

        public function demo02(){
            return "demo02";
        }
    }
?>