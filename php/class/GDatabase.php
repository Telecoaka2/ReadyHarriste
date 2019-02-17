<?php   
    abstract class GDatabase {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {

        }
        //===============================================
        public static function Instance() {
            $lKey = "NORMAL";
            if($lKey == "NORMAL") return GDatabaseNormal::Instance();
            return GDatabaseNormal::Instance();
        }
        //===============================================
        abstract public function openDatabase($file);
        //===============================================
    }
?>        