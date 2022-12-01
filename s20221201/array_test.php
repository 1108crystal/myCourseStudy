
<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// INdexed arrays 
$indexArr = [1,2,3]; //key 0 1 2 
//var_dump($indexArr);
dd($indexArr);
dd($indexArr[0]);
dd($indexArr[1]);
dd($indexArr[2]);

//associative arrays
$assocArr=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat'
];

dd($assocArr);
dd($assocArr['s1']);
dd($assocArr['s2']);
dd($assocArr['s3']);


?>

<!-- 選五支手機 mobileArr -->
<!-- name 組 二維陣列 -->
<!-- 北 中 南 location 三維陣列 -->
<!-- 1. 北 中 南 -->
<!-- 2. 中 -->
<!-- 3. 北 南 -->
<!-- 4. 中 南 -->
<!-- 5. 北 中 南-->
<?php

//手機資料arrays
$mobileArr=[
    ['name'=>'Apple iPhone 14 128G',
    'price'=>'$25,800',
    'location'=>['北','中','南']],
    ['name'=>'Apple iPhone 14 256G',
    'price'=>'$28,500',
    'location'=>['中','南']],
    ['name'=>'Apple iPhone 14 512G',
    'price'=>'$34,500',
    'location'=>['北','中','南']],
    ['name'=>'Apple iPhone 14 Plus 128G',
    'price'=>'$29,800',
    'location'=>['中','南']],
    ['name'=>'Apple iPhone 14 Plus 128G 紫',
    'price'=>'$29,990',
    'location'=>['北']],
    ['name'=>'Apple iPhone 14 Plus 256G',
    'price'=>'$31,990',
    'location'=>['中','南']],
    ['name'=>'Apple iPhone 14 Plus 256G 紫',
    'price'=>'$32,500',
    'location'=>['北','南']]
];
dd($mobileArr);
foreach($mobileArr as $key=> $value){
    echo '<hr>';
    dd($value);
}
?>