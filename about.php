
<html>
    <head>
        <title>Hey Its Jimmy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Styler.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <script>
            $(document).ready(function(){
                $("#section").hide();
                $("#portfolio").hide();
                $("#contact").hide();
                $("#links").hide();
                $("#section").fadeIn(1470);
                $("#portfolio").fadeIn(1470);
                $("#contact").fadeIn(1470);               
                $("#links").fadeIn(1470);
            });        
            window.onload = function(){
                document.getElementById("msg").onclick = function(){
                    $('#modal').fadeIn(350);
                    $('topside').fadeIn(350);
                };
                $(document).on('click',"#close", function(){
                    $('#modal').fadeOut(350);
                    $('topside').fadeOut(350);
                });
                $(document).on('click',"#sub_close", function(){
                    $('#modal').fadeOut(350);
                    $("#contact").html("\n\
                        <h2 id='modal_header'>MESSAGE ME</h2>\n\
                        <input type='text' id='form_name' name='name' placeholder='Name' required>\n\
                        <br>\n\
                        <input type='email' id='form_mail' name='email' placeholder='E-Mail' required>\n\
                        <br><br>\n\
                        <textarea id='form_msg' rows='12' cols='53'placeholder='Message' required></textarea>\n\
                        <br>\n\
                        <button id='mail' class='mail' type='button' value='submit' >SEND</button>\n\
                        <a id='close' class='popup-close'  href='#'>X</a>\n\
                        <br>\n\
                       </form>");
                });
            };
            $(document).on('click',"#mail",function(){
                if(document.forms['email'].checkValidity()){
                    var data = {
                        name: $("#form_name").val(),
                        email: $("#form_mail").val(),
                        msg: $("#form_msg").val()
                    };
                }
                $.ajax({
                    type:"POST",
                    url:"email.php",
                    data:data,
                    dataType: 'JSON',
                    success:function(response){      
                        if(!response.success){
                            alert('Failed to send');
                        } else {
                            $("#contact").html("\n\
                                <p>Thanks for your message!</p>\n\
                                <a id='sub_close' class='popup-close' href='#'>X</a>");
                        }
                    }
                })
            });
        </script>
        
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a><li>
        </ul>
        <div class="container-fluid">
            <div id ="section">
            
                <p style="font-size:22px; color:white;">
                    <br>
                   Hey there and thanks for visiting, I'm Jimmy and I am a front-end developer 
                   freshly out of college. My passion is to learn new technology to develop amazing new
                   engage users in new ways. I am always looking to improve as a 
                   developer and reach new heights.
                   <br>
                   I began programming in high school with java as my first language, but it wasn't until
                   I entered my senior year at UC Irvine did I ever even think about pursuing web development.
                   In retrospect, it baffles me that I never even thought about the front end that much 
                   throughout my undergraduate studies.
                   <br>
                   But starting with this website, I hope to fix that. 
                   I've developed this website from scratch using html, CSS, and javascript. Plans are in
                   development for implementing php. 
                   <br><br> 
                </p>
                <br><br>
                <br><br>
            </div>
            <p id="links" style="font-size:22px; color:white; margin: 22px;">           
                <a href = "http://linkedin.com/" ><img src="images/linkedinlogo.png" alt="Linkedin" hspace="2" align="center" width="200" height="45" border="0" ></a>
                <a href = "http://github.com/shJimmyw" ><img src="images/GitHub.png" alt="Github" align="center" width="145" height="48" border="0" ></a>
                <button style="margin-top: 22px;" type="button" id="msg" class="msg">Contact</button>
                <button style="margin-top: 22px;" type="button">Resume</button>
            </p>

           
        </div>
        <div id="modal" class="modal" >
            <div id="contact" class="contact" style="float:left">
                <form id="email" method="post">
               <!--     <div style="position:relative; float:left; left:46px;font-size:43px; font-family:Arial;">Contact Me!</div>
                    <br><br><br>-->
                    <h2 id="modal_header">MESSAGE ME</h2>
                    <input type="text" id="form_name" name="name" placeholder="Name" required>
                    <br>
                    <input type="email" id="form_mail" name="email" placeholder="E-Mail" required>
                    <br><br>
                    <textarea id="form_msg" rows="12" cols="53" placeholder="Message" required></textarea>
                    <br>
                    <button id="mail" class="mail" type="button" value="submit" >SEND</button>   
                    <br>
                    <a id="close" class="popup-close"  href="#">X</a>
            <!--        <button id="close" class="mail" type="button" value="close" >Close</button> -->
                </form>
            </div>
            
        </div>
    </body>
</html>