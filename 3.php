<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */

$grade=[
    'A'=>[],
    'B'=>[],
    'C'=>[],
    'D'=>[],
    'F'=>[]
];
for($i=1;;$i++){
$inputs[1]=null;
// You MUST initial $inputs[2] too to prevent case user does not input grade.
$inputs[2]=null;
printf("Student %2d: (name grade, enter for end of data):",$i);
fscanf(STDIN,"%s %s",$inputs[1],$inputs[2]);
/*
For making this task simpler, try the following code:

if(array_key_exists($inputs[2], $grade)) {
    $grade[$inputs[2]][]=$inputs[1];
} else {
    printf("Please input A, B, C, D or F for grade!!!\n");
}

*/

if ($inputs[2]=="A") $grade['A'][]=$inputs[1];
else if ($inputs[2]=="B") $grade['B'][]=$inputs[1];
else if ($inputs[2]=="C") $grade['C'][]=$inputs[1];
else if ($inputs[2]=="D") $grade['D'][]=$inputs[1];
else if ($inputs[2]=="F") $grade['F'][]=$inputs[1];
else printf("Please input A, B, C, D or F for grade!!!\n");
if ($inputs[1]==null) break; // <-- To prevent unwanted error message move this line to line 31.
}

var_dump($grade);

foreach($grade as $key=>$scores){
 $number=count($grade[$key]);
 printf("$key(%2d):",$number);
 printf(implode(',',$scores)."\n");}