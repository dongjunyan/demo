<?php
header('Content-type:text/html;charset=utf-8');
if(isset($_POST['submit'])){
    header('Location:order.php');
}
?>

<html>
    <head>
        <title>我的购物车我做主</title>
        <meta charset='utf-8'>
        <style type="text/css">
            *{
            	margin:0;
            	padding:0;
            }
            body{
            	text-align:center;
            }
            div#wrap{
            	margin-top:5%;
            	width:80%;
            	margin-left:10%;
            	border:1px solid #aaa;
            }
            img{
            	width:200px;
            	height:200px;
            }
            div{
            	width:210px;
            	text-align:center;
            	float:left;
            }
            #submit{
            	clear:both;
            	text-align:center;	
            }
            #submit input{
            	font-size:26px;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <h1 align="center">请选择商品</h1>
            <form method="post" action="order.php">
            <div>
                <img src="images/apple.jpg" />
                <input type="checkbox" value="apple" name=things[] />苹果一斤（￥：5.88）
            </div>
            <div>
                <img src="images/bananer.jpg" />
                <input type="checkbox" value="bananer" name=things[]/>香蕉一把（￥：3.69）
            </div>
            <div>
                <img src="images/phone.jpg" />
                <input type="checkbox" value="phone" name=things[]/>手机一部（￥：6088）
            </div>
            <div>
                <img src="images/computer.jpg" />
                <input type="checkbox" value="computer" name=things[]/>电脑一台（￥：4999）
            </div>
             <div>
                <img src="images/scarf.jpg" />
                <input type="checkbox" value="scarf" name=things[]/>围巾一条（￥：299）
            </div>
            <br />
            <p id="submit">
            <input type="submit"  value="去结账" />
            </p>
            </form>
        </div>
    </body>
</html>