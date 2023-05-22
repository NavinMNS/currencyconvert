<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Currency Converter</title>
</head>

<body>
    <div class="header">
      <h2>  CURRENCY CONVRETER</h2>
    </div>
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line"></div>
    <div class="sub-content">
        
    </div>
    <form action="index.php" method="post" enctype='multipart/form-data'>
<div class="container">
    <div class="main-content">
        <div class="left">
<select name="from_amount" id="from_amount" class="from_amount" style="width: 150px;margin-top: 60px;height: 30px;">
    <option value="india" id="india">India</option>
    <option value="usa" >United States</option>
    <option value="Canada" >Canada</option>
    <option value="Mexico" >Mexico</option>
    <option value="European" >European Union</option>
    <option value="United Kingdom" >United Kingdom</option>
    <option value="Switzerland" >Switzerland</option>
    <option value="Japan" >Japan</option>
    <option value="China" >China</option>
    <option value="Australia" >Australia</option>
   

</select>
<br>
<br>
<input type="number" id="get_amount" name="get_amount" width="150px" style="border-radius: 5px;height: 30px; border: 1px solid black;justify-content: center;" placeholder="   Enter Amount Here">


        </div>
        <button class= "convert_btn" name="submit" id="convert_btn" onclick="convert()">Convert To &#x2193;</button>
        <div class="right">
            <select name="to_amount" class="to_amount" id="to_amount" style="width: 150px;height: 30px;margin-top: 30px;">
                <option value="usa" id="usa">United States</option>
                <option value="india" id="india">India</option>
                <option value="Canada" >Canada</option>
    <option value="Mexico" >Mexico</option>
    <option value="European Union" >European Union</option>
    <option value="United Kingdom" >United Kingdom</option>
    <option value="Switzerland" >Switzerland</option>
    <option value="Japan" >Japan</option>
    <option value="China" >China</option>
    <option value="Australia" >Australia</option>
   
            
            </select>
            <br>
            <br>
            <?php
            if(isset($_POST['submit'])){
                $_SESSION["query"] = $_POST["mol"];
$_SESSION["action"] = $_POST["action"];
                $amount  = $_POST['get_amount'];
                $cur1 = $_POST['from_amount'];
                $cur2 = $_POST['to_amount'];
                
                if($cur1=="india"&&$cur2=="usa")
                {
                    $amount = $amount*82.07;
                    echo "<script>alert('$amount'+' US Dollar')</script>";
                }
                if($cur1=="usa"&&$cur2=="india")
                {
                    $amount = $amount*82.07;
                    echo "<script>alert('$amount'+' Rupee')</script>";
                }
                if($cur1=="india"&&$cur2=="Canada")
                {
                    $amount = $amount*0.016;
                    echo "<script>alert('$amount'+' Canadian Dollar')</script>";
                }
                if($cur1=="india"&&$cur2=="Mexico")
                {
                    $amount = $amount*0.21;
                    echo "<script>alert('$amount'+' Mexican Peso')</script>";
                }
                if($cur1=="india"&&$cur2=="European")
                {
                    $amount = $amount*0.011;
                    echo "<script>alert('$amount'+' Euro')</script>";
                }
                if($cur1=="india"&&$cur2=="United Kingdom")
                {
                    $amount = $amount*0.0097;
                    echo "<script>alert('$amount'+' Pound Sterling')</script>";
                }
                if($cur1=="india"&&$cur2=="Switzerland")
                {
                    $amount = $amount*0.011;
                    echo "<script>alert('$amount'+' Swiss Franc')</script>";
                }
                if($cur1=="india"&&$cur2=="Japan")
                {
                    $amount = $amount*1.64;
                    echo "<script>alert('$amount'+' Japanese Yen')</script>";
                }
                if($cur1=="india"&&$cur2=="China")
                {
                    $amount = $amount*0.0085;
                    echo "<script>alert('$amount'+' Renminbi')</script>";
                }
                if($cur1=="india"&&$cur2=="Australia")
                {
                    $amount = $amount*0.018;
                    echo "<script>alert('$amount'+' Australian Dollar')</script>";
                }
                if($cur1=="india"&&$cur2=="New Zealand")
                {
                    $amount = $amount*0.020;
                    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
                }
                if($cur1=="india"&&$cur2=="South Korea")
                {
                    $amount = $amount*16.25;
                    echo "<script>alert('$amount'+' South Korean Won')</script>";
                }
                if($cur1=="india"&&$cur2=="Brazil")
                {
                    $amount = $amount*0.060;
                    echo "<script>alert('$amount'+' Brazilian Real')</script>";
                }
                if($cur1=="india"&&$cur2=="Russia")
                {
                    $amount = $amount*0.94;
                    echo "<script>alert('$amount'+' Russian Ruble')</script>";
                }
                if($cur1=="india"&&$cur2=="South Africa")
                {
                    $amount = $amount*0.23;
                    echo "<script>alert('$amount'+' South African Rand')</script>";
                }
                if($cur1=="india"&&$cur2=="Saudi Arabia ")
                {
                    $amount = $amount*0.046;
                    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
                }
                if($cur1=="india"&&$cur2=="uae")
                {
                    $amount = $amount*0.045;
                    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
                }
                if($cur1=="india"&&$cur2=="Turkey")
                {
                    $amount = $amount*0.24;
                    echo "<script>alert('$amount'+' Turkish Lira')</script>";
                }
                if($cur1=="india"&&$cur2=="Egypt")
                {
                    $amount = $amount*0.38;
                    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
                }
                if($cur1=="india"&&$cur2=="Nigeria")
                {
                    $amount = $amount*5.60;
                    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
                }
                
                if($cur1=="usa"&&$cur2=="india")
                {
                    $amount = $amount*82.07;
                    echo "<script>alert('$amount'+' Rupee')</script>";
                }
                if($cur1=="usa"&&$cur2=="Canada")
                {
                    $amount = $amount*1.36;
                    echo "<script>alert('$amount'+' Canadian Dollar')</script>";
                }
                if($cur1=="usa"&&$cur2=="Mexico")
                {
                    $amount = $amount*17.57;
                    echo "<script>alert('$amount'+' Mexican Peso')</script>";
                }
                if($cur1=="usa"&&$cur2=="European")
                {
                    $amount = $amount*0.92;
                    echo "<script>alert('$amount'+' Euro')</script>";
                }
                if($cur1=="usa"&&$cur2=="United Kingdom")
                {
                    $amount = $amount*0.80;
                    echo "<script>alert('$amount'+' Pound Sterling')</script>";
                }
                if($cur1=="usa"&&$cur2=="Switzerland")
                {
                    $amount = $amount*0.90;
                    echo "<script>alert('$amount'+' Swiss Franc')</script>";
                }
                if($cur1=="usa"&&$cur2=="Japan")
                {
                    $amount = $amount*135.98;
                    echo "<script>alert('$amount'+' Japanese Yen')</script>";
                }
                if($cur1=="usa"&&$cur2=="China")
                {
                    $amount = $amount*6.96;
                    echo "<script>alert('$amount'+' Renminbi')</script>";
                }
                if($cur1=="usa"&&$cur2=="Australia")
                {
                    $amount = $amount*1.50;
                    echo "<script>alert('$amount'+' Australian Dollar')</script>";
                }
                if($cur1=="usa"&&$cur2=="New Zealand")
                {
                    $amount = $amount*1.61;
                    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
                }
                if($cur1=="usa"&&$cur2=="South Korea")
                {
                    $amount = $amount*1338.79;
                    echo "<script>alert('$amount'+' South Korean Won')</script>";
                }
                if($cur1=="usa"&&$cur2=="Brazil")
                {
                    $amount = $amount*4.92;
                    echo "<script>alert('$amount'+' Brazilian Real')</script>";
                }
                if($cur1=="usa"&&$cur2=="Russia")
                {
                    $amount = $amount*77.71;
                    echo "<script>alert('$amount'+' Russian Ruble')</script>";
                }
                if($cur1=="usa"&&$cur2=="South Africa")
                {
                    $amount = $amount*19.15;
                    echo "<script>alert('$amount'+' South African Rand')</script>";
                }
                if($cur1=="usa"&&$cur2=="Saudi Arabia ")
                {
                    $amount = $amount*3.75;
                    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
                }
                if($cur1=="usa"&&$cur2=="uae")
                {
                    $amount = $amount*3.67;
                    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
                }
                if($cur1=="usa"&&$cur2=="Turkey")
                {
                    $amount = $amount*19.52;
                    echo "<script>alert('$amount'+' Turkish Lira')</script>";
                }
                if($cur1=="usa"&&$cur2=="Egypt")
                {
                    $amount = $amount*30.87;
                    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
                }
                if($cur1=="usa"&&$cur2=="Nigeria")
                {
                    $amount = $amount*0.0022;
                    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
                }
                if($cur1=="Canada"&&$cur2=="usa")
                {
                    $amount = $amount*0.74;
                    echo "<script>alert('$amount'+' US Dollar')</script>";
                }
                if($cur1=="Canada"&&$cur2=="india")
                {
                    $amount = $amount*60.67;
                    echo "<script>alert('$amount'+' Rupee')</script>";
                }
           
                if($cur1=="Canada"&&$cur2=="Mexico")
                {
                    $amount = $amount*12.97;
                    echo "<script>alert('$amount'+' Mexican Peso')</script>";
                }
                if($cur1=="Canada"&&$cur2=="European")
                {
                    $amount = $amount*0.68;
                    echo "<script>alert('$amount'+' Euro')</script>";
                }
                if($cur1=="Canada"&&$cur2=="United Kingdom")
                {
                    $amount = $amount*0.59;
                    echo "<script>alert('$amount'+' Pound Sterling')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Switzerland")
                {
                    $amount = $amount*0.66;
                    echo "<script>alert('$amount'+' Swiss Franc')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Japan")
                {
                    $amount = $amount*100.33;
                    echo "<script>alert('$amount'+' Japanese Yen')</script>";
                }
                if($cur1=="Canada"&&$cur2=="China")
                {
                    $amount = $amount*5.14;
                    echo "<script>alert('$amount'+' Renminbi')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Australia")
                {
                    $amount = $amount*1.11;
                    echo "<script>alert('$amount'+' Australian Dollar')</script>";
                }
                if($cur1=="Canada"&&$cur2=="New Zealand")
                {
                    $amount = $amount*1.19;
                    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
                }
                if($cur1=="Canada"&&$cur2=="South Korea")
                {
                    $amount = $amount*988.24;
                    echo "<script>alert('$amount'+' South Korean Won')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Brazil")
                {
                    $amount = $amount*3.63;
                    echo "<script>alert('$amount'+' Brazilian Real')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Russia")
                {
                    $amount = $amount*57.34;
                    echo "<script>alert('$amount'+' Russian Ruble')</script>";
                }
                if($cur1=="Canada"&&$cur2=="South Africa")
                {
                    $amount = $amount*14.13;
                    echo "<script>alert('$amount'+' South African Rand')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Saudi Arabia ")
                {
                    $amount = $amount*2.77;
                    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
                }
                if($cur1=="Canada"&&$cur2=="uae")
                {
                    $amount = $amount*2.71;
                    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Turkey")
                {
                    $amount = $amount*14.47;
                    echo "<script>alert('$amount'+' Turkish Lira')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Egypt")
                {
                    $amount = $amount*22.78;
                    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
                }
                if($cur1=="Canada"&&$cur2=="Nigeria")
                {
                    $amount = $amount*339.77;
                    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
                }
                //------------Mexico-------------------//
                if($cur1=="Mexico"&&$cur2=="usa")
                {
                    $amount = $amount*0.056579;
                    echo "<script>alert('$amount'+' US Dollar')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="india")
                {
                    $amount = $amount*4.70;
                    echo "<script>alert('$amount'+' Rupee')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Canada")
                {
                    $amount = $amount*0.077;
                    echo "<script>alert('$amount'+' Canadian Dollar')</script>";
                }
                
                if($cur1=="Mexico"&&$cur2=="European")
                {
                    $amount = $amount*0.053;
                    echo "<script>alert('$amount'+' Euro')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="United Kingdom")
                {
                    $amount = $amount*0.046;
                    echo "<script>alert('$amount'+' Pound Sterling')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Switzerland")
                {
                    $amount = $amount*0.051;
                    echo "<script>alert('$amount'+' Swiss Franc')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Japan")
                {
                    $amount = $amount*7.77;
                    echo "<script>alert('$amount'+' Japanese Yen')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="China")
                {
                    $amount = $amount*0.40;
                    echo "<script>alert('$amount'+' Renminbi')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Australia")
                {
                    $amount = $amount*0.085;
                    echo "<script>alert('$amount'+' Australian Dollar')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="New Zealand")
                {
                    $amount = $amount*0.092;
                    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="South Korea")
                {
                    $amount = $amount*76.31;
                    echo "<script>alert('$amount'+' South Korean Won')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Brazil")
                {
                    $amount = $amount*0.28;
                    echo "<script>alert('$amount'+' Brazilian Real')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Russia")
                {
                    $amount = $amount*4.56;
                    echo "<script>alert('$amount'+' Russian Ruble')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="South Africa")
                {
                    $amount = $amount*1.09;
                    echo "<script>alert('$amount'+' South African Rand')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Saudi Arabia ")
                {
                    $amount = $amount*0.21;
                    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="uae")
                {
                    $amount = $amount*0.21;
                    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Turkey")
                {
                    $amount = $amount*1.12;
                    echo "<script>alert('$amount'+' Turkish Lira')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Egypt")
                {
                    $amount = $amount*1.77;
                    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
                }
                if($cur1=="Mexico"&&$cur2=="Nigeria")
                {
                    $amount = $amount*26.31;
                    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
                }
            //--------------European Union----------------------------//
            if($cur1=="European"&&$cur2=="usa")
            {
                $amount = $amount*1.09;
                echo "<script>alert('$amount'+' US Dollar')</script>";
            }
            if($cur1=="European"&&$cur2=="india")
            {
                $amount = $amount*89.45;
                echo "<script>alert('$amount'+' Rupee')</script>";
            }
            if($cur1=="European"&&$cur2=="Canada")
            {
                $amount = $amount*1.47;
                echo "<script>alert('$amount'+' Canadian Dollar')</script>";
            }
            if($cur1=="European"&&$cur2=="Mexico")
            {
                $amount = $amount*19.04;
                echo "<script>alert('$amount'+' Mexican Peso')</script>";
            }
       
            if($cur1=="European"&&$cur2=="United Kingdom")
            {
                $amount = $amount*0.87;
                echo "<script>alert('$amount'+' Pound Sterling')</script>";
            }
            if($cur1=="European"&&$cur2=="Switzerland")
            {
                $amount = $amount*0.97;
                echo "<script>alert('$amount'+' Swiss Franc')</script>";
            }
            if($cur1=="European"&&$cur2=="Japan")
            {
                $amount = $amount*147.95;
                echo "<script>alert('$amount'+' Japanese Yen')</script>";
            }
            if($cur1=="European"&&$cur2=="China")
            {
                $amount = $amount*7.56;
                echo "<script>alert('$amount'+' Renminbi')</script>";
            }
            if($cur1=="European"&&$cur2=="Australia")
            {
                $amount = $amount*1.62;
                echo "<script>alert('$amount'+' Australian Dollar')</script>";
            }
            if($cur1=="European"&&$cur2=="New Zealand")
            {
                $amount = $amount*1.74;
                echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
            }
            if($cur1=="European"&&$cur2=="South Korea")
            {
                $amount = $amount*1453.14;
                echo "<script>alert('$amount'+' South Korean Won')</script>";
            }
            if($cur1=="European"&&$cur2=="Brazil")
            {
                $amount = $amount*5.33;
                echo "<script>alert('$amount'+' Brazilian Real')</script>";
            }
            if($cur1=="European"&&$cur2=="Russia")
            {
                $amount = $amount*86.87;
                echo "<script>alert('$amount'+' Russian Ruble')</script>";
            }
            if($cur1=="European"&&$cur2=="South Africa")
            {
                $amount = $amount*20.69;
                echo "<script>alert('$amount'+' South African Rand')</script>";
            }
            if($cur1=="European"&&$cur2=="Saudi Arabia ")
            {
                $amount = $amount*4.08;
                echo "<script>alert('$amount'+' Saudi Riyal')</script>";
            }
            if($cur1=="European"&&$cur2=="uae")
            {
                $amount = $amount*3.99;
                echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
            }
            if($cur1=="European"&&$cur2=="Turkey")
            {
                $amount = $amount*21.39;
                echo "<script>alert('$amount'+' Turkish Lira')</script>";
            }
            if($cur1=="European"&&$cur2=="Egypt")
            {
                $amount = $amount*33.61;
                echo "<script>alert('$amount'+' Egyptian Pound')</script>";
            }
            if($cur1=="European"&&$cur2=="Nigeria")
            {
                $amount = $amount*500.84;
                echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
            }
            //--------------------UNITED KINGDOM-----------------------//
            if($cur1=="United Kingdom"&&$cur2=="usa")
            {
                $amount = $amount*1.25;
                echo "<script>alert('$amount'+' US Dollar')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="india")
            {
                $amount = $amount*103.02;
                echo "<script>alert('$amount'+' Rupee')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Canada")
            {
                $amount = $amount*1.69;
                echo "<script>alert('$amount'+' Canadian Dollar')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Mexico")
            {
                $amount = $amount*21.87;
                echo "<script>alert('$amount'+' Mexican Peso')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="European")
            {
                $amount = $amount*1.15;
                echo "<script>alert('$amount'+' Euro')</script>";
            }
       
            if($cur1=="United Kingdom"&&$cur2=="Switzerland")
            {
                $amount = $amount*1.12;
                echo "<script>alert('$amount'+' Swiss Franc')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Japan")
            {
                $amount = $amount*170.27;
                echo "<script>alert('$amount'+' Japanese Yen')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="China")
            {
                $amount = $amount*8.71;
                echo "<script>alert('$amount'+' Renminbi')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Australia")
            {
                $amount = $amount*1.87;
                echo "<script>alert('$amount'+' Australian Dollar')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="New Zealand")
            {
                $amount = $amount*2.00;
                echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="South Korea")
            {
                $amount = $amount*1672.17;
                echo "<script>alert('$amount'+' South Korean Won')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Brazil")
            {
                $amount = $amount*6.12;
                echo "<script>alert('$amount'+' Brazilian Real')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Russia")
            {
                $amount = $amount*99.89;
                echo "<script>alert('$amount'+' Russian Ruble')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="South Africa")
            {
                $amount = $amount*23.83;
                echo "<script>alert('$amount'+' South African Rand')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Saudi Arabia ")
            {
                $amount = $amount*4.70;
                echo "<script>alert('$amount'+' Saudi Riyal')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="uae")
            {
                $amount = $amount*4.60;
                echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Turkey")
            {
                $amount = $amount*24.65;
                echo "<script>alert('$amount'+' Turkish Lira')</script>";
            }
            if($cur1=="United Kingdom"&&$cur2=="Egypt")
            {
                $amount = $amount*38.70;
                echo "<script>alert('$amount'+' Egyptian Pound')</script>";
            }  
            if($cur1=="United Kingdom"&&$cur2=="Nigeria")
            {
                $amount = $amount*576.66;
                echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
            }
            //--------------------------SWITZERLAND--------------------------//
            if($cur1=="Switzerland"&&$cur2=="usa")
            {
                $amount = $amount*1.12;
                echo "<script>alert('$amount'+' US Dollar')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="india")
            {
                $amount = $amount*91.90;
                echo "<script>alert('$amount'+' Rupee')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Canada")
            {
                $amount = $amount*1.50;
                echo "<script>alert('$amount'+' Canadian Dollar')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Mexico")
            {
                $amount = $amount*19.51;
                echo "<script>alert('$amount'+' Mexican Peso')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="European")
            {
                $amount = $amount*1.03;
                echo "<script>alert('$amount'+' Euro')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="United Kingdom")
            {
                $amount = $amount*0.89;
                echo "<script>alert('$amount'+' Pound Sterling')</script>";
            }
           
            if($cur1=="Switzerland"&&$cur2=="Japan")
            {
                $amount = $amount*151.91;
                echo "<script>alert('$amount'+' Japanese Yen')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="China")
            {
                $amount = $amount*7.77;
                echo "<script>alert('$amount'+' Renminbi')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Australia")
            {
                $amount = $amount*1.67;
                echo "<script>alert('$amount'+' Australian Dollar')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="New Zealand")
            {
                $amount = $amount*1.79;
                echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="South Korea")
            {
                $amount = $amount*1491.53;
                echo "<script>alert('$amount'+' South Korean Won')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Brazil")
            {
                $amount = $amount*5.46;
                echo "<script>alert('$amount'+' Brazilian Real')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Russia")
            {
                $amount = $amount*89.10;
                echo "<script>alert('$amount'+' Russian Ruble')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="South Africa")
            {
                $amount = $amount*2127;
                echo "<script>alert('$amount'+' South African Rand')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Saudi Arabia ")
            {
                $amount = $amount*419;
                echo "<script>alert('$amount'+' Saudi Riyal')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="uae")
            {
                $amount = $amount*4.10;
                echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Turkey")
            {
                $amount = $amount*22.00;
                echo "<script>alert('$amount'+' Turkish Lira')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Egypt")
            {
                $amount = $amount*34.53;
                echo "<script>alert('$amount'+' Egyptian Pound')</script>";
            }
            if($cur1=="Switzerland"&&$cur2=="Nigeria")
            {
                $amount = $amount*514.50;
                echo "<script>alert('$amount'+' Nigerian Naira.')</script>";
            }
            //-------------------JAPAN-------------------------//
            if($cur1=="Japan"&&$cur2=="usa")
            {
                $amount = $amount*0.0073;
                echo "<script>alert('$amount'+' US Dollar')</script>";
            }
            if($cur1=="Japan"&&$cur2=="india")
            {
                $amount = $amount*0.60;
                echo "<script>alert('$amount'+' Rupee')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Canada")
            {
                $amount = $amount*0.0099;
                echo "<script>alert('$amount'+' Canadian Dollar')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Mexico")
            {
                $amount = $amount*0.13;
                echo "<script>alert('$amount'+' Mexican Peso')</script>";
            }
            if($cur1=="Japan"&&$cur2=="European")
            {
                $amount = $amount*0.0068;
                echo "<script>alert('$amount'+' Euro')</script>";
            }
            if($cur1=="Japan"&&$cur2=="United Kingdom")
            {
                $amount = $amount*0.0059;
                echo "<script>alert('$amount'+' Pound Sterling')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Switzerland")
            {
                $amount = $amount*0.0066;
                echo "<script>alert('$amount'+' Swiss Franc')</script>";
            }
         
            if($cur1=="Japan"&&$cur2=="China")
            {
                $amount = $amount*0.051;
                echo "<script>alert('$amount'+' Renminbi')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Australia")
            {
                $amount = $amount*0.011;
                echo "<script>alert('$amount'+' Australian Dollar')</script>";
            }
            if($cur1=="Japan"&&$cur2=="New Zealand")
            {
                $amount = $amount*0.012;
                echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
            }
            if($cur1=="Japan"&&$cur2=="South Korea")
            {
                $amount = $amount*9.82;
                echo "<script>alert('$amount'+' South Korean Won')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Brazil")
            {
                $amount = $amount*0.036;
                echo "<script>alert('$amount'+' Brazilian Real')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Russia")
            {
                $amount = $amount*0.59;
                echo "<script>alert('$amount'+' Russian Ruble')</script>";
            }
            if($cur1=="Japan"&&$cur2=="South Africa")
            {
                $amount = $amount*0.14;
                echo "<script>alert('$amount'+' South African Rand')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Saudi Arabia ")
            {
                $amount = $amount*0.028;
                echo "<script>alert('$amount'+' Saudi Riyal')</script>";
            }
            if($cur1=="Japan"&&$cur2=="uae")
            {
                $amount = $amount*0.027;
                echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Turkey")
            {
                $amount = $amount*0.14;
                echo "<script>alert('$amount'+' Turkish Lira')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Egypt")
            {
                $amount = $amount*0.23;
                echo "<script>alert('$amount'+' Egyptian Pound')</script>";
            }
            if($cur1=="Japan"&&$cur2=="Nigeria")
            {
                $amount = $amount*3.39;
                echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
            }
//----------------------------CHINA------------------------------------//
if($cur1=="China"&&$cur2=="usa")
{
    $amount = $amount*0.14;
    echo "<script>alert('$amount'+' US Dollar')</script>";
}
if($cur1=="China"&&$cur2=="india")
{
    $amount = $amount*11.82;
    echo "<script>alert('$amount'+' Rupee')</script>";
}
if($cur1=="China"&&$cur2=="Canada")
{
    $amount = $amount*0.19;
    echo "<script>alert('$amount'+' Canadian Dollar')</script>";
}
if($cur1=="China"&&$cur2=="Mexico")
{
    $amount = $amount*2.54;
    echo "<script>alert('$amount'+' Mexican Peso')</script>";
}
if($cur1=="China"&&$cur2=="European")
{
    $amount = $amount*0.13;
    echo "<script>alert('$amount'+' Euro')</script>";
}
if($cur1=="China"&&$cur2=="United Kingdom")
{
    $amount = $amount*0.11;
    echo "<script>alert('$amount'+' Pound Sterling')</script>";
}
if($cur1=="China"&&$cur2=="Switzerland")
{
    $amount = $amount*0.13;
    echo "<script>alert('$amount'+' Swiss Franc')</script>";
}
if($cur1=="China"&&$cur2=="Japan")
{
    $amount = $amount*19.69;
    echo "<script>alert('$amount'+' Japanese Yen')</script>";
}

if($cur1=="China"&&$cur2=="Australia")
{$amount = $amount*0.21;
    echo "<script>alert('$amount'+' Australian Dollar')</script>";
}
if($cur1=="China"&&$cur2=="New Zealand")
{
    $amount = $amount*0.25;
    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
}
if($cur1=="China"&&$cur2=="South Korea")
{
    $amount = $amount*189.11;
    echo "<script>alert('$amount'+' South Korean Won')</script>";
}
if($cur1=="China"&&$cur2=="Brazil")
{
    $amount = $amount*0.71;
    echo "<script>alert('$amount'+' Brazilian Real')</script>";
}
if($cur1=="China"&&$cur2=="Russia")
{
    $amount = $amount*11.49;
    echo "<script>alert('$amount'+' Russian Ruble')</script>";
}
if($cur1=="China"&&$cur2=="South Africa")
{
    $amount = $amount*2.78;
    echo "<script>alert('$amount'+' South African Rand')</script>";
}
if($cur1=="China"&&$cur2=="Saudi Arabia ")
{
    $amount = $amount*0.54;
    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
}
if($cur1=="China"&&$cur2=="uae")
{
    $amount = $amount*0.52;
    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
}
if($cur1=="China"&&$cur2=="Turkey")
{
    $amount = $amount*2.83;
    echo "<script>alert('$amount'+' Turkish Lira')</script>";
}
if($cur1=="China"&&$cur2=="Egypt")
{
    $amount = $amount*4.40;
    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
}
if($cur1=="China"&&$cur2=="Nigeria")
{
    $amount = $amount*65.79;
    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
}
//-----------------------AUSTRALIA-----------------//
if($cur1=="Australia"&&$cur2=="usa")
{
    $amount = $amount*0.66;
    echo "<script>alert('$amount'+' US Dollar')</script>";
}
if($cur1=="Australia"&&$cur2=="india")
{
    $amount = $amount*55.06;
    echo "<script>alert('$amount'+' Rupee')</script>";
}
if($cur1=="Australia"&&$cur2=="Canada")
{
    $amount = $amount*0.90;
    echo "<script>alert('$amount'+' Canadian Dollar')</script>";
}
if($cur1=="Australia"&&$cur2=="Mexico")
{
    $amount = $amount*0.21;
    echo "<script>alert('$amount'+' Mexican Peso')</script>";
}
if($cur1=="Australia"&&$cur2=="European")
{
    $amount = $amount*0.61;
    echo "<script>alert('$amount'+' Euro')</script>";
}
if($cur1=="Australia"&&$cur2=="United Kingdom")
{
    $amount = $amount*0.53;
    echo "<script>alert('$amount'+' Pound Sterling')</script>";
}
if($cur1=="Australia"&&$cur2=="Switzerland")
{
    $amount = $amount*0.60;
    echo "<script>alert('$amount'+' Swiss Franc')</script>";
}
if($cur1=="Australia"&&$cur2=="Japan")
{
    $amount = $amount*91.78;
    echo "<script>alert('$amount'+' Japanese Yen')</script>";
}
if($cur1=="Australia"&&$cur2=="China")
{
    $amount = $amount*4.66;
    echo "<script>alert('$amount'+' Renminbi')</script>";
}

if($cur1=="Australia"&&$cur2=="New Zealand")
{
    $amount = $amount*1.06;
    echo "<script>alert('$amount'+ ' New Zealand Dollar')</script>";
}
if($cur1=="Australia"&&$cur2=="South Korea")
{
    $amount = $amount*881.39;
    echo "<script>alert('$amount'+' South Korean Won')</script>";
}
if($cur1=="Australia"&&$cur2=="Brazil")
{
    $amount = $amount*3.32;
    echo "<script>alert('$amount'+' Brazilian Real')</script>";
}
if($cur1=="Australia"&&$cur2=="Russia")
{
    $amount = $amount*53.17;
    echo "<script>alert('$amount'+' Russian Ruble')</script>";
}
if($cur1=="Australia"&&$cur2=="South Africa")
{
    $amount = $amount*12.93;
    echo "<script>alert('$amount'+' South African Rand')</script>";
}
if($cur1=="Australia"&&$cur2=="Saudi Arabia ")
{
    $amount = $amount*2.49;
    echo "<script>alert('$amount'+' Saudi Riyal')</script>";
}
if($cur1=="Australia"&&$cur2=="uae")
{
    $amount = $amount*2.44;
    echo "<script>alert('$amount'+' United Arab Emirates Dirham')</script>";
}
if($cur1=="Australia"&&$cur2=="Turkey")
{
    $amount = $amount*13.17;
    echo "<script>alert('$amount'+' Turkish Lira')</script>";
}
if($cur1=="Australia"&&$cur2=="Egypt")
{
    $amount = $amount*20.50;
    echo "<script>alert('$amount'+' Egyptian Pound')</script>";
}
if($cur1=="Australia"&&$cur2=="Nigeria")
{
    $amount = $amount*306.42;
    echo "<script>alert('$amount'+' 2Nigerian Naira.')</script>";
}

            }


?>
           <p id="output_amount" class="output_amount" style="width: 100px;height: 40px;color: black;">
        <?php
        
        echo $amount;
        ?></p>
            

        </div>
    </div>
    </div>
</form>

    <div class="footer">
        <br>

    </div>
</body>

<script src="index.js"></script>
</html>
