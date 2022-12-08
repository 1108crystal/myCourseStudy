<script>
    //----- foreach----//
    employeeArr = [3, 4, 5, 6, 7];
    //發獎金2倍
    let bonusArr = [];
    employeeArr.forEach((value, key) => {
        bonusArr.push(value * 2);
    });
    console.log('bonusArr', bonusArr);

    //用foreach 加總
    let sumValue = 0;
    bonusArr.forEach((value, key) => {
        sumValue = sumValue + value;
    });
    console.log('sumValue', sumValue);

    //用foreach 薪>5萬的
    let filterArr = [];
    employeeArr.forEach((value, key) => {
        if (value > 5) {
            filterArr.push(value);
        }
    });
    console.log('filterArr', filterArr);
</script>


<?PHP
$employeeArr = [3, 4, 5, 6, 7];
//發二倍獎金
$bonusArr = []; //發二倍金
$sumValue = 0; //加總
$filterArr= []; //薪>5萬的
foreach ($employeeArr as  $value) {
    //發二倍金
    array_push($bonusArr, $value * 2);
    // 加總
    $sumValue += $value * 2;
    //薪>5萬的
    if($value>5){
        array_push($filterArr, $value);
    }

}
print_r($bonusArr);
echo "<BR>";
print_r($sumValue);
echo "<BR>";
print_r($filterArr);


?>