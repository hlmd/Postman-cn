<?php
$arr = [
    //月份
    "'Jan'" => "'一月'",
    "'Feb'" => "'二月'",
    "'Mar'" => "'三月'",
    "'Apr'" => "'四月'",
    "'May'" => "'五月'",
    "'Jun'" => "'六月'",
    "'Jul'" => "'七月'",
    "'Aug'" => "'八月'",
    "'Sep'" => "'九月'",
    "'Oct'" => "'十月'",
    "'Nov'" => "'十一月'",
    "'Dec'" => "'十二月'",

    "'January'" => "'一月'",
    "'February'" => "'二月'",
    "'March'" => "'三月'",
    "'April'" => "'四月'",
    "'May'" => "'五月'",
    "'June'" => "'六月'",
    "'July'" => "'七月'",
    "'August'" => "'八月'",
    "'September'" => "'九月'",
    "'October'" => "'十月'",
    "'November'" => "'十一月'",
    "'December'" => "'十二月'",

    // 星期
    "'Sunday'" => "'星期日'",
    "'Monday'" => "'星期一'",
    "'Tuesday'" => "'星期二'",
    "'Wednesday'" => "'星期三'",
    "'Thursday'" => "'星期四'",
    "'Friday'" => "'星期五'",
    "'Saturday'" => "'星期六'",

    "'Sun'" => "'周日'",
    "'Mon'" => "'周一'",
    "'Tue'" => "'周二'",
    "'Wed'" => "'周三'",
    "'Thu'" => "'周四'",
    "'Fri'" => "'周五'",
    "'Sat'" => "'周六'",

    // 时间
    "'Today'" => "'今天'",
    "'Yesterday'" => "'昨天'",
    "'Year'" => "'年'",
    "'Month'" => "'月'",
    "'Hour'" => "'时'",
    "'Minute'" => "'分'",
    "'WK'" => "'星期'",
    "'AM'" => "'上午'",
    "'PM'" => "'下午'",
    "'Scroll to increment'" => "'滚动以递增'",
    "'Click to toggle'" => "'点击切换'",
    "' to '" => "'到'",
    "'th', 'st', 'nd', 'rd'" => "'号', '号', '号', '号'",
    "return 'st'" => "return '号'",
    "return 'nd'" => "return '号'",
    "return 'rd'" => "return '号'",
    "return 'th'" => "return '号'",
    "'am', 'pm'" => "'上午', '下午'",
    "'pm' : 'PM'" => "'下午' : '下午'",
    "'am' : 'AM'" => "'上午' : '上午'",
];

$arr2 = [];
foreach ($arr as $k => $v){
    $k = str_replace("'", '"', $k);
    $v = str_replace("'", '"', $v);
    $arr2[$k] = $v;
}
return array_merge($arr, $arr2);