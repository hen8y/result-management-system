
<?php
require_once('../db/database.php');

if (mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{

?>
<?php
if ($term == '3rd'){
     header('HTTP/1.1 307 Temporary Redirect');
    header('Location: sss3rd_class.php');
} else{ 
    
$english_total= $row['english_test1'] + $row['english_test2'] + $row['english_exam'];
$math_total= $row['math_test1'] + $row['math_test2'] + $row['math_exam'];
$geo_total= $row['geo_test1'] + $row['geo_test2'] + $row['geo_exam'];
$phone_total= $row['phone_test1'] + $row['phone_test2'] + $row['phone_exam'];
$yih_total= $row['yih_test1'] + $row['yih_test2'] + $row['yih_exam'];
$french_total= $row['french_test1'] + $row['french_test2'] + $row['french_exam'];
$lit_total= $row['lit_test1'] + $row['lit_test2'] + $row['lit_exam'];
$crs_irs_total= $row['crs_irs_test1'] + $row['crs_irs_test2'] + $row['crs_irs_exam'];
$history_total= $row['history_test1'] + $row['history_test2'] + $row['history_exam'];
$govt_total= $row['govt_test1'] + $row['govt_test2'] + $row['govt_exam'];
$econs_total= $row['econs_test1'] + $row['econs_test2'] + $row['econs_exam'];
$f_maths_total= $row['f_maths_test1'] + $row['f_maths_test2'] + $row['f_maths_exam'];
$phy_total= $row['phy_test1'] + $row['phy_test2'] + $row['phy_exam'];
$chem_total= $row['chem_test1'] + $row['chem_test2'] + $row['chem_exam'];
$bio_total= $row['bio_test1'] + $row['bio_test2'] + $row['bio_exam'];
$fine_art_total= $row['fine_art_test1'] + $row['fine_art_test2'] + $row['fine_art_exam'];
$music_total= $row['music_test1'] + $row['music_test2'] + $row['music_exam'];
$tech_draw_total= $row['tech_draw_test1'] + $row['tech_draw_test2'] + $row['tech_draw_exam'];
$commerce_total= $row['commerce_test1'] + $row['commerce_test2'] + $row['commerce_exam'];
$acc_total= $row['acc_test1'] + $row['acc_test2'] + $row['acc_exam'];
$agric_sci_total= $row['agric_sci_test1'] + $row['agric_sci_test2'] + $row['agric_sci_exam'];
$food_nu_total= $row['food_nu_test1'] + $row['food_nu_test2'] + $row['food_nu_exam'];
$comp_total= $row['comp_test1'] + $row['comp_test2'] + $row['comp_exam'];
$b_keep_total= $row['b_keep_test1'] + $row['b_keep_test2'] + $row['b_keep_exam'];
$c_c_total= $row['c_c_test1'] + $row['c_c_test2'] + $row['c_c_exam'];
$basic_elect_total= $row['basic_elect_test1'] + $row['basic_elect_test2'] + $row['basic_elect_exam'];
$civic_total= $row['civic_test1'] + $row['civic_test2'] + $row['civic_exam'];
$home_mgt_total= $row['home_mgt_test1'] + $row['home_mgt_test2'] + $row['home_mgt_exam'];
$arabic_total= $row['arabic_test1'] + $row['arabic_test2'] + $row['arabic_exam'];

$exam_total=   $english_total  + $math_total  + $geo_total  + $phone_total  + $yih_total  + $french_total  + $lit_total  + $crs_irs_total  + $history_total  + $govt_total  + $econs_total  + $f_maths_total  + $phy_total  + $chem_total  + $bio_total  + $fine_art_total  + $music_total  + $tech_draw_total  + $commerce_total  + $acc_total  + $agric_sci_total  + $food_nu_total  + $comp_total  + $b_keep_total  + $c_c_total  + $basic_elect_total  + $civic_total  + $home_mgt_total  + $arabic_total;

$percent= $exam_total/$row['max_obt'] * 100;


$a='EXCELLENT';
$b='VERY GOOD';
$c='GOOD';
$p ='PASS';
$f='FAIL';
?>
<!DOCTYPE
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
                width:510px;
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
              height: 15px;
              text-transform: uppercase;
              font-size: 77%;
            
            }
            .subtable th{
              border: 2px solid #050505;
              vertical-align: bottom;
              text-transform: uppercase;
              font-size: 92%;
              text-align: left;
            
            }
            .test{
                padding-left: 4px;

            }
            td{
                height:11px;
            
            }

            .subject{
                width:30% ;
                font-size: 130%;
                padding-left: 10px;
            }

            .li-remark{
                width:10% ;
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
            width:260px;
            background-color: #ffffff;
            border-collapse: collapse;
            color: #000000;
            
            }
            .assess{
            margin-left:525px ;
            border: solid 1px #000;
            width:260px;

            }
            .assess1{
            border: solid 1px #000;
            width:99%;
            text-align: center;
            height: 62px;

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
            height: 18px;
            
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
                        <th class="test">Test</th>
                        <th class="test">Test</th>
                        <th class="test">Exam </th>
                        <th class="test">Total</th>
                        <th class="test">Grade</th>
                        <th class="test"> Teacher's Remark</th>
                    </tr>
                     <tr>
                        <td class="li-sub">English</td>
                        <td class="li-test"><?php echo $row['english_test1']?></td>
                        <td class="li-test"><?php echo $row['english_test2']?></td>
                        <td class="li-test"><?php echo $row['english_exam']?></td> 
                        <td class="li-test"><?php 
                        if($english_total== 0){echo null;} else{echo $english_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($english_total >= '70'){echo "A";} else{
                               if('69' >= $english_total && $english_total >= '60'){echo "B";} else{
                                if('59' >= $english_total && $english_total >= '50'){echo "C";} else{
                                if('49' >= $english_total && $english_total >= '45'){echo "P";} else{
                                    if('44' >= $english_total && $english_total >= '1'){echo "F";} else{
                                if($english_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($english_total >= '70'){echo "$a";} else{
                               if('69' >= $english_total && $english_total >= '60'){echo "$b";} else{
                                if('59' >= $english_total && $english_total >= '50'){echo "$c";} else{
                                if('49' >= $english_total && $english_total >= '45'){echo "$p";} else{
                                    if('44' >= $english_total && $english_total >= '1'){echo "$f";} else{
                                        if($english_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['math_test1']?></td>
                        <td class="li-test"><?php echo $row['math_test2']?></td>
                        <td class="li-test"><?php echo $row['math_exam']?></td>
                        <td class="li-test"><?php 
                        if($math_total== 0){echo null;} else{echo $math_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($math_total >= '70'){echo "A";} else{
                               if('69' >= $math_total && $math_total >= '60'){echo "B";} else{
                                if('59' >= $math_total && $math_total >= '50'){echo "C";} else{
                                if('49' >= $math_total && $math_total >= '45'){echo "P";} else{
                                    if('44' >= $math_total && $math_total >= '1'){echo "F";} else{
                                if($math_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($math_total >= '70'){echo "$a";} else{
                               if('69' >= $math_total && $math_total >= '60'){echo "$b";} else{
                                if('59' >= $math_total && $math_total >= '50'){echo "$c";} else{
                                if('49' >= $math_total && $math_total >= '45'){echo "$p";} else{
                                    if('44' >= $math_total && $math_total >= '1'){echo "$f";} else{
                                        if($math_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['geo_test1']?></td>
                        <td class="li-test"><?php echo $row['geo_test2']?></td>
                        <td class="li-test"><?php echo $row['geo_exam']?></td>
                        <td class="li-test"><?php 
                        if($geo_total== 0){echo null;} else{echo $geo_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($geo_total >= '70'){echo "A";} else{
                               if('69' >= $geo_total && $geo_total >= '60'){echo "B";} else{
                                if('59' >= $geo_total && $geo_total >= '50'){echo "C";} else{
                                if('49' >= $geo_total && $geo_total >= '45'){echo "P";} else{
                                    if('44' >= $geo_total && $geo_total >= '1'){echo "F";} else{
                                if($geo_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($geo_total >= '70'){echo "$a";} else{
                               if('69' >= $geo_total && $geo_total >= '60'){echo "$b";} else{
                                if('59' >= $geo_total && $geo_total >= '50'){echo "$c";} else{
                                if('49' >= $geo_total && $geo_total >= '45'){echo "$p";} else{
                                    if('44' >= $geo_total && $geo_total >= '1'){echo "$f";} else{
                                        if($geo_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['phone_test1']?></td>
                        <td class="li-test"><?php echo $row['phone_test2']?></td>
                        <td class="li-test"><?php echo $row['phone_exam']?></td> 
                        <td class="li-test"><?php 
                        if($phone_total== 0){echo null;} else{echo $phone_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($phone_total >= '70'){echo "A";} else{
                               if('69' >= $phone_total && $phone_total >= '60'){echo "B";} else{
                                if('59' >= $phone_total && $phone_total >= '50'){echo "C";} else{
                                if('49' >= $phone_total && $phone_total >= '45'){echo "P";} else{
                                    if('44' >= $phone_total && $phone_total >= '1'){echo "F";} else{
                                if($phone_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($phone_total >= '70'){echo "$a";} else{
                               if('69' >= $phone_total && $phone_total >= '60'){echo "$b";} else{
                                if('59' >= $phone_total && $phone_total >= '50'){echo "$c";} else{
                                if('49' >= $phone_total && $phone_total >= '45'){echo "$p";} else{
                                    if('44' >= $phone_total && $phone_total >= '1'){echo "$f";} else{
                                        if($phone_total== 0){echo null;}

                                
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
                    <td class="li-test"><?php echo $row['yih_test1']?></td>
                    <td class="li-test"><?php echo $row['yih_test2']?></td>
                    <td class="li-test"><?php echo $row['yih_exam']?></td> 
                    <td class="li-test"><?php 
                        if($yih_total== 0){echo null;} else{echo $yih_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($yih_total >= '70'){echo "A";} else{
                               if('69' >= $yih_total && $yih_total >= '60'){echo "B";} else{
                                if('59' >= $yih_total && $yih_total >= '50'){echo "C";} else{
                                if('49' >= $yih_total && $yih_total >= '45'){echo "P";} else{
                                    if('44' >= $yih_total && $yih_total >= '1'){echo "F";} else{
                                if($yih_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($yih_total >= '70'){echo "$a";} else{
                               if('69' >= $yih_total && $yih_total >= '60'){echo "$b";} else{
                                if('59' >= $yih_total && $yih_total >= '50'){echo "$c";} else{
                                if('49' >= $yih_total && $yih_total >= '45'){echo "$p";} else{
                                    if('44' >= $yih_total && $yih_total >= '1'){echo "$f";} else{
                                        if($yih_total== 0){echo null;}

                                
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
                         <td class="li-test"><?php echo $row['french_test1']?></td>
                         <td class="li-test"><?php echo $row['french_test2']?></td>
                         <td class="li-test"><?php echo $row['french_exam']?></td>
                         <td class="li-test"><?php 
                        if($french_total== 0){echo null;} else{echo $french_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($french_total >= '70'){echo "A";} else{
                               if('69' >= $french_total && $french_total >= '60'){echo "B";} else{
                                if('59' >= $french_total && $french_total >= '50'){echo "C";} else{
                                if('49' >= $french_total && $french_total >= '45'){echo "P";} else{
                                    if('44' >= $french_total && $french_total >= '1'){echo "F";} else{
                                if($french_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($french_total >= '70'){echo "$a";} else{
                               if('69' >= $french_total && $french_total >= '60'){echo "$b";} else{
                                if('59' >= $french_total && $french_total >= '50'){echo "$c";} else{
                                if('49' >= $french_total && $french_total >= '45'){echo "$p";} else{
                                    if('44' >= $french_total && $french_total >= '1'){echo "$f";} else{
                                        if($french_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                     </tr>
                     <tr>
                         <td class="li-sub">Lit-In-English</td>
                         <td class="li-test"><?php echo $row['lit_test1']?></td>
                         <td class="li-test"><?php echo $row['lit_test2']?></td>
                         <td class="li-test"><?php echo $row['lit_exam']?></td>
                        <td class="li-test"><?php 
                        if($lit_total== 0){echo null;} else{echo $lit_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($lit_total >= '70'){echo "A";} else{
                               if('69' >= $lit_total && $lit_total >= '60'){echo "B";} else{
                                if('59' >= $lit_total && $lit_total >= '50'){echo "C";} else{
                                if('49' >= $lit_total && $lit_total >= '45'){echo "P";} else{
                                    if('44' >= $lit_total && $lit_total >= '1'){echo "F";} else{
                                if($lit_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($lit_total >= '70'){echo "$a";} else{
                               if('69' >= $lit_total && $lit_total >= '60'){echo "$b";} else{
                                if('59' >= $lit_total && $lit_total >= '50'){echo "$c";} else{
                                if('49' >= $lit_total && $lit_total >= '45'){echo "$p";} else{
                                    if('44' >= $lit_total && $lit_total >= '1'){echo "$f";} else{
                                        if($lit_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['crs_irs_test1']?></td>
                        <td class="li-test"><?php echo $row['crs_irs_test2']?></td>
                        <td class="li-test"><?php echo $row['crs_irs_exam']?></td> 
                        <td class="li-test"><?php 
                        if($crs_irs_total== 0){echo null;} else{echo $crs_irs_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($crs_irs_total >= '70'){echo "A";} else{
                               if('69' >= $crs_irs_total && $crs_irs_total >= '60'){echo "B";} else{
                                if('59' >= $crs_irs_total && $crs_irs_total >= '50'){echo "C";} else{
                                if('49' >= $crs_irs_total && $crs_irs_total >= '45'){echo "P";} else{
                                    if('44' >= $crs_irs_total && $crs_irs_total >= '1'){echo "F";} else{
                                if($crs_irs_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($crs_irs_total >= '70'){echo "$a";} else{
                               if('69' >= $crs_irs_total && $crs_irs_total >= '60'){echo "$b";} else{
                                if('59' >= $crs_irs_total && $crs_irs_total >= '50'){echo "$c";} else{
                                if('49' >= $crs_irs_total && $crs_irs_total >= '45'){echo "$p";} else{
                                    if('44' >= $crs_irs_total && $crs_irs_total >= '1'){echo "$f";} else{
                                        if($crs_irs_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['history_test1']?></td>
                        <td class="li-test"><?php echo $row['history_test2']?></td>
                        <td class="li-test"><?php echo $row['history_exam']?></td>
                        <td class="li-test"><?php 
                        if($history_total== 0){echo null;} else{echo $history_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($history_total >= '70'){echo "A";} else{
                               if('69' >= $history_total && $history_total >= '60'){echo "B";} else{
                                if('59' >= $history_total && $history_total >= '50'){echo "C";} else{
                                if('49' >= $history_total && $history_total >= '45'){echo "P";} else{
                                    if('44' >= $history_total && $history_total >= '1'){echo "F";} else{
                                if($history_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($history_total >= '70'){echo "$a";} else{
                               if('69' >= $history_total && $history_total >= '60'){echo "$b";} else{
                                if('59' >= $history_total && $history_total >= '50'){echo "$c";} else{
                                if('49' >= $history_total && $history_total >= '45'){echo "$p";} else{
                                    if('44' >= $history_total && $history_total >= '1'){echo "$f";} else{
                                        if($history_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['govt_test1']?></td>
                        <td class="li-test"><?php echo $row['govt_test2']?></td>
                        <td class="li-test"><?php echo $row['govt_exam']?></td>
                       <td class="li-test"><?php 
                        if($govt_total== 0){echo null;} else{echo $govt_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($govt_total >= '70'){echo "A";} else{
                               if('69' >= $govt_total && $govt_total >= '60'){echo "B";} else{
                                if('59' >= $govt_total && $govt_total >= '50'){echo "C";} else{
                                if('49' >= $govt_total && $govt_total >= '45'){echo "P";} else{
                                    if('44' >= $govt_total && $govt_total >= '1'){echo "F";} else{
                                if($govt_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($govt_total >= '70'){echo "$a";} else{
                               if('69' >= $govt_total && $govt_total >= '60'){echo "$b";} else{
                                if('59' >= $govt_total && $govt_total >= '50'){echo "$c";} else{
                                if('49' >= $govt_total && $govt_total >= '45'){echo "$p";} else{
                                    if('44' >= $govt_total && $govt_total >= '1'){echo "$f";} else{
                                        if($govt_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['econs_test1']?></td>
                        <td class="li-test"><?php echo $row['econs_test2']?></td>
                        <td class="li-test"><?php echo $row['econs_exam']?></td> 
                       <td class="li-test"><?php 
                        if($econs_total== 0){echo null;} else{echo $econs_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($econs_total >= '70'){echo "A";} else{
                               if('69' >= $econs_total && $econs_total >= '60'){echo "B";} else{
                                if('59' >= $econs_total && $econs_total >= '50'){echo "C";} else{
                                if('49' >= $econs_total && $econs_total >= '45'){echo "P";} else{
                                    if('44' >= $econs_total && $econs_total >= '1'){echo "F";} else{
                                if($econs_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($econs_total >= '70'){echo "$a";} else{
                               if('69' >= $econs_total && $econs_total >= '60'){echo "$b";} else{
                                if('59' >= $econs_total && $econs_total >= '50'){echo "$c";} else{
                                if('49' >= $econs_total && $econs_total >= '45'){echo "$p";} else{
                                    if('44' >= $econs_total && $econs_total >= '1'){echo "$f";} else{
                                        if($econs_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['f_maths_test1']?></td>
                        <td class="li-test"><?php echo $row['f_maths_test2']?></td>
                        <td class="li-test"><?php echo $row['f_maths_exam']?></td> 
                        <td class="li-test"><?php 
                        if($f_maths_total== 0){echo null;} else{echo $f_maths_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($f_maths_total >= '70'){echo "A";} else{
                               if('69' >= $f_maths_total && $f_maths_total >= '60'){echo "B";} else{
                                if('59' >= $f_maths_total && $f_maths_total >= '50'){echo "C";} else{
                                if('49' >= $f_maths_total && $f_maths_total >= '45'){echo "P";} else{
                                    if('44' >= $f_maths_total && $f_maths_total >= '1'){echo "F";} else{
                                if($f_maths_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($f_maths_total >= '70'){echo "$a";} else{
                               if('69' >= $f_maths_total && $f_maths_total >= '60'){echo "$b";} else{
                                if('59' >= $f_maths_total && $f_maths_total >= '50'){echo "$c";} else{
                                if('49' >= $f_maths_total && $f_maths_total >= '45'){echo "$p";} else{
                                    if('44' >= $f_maths_total && $f_maths_total >= '1'){echo "$f";} else{
                                        if($f_maths_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['phy_test1']?></td>
                        <td class="li-test"><?php echo $row['phy_test2']?></td>
                        <td class="li-test"><?php echo $row['phy_exam']?></td> 
                        <td class="li-test"><?php 
                        if($phy_total== 0){echo null;} else{echo $phy_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($phy_total >= '70'){echo "A";} else{
                               if('69' >= $phy_total && $phy_total >= '60'){echo "B";} else{
                                if('59' >= $phy_total && $phy_total >= '50'){echo "C";} else{
                                if('49' >= $phy_total && $phy_total >= '45'){echo "P";} else{
                                    if('44' >= $phy_total && $phy_total >= '1'){echo "F";} else{
                                if($phy_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($phy_total >= '70'){echo "$a";} else{
                               if('69' >= $phy_total && $phy_total >= '60'){echo "$b";} else{
                                if('59' >= $phy_total && $phy_total >= '50'){echo "$c";} else{
                                if('49' >= $phy_total && $phy_total >= '45'){echo "$p";} else{
                                    if('44' >= $phy_total && $phy_total >= '1'){echo "$f";} else{
                                        if($phy_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['chem_test1']?></td>
                        <td class="li-test"><?php echo $row['chem_test2']?></td>
                        <td class="li-test"><?php echo $row['chem_exam']?></td>
                        <td class="li-test"><?php 
                        if($chem_total== 0){echo null;} else{echo $chem_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($chem_total >= '70'){echo "A";} else{
                               if('69' >= $chem_total && $chem_total >= '60'){echo "B";} else{
                                if('59' >= $chem_total && $chem_total >= '50'){echo "C";} else{
                                if('49' >= $chem_total && $chem_total >= '45'){echo "P";} else{
                                    if('44' >= $chem_total && $chem_total >= '1'){echo "F";} else{
                                if($chem_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($chem_total >= '70'){echo "$a";} else{
                               if('69' >= $chem_total && $chem_total >= '60'){echo "$b";} else{
                                if('59' >= $chem_total && $chem_total >= '50'){echo "$c";} else{
                                if('49' >= $chem_total && $chem_total >= '45'){echo "$p";} else{
                                    if('44' >= $chem_total && $chem_total >= '1'){echo "$f";} else{
                                        if($chem_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['bio_test1']?></td>
                        <td class="li-test"><?php echo $row['bio_test2']?></td>
                        <td class="li-test"><?php echo $row['bio_exam']?></td> 
                       <td class="li-test"><?php 
                        if($bio_total== 0){echo null;} else{echo $bio_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($bio_total >= '70'){echo "A";} else{
                               if('69' >= $bio_total && $bio_total >= '60'){echo "B";} else{
                                if('59' >= $bio_total && $bio_total >= '50'){echo "C";} else{
                                if('49' >= $bio_total && $bio_total >= '45'){echo "P";} else{
                                    if('44' >= $bio_total && $bio_total >= '1'){echo "F";} else{
                                if($bio_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($bio_total >= '70'){echo "$a";} else{
                               if('69' >= $bio_total && $bio_total >= '60'){echo "$b";} else{
                                if('59' >= $bio_total && $bio_total >= '50'){echo "$c";} else{
                                if('49' >= $bio_total && $bio_total >= '45'){echo "$p";} else{
                                    if('44' >= $bio_total && $bio_total >= '1'){echo "$f";} else{
                                        if($bio_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['fine_art_test1']?></td>
                        <td class="li-test"><?php echo $row['fine_art_test2']?></td>
                        <td class="li-test"><?php echo $row['fine_art_exam']?></td>
                        <td class="li-test"><?php 
                        if($fine_art_total== 0){echo null;} else{echo $fine_art_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($fine_art_total >= '70'){echo "A";} else{
                               if('69' >= $fine_art_total && $fine_art_total >= '60'){echo "B";} else{
                                if('59' >= $fine_art_total && $fine_art_total >= '50'){echo "C";} else{
                                if('49' >= $fine_art_total && $fine_art_total >= '45'){echo "P";} else{
                                    if('44' >= $fine_art_total && $fine_art_total >= '1'){echo "F";} else{
                                if($fine_art_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($fine_art_total >= '70'){echo "$a";} else{
                               if('69' >= $fine_art_total && $fine_art_total >= '60'){echo "$b";} else{
                                if('59' >= $fine_art_total && $fine_art_total >= '50'){echo "$c";} else{
                                if('49' >= $fine_art_total && $fine_art_total >= '45'){echo "$p";} else{
                                    if('44' >= $fine_art_total && $fine_art_total >= '1'){echo "$f";} else{
                                        if($fine_art_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['music_test1']?></td>
                        <td class="li-test"><?php echo $row['music_test2']?></td>
                        <td class="li-test"><?php echo $row['music_exam']?></td> 
                       <td class="li-test"><?php 
                        if($music_total== 0){echo null;} else{echo $music_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($music_total >= '70'){echo "A";} else{
                               if('69' >= $music_total && $music_total >= '60'){echo "B";} else{
                                if('59' >= $music_total && $music_total >= '50'){echo "C";} else{
                                if('49' >= $music_total && $music_total >= '45'){echo "P";} else{
                                    if('44' >= $music_total && $music_total >= '1'){echo "F";} else{
                                if($music_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($music_total >= '70'){echo "$a";} else{
                               if('69' >= $music_total && $music_total >= '60'){echo "$b";} else{
                                if('59' >= $music_total && $music_total >= '50'){echo "$c";} else{
                                if('49' >= $music_total && $music_total >= '45'){echo "$p";} else{
                                    if('44' >= $music_total && $music_total >= '1'){echo "$f";} else{
                                        if($music_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['tech_draw_test1']?></td>
                        <td class="li-test"><?php echo $row['tech_draw_test2']?></td>
                        <td class="li-test"><?php echo $row['tech_draw_exam']?></td>
                      <td class="li-test"><?php 
                        if($tech_draw_total== 0){echo null;} else{echo $tech_draw_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($tech_draw_total >= '70'){echo "A";} else{
                               if('69' >= $tech_draw_total && $tech_draw_total >= '60'){echo "B";} else{
                                if('59' >= $tech_draw_total && $tech_draw_total >= '50'){echo "C";} else{
                                if('49' >= $tech_draw_total && $tech_draw_total >= '45'){echo "P";} else{
                                    if('44' >= $tech_draw_total && $tech_draw_total >= '1'){echo "F";} else{
                                if($tech_draw_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($tech_draw_total >= '70'){echo "$a";} else{
                               if('69' >= $tech_draw_total && $tech_draw_total >= '60'){echo "$b";} else{
                                if('59' >= $tech_draw_total && $tech_draw_total >= '50'){echo "$c";} else{
                                if('49' >= $tech_draw_total && $tech_draw_total >= '45'){echo "$p";} else{
                                    if('44' >= $tech_draw_total && $tech_draw_total >= '1'){echo "$f";} else{
                                        if($tech_draw_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['commerce_test1']?></td>
                        <td class="li-test"><?php echo $row['commerce_test2']?></td>
                        <td class="li-test"><?php echo $row['commerce_exam']?></td> 
                       <td class="li-test"><?php 
                        if($commerce_total== 0){echo null;} else{echo $commerce_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($commerce_total >= '70'){echo "A";} else{
                               if('69' >= $commerce_total && $commerce_total >= '60'){echo "B";} else{
                                if('59' >= $commerce_total && $commerce_total >= '50'){echo "C";} else{
                                if('49' >= $commerce_total && $commerce_total >= '45'){echo "P";} else{
                                    if('44' >= $commerce_total && $commerce_total >= '1'){echo "F";} else{
                                if($commerce_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($commerce_total >= '70'){echo "$a";} else{
                               if('69' >= $commerce_total && $commerce_total >= '60'){echo "$b";} else{
                                if('59' >= $commerce_total && $commerce_total >= '50'){echo "$c";} else{
                                if('49' >= $commerce_total && $commerce_total >= '45'){echo "$p";} else{
                                    if('44' >= $commerce_total && $commerce_total >= '1'){echo "$f";} else{
                                        if($commerce_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['acc_test1']?></td>
                        <td class="li-test"><?php echo $row['acc_test2']?></td>
                        <td class="li-test"><?php echo $row['acc_exam']?></td> 
                        <td class="li-test"><?php 
                        if($acc_total== 0){echo null;} else{echo $acc_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($acc_total >= '70'){echo "A";} else{
                               if('69' >= $acc_total && $acc_total >= '60'){echo "B";} else{
                                if('59' >= $acc_total && $acc_total >= '50'){echo "C";} else{
                                if('49' >= $acc_total && $acc_total >= '45'){echo "P";} else{
                                    if('44' >= $acc_total && $acc_total >= '1'){echo "F";} else{
                                if($acc_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($acc_total >= '70'){echo "$a";} else{
                               if('69' >= $acc_total && $acc_total >= '60'){echo "$b";} else{
                                if('59' >= $acc_total && $acc_total >= '50'){echo "$c";} else{
                                if('49' >= $acc_total && $acc_total >= '45'){echo "$p";} else{
                                    if('44' >= $acc_total && $acc_total >= '1'){echo "$f";} else{
                                        if($acc_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['agric_sci_test1']?></td>
                        <td class="li-test"><?php echo $row['agric_sci_test2']?></td>
                        <td class="li-test"><?php echo $row['agric_sci_exam']?></td>
                     <td class="li-test"><?php 
                        if($agric_sci_total== 0){echo null;} else{echo $agric_sci_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($agric_sci_total >= '70'){echo "A";} else{
                               if('69' >= $agric_sci_total && $agric_sci_total >= '60'){echo "B";} else{
                                if('59' >= $agric_sci_total && $agric_sci_total >= '50'){echo "C";} else{
                                if('49' >= $agric_sci_total && $agric_sci_total >= '45'){echo "P";} else{
                                    if('44' >= $agric_sci_total && $agric_sci_total >= '1'){echo "F";} else{
                                if($agric_sci_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($agric_sci_total >= '70'){echo "$a";} else{
                               if('69' >= $agric_sci_total && $agric_sci_total >= '60'){echo "$b";} else{
                                if('59' >= $agric_sci_total && $agric_sci_total >= '50'){echo "$c";} else{
                                if('49' >= $agric_sci_total && $agric_sci_total >= '45'){echo "$p";} else{
                                    if('44' >= $agric_sci_total && $agric_sci_total >= '1'){echo "$f";} else{
                                        if($agric_sci_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['food_nu_test1']?></td>
                        <td class="li-test"><?php echo $row['food_nu_test2']?></td>
                        <td class="li-test"><?php echo $row['food_nu_exam']?></td> 
                       <td class="li-test"><?php 
                        if($food_nu_total== 0){echo null;} else{echo $food_nu_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($food_nu_total >= '70'){echo "A";} else{
                               if('69' >= $food_nu_total && $food_nu_total >= '60'){echo "B";} else{
                                if('59' >= $food_nu_total && $food_nu_total >= '50'){echo "C";} else{
                                if('49' >= $food_nu_total && $food_nu_total >= '45'){echo "P";} else{
                                    if('44' >= $food_nu_total && $food_nu_total >= '1'){echo "F";} else{
                                if($food_nu_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($food_nu_total >= '70'){echo "$a";} else{
                               if('69' >= $food_nu_total && $food_nu_total >= '60'){echo "$b";} else{
                                if('59' >= $food_nu_total && $food_nu_total >= '50'){echo "$c";} else{
                                if('49' >= $food_nu_total && $food_nu_total >= '45'){echo "$p";} else{
                                    if('44' >= $food_nu_total && $food_nu_total >= '1'){echo "$f";} else{
                                        if($food_nu_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    <tr>
                    <td class="li-sub">Computer Studies</td>
                        <td class="li-test"><?php echo $row['comp_test1']?></td>
                        <td class="li-test"><?php echo $row['comp_test2']?></td>
                        <td class="li-test"><?php echo $row['comp_exam']?></td>
                        <td class="li-test"><?php 
                        if($comp_total== 0){echo null;} else{echo $comp_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($comp_total >= '70'){echo "A";} else{
                               if('69' >= $comp_total && $comp_total >= '60'){echo "B";} else{
                                if('59' >= $comp_total && $comp_total >= '50'){echo "C";} else{
                                if('49' >= $comp_total && $comp_total >= '45'){echo "P";} else{
                                    if('44' >= $comp_total && $comp_total >= '1'){echo "F";} else{
                                if($comp_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($comp_total >= '70'){echo "$a";} else{
                               if('69' >= $comp_total && $comp_total >= '60'){echo "$b";} else{
                                if('59' >= $comp_total && $comp_total >= '50'){echo "$c";} else{
                                if('49' >= $comp_total && $comp_total >= '45'){echo "$p";} else{
                                    if('44' >= $comp_total && $comp_total >= '1'){echo "$f";} else{
                                        if($comp_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['b_keep_test1']?></td>
                        <td class="li-test"><?php echo $row['b_keep_test2']?></td>
                        <td class="li-test"><?php echo $row['b_keep_exam']?></td> 
                        <td class="li-test"><?php 
                        if($b_keep_total== 0){echo null;} else{echo $b_keep_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($b_keep_total >= '70'){echo "A";} else{
                               if('69' >= $b_keep_total && $b_keep_total >= '60'){echo "B";} else{
                                if('59' >= $b_keep_total && $b_keep_total >= '50'){echo "C";} else{
                                if('49' >= $b_keep_total && $b_keep_total >= '45'){echo "P";} else{
                                    if('44' >= $b_keep_total && $b_keep_total >= '1'){echo "F";} else{
                                if($b_keep_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($b_keep_total >= '70'){echo "$a";} else{
                               if('69' >= $b_keep_total && $b_keep_total >= '60'){echo "$b";} else{
                                if('59' >= $b_keep_total && $b_keep_total >= '50'){echo "$c";} else{
                                if('49' >= $b_keep_total && $b_keep_total >= '45'){echo "$p";} else{
                                    if('44' >= $b_keep_total && $b_keep_total >= '1'){echo "$f";} else{
                                        if($b_keep_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['c_c_test1']?></td>
                        <td class="li-test"><?php echo $row['c_c_test2']?></td>
                        <td class="li-test"><?php echo $row['c_c_exam']?></td>
                       <td class="li-test"><?php 
                        if($c_c_total== 0){echo null;} else{echo $c_c_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($c_c_total >= '70'){echo "A";} else{
                               if('69' >= $c_c_total && $c_c_total >= '60'){echo "B";} else{
                                if('59' >= $c_c_total && $c_c_total >= '50'){echo "C";} else{
                                if('49' >= $c_c_total && $c_c_total >= '45'){echo "P";} else{
                                    if('44' >= $c_c_total && $c_c_total >= '1'){echo "F";} else{
                                if($c_c_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($c_c_total >= '70'){echo "$a";} else{
                               if('69' >= $c_c_total && $c_c_total >= '60'){echo "$b";} else{
                                if('59' >= $c_c_total && $c_c_total >= '50'){echo "$c";} else{
                                if('49' >= $c_c_total && $c_c_total >= '45'){echo "$p";} else{
                                    if('44' >= $c_c_total && $c_c_total >= '1'){echo "$f";} else{
                                        if($c_c_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                
                    </tr>
                    <td class="li-sub">Basic Electronics</td>
                        <td class="li-test"><?php echo $row['basic_elect_test1']?></td>
                        <td class="li-test"><?php echo $row['basic_elect_test2']?></td>
                        <td class="li-test"><?php echo $row['basic_elect_exam']?></td> 
                       <td class="li-test"><?php 
                        if($basic_elect_total== 0){echo null;} else{echo $basic_elect_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($basic_elect_total >= '70'){echo "A";} else{
                               if('69' >= $basic_elect_total && $basic_elect_total >= '60'){echo "B";} else{
                                if('59' >= $basic_elect_total && $basic_elect_total >= '50'){echo "C";} else{
                                if('49' >= $basic_elect_total && $basic_elect_total >= '45'){echo "P";} else{
                                    if('44' >= $basic_elect_total && $basic_elect_total >= '1'){echo "F";} else{
                                if($basic_elect_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($basic_elect_total >= '70'){echo "$a";} else{
                               if('69' >= $basic_elect_total && $basic_elect_total >= '60'){echo "$b";} else{
                                if('59' >= $basic_elect_total && $basic_elect_total >= '50'){echo "$c";} else{
                                if('49' >= $basic_elect_total && $basic_elect_total >= '45'){echo "$p";} else{
                                    if('44' >= $basic_elect_total && $basic_elect_total >= '1'){echo "$f";} else{
                                        if($basic_elect_total== 0){echo null;}

                                
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
                        <td class="li-test"><?php echo $row['civic_test1']?></td>
                        <td class="li-test"><?php echo $row['civic_test2']?></td>
                        <td class="li-test"><?php echo $row['civic_exam']?></td> 
                        <td class="li-test"><?php 
                        if($civic_total== 0){echo null;} else{echo $civic_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($civic_total >= '70'){echo "A";} else{
                               if('69' >= $civic_total && $civic_total >= '60'){echo "B";} else{
                                if('59' >= $civic_total && $civic_total >= '50'){echo "C";} else{
                                if('49' >= $civic_total && $civic_total >= '45'){echo "P";} else{
                                    if('44' >= $civic_total && $civic_total >= '1'){echo "F";} else{
                                if($civic_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($civic_total >= '70'){echo "$a";} else{
                               if('69' >= $civic_total && $civic_total >= '60'){echo "$b";} else{
                                if('59' >= $civic_total && $civic_total >= '50'){echo "$c";} else{
                                if('49' >= $civic_total && $civic_total >= '45'){echo "$p";} else{
                                    if('44' >= $civic_total && $civic_total >= '1'){echo "$f";} else{
                                        if($civic_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <td class="li-sub">Home Management</td>
                        <td class="li-test"><?php echo $row['home_mgt_test1']?></td>
                        <td class="li-test"><?php echo $row['home_mgt_test2']?></td>
                        <td class="li-test"><?php echo $row['home_mgt_exam']?></td>
                        <td class="li-test"><?php 
                        if($home_mgt_total== 0){echo null;} else{echo $home_mgt_total;} ?></td>
                       <td class="li-test">
                             <?php
                            
                            if($home_mgt_total >= '70'){echo "A";} else{
                               if('69' >= $home_mgt_total && $home_mgt_total >= '60'){echo "B";} else{
                                if('59' >= $home_mgt_total && $home_mgt_total >= '50'){echo "C";} else{
                                if('49' >= $home_mgt_total && $home_mgt_total >= '45'){echo "P";} else{
                                    if('44' >= $home_mgt_total && $home_mgt_total >= '1'){echo "F";} else{
                                if($home_mgt_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($home_mgt_total >= '70'){echo "$a";} else{
                               if('69' >= $home_mgt_total && $home_mgt_total >= '60'){echo "$b";} else{
                                if('59' >= $home_mgt_total && $home_mgt_total >= '50'){echo "$c";} else{
                                if('49' >= $home_mgt_total && $home_mgt_total >= '45'){echo "$p";} else{
                                    if('44' >= $home_mgt_total && $home_mgt_total >= '1'){echo "$f";} else{
                                        if($home_mgt_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <td class="li-sub">Arabic</td>
                        <td class="li-test"><?php echo $row['arabic_test1']?></td>
                        <td class="li-test"><?php echo $row['arabic_test2']?></td>
                        <td class="li-test"><?php echo $row['arabic_exam']?></td>
                        <td class="li-test"><?php 
                        if($arabic_total== 0){echo null;} else{echo $arabic_total;} ?></td>
                        <td class="li-test">
                             <?php
                            
                            if($arabic_total >= '70'){echo "A";} else{
                               if('69' >= $arabic_total && $arabic_total >= '60'){echo "B";} else{
                                if('59' >= $arabic_total && $arabic_total >= '50'){echo "C";} else{
                                if('49' >= $arabic_total && $arabic_total >= '45'){echo "P";} else{
                                    if('44' >= $arabic_total && $arabic_total >= '1'){echo "F";} else{
                                if($arabic_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($arabic_total >= '70'){echo "$a";} else{
                               if('69' >= $arabic_total && $arabic_total >= '60'){echo "$b";} else{
                                if('59' >= $arabic_total && $arabic_total >= '50'){echo "$c";} else{
                                if('49' >= $arabic_total && $arabic_total >= '45'){echo "$p";} else{
                                    if('44' >= $arabic_total && $arabic_total >= '1'){echo "$f";} else{
                                        if($arabic_total== 0){echo null;}

                                
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
                                <td >SENSE OF RESPONSIBILITY</td>
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
                                <td>SOCIAL DEVELOPMENT</td>
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
                                <td>PHYSCHOMOTOR SKILLS</td>
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
                <br>
                
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
 
 }  }else {
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry, your Result was not found. Check your details');
    window.location.href='https://henrycollege.hrmsystems.com.ng/';
    </script>");
}
?>