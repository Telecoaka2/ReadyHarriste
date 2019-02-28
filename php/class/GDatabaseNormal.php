<?php   
    class GDatabaseNormal extends GDatabase {
        //===============================================
        private static $m_instance = null;
        private $m_databaseName = "";
        private $m_fileName = "";
        //===============================================
        private function __construct() {

        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GDatabaseNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function openDatabase($file) {
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
			$lDirNameMap = array();
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") {
                $lIcon = "database";
                
                for($i = 0; $i < count($lJsonData); $i++) {
                    $lData = $lJsonData[$i];
                    $lName = $lData["name"];
                    $lDirNameMap[] = array($lName, $lIcon, "DIR");
                }
            }
            else {
                $lIcon = "file";
                $lDatabaseFile = "";
                $lDatabaseName = "";
                
                for($i = 0; $i < count($lJsonData); $i++) {
                    $lData = $lJsonData[$i];
                    $lDatabaseName = $lData["name"];
                    if($lDatabaseName == $this->m_databaseName) {
                        $lDatabaseFile = $lData["file"];
                        break;
                    }
                }
                
                $lDatabaseMap = GJson::Instance()->getData($lDatabaseFile);
                GConfig::Instance()->setData("DATABASE", $lDatabaseName);
                $lDirNameMap = GDatabaseView::Instance()->openDatabase($lDatabaseMap);
            }
            
			return $lDirNameMap;
        }
        //===============================================
        public function readFile($file) {
            if($file == "") return "";
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            $lDatabaseMap = GJson::Instance()->getData($lDatabaseFile);
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            $lFileData = GDatabaseView::Instance()->readFile($lDatabaseMap, $this->m_fileName);
			return $lFileData;
        }
        //===============================================
        public function updateFile($file) {
            if($file == "") return "";
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            $lDatabaseMap = GJson::Instance()->getData($lDatabaseFile);
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            $lFileData = GDatabaseView::Instance()->updateFile($lDatabaseMap, $this->m_fileName);
			return $lFileData;
        }
        //===============================================
        public function createFile($path, $file) {
            if($path == "") return "";
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($path);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
              
            $this->getDatabaseName($file);
            
            $lDatabaseMap = GJson::Instance()->getData($lDatabaseFile);
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            $lFileData = GDatabaseView::Instance()->createFile($lDatabaseMap, $this->m_fileName);
			return $lFileData;
        }
        //===============================================
        public function previewFile($file) {
            if($file == "") return "";
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            $lDatabaseMap = GJson::Instance()->getData($lDatabaseFile);
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            $lFileData = GDatabaseView::Instance()->previewFile($lDatabaseMap, $this->m_fileName);
			return $lFileData;
        }
        //===============================================
        public function deleteFile($file) {
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            return GDatabaseView::Instance()->deleteFile($lDatabaseFile, $this->m_fileName);
        }
        //===============================================
        public function updateDatabase($file, $data) {
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            return GDatabaseView::Instance()->updateDatabase($lDatabaseFile, $this->m_fileName, $data);
        }
        //===============================================
        public function createDatabase($file, $data) {
            $lJsonMap = GJson::Instance()->getData("data/json/Admin.json");
            $lJsonData = $lJsonMap["database"];
            $this->getDatabaseName($file);
            
            if($this->m_databaseName == "") return;
            $lDatabaseFile = "";
            $lDatabaseName = "";
            
            for($i = 0; $i < count($lJsonData); $i++) {
                $lData = $lJsonData[$i];
                $lDatabaseName = $lData["name"];
                if($lDatabaseName == $this->m_databaseName) {
                    $lDatabaseFile = $lData["file"];
                    break;
                }
            }
                
            GConfig::Instance()->setData("DATABASE", $lDatabaseName);
            return GDatabaseView::Instance()->createDatabase($lDatabaseFile, $data);
        }
        //===============================================
        public function getDatabaseName($file) {
			$lFileMap = explode("/", $file);
            $this->m_databaseName = "";
            $this->m_fileName = "";
            $lCount = 0;
            
			for($i = 0; $i < count($lFileMap); $i++) {
                $lFile = $lFileMap[$i];
                if($lFile != "") {
                    if($lCount == 0) $this->m_databaseName = $lFile;
                    if($lCount == 1) $this->m_fileName = $lFile;
                    $lCount++;
                }
            }
        }
        //===============================================
    }
?>        