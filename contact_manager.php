<?php
//GOLAM MUKTADIR
//---------------Module 2--------------
// Project 1: Terminal-Based Contact Management App
//------------------------------

//global variable
$name1="";
$phn_num1="";
$name2="";
$phn_num2="";

while(true){
    echo "Terminal-Based Contact Management App\n";
    echo "--------------------------------------\n";
    echo "[1] Add Contact\n";
    echo "[2] View Contacts\n";
    echo "[3] Exit\n";
    echo "Enter menu no:";

$menu=trim(fgets(STDIN));
//echo $menu;

    //secho "Wrong menu, Please enter a valid menu\n";

    if($menu==1){
        //Add contacts
        if($name1==""){
            //Add contacts 1 info
            echo "Enter (Contact 1)name:";
            $name1=trim(fgets(STDIN));
            echo "Enter (Contact 1)Phone number:";
            $phn_num1=trim(fgets(STDIN));
            echo "Saved contact 1 ....\n";
                    }
        elseif($name2==""){
            //Add contacts 2 info
            echo "Enter (Contact 2)name:";
            $name2=trim(fgets(STDIN));
            echo "Enter (Contact 2)Phone number:";
            $phn_num2=trim(fgets(STDIN));
            echo "Saved contact 2....\n";
        }
        else{
            echo "Already two contacts saved!..\n";
        }
    }elseif($menu==2){
        //View contacts
        echo"\n=======Contact List============\n";
        if($name1!=""){
            echo "Name1: $name1 , Phone1: $phn_num1\n";
            
        }
        if($name2!=""){
            echo "Name2: $name2 , Phone2: $phn_num2\n";
        }
        // else{
        //     echo "Empty the contact list! please add some contact first\n\n";
        // }
        

    }elseif($menu==3){
        //Exit menu
        break;
        
    }else{
        echo "Wrong menu! please choice a valid menu";
    }


    //end while
}


?>