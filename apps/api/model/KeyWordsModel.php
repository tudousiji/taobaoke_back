<?php
namespace app\api\model;
use app\base\BaseModel;
use app\keyWords\model;
use think\Db;
use app\utils\TableUtils;
use app\tableUtils\keywordsUtils;

class KeyWordsModel extends BaseModel{
    public function getData($id=1,$page=1,$isCollection=true){
        
        $keyConfig=require("apps/config/keyConfig.php");
        
        $keyWord=Db::table(TableUtils::getTableDetails('keywords'))->
        where(TableUtils::getTableDetails('keywords', 'id'),'>', $id)->order(TableUtils::getTableDetails('keywords', 'id'),"asc")
        ->find();
       
        
         $keywordsModel = new \app\keyWords\model\KeyWords();
         //var_dump($page);
         $return = $keywordsModel->getData($keyWord[TableUtils::getTableDetails('keywords', 'keyword')], $page, $keyConfig['keyWordCollectionPageSize'],$isCollection);
         //var_dump($keyWord);
         
         return $keyWord;
    }
    
    public function getNextData($keyWord){
        //print_r($keyWord);
        $keyWord=Db::table(TableUtils::getTableDetails('keywords'))->
        where(TableUtils::getTableDetails('keywords', 'id'),'>', $keyWord[TableUtils::getTableDetails('keywords', 'id')])->order(TableUtils::getTableDetails('keywords', 'id'),"asc")
        ->find();
        return $keyWord;
    }
    
    public function addHotKeyWords($data){
        $daren=new keywordsUtils();
        return $daren->addHotKeyWords($data);
    }
    
    public function findHotKeyWords($keyWord){
        $daren=new keywordsUtils();
        return $daren->findHotKeyWords($keyWord);
    }
    
    public function getKeyWordsList($page=1,$pageSize=20){
        $daren=new keywordsUtils();
        return $daren->getKeyWordsList($page,$pageSize);
    }
    
}

?>