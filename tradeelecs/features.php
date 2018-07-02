<!DOCTYPE html>
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
              //alert(window.location.href);
                window.location=val+".php?loc="+window.location.href;
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
                    { echo "<option>choose</option>
                    <option>signin</option>";}
                    ?>
                    <option>cart</option>
                    <option>order</option>
                    <option>Logout</option>
                     </select>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="container">
            <?php
            $link=mysqli_connect("localhost","root","","tradeelecs");
            $qry="select * from $_GET[nm] where p_id='$_GET[id]'";
            $resultset=mysqli_query($link,$qry);
            $arr=null;
            while($r=mysqli_fetch_assoc($resultset))
            {
                
                $arr=$r;
               echo "<div class='items'>
                    <img src='$r[image]' alt='' class='thumbnail'/>
                       
                </div>";
                echo "<center>";
                echo "<b><font color='navy' size='5'>$r[brand] $r[model] ($r[color]) ($r[other_details] )<br><br> $r[price]<br><br></font></b>";
                //$str=file("CATEGORY1.txt");
                $key=array_keys($r);
              
                    echo strtoupper("<b><big><font color='red'>key features</font><br><br>".$key[6]."::".$r[$key[6]]."<br>".$key[7]."::".$r[$key[7]]."<br>".$key[8]."::".$r[$key[8]]."<br>".$key[9]."::".$r[$key[9]]."<br>".$key[10]."::".$r[$key[10]]."</big></b><br><br>");
                echo "<a href='details.php?nm=$_GET[nm]&id=$_GET[id]&del=0'><font color='green'>ALL DETAILS</font></a><br><br>";
                echo "<a href='addcart.php?nm=$_GET[nm]&id=$_GET[id]'><font color='green'>ADD TO CART</font></a><br><br><a href='addorder.php?nm=$_GET[nm]&id=$_GET[id]'><font color='green'>BUY NOW</font></a>";
                echo "</center>";
                
            }
                if($_GET['del']==1)
                {
                echo "<br><br><table border ='2' align='center'><tr><th colspan='2'>DETAILS</th></tr>";
               
                $ar=array_keys($arr);
                foreach($ar as $a)
                {
                        if(!($a=='c_id'||$a=='m_id'||$a=='add_date'||$a=='image'||$a=='quantity_available'))
                       echo "<tr><td>$a</td><td>$arr[$a]</td></tr>";
                }
                echo "</table>";
                }
                ?>
                
                        
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <p><center>Copyright © TradeElecs. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
            </div>
        </div>
        </form>
    </body>
</html>




