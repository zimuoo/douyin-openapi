本包是根据ydg/douyin-open-sdk修改而来，感谢作者的辛苦付出~

#### 新增内容
1，增加抖音来客券码核销功能
2，其他代码优化

````php
<?php
$app = new Douyin();
$app->oauth->client_token([
'client_key' => 'your client key',
'client_secret' => 'your client secret',
]);
````

````php
<?php
$app = new Douyin([
    'access_token' => 'your access_token'
]);
$app->lifeOutsideDistribution->search_product([
    'uid' => 'your uid',
    'cursor' => 0,
    'count' => 10,
    'sort_by' => 1,
    'order_by' => 1,
]);
````