<?php
//مثل ج قبلی
// } -> : 
// } -> end while
while (1)
{
    while ($i >= 15)
    {
        echo $i++;
        break 2;
    }
}

for($i = 0; print $i, $i < 15; $i++)
{
    // execute one time : $i = 0; print $i

    //echo $i;
}

$pl = ['php', 'jva'];

foreach ($pl as $key => $l)
{
    echo $key . $l;
}
//this not delete after fore -> issue on code
echo $l;
//solved
unset ($l);

//echo array on a multi var
implode(
    //or

json_encode()
)
?>