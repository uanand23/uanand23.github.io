

<html>
    <head>
        <title>TradeElecs</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
        function selec(val)
        {
            
            if(val.localeCompare("choose")!=0)
            {
                window.location=val+".php?loc="+"index1.php";
            }
            
        }   
        </script>
    </head>
    <body>
    <form>
        <div class="header">
            <div class="innner-header">
                <div class="logo">
                    <a href="#">  TradeElecs</a>
                </div>
                <div class="header-link">
                    <select name="sel" onchange="selec(this.value)">;
                    <?php
                    session_start();
                     if(isset($_SESSION['user_id']))
                    {
                        echo "<option>$_SESSION[user_id]</option>";
                    }
                    else
                    { header("location:signin.php");}
                    ?>
                    <option>cart</option>
                    <option>order</option>
                    <option>Logout</option>
                     </select>
                </div>
            </div>
        </div>
        <hr color="green" size="10"/> <center><font color="maroon" size="5"> YOUR ORDER </font></center> <hr color="green" size="10"/>
        
        
            <?php
            $link=mysqli_connect("localhost","root","","tradeelecs");
            
            $qry="select * from orderplace NATURAL JOIN category where Email='$_SESSION[user_id]'";
            $resultset=mysqli_query($link,$qry);
            while($r=mysqli_fetch_assoc($resultset))
            {
                echo "<div class='content'>
            <div class='container'>";
                $link=mysqli_connect("localhost","root","","tradeelecs");
                $qry1="select brand,model,price,image,color from $r[c_type] where p_id='$r[p_id]'";
                $resultset1=mysqli_query($link,$qry1);
                while($r1=mysqli_fetch_assoc($resultset1))
                {
                    
                    
                    echo "<div class='items'>
                    <img src='$r1[image]' alt='' class='thumbnail'/>
                       
                </div>";
                echo "<center>";
                echo "<b><font color='navy' size='5'>$r1[brand] $r1[model] ($r1[color]))<br><br> $r1[price]<br><br></font></b>";
               echo "Quantity ::$r[quantity]";
                 echo "<b>Delivery Address::<br><font color='black' size='4'>'$r[name]'<br>'$r[local],$r[city]<br>$r[district],$r[state]<br>$r[pin]<br>$r[mobile]<br>$r[delivery_option]<br></font></b>";
                echo "<input type='submit' name='cancel' value='Cancel order'>";
                echo "</center>";
               
                    
                  echo " </div></div>";  
                     echo "<hr color='red' size='10'/>";
                    
                }
            }  
             ?>         
           
        
        
        
        <div class="footer">
            <div class="container">
                <p><center>Copyright © TradeElecs. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
            </div>
        </div>
        </form>
    </body>
</html>