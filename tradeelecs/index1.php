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
        
        function search(g)
        {
            alert("hello");
           // alert(document.frm.txt3.value);
            
            
              //   window.location="search.php?sea="+document.frm.txt3.value;
            
            
        }   
        
        count=0;
function changeImage()
{
    arr=Array("snadeal.png","images (16).jpg","images.png");
    if(count<3)
    {
        document.frm.img1.src=arr[count];
        count++;
       
    }
    else
        {
            count=0;
            document.frm.img1.src=arr[count];
        }
}
function page()
{
    setInterval("changeImage()",2000);
}

        </script>
    </head>
    <body onload="page()">
    <form name="frm">
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
        
        </div>
        <div class="content">
            <div class="banner-image">
            <img src="images (16).jpg" id="img1" width="100%" height="700px"/>
            </div>
            <div class="container">
            <?php
            $link=mysqli_connect("localhost","root","","tradeelecs");
            $qry="select c_type from category";
            $resultset=mysqli_query($link,$qry);
            while($r=mysqli_fetch_row($resultset))
            {
            
               echo "<div class='items'>
                    <a href='product.php?nm=$r[0]'><img src='$r[0].jpg' alt='' class='thumbnail'>
                        <div class='caption''>
                            <h2>$r[0]</h2>
                        </div>
                        
                    </a>
                </div>";
                }
                ?>
                        
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <p><center>Copyright � TradeElecs. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
            </div>
        </div>
        </form>
    </body>
</html>
