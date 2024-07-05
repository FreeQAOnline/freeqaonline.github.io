<?php
    class QA{
        public function get($qfile){
            $file = $qfile ."q.json";
            if(file_exists($file)){
                return file_get_contents($file);
            }
        }
        public function put($qfile, $content){
            $file = $qfile ."q.json";
            if(file_exists($file)){
                file_put_contents($file, $content);
            }
        }
        public function decode($content, $assoc){
            return json_decode($content, $assoc);
        }
        public function encode($contents){
           return json_encode($contents);
        }
    }
?>