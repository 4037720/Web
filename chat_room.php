<script type="text/javascript" language="javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="js/xmpp_connect.js"></script>
<script type="text/javascript"  src="js/strophe.js"></script>


<input type="hidden" id="email"value="<?php echo $_POST['email'];?>">
<input type="hidden" id="password"value="<?php echo $_POST['password'];?>">
<?php
include './include/header.php';
?>

<div  align="left" style="margin-top: 5px">
    <img align="center"src="images/logo.PNG" width="60px" height="60px"><span style="margin-left: 10px">WISE CHATTER</span>
</div>

<div style="width:100%;display:none" id="main_body">

<div align="left" style="margin-top:5px;width:100%">
    
    <div style="float:left;width:20%">
    <table border="0" style="width:100%" cellpadding="10px">
        <tr>
            <td style="width:20%;vertical-align: top">
                <span>Your Member ID to share : 123456 </span>
                <div style="margin-top:2px">Your Points</div>
                <div style="margin-top:2px">+200 PTB</div>
                <a href="#" style="color:white">Account</a> <a href="javascript:" onclick='logout()' style="color:white">Logout</a>
                <div style="width:100%;background-color: #7BBBE7;border-radius:20px;padding-left:5px">Add other member(ID Number)</div>
                <div style="width: 100%;height:350px;background-color:#7BBBE7 ">
                    <table style="width:100%">
                        <caption>Your Contacts(108)</caption>
                        <?php
                        for($i=0;$i<5;$i++)
                        {
                        ?>
                        <tr>
                            <td style="width:100px"><img src="images/Profile_pic.jpg" width="60px" height="60px"></td>
                            <td style="">John</td>
                        
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </td>
           
        </tr>
         </table>
</div> 
<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   


<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   


<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   



<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   



<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   



<div class="chatdiv">

<div class="image_div">
<img class="user_image" alt="" src="images/Profile_pic.jpg" align="bottom">
NITIN
</div>
<div class="show_chat">
</div>
<div class="text_area">

<div class="chat_option"></div>
<div class="chat_text">
<input type="text" class="text_box"><a href="#" class="send_button">Send</a>
</div>

</div>
</div>   






    </div>
    
    </div>
