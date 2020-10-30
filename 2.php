<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
for ($j=1;;$i++){ // <-- I think this is a great technique.
printf("data %2d\n",$j);
    // For more readability:
    // Try to change $data[0] to $data['prefix']
    $data[0]=null;
    printf("          Name Prefix (0: Mr., 1: Miss., 2: Mrs.):");
    fscanf(STDIN,"%s",$data[0]);
    if ($data[0]==null) break;
    printf("                                       First Name:");
    // Try to change $data[1] to $data['fname']
    fscanf(STDIN,"%s",$data[1]);
    printf("                                        Last Name:");
    // Try to change $data[2] to $data['lname']
    fscanf(STDIN,"%s",$data[2]);
    printf("      Gender (0: Male, 1: Female, 2: Transgender):");
    // Try to change $data[3] to $data['gender']
    fscanf(STDIN,"%s",$data[3]);
/*
you MUST initial $phone unless you will get wrong output
when the first person have a number of phones greater than the second person.
*/
$phone = [];
    for ($k=0;;$k++){
    printf("                     Phone Number%2d:",$k+1);
    $phone[$k]=null;
    // this must be %s in the case of phone number lead with 0
    //fscanf(STDIN,"%d",$phone[$k]);
    fscanf(STDIN,"%s",$phone[$k]);
    if($phone[$k]==null) break;
    }
    $phone1=implode(", ", $phone);
    $phone1=rtrim($phone1,", ");
    // I think you can store phone in $data
    //$phones[]=$phone1;
    $data['phones'] = $phone1;
$datas[]=$data;
}

for ($i=0;$i<=$j;$i++){
printf("--------------------------------------------\n");
if ($datas[$i][0]==0) printf("Mr.");if ($datas[$i][0]==1) printf("Miss.");if ($datas[$i][0]==2) printf("Mrs.");
printf("%s %s\nGender:",$datas[$i][1],$datas[$i][2]);
if ($datas[$i][3]==0) printf("Male\n");if ($datas[$i][3]==1) printf("Female\n");else print("Transgender\n");
// This line wil be changed to
//printf("Phone Number:%s\n",$phones[$i]);}
printf("Phone Number:%s\n",$datas[$i]['phones']);}

printf("--------------------------------------------");
