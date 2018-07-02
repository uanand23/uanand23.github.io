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
            $qry="select p_id,brand,model,price,image from $_GET[nm]";
            
            $resultset=mysqli_query($link,$qry);
            while($r=mysqli_fetch_row($resultset))
            {
                
               echo "<div class='items'>
                    <a href='features.php?nm=$_GET[nm]&id=$r[0]&del=0'><img src='$r[4]' alt='' class='thumbnail'/>
                        <div class='caption''>
                            <h2>$r[1] $r[2]</h2>
                             <h2>$r[3]</h2>
                           
                        </div>
                        
                    </a>
                </div>";
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
