<?php

/*FLOATS*/

//neg float
$X = 13.5e-3;

//+ 
$X = 13.5e3; // or 13_000.5e3

echo PHP_FLOAT_MAX; // OR min
// نمایش حداکثر و حداقل مقدار

floor ((0.1 + 0.7) * 10);
// گرد کردن اعداد به پایین
// متضادش ceil

ceil((0.1+0.2)*10); // 4! : 3.00000000000004 = گردش میکنه

//نباید مستقیم این اعداد رو با هم مقایسه کنید

//NAN = تعریف نشده
#is_nan ?
// INF = بینهایت
#is_infinite ?
#is_finite ?
 
echo PHP_FLOAT_MAX *2;

//cast to float
var_dump ((float) 'flsdkjf'); // 0 مثل اینتیجر
?>