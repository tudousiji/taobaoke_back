<?php
return [ 
    //关键词表
   
    'keywords'=>[
        'table_name'=>'keywords',
        'table_field'               => [
            'keyword'      => 'keyword',
            'update_time'  => 'update_time',
        ],
    ],
    
    
    //关键词数据获取表
    'keywords_details'=>[
        'table_name'=>'keywords_details',
        'table_field'               => [
            'id'      => 'id',
            'keyword_id'      => 'keyword_id',
            'json'  => 'json',
            'page'  => 'page',
            'page_size'  => 'page_size',
            'update_time'  => 'update_time',
        ],
    ],
    
    
    'goods_list'=>[
        'table_name'=>'goods_list',
        'table_field'               => [
            'id'      => 'id',
            'keyword_id'      => 'keyword_id',
            'title'  => 'title',
            'itemId'  => 'itemId',
            'zkFinalPriceWap'  => 'zkFinalPriceWap',
            'biz30Day'  => 'biz30Day',
            'couponStartFee'  => 'couponStartFee',
            'clickUrl'  => 'clickUrl',
            'shareUrl'  => 'shareUrl',
            'pictUrl'  => 'pictUrl',
            'couponKey'  => 'couponKey',
            'couponAmount'  => 'couponAmount',
            'couponSendCount'  => 'couponSendCount',
            'couponTotalCount'  => 'couponTotalCount',
            'userType'  => 'userType',
            'update_time'  => 'update_time',
        ],
    ],
    
    //代理地址
    'proxy_ip'=>[
        'table_name'=>'proxy_ip',
        'table_field'               => [
            'id'      => 'id',
            'ip'      => 'ip',
            'port'  => 'port',
            'http_type'  => 'http_type',
            'status'  => 'status',
            'log'  => 'log',
            'update_time'  => 'update_time',
        ],
    ],
    
    //淘宝 tk
    'tbk_token'=>[
        'table_name'=>'tbk_token',
        'table_field'               => [
            'id'      => 'id',
            'proxy_id'      => 'proxy_id',
            'tk'  => 'tk',
            'status'  => 'status',
            'update_time'  => 'update_time',
        ],
    ],
];

?>