
<html>
    <head>
        <title>Hey Its Jimmy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styler.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
                };
        //        document.getElementById("close").onclick = function(){
        //            $('#modal').fadeOut(350);
         //       };
                $(document).on('click',"#close", function(){
                    $('#modal').fadeOut(350);
                });
            };
            function submitEmail(){
                if(document.forms['email'].checkValidity()){
                    $("#contact").html("<p>Thanks for your message!</p><button id='close' type='button' value='close' >Close</button>");
                }
            }
        </script>
        
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a><li>
        </ul>
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
        <div id="modal" class="modal" >            
            <div id="contact" class="contact" style="float:left">
                <form id="email" method="post">
                    <h2 style="font-size:47px;">Contact Me</h2>
                    <p style="font-size:20px; margin-right:445px;">Name</p>
                    <br>
                    <input type="text" name="name" required>
                    <br>
                    <p style="font-size:20px; margin-right:445px;">Email</p>
                    <br>
                    <input type="email" name="email" required>
                    <br>
                    <p style="font-size:20px; margin-right:425px;">Message</p>
                    <br>
                    <textarea rows="15" cols="53" style="font-size:18px;" required></textarea>
                    <br><br>
                    <button type="button" value="submit" onclick="submitEmail()">Submit</button>   
                    <button id="close" type="button" value="close" >Close</button> 
                </form>
            </div>
            
        </div>
        
    </body>
</html>