
<?php
require_once('../db/database.php');

if (mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{

?>


<!DOCTYPE html>
<html>
    <head>

        <title>Results</title>
        <style>
           body{
               
                margin: auto;
                font-family: arial, sans-serif;


            }
            #body{
                clear:both;
                margin: auto;
                height:297mm;
                width:210mm;


            }
            
            .head{
                text-align: center;
            
            }
            .add{
                margin-top: -17px;
            }
            .term{
                background: #000;
                color: white;
                width: 80px;
                font-weight: bold;
                border-radius: 5px;
                margin: auto;
                text-align: center;
                clear: both;
            
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
            width: 100%;

            }
            .table{
                border: 2px;
                border-collapse: collapse;
                width: 100%;
            }
            .subtable{
                width:410px;
                float: left;
            }

            .table td{
              border:none;
              text-align: left;
              padding-left: px;
              font-size: 90%;
              text-transform:capitalize;
            
            }
            .table th {
              border: none;
              text-align: left;
              
              
            
            }
            
            .subtable td{
              border: 2px solid #050505;
              text-align: left;
              padding-left: 10px;
              text-transform: uppercase;
              font-size: 77%;
            
            }
            .subtable th{
              border: 2px solid #050505;
              vertical-align: bottom;
              text-transform: capitalize;
              text-align: left;

            }
            .test{
                padding-left: 4px;
                font-size: 82%;

            }   
            .test1{
                padding-left: 4px;
                font-size:70%;
             
            }
            td{
                height:11px;
            
            }

            .subject{
                width:30% ;
                font-size: 130%;
                padding-left: 10px;
            }
            .remark{
            padding-left: 10px;
            font-size: 82%;
           
            }

            .li-remark{
                width:10% ;
                 padding-right: 10px;
            }
            .li-sub{
                font-weight:bold;
                width:30% ;
            }
            .li-test{
                width: 10%;
            }
            .logo{
                width: 200px;
                margin: auto;
            }
            .col{
                float: right;

            }
            .comment{
                width:70%;
                float:left;
            }
            .key{
                width:30%;
                margin-left:75%;
                font-size:80%;
                margin-top:-10px;
                font-weight:bold;
            }
            .key h3{
                padding-left:20px;
            }
 
            .sign{
                width: 100px;
            }
            .GeneratedTable {
            width:250px;
            background-color: #ffffff;
            border-collapse: collapse;
            color: #000000;
            
            }
            .assess{
            margin-left:545px ;
            border: solid 1px #000;
            width:250px;

            }
            .assess1{
            border: solid 1px #000;
            width:99%;
            text-align: center;
            height: 55px;

            }
            .assess1 h3{
                font-size: 93%;
            }
            .GeneratedTable td,.GeneratedTable th {
            border-width: 1px;
            border-color: #000000;
            border-style: solid;
            padding-left: 8px;
            font-size: 77%;
            text-transform: capitalize;
            text-align: left;
            height: 14px;
            
            }

            .GeneratedTable thead {
            background-color: #ffffff;
            }
            .dot {
              height:8px;
              width:8px;
              background-color: #000;
              border-radius: 50%;
              display: inline-block;
            }
            .att{
                text-transform: capitalize;
                font-weight:bold;
            }
        </style>
        <script>
            function printDiv(body)
            {
            var printContents = document.getElementById(body).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            }
        </script>
    </head>
    <body >
        
<?php
$english_test= $row['english_test1'] + $row['english_test2'];
$math_test= $row['math_test1'] + $row['math_test2'];
$geo_test= $row['geo_test1'] + $row['geo_test2'];
$phone_test= $row['phone_test1'] + $row['phone_test2'];
$yih_test= $row['yih_test1'] + $row['yih_test2'];
$french_test= $row['french_test1'] + $row['french_test2'];
$lit_test= $row['lit_test1'] + $row['lit_test2'];
$history_test= $row['history_test1'] + $row['history_test2'];
$govt_test= $row['govt_test1'] + $row['govt_test2'];
$crs_irs_test= $row['crs_irs_test1'] + $row['crs_irs_test2'];
$econs_test= $row['econs_test1'] + $row['econs_test2'];
$f_maths_test= $row['f_maths_test1'] + $row['f_maths_test2'];
$phy_test= $row['phy_test1'] + $row['phy_test2'];
$chem_test= $row['chem_test1'] + $row['chem_test2'];
$bio_test= $row['bio_test1'] + $row['bio_test2'];
$fine_art_test= $row['fine_art_test1'] + $row['fine_art_test2'];
$music_test= $row['music_test1'] + $row['music_test2'];
$tech_draw_test= $row['tech_draw_test1'] + $row['tech_draw_test2'];
$commerce_test= $row['commerce_test1'] + $row['commerce_test2'];
$acc_test= $row['acc_test1'] + $row['acc_test2'];
$agric_sci_test= $row['agric_sci_test1'] + $row['agric_sci_test2'];
$food_nu_test= $row['food_nu_test1'] + $row['food_nu_test2'];
$comp_test= $row['comp_test1'] + $row['comp_test2'];
$b_keep_test= $row['b_keep_test1'] + $row['b_keep_test2'];
$c_c_test= $row['c_c_test1'] + $row['c_c_test2'];
$basic_elect_test= $row['basic_elect_test1'] + $row['basic_elect_test2'];
$civic_test= $row['civic_test1'] + $row['civic_test2'];
$home_mgt_test= $row['home_mgt_test1'] + $row['home_mgt_test2'];
$arabic_test= $row['arabic_test1'] + $row['arabic_test2'];

$english_total= $english_test  + $row['english_exam'];
$math_total= $math_test  + $row['math_exam'];
$geo_total= $geo_test  + $row['geo_exam'];
$phone_total= $phone_test  + $row['phone_exam'];
$yih_total= $yih_test  + $row['yih_exam'];
$french_total= $french_test  + $row['french_exam'];
$lit_total= $lit_test  + $row['lit_exam'];
$history_total= $history_test  + $row['history_exam'];
$govt_total= $govt_test  + $row['govt_exam'];
$crs_irs_total= $crs_irs_test  + $row['crs_irs_exam'];
$econs_total= $econs_test  + $row['econs_exam'];
$f_maths_total= $f_maths_test  + $row['f_maths_exam'];
$phy_total= $phy_test  + $row['phy_exam'];
$chem_total= $chem_test  + $row['chem_exam'];
$bio_total= $bio_test  + $row['bio_exam'];
$fine_art_total= $fine_art_test  + $row['fine_art_exam'];
$music_total= $music_test  + $row['music_exam'];
$tech_draw_total= $tech_draw_test  + $row['tech_draw_exam'];
$commerce_total= $commerce_test  + $row['commerce_exam'];
$acc_total= $acc_test  + $row['acc_exam'];
$agric_sci_total= $agric_sci_test  + $row['agric_sci_exam'];
$food_nu_total= $food_nu_test  + $row['food_nu_exam'];
$comp_total= $comp_test  + $row['comp_exam'];
$b_keep_total= $b_keep_test  + $row['b_keep_exam'];
$c_c_total= $c_c_test  + $row['c_c_exam'];
$basic_elect_total= $basic_elect_test  + $row['basic_elect_exam'];
$civic_total= $civic_test  + $row['civic_exam'];
$home_mgt_total= $home_mgt_test  + $row['home_mgt_exam'];
$arabic_total= $arabic_test  + $row['arabic_exam'];

$exam_total=   $english_total  + $math_total  + $geo_total  + $phone_total  + $yih_total  + $french_total  + $lit_total  + $crs_irs_total  + $history_total  + $govt_total  + $econs_total  + $f_maths_total  + $phy_total  + $chem_total  + $bio_total  + $fine_art_total  + $music_total  + $tech_draw_total  + $commerce_total  + $acc_total  + $agric_sci_total  + $food_nu_total  + $comp_total  + $b_keep_total  + $c_c_total  + $basic_elect_total  + $civic_total  + $home_mgt_total  + $arabic_total;



$english_grand_exam= $row['english_total1'] + $row['english_total2'] + $english_total;
$math_grand_exam= $row['math_total1'] + $row['math_total2'] + $math_total;
$geo_grand_exam= $row['geo_total1'] + $row['geo_total2'] + $geo_total;
$phone_grand_exam= $row['phone_total1'] + $row['phone_total2'] + $phone_total;
$yih_grand_exam= $row['yih_total1'] + $row['yih_total2'] + $yih_total;
$french_grand_exam= $row['french_total1'] + $row['french_total2'] + $french_total;
$lit_grand_exam= $row['lit_total1'] + $row['lit_total2'] + $lit_total;
$crs_irs_grand_exam= $row['crs_irs_total1'] + $row['crs_irs_total2'] + $crs_irs_total;
$history_grand_exam= $row['history_total1'] + $row['history_total2'] + $history_total;
$govt_grand_exam= $row['govt_total1'] + $row['govt_total2'] + $govt_total;
$econs_grand_exam= $row['econs_total1'] + $row['econs_total2'] + $econs_total;
$f_maths_grand_exam= $row['f_maths_total1'] + $row['f_maths_total2'] + $f_maths_total;
$phy_grand_exam= $row['phy_total1'] + $row['phy_total2'] + $phy_total;
$chem_grand_exam= $row['chem_total1'] + $row['chem_total2'] + $chem_total;
$bio_grand_exam= $row['bio_total1'] + $row['bio_total2'] + $bio_total;
$fine_art_grand_exam= $row['fine_art_total1'] + $row['fine_art_total2'] + $fine_art_total;
$music_grand_exam= $row['music_total1'] + $row['music_total2'] + $music_total;
$tech_draw_grand_exam= $row['tech_draw_total1'] + $row['tech_draw_total2'] + $tech_draw_total;
$commerce_grand_exam= $row['commerce_total1'] + $row['commerce_total2'] + $commerce_total;
$acc_grand_exam= $row['acc_total1'] + $row['acc_total2'] + $acc_total;
$agric_sci_grand_exam= $row['agric_sci_total1'] + $row['agric_sci_total2'] + $agric_sci_total;
$food_nu_grand_exam= $row['food_nu_total1'] + $row['food_nu_total2'] + $food_nu_total;
$comp_grand_exam= $row['comp_total1'] + $row['comp_total2'] + $comp_total;
$b_keep_grand_exam= $row['b_keep_total1'] + $row['b_keep_total2'] + $b_keep_total;
$c_c_grand_exam= $row['c_c_total1'] + $row['c_c_total2'] + $c_c_total;
$basic_elect_grand_exam= $row['basic_elect_total1'] + $row['basic_elect_total2'] + $basic_elect_total;
$civic_grand_exam= $row['civic_total1'] + $row['civic_total2'] + $civic_total;
$home_mgt_grand_exam= $row['home_mgt_total1'] + $row['home_mgt_total2'] + $home_mgt_total;
$arabic_grand_exam= $row['arabic_total1'] + $row['arabic_total2'] + $arabic_total;


$grand= $english_grand_exam  + $math_grand_exam  + $geo_grand_exam  + $phone_grand_exam  + $yih_grand_exam  + $french_grand_exam  + $lit_grand_exam  + $crs_irs_grand_exam  + $history_grand_exam  + $govt_grand_exam  + $econs_grand_exam  + $f_maths_grand_exam  + $phy_grand_exam  + $chem_grand_exam  + $bio_grand_exam  + $fine_art_grand_exam  + $music_grand_exam  + $tech_draw_grand_exam  + $commerce_grand_exam  + $acc_grand_exam  + $agric_sci_grand_exam  + $food_nu_grand_exam  + $comp_grand_exam  + $b_keep_grand_exam  + $c_c_grand_exam  + $basic_elect_grand_exam  + $civic_grand_exam  + $home_mgt_grand_exam  + $arabic_grand_exam;

$percent= $exam_total/$row['max_obt'] * 100;



$english_average= $english_grand_exam/300 * 100;
$math_average= $math_grand_exam/300 * 100;
$geo_average= $geo_grand_exam/300 * 100;
$phone_average= $phone_grand_exam/300 * 100;
$yih_average= $yih_grand_exam/300 * 100;
$french_average= $french_grand_exam/300 * 100;
$lit_average= $lit_grand_exam/300 * 100;
$crs_irs_average= $crs_irs_grand_exam/300 * 100;
$history_average= $history_grand_exam/300 * 100;
$govt_average= $govt_grand_exam/300 * 100;
$econs_average= $econs_grand_exam/300 * 100;
$f_maths_average= $f_maths_grand_exam/300 * 100;
$phy_average= $phy_grand_exam/300 * 100;
$chem_average= $chem_grand_exam/300 * 100;
$bio_average= $bio_grand_exam/300 * 100;
$fine_art_average= $fine_art_grand_exam/300 * 100;
$music_average= $music_grand_exam/300 * 100;
$tech_draw_average= $tech_draw_grand_exam/300 * 100;
$commerce_average= $commerce_grand_exam/300 * 100;
$acc_average= $acc_grand_exam/300 * 100;
$agric_sci_average= $agric_sci_grand_exam/300 * 100;
$food_nu_average= $food_nu_grand_exam/300 * 100;
$comp_average= $comp_grand_exam/300 * 100;
$b_keep_average= $b_keep_grand_exam/300 * 100;
$c_c_average= $c_c_grand_exam/300 * 100;
$basic_elect_average= $basic_elect_grand_exam/300 * 100;
$civic_average= $civic_grand_exam/300 * 100;
$home_mgt_average= $home_mgt_grand_exam/300 * 100;
$arabic_average= $arabic_grand_exam/300 * 100;

$a='EXCELLENT';
$b='V. GOOD';
$c='GOOD';
$p ='PASS';
$f='FAIL';
?>

        <div>
        <div style="float:right"> 
           <button type="button" value="click" onclick="printDiv('body')" style="color:white;background-color:#3794fc;width:100px;border-radius:5px;border:solid #000 2px;height:40px;margin-right:110px;margin-top:40px;" >print </button>
        </div>
        <div id="body">
                <div style="clear: both;">
                        <img src="../img/logo.png" class="logo" alt="">

                <div class="col">
                    <h1 class="head">HENRY COMPREHENSIVE COLLEGE</h1>

                    <p class="add">14,Oremeji Street, Off Agunbiade, Oke-koto, Agege Lagos</p>
                    <p class="add"> 25/30 Ojekunle Street, Agege, Lagos.</p>
                    <p class="add">Tel: 09099329192, 07025994280</p>
                </div>
                </div>
                <p class=" term"> <?php echo $row['term']?> Term</p>
            
                <br />
               <table class="table">
                    <tr >
                        <td><b>NAME: </b> <?php echo $row['name']?></td>
                        <td><b>ADMISSION NO: </b> <?php echo $row['admno']?></td>
            
                    </tr>
                    <tr >
                        <td><b>CLASS: </b> <?php echo $row['class']?></td>
                        <td><b>NO IN CLASS:</b>  <?php echo $row['class_no']?></td>
            
                    </tr>
                    <tr >
                        <td><b>MAX.OBTAINABLE MARK:</b>   <?php echo $row['max_obt']?></td>
                        <td><b>TOTAL MARK SCORED:  </b> <?php echo $exam_total;?></td>
            
                    </tr>
                    <tr >
                        <td><b>POSITION IN CLASS: </b>  <?php echo $row['position']?></td>
                        <td><b>OVERALL PERCENTAGE:  </b> <?php echo (int)$percent ?></td>
            
                    </tr>
                    <tr >
                        <td><b>SESSION/TERM:</b>   <?php echo $row['session']?></td>
                        <td><b>NEXT TERM BEGINS: </b>  <?php echo $row['nxt_term_begins']?></td>
            
                    </tr>
                     <tr >
                        <td><b>NO OF TIMES PRESENT:</b>    <?php echo $row['no_present']?></td>
                        <td><b>NO OF TIMES ABSENT: </b>   <?php echo $row['no_absent']?></td>
            
                    </tr>
            
                </table>
                 <br />
                <table class="subtable">
                    <tr>
                        <th class="subject">SUBJECTS</th>
                        <th class="test1">C.A Score 40</th>
                        <th class="test1">Exam Score 60</th>
                        <th class="test1">Total Mark 100</th>
                        <th class="test1">1st Term Score 100</th>
                        <th class="test1">2nd Term Score 100</th>
                        <th class="test1">Grand Total 300</th>
                        <th class="test">Average</th>
                        <th class="test">Grade</th>
                        <th class="test"> Teacher's Remark</th>
                    </tr>
                    <tr>
                        <td class="li-sub">English</td>
                       <td class="li-test"> <?php if($english_test==0){echo null;} else{echo $english_test;} ?></td>
                        <td class="li-test"><?php echo $row['english_exam']?></td>
                        <td class="li-test"><?php 
                            if($english_total== 0){echo null;} else{echo $english_total;} ?></td>                   
                        <td class="li-test"><?php echo $row['english_total1']?></td>
                        <td class="li-test"><?php echo $row['english_total2']?></td>
                        <td class="li-test"><?php 
                            if($english_grand_exam== 0){echo null;} else{echo $english_grand_exam;} ?></td>         
                        <td class="li-test"><?php 
                            if($english_average== 0){echo null;} else{echo (int)$english_average;} ?></td>                   
                        <td class="li-test">
                            <?php
                           
                           if($english_average >= '70'){echo "A";} else{
                              if('69' >= $english_average && $english_average >= '60'){echo "B";} else{
                               if('59' >= $english_average && $english_average >= '50'){echo "C";} else{
                               if('49' >= $english_average && $english_average >= '45'){echo "P";} else{
                                   if('44' >= $english_average && $english_average >= '1'){echo "F";} else{
                               if($english_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($english_average >= '70'){echo "$a";} else{
                              if('69' >= $english_average && $english_average >= '60'){echo "$b";} else{
                               if('59' >= $english_average && $english_average >= '50'){echo "$c";} else{
                               if('49' >= $english_average && $english_average >= '45'){echo "$p";} else{
                                   if('44' >= $english_average && $english_average >= '1'){echo "$f";} else{
                                       if($english_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Mathematics</td>
                        <td class="li-test"> <?php if($math_test==0){echo null;} else{echo $math_test;} ?></td>                        <td class="li-test"><?php echo $row['math_exam']?></td>
                        <td class="li-test"><?php 
                            if($math_total== 0){echo null;} else{echo $math_total;} ?></td>                        <td class="li-test"><?php echo $row['math_total1']?></td>
                        <td class="li-test"><?php echo $row['math_total2']?></td>
                        <td class="li-test"><?php 
                            if($math_grand_exam== 0){echo null;} else{echo $math_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($math_average== 0){echo null;} else{echo (int) $math_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($math_average >= '70'){echo "A";} else{
                              if('69' >= $math_average && $math_average >= '60'){echo "B";} else{
                               if('59' >= $math_average && $math_average >= '50'){echo "C";} else{
                               if('49' >= $math_average && $math_average >= '45'){echo "P";} else{
                                   if('44' >= $math_average && $math_average >= '1'){echo "F";} else{
                               if($math_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($math_average >= '70'){echo "$a";} else{
                              if('69' >= $math_average && $math_average >= '60'){echo "$b";} else{
                               if('59' >= $math_average && $math_average >= '50'){echo "$c";} else{
                               if('49' >= $math_average && $math_average >= '45'){echo "$p";} else{
                                   if('44' >= $math_average && $math_average >= '1'){echo "$f";} else{
                                       if($math_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Geography</td>
                        <td class="li-test"> <?php if($geo_test==0){echo null;} else{echo $geo_test;} ?></td>                          <td class="li-test"><?php echo $row['geo_exam']?></td>
                        <td class="li-test"><?php 
                            if($geo_total== 0){echo null;} else{echo $geo_total;} ?></td>                        <td class="li-test"><?php echo $row['geo_total1']?></td>
                        <td class="li-test"><?php echo $row['geo_total2']?></td>
                        <td class="li-test"><?php 
                            if($geo_grand_exam== 0){echo null;} else{echo $geo_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($geo_average== 0){echo null;} else{echo (int) $geo_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($geo_average >= '70'){echo "A";} else{
                              if('69' >= $geo_average && $geo_average >= '60'){echo "B";} else{
                               if('59' >= $geo_average && $geo_average >= '50'){echo "C";} else{
                               if('49' >= $geo_average && $geo_average >= '45'){echo "P";} else{
                                   if('44' >= $geo_average && $geo_average >= '1'){echo "F";} else{
                               if($geo_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($geo_average >= '70'){echo "$a";} else{
                              if('69' >= $geo_average && $geo_average >= '60'){echo "$b";} else{
                               if('59' >= $geo_average && $geo_average >= '50'){echo "$c";} else{
                               if('49' >= $geo_average && $geo_average >= '45'){echo "$p";} else{
                                   if('44' >= $geo_average && $geo_average >= '1'){echo "$f";} else{
                                       if($geo_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Phonetics</td>
                        <td class="li-test"> <?php if($phone_test==0){echo null;} else{echo $phone_test;} ?></td>                          <td class="li-test"><?php echo $row['phone_exam']?></td>
                        <td class="li-test"><?php 
                            if($phone_total== 0){echo null;} else{echo $phone_total;} ?></td>                        <td class="li-test"><?php echo $row['phone_total1']?></td>
                        <td class="li-test"><?php echo $row['phone_total2']?></td>
                        <td class="li-test"><?php 
                            if($phone_grand_exam== 0){echo null;} else{echo $phone_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($phone_average== 0){echo null;} else{echo (int) $phone_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($phone_average >= '70'){echo "A";} else{
                              if('69' >= $phone_average && $phone_average >= '60'){echo "B";} else{
                               if('59' >= $phone_average && $phone_average >= '50'){echo "C";} else{
                               if('49' >= $phone_average && $phone_average >= '45'){echo "P";} else{
                                   if('44' >= $phone_average && $phone_average >= '1'){echo "F";} else{
                               if($phone_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($phone_average >= '70'){echo "$a";} else{
                              if('69' >= $phone_average && $phone_average >= '60'){echo "$b";} else{
                               if('59' >= $phone_average && $phone_average >= '50'){echo "$c";} else{
                               if('49' >= $phone_average && $phone_average >= '45'){echo "$p";} else{
                                   if('44' >= $phone_average && $phone_average >= '1'){echo "$f";} else{
                                       if($phone_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Yoruba/Igbo/Hausa</td>
                        <td class="li-test"> <?php if($yih_test==0){echo null;} else{echo $yih_test;} ?></td>                          <td class="li-test"><?php echo $row['yih_exam']?></td>
                        <td class="li-test"><?php 
                            if($yih_total== 0){echo null;} else{echo $yih_total;} ?></td>                        <td class="li-test"><?php echo $row['yih_total1']?></td>
                        <td class="li-test"><?php echo $row['yih_total2']?></td>
                        <td class="li-test"><?php 
                            if($yih_grand_exam== 0){echo null;} else{echo $yih_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($yih_average== 0){echo null;} else{echo (int) $yih_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($yih_average >= '70'){echo "A";} else{
                              if('69' >= $yih_average && $yih_average >= '60'){echo "B";} else{
                               if('59' >= $yih_average && $yih_average >= '50'){echo "C";} else{
                               if('49' >= $yih_average && $yih_average >= '45'){echo "P";} else{
                                   if('44' >= $yih_average && $yih_average >= '1'){echo "F";} else{
                               if($yih_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($yih_average >= '70'){echo "$a";} else{
                              if('69' >= $yih_average && $yih_average >= '60'){echo "$b";} else{
                               if('59' >= $yih_average && $yih_average >= '50'){echo "$c";} else{
                               if('49' >= $yih_average && $yih_average >= '45'){echo "$p";} else{
                                   if('44' >= $yih_average && $yih_average >= '1'){echo "$f";} else{
                                       if($yih_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                     <tr>
                         <td class="li-sub">French</td>
                        <td class="li-test"> <?php if($french_test==0){echo null;} else{echo $french_test;} ?></td>  
                        <td class="li-test"><?php echo $row['french_exam']?></td>
                        <td class="li-test"><?php 
                            if($french_total== 0){echo null;} else{echo $french_total;} ?></td>                        <td class="li-test"><?php echo $row['french_total1']?></td>
                        <td class="li-test"><?php echo $row['french_total2']?></td>
                        <td class="li-test"><?php 
                            if($french_grand_exam== 0){echo null;} else{echo $french_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($french_average== 0){echo null;} else{echo (int) $french_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($french_average >= '70'){echo "A";} else{
                              if('69' >= $french_average && $french_average >= '60'){echo "B";} else{
                               if('59' >= $french_average && $french_average >= '50'){echo "C";} else{
                               if('49' >= $french_average && $french_average >= '45'){echo "P";} else{
                                   if('44' >= $french_average && $french_average >= '1'){echo "F";} else{
                               if($french_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($french_average >= '70'){echo "$a";} else{
                              if('69' >= $french_average && $french_average >= '60'){echo "$b";} else{
                               if('59' >= $french_average && $french_average >= '50'){echo "$c";} else{
                               if('49' >= $french_average && $french_average >= '45'){echo "$p";} else{
                                   if('44' >= $french_average && $french_average >= '1'){echo "$f";} else{
                                       if($french_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                     <tr>
                         <td class="li-sub">Lit-In-Eng</td>
                        <td class="li-test"> <?php if($lit_test==0){echo null;} else{echo $lit_test;} ?></td>                          <td class="li-test"><?php echo $row['lit_exam']?></td>
                        <td class="li-test"><?php 
                            if($lit_total== 0){echo null;} else{echo $lit_total;} ?></td>                        <td class="li-test"><?php echo $row['lit_total1']?></td>
                        <td class="li-test"><?php echo $row['lit_total2']?></td>
                        <td class="li-test"><?php 
                            if($lit_grand_exam== 0){echo null;} else{echo $lit_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($lit_average== 0){echo null;} else{echo (int) $lit_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($lit_average >= '70'){echo "A";} else{
                              if('69' >= $lit_average && $lit_average >= '60'){echo "B";} else{
                               if('59' >= $lit_average && $lit_average >= '50'){echo "C";} else{
                               if('49' >= $lit_average && $lit_average >= '45'){echo "P";} else{
                                   if('44' >= $lit_average && $lit_average >= '1'){echo "F";} else{
                               if($lit_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($lit_average >= '70'){echo "$a";} else{
                              if('69' >= $lit_average && $lit_average >= '60'){echo "$b";} else{
                               if('59' >= $lit_average && $lit_average >= '50'){echo "$c";} else{
                               if('49' >= $lit_average && $lit_average >= '45'){echo "$p";} else{
                                   if('44' >= $lit_average && $lit_average >= '1'){echo "$f";} else{
                                       if($lit_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">C.R.S / I.R.S</td>
                        <td class="li-test"> <?php if($crs_irs_test==0){echo null;} else{echo $crs_irs_test;} ?></td>  
                        <td class="li-test"><?php echo $row['crs_irs_exam']?></td>
                        <td class="li-test"><?php 
                            if($crs_irs_total== 0){echo null;} else{echo $crs_irs_total;} ?></td>                        <td class="li-test"><?php echo $row['crs_irs_total1']?></td>
                        <td class="li-test"><?php echo $row['crs_irs_total2']?></td>
                        <td class="li-test"><?php 
                            if($crs_irs_grand_exam== 0){echo null;} else{echo $crs_irs_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($crs_irs_average== 0){echo null;} else{echo (int) $crs_irs_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($crs_irs_average >= '70'){echo "A";} else{
                              if('69' >= $crs_irs_average && $crs_irs_average >= '60'){echo "B";} else{
                               if('59' >= $crs_irs_average && $crs_irs_average >= '50'){echo "C";} else{
                               if('49' >= $crs_irs_average && $crs_irs_average >= '45'){echo "P";} else{
                                   if('44' >= $crs_irs_average && $crs_irs_average >= '1'){echo "F";} else{
                               if($crs_irs_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($crs_irs_average >= '70'){echo "$a";} else{
                              if('69' >= $crs_irs_average && $crs_irs_average >= '60'){echo "$b";} else{
                               if('59' >= $crs_irs_average && $crs_irs_average >= '50'){echo "$c";} else{
                               if('49' >= $crs_irs_average && $crs_irs_average >= '45'){echo "$p";} else{
                                   if('44' >= $crs_irs_average && $crs_irs_average >= '1'){echo "$f";} else{
                                       if($crs_irs_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">History</td>
                        <td class="li-test"> <?php if($history_test==0){echo null;} else{echo $history_test;} ?></td>  
                        <td class="li-test"><?php echo $row['history_exam']?></td>
                        <td class="li-test"><?php 
                            if($history_total== 0){echo null;} else{echo $history_total;} ?></td>                        <td class="li-test"><?php echo $row['history_total1']?></td>
                        <td class="li-test"><?php echo $row['history_total2']?></td>
                        <td class="li-test"><?php 
                            if($history_grand_exam== 0){echo null;} else{echo $history_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($history_average== 0){echo null;} else{echo (int) $history_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($history_average >= '70'){echo "A";} else{
                              if('69' >= $history_average && $history_average >= '60'){echo "B";} else{
                               if('59' >= $history_average && $history_average >= '50'){echo "C";} else{
                               if('49' >= $history_average && $history_average >= '45'){echo "P";} else{
                                   if('44' >= $history_average && $history_average >= '1'){echo "F";} else{
                               if($history_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($history_average >= '70'){echo "$a";} else{
                              if('69' >= $history_average && $history_average >= '60'){echo "$b";} else{
                               if('59' >= $history_average && $history_average >= '50'){echo "$c";} else{
                               if('49' >= $history_average && $history_average >= '45'){echo "$p";} else{
                                   if('44' >= $history_average && $history_average >= '1'){echo "$f";} else{
                                       if($history_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Government</td>
                        <td class="li-test"> <?php if($govt_test==0){echo null;} else{echo $govt_test;} ?></td>                          <td class="li-test"><?php echo $row['govt_exam']?></td>
                        <td class="li-test"><?php 
                            if($govt_total== 0){echo null;} else{echo $govt_total;} ?></td>                        <td class="li-test"><?php echo $row['govt_total1']?></td>
                        <td class="li-test"><?php echo $row['govt_total2']?></td>
                        <td class="li-test"><?php 
                            if($govt_grand_exam== 0){echo null;} else{echo $govt_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($govt_average== 0){echo null;} else{echo (int) $govt_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($govt_average >= '70'){echo "A";} else{
                              if('69' >= $govt_average && $govt_average >= '60'){echo "B";} else{
                               if('59' >= $govt_average && $govt_average >= '50'){echo "C";} else{
                               if('49' >= $govt_average && $govt_average >= '45'){echo "P";} else{
                                   if('44' >= $govt_average && $govt_average >= '1'){echo "F";} else{
                               if($govt_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($govt_average >= '70'){echo "$a";} else{
                              if('69' >= $govt_average && $govt_average >= '60'){echo "$b";} else{
                               if('59' >= $govt_average && $govt_average >= '50'){echo "$c";} else{
                               if('49' >= $govt_average && $govt_average >= '45'){echo "$p";} else{
                                   if('44' >= $govt_average && $govt_average >= '1'){echo "$f";} else{
                                       if($govt_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Economics</td>
                        <td class="li-test"> <?php if($econs_test==0){echo null;} else{echo $econs_test;} ?></td>                          <td class="li-test"><?php echo $row['econs_exam']?></td>
                        <td class="li-test"><?php 
                            if($econs_total== 0){echo null;} else{echo $econs_total;} ?></td>                        <td class="li-test"><?php echo $row['econs_total1']?></td>
                        <td class="li-test"><?php echo $row['econs_total2']?></td>
                        <td class="li-test"><?php 
                            if($econs_grand_exam== 0){echo null;} else{echo $econs_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($econs_average== 0){echo null;} else{echo (int) $econs_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($econs_average >= '70'){echo "A";} else{
                              if('69' >= $econs_average && $econs_average >= '60'){echo "B";} else{
                               if('59' >= $econs_average && $econs_average >= '50'){echo "C";} else{
                               if('49' >= $econs_average && $econs_average >= '45'){echo "P";} else{
                                   if('44' >= $econs_average && $econs_average >= '1'){echo "F";} else{
                               if($econs_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($econs_average >= '70'){echo "$a";} else{
                              if('69' >= $econs_average && $econs_average >= '60'){echo "$b";} else{
                               if('59' >= $econs_average && $econs_average >= '50'){echo "$c";} else{
                               if('49' >= $econs_average && $econs_average >= '45'){echo "$p";} else{
                                   if('44' >= $econs_average && $econs_average >= '1'){echo "$f";} else{
                                       if($econs_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Further Maths</td>
                        <td class="li-test"> <?php if($f_maths_test==0){echo null;} else{echo $f_maths_test;} ?></td>  
                        <td class="li-test"><?php echo $row['f_maths_exam']?></td>
                        <td class="li-test"><?php 
                            if($f_maths_total== 0){echo null;} else{echo $f_maths_total;} ?></td>                        <td class="li-test"><?php echo $row['f_maths_total1']?></td>
                        <td class="li-test"><?php echo $row['f_maths_total2']?></td>
                        <td class="li-test"><?php 
                            if($f_maths_grand_exam== 0){echo null;} else{echo $f_maths_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($f_maths_average== 0){echo null;} else{echo (int) $f_maths_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($f_maths_average >= '70'){echo "A";} else{
                              if('69' >= $f_maths_average && $f_maths_average >= '60'){echo "B";} else{
                               if('59' >= $f_maths_average && $f_maths_average >= '50'){echo "C";} else{
                               if('49' >= $f_maths_average && $f_maths_average >= '45'){echo "P";} else{
                                   if('44' >= $f_maths_average && $f_maths_average >= '1'){echo "F";} else{
                               if($f_maths_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($f_maths_average >= '70'){echo "$a";} else{
                              if('69' >= $f_maths_average && $f_maths_average >= '60'){echo "$b";} else{
                               if('59' >= $f_maths_average && $f_maths_average >= '50'){echo "$c";} else{
                               if('49' >= $f_maths_average && $f_maths_average >= '45'){echo "$p";} else{
                                   if('44' >= $f_maths_average && $f_maths_average >= '1'){echo "$f";} else{
                                       if($f_maths_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Physics </td>
                        <td class="li-test"> <?php if($phy_test==0){echo null;} else{echo $phy_test;} ?></td>                          <td class="li-test"><?php echo $row['phy_exam']?></td>
                        <td class="li-test"><?php 
                            if($phy_total== 0){echo null;} else{echo $phy_total;} ?></td>                        <td class="li-test"><?php echo $row['phy_total1']?></td>
                        <td class="li-test"><?php echo $row['phy_total2']?></td>
                        <td class="li-test"><?php 
                            if($phy_grand_exam== 0){echo null;} else{echo $phy_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($phy_average== 0){echo null;} else{echo (int) $phy_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($phy_average >= '70'){echo "A";} else{
                              if('69' >= $phy_average && $phy_average >= '60'){echo "B";} else{
                               if('59' >= $phy_average && $phy_average >= '50'){echo "C";} else{
                               if('49' >= $phy_average && $phy_average >= '45'){echo "P";} else{
                                   if('44' >= $phy_average && $phy_average >= '1'){echo "F";} else{
                               if($phy_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($phy_average >= '70'){echo "$a";} else{
                              if('69' >= $phy_average && $phy_average >= '60'){echo "$b";} else{
                               if('59' >= $phy_average && $phy_average >= '50'){echo "$c";} else{
                               if('49' >= $phy_average && $phy_average >= '45'){echo "$p";} else{
                                   if('44' >= $phy_average && $phy_average >= '1'){echo "$f";} else{
                                       if($phy_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Chemistry</td>
                        <td class="li-test"> <?php if($chem_test==0){echo null;} else{echo $chem_test;} ?></td>                          <td class="li-test"><?php echo $row['chem_exam']?></td>
                        <td class="li-test"><?php 
                            if($chem_total== 0){echo null;} else{echo $chem_total;} ?></td>                        <td class="li-test"><?php echo $row['chem_total1']?></td>
                        <td class="li-test"><?php echo $row['chem_total2']?></td>
                        <td class="li-test"><?php 
                            if($chem_grand_exam== 0){echo null;} else{echo $chem_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($chem_average== 0){echo null;} else{echo (int) $chem_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($chem_average >= '70'){echo "A";} else{
                              if('69' >= $chem_average && $chem_average >= '60'){echo "B";} else{
                               if('59' >= $chem_average && $chem_average >= '50'){echo "C";} else{
                               if('49' >= $chem_average && $chem_average >= '45'){echo "P";} else{
                                   if('44' >= $chem_average && $chem_average >= '1'){echo "F";} else{
                               if($chem_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($chem_average >= '70'){echo "$a";} else{
                              if('69' >= $chem_average && $chem_average >= '60'){echo "$b";} else{
                               if('59' >= $chem_average && $chem_average >= '50'){echo "$c";} else{
                               if('49' >= $chem_average && $chem_average >= '45'){echo "$p";} else{
                                   if('44' >= $chem_average && $chem_average >= '1'){echo "$f";} else{
                                       if($chem_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Biology</td>
                        <td class="li-test"> <?php if($bio_test==0){echo null;} else{echo $bio_test;} ?></td>                          <td class="li-test"><?php echo $row['bio_exam']?></td>
                        <td class="li-test"><?php 
                            if($bio_total== 0){echo null;} else{echo $bio_total;} ?></td>                        <td class="li-test"><?php echo $row['bio_total1']?></td>
                        <td class="li-test"><?php echo $row['bio_total2']?></td>
                        <td class="li-test"><?php 
                            if($bio_grand_exam== 0){echo null;} else{echo $bio_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($bio_average== 0){echo null;} else{echo (int) $bio_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($bio_average >= '70'){echo "A";} else{
                              if('69' >= $bio_average && $bio_average >= '60'){echo "B";} else{
                               if('59' >= $bio_average && $bio_average >= '50'){echo "C";} else{
                               if('49' >= $bio_average && $bio_average >= '45'){echo "P";} else{
                                   if('44' >= $bio_average && $bio_average >= '1'){echo "F";} else{
                               if($bio_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($bio_average >= '70'){echo "$a";} else{
                              if('69' >= $bio_average && $bio_average >= '60'){echo "$b";} else{
                               if('59' >= $bio_average && $bio_average >= '50'){echo "$c";} else{
                               if('49' >= $bio_average && $bio_average >= '45'){echo "$p";} else{
                                   if('44' >= $bio_average && $bio_average >= '1'){echo "$f";} else{
                                       if($bio_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Fine Art</td>
                        <td class="li-test"> <?php if($fine_art_test==0){echo null;} else{echo $fine_art_test;} ?></td>  
                        <td class="li-test"><?php echo $row['fine_art_exam']?></td>
                        <td class="li-test"><?php 
                            if($fine_art_total== 0){echo null;} else{echo $fine_art_total;} ?></td>                        <td class="li-test"><?php echo $row['fine_art_total1']?></td>
                        <td class="li-test"><?php echo $row['fine_art_total2']?></td>
                        <td class="li-test"><?php 
                            if($fine_art_grand_exam== 0){echo null;} else{echo $fine_art_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($fine_art_average== 0){echo null;} else{echo (int) $fine_art_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($fine_art_average >= '70'){echo "A";} else{
                              if('69' >= $fine_art_average && $fine_art_average >= '60'){echo "B";} else{
                               if('59' >= $fine_art_average && $fine_art_average >= '50'){echo "C";} else{
                               if('49' >= $fine_art_average && $fine_art_average >= '45'){echo "P";} else{
                                   if('44' >= $fine_art_average && $fine_art_average >= '1'){echo "F";} else{
                               if($fine_art_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($fine_art_average >= '70'){echo "$a";} else{
                              if('69' >= $fine_art_average && $fine_art_average >= '60'){echo "$b";} else{
                               if('59' >= $fine_art_average && $fine_art_average >= '50'){echo "$c";} else{
                               if('49' >= $fine_art_average && $fine_art_average >= '45'){echo "$p";} else{
                                   if('44' >= $fine_art_average && $fine_art_average >= '1'){echo "$f";} else{
                                       if($fine_art_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Music</td>
                        <td class="li-test"> <?php if($music_test==0){echo null;} else{echo $music_test;} ?></td>                          <td class="li-test"><?php echo $row['music_exam']?></td>
                        <td class="li-test"><?php 
                            if($music_total== 0){echo null;} else{echo $music_total;} ?></td>                        <td class="li-test"><?php echo $row['music_total1']?></td>
                        <td class="li-test"><?php echo $row['music_total2']?></td>
                        <td class="li-test"><?php 
                            if($music_grand_exam== 0){echo null;} else{echo $music_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($music_average== 0){echo null;} else{echo (int) $music_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($music_average >= '70'){echo "A";} else{
                              if('69' >= $music_average && $music_average >= '60'){echo "B";} else{
                               if('59' >= $music_average && $music_average >= '50'){echo "C";} else{
                               if('49' >= $music_average && $music_average >= '45'){echo "P";} else{
                                   if('44' >= $music_average && $music_average >= '1'){echo "F";} else{
                               if($music_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($music_average >= '70'){echo "$a";} else{
                              if('69' >= $music_average && $music_average >= '60'){echo "$b";} else{
                               if('59' >= $music_average && $music_average >= '50'){echo "$c";} else{
                               if('49' >= $music_average && $music_average >= '45'){echo "$p";} else{
                                   if('44' >= $music_average && $music_average >= '1'){echo "$f";} else{
                                       if($music_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Technical Drawing </td>
                        <td class="li-test"> <?php if($tech_draw_test==0){echo null;} else{echo $tech_draw_test;} ?></td>  
                        <td class="li-test"><?php echo $row['tech_draw_exam']?></td>
                        <td class="li-test"><?php 
                            if($tech_draw_total== 0){echo null;} else{echo $tech_draw_total;} ?></td>                        <td class="li-test"><?php echo $row['tech_draw_total1']?></td>
                        <td class="li-test"><?php echo $row['tech_draw_total2']?></td>
                        <td class="li-test"><?php 
                            if($tech_draw_grand_exam== 0){echo null;} else{echo $tech_draw_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($tech_draw_average== 0){echo null;} else{echo (int) $tech_draw_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($tech_draw_average >= '70'){echo "A";} else{
                              if('69' >= $tech_draw_average && $tech_draw_average >= '60'){echo "B";} else{
                               if('59' >= $tech_draw_average && $tech_draw_average >= '50'){echo "C";} else{
                               if('49' >= $tech_draw_average && $tech_draw_average >= '45'){echo "P";} else{
                                   if('44' >= $tech_draw_average && $tech_draw_average >= '1'){echo "F";} else{
                               if($tech_draw_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($tech_draw_average >= '70'){echo "$a";} else{
                              if('69' >= $tech_draw_average && $tech_draw_average >= '60'){echo "$b";} else{
                               if('59' >= $tech_draw_average && $tech_draw_average >= '50'){echo "$c";} else{
                               if('49' >= $tech_draw_average && $tech_draw_average >= '45'){echo "$p";} else{
                                   if('44' >= $tech_draw_average && $tech_draw_average >= '1'){echo "$f";} else{
                                       if($tech_draw_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Commerce </td>
                        <td class="li-test"> <?php if($commerce_test==0){echo null;} else{echo $commerce_test;} ?></td>  
                        <td class="li-test"><?php echo $row['commerce_exam']?></td>
                        <td class="li-test"><?php 
                            if($commerce_total== 0){echo null;} else{echo $commerce_total;} ?></td>                        <td class="li-test"><?php echo $row['commerce_total1']?></td>
                        <td class="li-test"><?php echo $row['commerce_total2']?></td>
                        <td class="li-test"><?php 
                            if($commerce_grand_exam== 0){echo null;} else{echo $commerce_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($commerce_average== 0){echo null;} else{echo (int) $commerce_average;} ?></td>               
                        <td class="li-test">
                            <?php
                           
                           if($commerce_average >= '70'){echo "A";} else{
                              if('69' >= $commerce_average && $commerce_average >= '60'){echo "B";} else{
                               if('59' >= $commerce_average && $commerce_average >= '50'){echo "C";} else{
                               if('49' >= $commerce_average && $commerce_average >= '45'){echo "P";} else{
                                   if('44' >= $commerce_average && $commerce_average >= '1'){echo "F";} else{
                               if($commerce_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($commerce_average >= '70'){echo "$a";} else{
                              if('69' >= $commerce_average && $commerce_average >= '60'){echo "$b";} else{
                               if('59' >= $commerce_average && $commerce_average >= '50'){echo "$c";} else{
                               if('49' >= $commerce_average && $commerce_average >= '45'){echo "$p";} else{
                                   if('44' >= $commerce_average && $commerce_average >= '1'){echo "$f";} else{
                                       if($commerce_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                    </tr>
                    <tr>
                        <td class="li-sub">Accounting</td>
                        <td class="li-test"> <?php if($acc_test==0){echo null;} else{echo $acc_test;} ?></td>                          <td class="li-test"><?php echo $row['acc_exam']?></td>
                        <td class="li-test"><?php 
                            if($acc_total== 0){echo null;} else{echo $acc_total;} ?></td>                        <td class="li-test"><?php echo $row['acc_total1']?></td>
                        <td class="li-test"><?php echo $row['acc_total2']?></td>
                        <td class="li-test"><?php 
                            if($acc_grand_exam== 0){echo null;} else{echo $acc_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($acc_average== 0){echo null;} else{echo (int) $acc_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($acc_average >= '70'){echo "A";} else{
                              if('69' >= $acc_average && $acc_average >= '60'){echo "B";} else{
                               if('59' >= $acc_average && $acc_average >= '50'){echo "C";} else{
                               if('49' >= $acc_average && $acc_average >= '45'){echo "P";} else{
                                   if('44' >= $acc_average && $acc_average >= '1'){echo "F";} else{
                               if($acc_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($acc_average >= '70'){echo "$a";} else{
                              if('69' >= $acc_average && $acc_average >= '60'){echo "$b";} else{
                               if('59' >= $acc_average && $acc_average >= '50'){echo "$c";} else{
                               if('49' >= $acc_average && $acc_average >= '45'){echo "$p";} else{
                                   if('44' >= $acc_average && $acc_average >= '1'){echo "$f";} else{
                                       if($acc_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Agric Science</td>
                        <td class="li-test"> <?php if($agric_sci_test==0){echo null;} else{echo $agric_sci_test;} ?></td>  
                        <td class="li-test"><?php echo $row['agric_sci_exam']?></td>
                        <td class="li-test"><?php 
                            if($agric_sci_total== 0){echo null;} else{echo $agric_sci_total;} ?></td>                        <td class="li-test"><?php echo $row['agric_sci_total1']?></td>
                        <td class="li-test"><?php echo $row['agric_sci_total2']?></td>
                        <td class="li-test"><?php 
                            if($agric_sci_grand_exam== 0){echo null;} else{echo $agric_sci_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($agric_sci_average== 0){echo null;} else{echo (int) $agric_sci_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($agric_sci_average >= '70'){echo "A";} else{
                              if('69' >= $agric_sci_average && $agric_sci_average >= '60'){echo "B";} else{
                               if('59' >= $agric_sci_average && $agric_sci_average >= '50'){echo "C";} else{
                               if('49' >= $agric_sci_average && $agric_sci_average >= '45'){echo "P";} else{
                                   if('44' >= $agric_sci_average && $agric_sci_average >= '1'){echo "F";} else{
                               if($agric_sci_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($agric_sci_average >= '70'){echo "$a";} else{
                              if('69' >= $agric_sci_average && $agric_sci_average >= '60'){echo "$b";} else{
                               if('59' >= $agric_sci_average && $agric_sci_average >= '50'){echo "$c";} else{
                               if('49' >= $agric_sci_average && $agric_sci_average >= '45'){echo "$p";} else{
                                   if('44' >= $agric_sci_average && $agric_sci_average >= '1'){echo "$f";} else{
                                       if($agric_sci_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Food & Nutrition</td>
                        <td class="li-test"> <?php if($food_nu_test==0){echo null;} else{echo $food_nu_test;} ?></td>  
                        <td class="li-test"><?php echo $row['food_nu_exam']?></td>
                        <td class="li-test"><?php 
                            if($food_nu_total== 0){echo null;} else{echo $food_nu_total;} ?></td>                        <td class="li-test"><?php echo $row['food_nu_total1']?></td>
                        <td class="li-test"><?php echo $row['food_nu_total2']?></td>
                        <td class="li-test"><?php 
                            if($food_nu_grand_exam== 0){echo null;} else{echo $food_nu_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($food_nu_average== 0){echo null;} else{echo (int) $food_nu_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($food_nu_average >= '70'){echo "A";} else{
                              if('69' >= $food_nu_average && $food_nu_average >= '60'){echo "B";} else{
                               if('59' >= $food_nu_average && $food_nu_average >= '50'){echo "C";} else{
                               if('49' >= $food_nu_average && $food_nu_average >= '45'){echo "P";} else{
                                   if('44' >= $food_nu_average && $food_nu_average >= '1'){echo "F";} else{
                               if($food_nu_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($food_nu_average >= '70'){echo "$a";} else{
                              if('69' >= $food_nu_average && $food_nu_average >= '60'){echo "$b";} else{
                               if('59' >= $food_nu_average && $food_nu_average >= '50'){echo "$c";} else{
                               if('49' >= $food_nu_average && $food_nu_average >= '45'){echo "$p";} else{
                                   if('44' >= $food_nu_average && $food_nu_average >= '1'){echo "$f";} else{
                                       if($food_nu_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Computer Studies</td>
                        <td class="li-test"> <?php if($comp_test==0){echo null;} else{echo $comp_test;} ?></td>                          <td class="li-test"><?php echo $row['comp_exam']?></td>
                        <td class="li-test"><?php 
                            if($comp_total== 0){echo null;} else{echo $comp_total;} ?></td>                        <td class="li-test"><?php echo $row['comp_total1']?></td>
                        <td class="li-test"><?php echo $row['comp_total2']?></td>
                        <td class="li-test"><?php 
                            if($comp_grand_exam== 0){echo null;} else{echo $comp_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($comp_average== 0){echo null;} else{echo (int) $comp_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($comp_average >= '70'){echo "A";} else{
                              if('69' >= $comp_average && $comp_average >= '60'){echo "B";} else{
                               if('59' >= $comp_average && $comp_average >= '50'){echo "C";} else{
                               if('49' >= $comp_average && $comp_average >= '45'){echo "P";} else{
                                   if('44' >= $comp_average && $comp_average >= '1'){echo "F";} else{
                               if($comp_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($comp_average >= '70'){echo "$a";} else{
                              if('69' >= $comp_average && $comp_average >= '60'){echo "$b";} else{
                               if('59' >= $comp_average && $comp_average >= '50'){echo "$c";} else{
                               if('49' >= $comp_average && $comp_average >= '45'){echo "$p";} else{
                                   if('44' >= $comp_average && $comp_average >= '1'){echo "$f";} else{
                                       if($comp_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Book Keeping</td>
                        <td class="li-test"> <?php if($b_keep_test==0){echo null;} else{echo $b_keep_test;} ?></td>                          <td class="li-test"><?php echo $row['b_keep_exam']?></td>
                        <td class="li-test"><?php 
                            if($b_keep_total== 0){echo null;} else{echo $b_keep_total;} ?></td>                        <td class="li-test"><?php echo $row['b_keep_total1']?></td>
                        <td class="li-test"><?php echo $row['b_keep_total2']?></td>
                        <td class="li-test"><?php 
                            if($b_keep_grand_exam== 0){echo null;} else{echo $b_keep_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($b_keep_average== 0){echo null;} else{echo (int) $b_keep_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($b_keep_average >= '70'){echo "A";} else{
                              if('69' >= $b_keep_average && $b_keep_average >= '60'){echo "B";} else{
                               if('59' >= $b_keep_average && $b_keep_average >= '50'){echo "C";} else{
                               if('49' >= $b_keep_average && $b_keep_average >= '45'){echo "P";} else{
                                   if('44' >= $b_keep_average && $b_keep_average >= '1'){echo "F";} else{
                               if($b_keep_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($b_keep_average >= '70'){echo "$a";} else{
                              if('69' >= $b_keep_average && $b_keep_average >= '60'){echo "$b";} else{
                               if('59' >= $b_keep_average && $b_keep_average >= '50'){echo "$c";} else{
                               if('49' >= $b_keep_average && $b_keep_average >= '45'){echo "$p";} else{
                                   if('44' >= $b_keep_average && $b_keep_average >= '1'){echo "$f";} else{
                                       if($b_keep_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Catering Craft </td>
                        <td class="li-test"> <?php if($c_c_test==0){echo null;} else{echo $c_c_test;} ?></td>                          <td class="li-test"><?php echo $row['c_c_exam']?></td>
                        <td class="li-test"><?php 
                            if($c_c_total== 0){echo null;} else{echo $c_c_total;} ?></td>                        <td class="li-test"><?php echo $row['c_c_total1']?></td>
                        <td class="li-test"><?php echo $row['c_c_total2']?></td>
                        <td class="li-test"><?php 
                            if($c_c_grand_exam== 0){echo null;} else{echo $c_c_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($c_c_average== 0){echo null;} else{echo (int) $c_c_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($c_c_average >= '70'){echo "A";} else{
                              if('69' >= $c_c_average && $c_c_average >= '60'){echo "B";} else{
                               if('59' >= $c_c_average && $c_c_average >= '50'){echo "C";} else{
                               if('49' >= $c_c_average && $c_c_average >= '45'){echo "P";} else{
                                   if('44' >= $c_c_average && $c_c_average >= '1'){echo "F";} else{
                               if($c_c_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($c_c_average >= '70'){echo "$a";} else{
                              if('69' >= $c_c_average && $c_c_average >= '60'){echo "$b";} else{
                               if('59' >= $c_c_average && $c_c_average >= '50'){echo "$c";} else{
                               if('49' >= $c_c_average && $c_c_average >= '45'){echo "$p";} else{
                                   if('44' >= $c_c_average && $c_c_average >= '1'){echo "$f";} else{
                                       if($c_c_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Basic Electronics</td>
                        <td class="li-test"> <?php if($basic_elect_test==0){echo null;} else{echo $basic_elect_test;} ?></td>  
                        <td class="li-test"><?php echo $row['basic_elect_exam']?></td>
                        <td class="li-test"><?php 
                            if($basic_elect_total== 0){echo null;} else{echo $basic_elect_total;} ?></td>                        <td class="li-test"><?php echo $row['basic_elect_total1']?></td>
                        <td class="li-test"><?php echo $row['basic_elect_total2']?></td>
                        <td class="li-test"><?php 
                            if($basic_elect_grand_exam== 0){echo null;} else{echo $basic_elect_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($basic_elect_average== 0){echo null;} else{echo (int) $basic_elect_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($basic_elect_average >= '70'){echo "A";} else{
                              if('69' >= $basic_elect_average && $basic_elect_average >= '60'){echo "B";} else{
                               if('59' >= $basic_elect_average && $basic_elect_average >= '50'){echo "C";} else{
                               if('49' >= $basic_elect_average && $basic_elect_average >= '45'){echo "P";} else{
                                   if('44' >= $basic_elect_average && $basic_elect_average >= '1'){echo "F";} else{
                               if($basic_elect_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($basic_elect_average >= '70'){echo "$a";} else{
                              if('69' >= $basic_elect_average && $basic_elect_average >= '60'){echo "$b";} else{
                               if('59' >= $basic_elect_average && $basic_elect_average >= '50'){echo "$c";} else{
                               if('49' >= $basic_elect_average && $basic_elect_average >= '45'){echo "$p";} else{
                                   if('44' >= $basic_elect_average && $basic_elect_average >= '1'){echo "$f";} else{
                                       if($basic_elect_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Civic Education</td>
                        <td class="li-test"> <?php if($civic_test==0){echo null;} else{echo $civic_test;} ?></td>                          <td class="li-test"><?php echo $row['civic_exam']?></td>
                        <td class="li-test"><?php 
                            if($civic_total== 0){echo null;} else{echo $civic_total;} ?></td>                        <td class="li-test"><?php echo $row['civic_total1']?></td>
                        <td class="li-test"><?php echo $row['civic_total2']?></td>
                        <td class="li-test"><?php 
                            if($civic_grand_exam== 0){echo null;} else{echo $civic_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($civic_average== 0){echo null;} else{echo (int) $civic_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($civic_average >= '70'){echo "A";} else{
                              if('69' >= $civic_average && $civic_average >= '60'){echo "B";} else{
                               if('59' >= $civic_average && $civic_average >= '50'){echo "C";} else{
                               if('49' >= $civic_average && $civic_average >= '45'){echo "P";} else{
                                   if('44' >= $civic_average && $civic_average >= '1'){echo "F";} else{
                               if($civic_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($civic_average >= '70'){echo "$a";} else{
                              if('69' >= $civic_average && $civic_average >= '60'){echo "$b";} else{
                               if('59' >= $civic_average && $civic_average >= '50'){echo "$c";} else{
                               if('49' >= $civic_average && $civic_average >= '45'){echo "$p";} else{
                                   if('44' >= $civic_average && $civic_average >= '1'){echo "$f";} else{
                                       if($civic_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                    <tr>
                    <td class="li-sub">Home Management</td>
                        <td class="li-test"> <?php if($home_mgt_test==0){echo null;} else{echo $home_mgt_test;} ?></td>                      <td class="li-test"><?php echo $row['home_mgt_exam']?></td>
                    <td class="li-test"><?php 
                        if($home_mgt_total== 0){echo null;} else{echo $home_mgt_total;} ?></td>                        <td class="li-test"><?php echo $row['home_mgt_total1']?></td>
                    <td class="li-test"><?php echo $row['home_mgt_total2']?></td>
                    <td class="li-test"><?php 
                        if($home_mgt_grand_exam== 0){echo null;} else{echo $home_mgt_grand_exam;} ?></td>                        <td class="li-test"><?php 
                        if($home_mgt_average== 0){echo null;} else{echo (int) $home_mgt_average;} ?></td>                        <td class="li-test">
                        <?php
                       
                       if($home_mgt_average >= '70'){echo "A";} else{
                          if('69' >= $home_mgt_average && $home_mgt_average >= '60'){echo "B";} else{
                           if('59' >= $home_mgt_average && $home_mgt_average >= '50'){echo "C";} else{
                           if('49' >= $home_mgt_average && $home_mgt_average >= '45'){echo "P";} else{
                               if('44' >= $home_mgt_average && $home_mgt_average >= '1'){echo "F";} else{
                           if($home_mgt_average== 0){echo null;}
                           ;}
                           
                           ;}
                           ;}
                           ;} 
                           ;}
                       
                       ?>
                   
                   
                   </td>
                   <td class="li-remark">
                       <?php
                       
                       if($home_mgt_average >= '70'){echo "$a";} else{
                          if('69' >= $home_mgt_average && $home_mgt_average >= '60'){echo "$b";} else{
                           if('59' >= $home_mgt_average && $home_mgt_average >= '50'){echo "$c";} else{
                           if('49' >= $home_mgt_average && $home_mgt_average >= '45'){echo "$p";} else{
                               if('44' >= $home_mgt_average && $home_mgt_average >= '1'){echo "$f";} else{
                                   if($home_mgt_average== 0){echo null;}

                           
                           ;}
                           
                           ;}
                           ;}
                           ;} 
                           ;}
                       
                       ?>
                       </td>
            
                </tr>
                <tr>
                    <td class="li-sub">Arabic</td>
                        <td class="li-test"> <?php if($arabic_test==0){echo null;} else{echo $arabic_test;} ?></td>                          <td class="li-test"><?php echo $row['arabic_exam']?></td>
                        <td class="li-test"><?php 
                            if($arabic_total== 0){echo null;} else{echo $arabic_total;} ?></td>                        <td class="li-test"><?php echo $row['arabic_total1']?></td>
                        <td class="li-test"><?php echo $row['arabic_total2']?></td>
                        <td class="li-test"><?php 
                            if($arabic_grand_exam== 0){echo null;} else{echo $arabic_grand_exam;} ?></td>                        <td class="li-test"><?php 
                            if($arabic_average== 0){echo null;} else{echo (int) $arabic_average;} ?></td>                        <td class="li-test">
                            <?php
                           
                           if($arabic_average >= '70'){echo "A";} else{
                              if('69' >= $arabic_average && $arabic_average >= '60'){echo "B";} else{
                               if('59' >= $arabic_average && $arabic_average >= '50'){echo "C";} else{
                               if('49' >= $arabic_average && $arabic_average >= '45'){echo "P";} else{
                                   if('44' >= $arabic_average && $arabic_average >= '1'){echo "F";} else{
                               if($arabic_average== 0){echo null;}
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                       
                       
                       </td>
                       <td class="li-remark">
                           <?php
                           
                           if($arabic_average >= '70'){echo "$a";} else{
                              if('69' >= $arabic_average && $arabic_average >= '60'){echo "$b";} else{
                               if('59' >= $arabic_average && $arabic_average >= '50'){echo "$c";} else{
                               if('49' >= $arabic_average && $arabic_average >= '45'){echo "$p";} else{
                                   if('44' >= $arabic_average && $arabic_average >= '1'){echo "$f";} else{
                                       if($arabic_average== 0){echo null;}

                               
                               ;}
                               
                               ;}
                               ;}
                               ;} 
                               ;}
                           
                           ?>
                           </td>
                
                    </tr>
                </table>  
                 <div class="assess"> 
                    <div class="assess1">
                        <h3>AFFECTIVE/PAYCHOMOTOR ASSESSMENT</h3>
                    </div>
                    <div>
                        <table class="GeneratedTable">
                            <thead style="font-size:90%">
                                <tr>
                                <th style="width:70%">Personal Development</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Obedience</td>
                                <td><?php if ($row['obd']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <tr>
                                <td>honesty</td>
                                <td><?php if ($row['honesty']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>self-control</td>
                                <td><?php if ($row['self_ctrl']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>initiative</td>
                                <td><?php if ($row['intiative']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>Punctuality</td>
                                <td><?php if ($row['puntual']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr> 
                                <tr>
                                <td>Self- Reliance</td>
                                <td><?php if ($row['self_rely']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td class="att">sense of responsibility</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>neatness</td>
                                <td><?php if ($row['neat']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>diligence</td>
                                <td><?php if ($row['diligence']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>class attendance</td>
                                <td><?php if ($row['class_attend']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>attentiveness</td>
                                <td><?php if ($row['attent']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td class="att">Social development</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>politeness</td>
                                <td><?php if ($row['polite']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>consideration for others</td>
                                <td><?php if ($row['cons_other']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>relationship with staff</td>
                                <td><?php if ($row['relation_staff']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>organisational ability</td>
                                <td><?php if ($row['organise']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>respect for common property</td>
                                <td><?php if ($row['respect']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td class="att">Physchomotor skills</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>handwriting</td>
                                <td><?php if ($row['handwriting']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>verbal fluency</td>
                                <td><?php if ($row['fluency']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>sports & games</td>
                                <td><?php if ($row['sports']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>manual skills in handling tools</td>
                                <td><?php if ($row['skills']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>musical artistics skill</td>
                                <td><?php if ($row['music_skill']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>no. of times school opened</td>
                                <td><?php if ($row['no_opened']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="comment">
                	 <div>
                        <b>Teacher's Comment:</b><?php echo $row['teacher_com']?> <br /><br />
                        <b>Principal's Comment:</b><?php echo $row['principal_com']?> <br /><br />
                    </div>
                   
                	<div>
                        <span>
                                <span><b>Teacher's signature:</b> </span>
                                <span><b>Principal's signature:</b> </span>
                        </span>
                        
                    </div>
                </div>
                <div class="key">
                    <h3>KEY TO RATING</h3>
                    <ol type="A">
                      <li>EXCELLENT LEVEL</li>
                      <li>HIGH LEVEL</li>
                      <li>ACCEPTABLE FOR TRAIT</li>
                      <li>NO REGARD FOR TRAIT</li>

                    </ol>
                </div>
    
    	
        </div>
    </body>
</html>
<?php 
 
  }else {
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry, your Result was not found. Check your details');
    window.location.href='https://henrycollege.hrmsystems.com.ng/';
    </script>");
}
?>

