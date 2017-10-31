<?php
namespace app\tableUtils;
use think\Db;
use app\utils\TableUtils;


class goodslistUtils{
    
    
    public function getItem($itemId){
        return Db::table(TableUtils::getTableDetails('goods_list'))->where(
            TableUtils::getTableDetails('goods_list', 'itemId'), $itemId)->find();
    }
    
    //获取大于传入id的最近的一条数据
    public function getItemForGtId($id){
        return Db::table(TableUtils::getTableDetails('goods_list'))->where(
            TableUtils::getTableDetails('id','>', 'id'), $id)->limit(1)->order("id asc")->find();
    }
    
    public  function updateItem($id,$data){
        return Db::table(TableUtils::getTableDetails('goods_list'))->where(
            TableUtils::getTableDetails('goods_list', 'id'), $id)
            ->setField($data);
    }
    
    //更新商品页面关键词
    public function updateKeyword($id,$data){
        return Db::table(TableUtils::getTableDetails('goods_list'))->where(
            TableUtils::getTableDetails('goods_list', 'id'), $id)
            ->setField($data);
    }
    
    
    public function getRandList($randCount=10){
        $table= Db::table(TableUtils::getTableDetails('goods_list'))
        ->alias('a')
        ->field('a.*,w.keywords
            ,w.reason,w.commentList,
            w.askeverybodyList,w.itemId as taobao_item_info_itemId') 
        ->join('taobao_item_info w','a.itemId = w.itemId','LEFT');
        $data=$table->order('rand()')->limit($randCount)->select();
         
        return $data;
    }
}

?>