<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input Number of Data:");
fscanf(STDIN,"%d",$size);
for ($i=1;$i<=$size;$i++){
printf("data %2d\n",$i);
    // For more readability:
    printf("   Name Prefix (0: Mr., 1: Miss.):");
    // Try to change $data[0] to $data['prefix']
    fscanf(STDIN,"%d",$data[0]);
    printf("                       First Name:");
    // Try to change $data[1] to $data['fname']
    fscanf(STDIN,"%s",$data[1]);
    printf("                        Last Name:");
    // Try to change $data[2] to $data['lname']
    fscanf(STDIN,"%s",$data[2]);
    printf("      Gender (0: Male, 1: Female):");
    // Try to change $data[3] to $data['gender']
    fscanf(STDIN,"%d",$data[3]);
    printf("                     Phone Number:");
    // Try to change $data[4] to $data['phone']
    fscanf(STDIN,"%s",$data[4]);
$datas[]=$data;
}
/*
If you assign:

    $prefixData = ['Mr.', 'Miss.'];
    $genderData = ['Male', 'Female'];

you can get value from code (0, 1).

printf("%s%s %s\n", $prefix[$datas[$i]['prefix']], $datas[$i]['fname'], $datas[$i]['lname']);

*/
for ($i=0;$i<$size;$i++){
printf("--------------------------------------------\n");
if ($datas[$i][0]==0) printf("Mr.");else printf("Miss.");
printf("%s %s\nGender:",$datas[$i][1],$datas[$i][2]);
if ($datas[$i][3]==0) printf("Male\n");else printf("Female\n");
printf("Phone Number: %s\n",$datas[$i][4]);
}
printf("--------------------------------------------");