
<!DOCTYPE html>
<html style="user-select: none;">
    <head>
        <title>Michal Vrablic</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header>
            <div>
                <a href="login.php" style="text-decoration: none;">Login</a>
            </div>
            <div>
                <h1 style="text-align: center; font-size: 3rem;" class="prime-name">
                    <div style="margin-left: -6rem;">
                        Michal
                    </div>
                    <div style="margin-left: 7rem;">
                        Vrablic
                    </div>
                </h1>
                
            </div>

        </header>
        <main>
            <div>
                <div class="About-me-page">
                    <img src="images/abtme.jpg" alt="Your Image" class="my-personal-image">
                    <div id="0001" class="abt1">
                        <div class="headers">
                            <h1>About me</h1>
                        </div>
                        <div>
                            <div class="text">
                                <p style="user-select: none;">
                                    I am a dedicated and ambitious student currently attending <a href="https://zochova.sk/" target="_blank">SPSE Zochova.</a> With a strong work ethic and a passion for learning. 
                                    I am committed to achieving my academic and personal goals.I take pride in my ability to tackle challenges head-on and continuously improve my skills.
                                     My hardworking nature has allowed me to excel in my studies and engage in extracurricular activities that broaden my horizons. I am always eager to take on new opportunities and expand my knowledge.
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div id="0002">
                <div>
                    <div class="headers">
                        <h1>My Skills</h1>
                    </div>
                </div>
                <div>
                    <div style="display: flex; flex-direction:column;">
                        <div>
                            <img src="images/java.png" class="skill-img">
                        </div>

                        <div class="main-java">
                            <div class="java">
                                40%
                            </div>
                        </div>
                        <div>
                            <img src="images/html.png" class="skill-img">
                        </div>
                        <div class="main-html">
                            <div class="html">
                                65%
                            </div>
                        </div>
                        <div>
                            <img src="images/css-3.png" class="skill-img">
                        </div>
                        <div class="main-css">
                            <div class="css">
                                50%
                            </div>
                        </div>
                        <div>
                            <img src="images/python.png" class="skill-img">
                        </div>
                        <div class="main-python">
                            <div class="python">
                                60%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <h1>My Projects</h1>
                    </div>
                </div>
            </div>
            <div>
                <div class="contact_me_main">
                    <div class="contact_me_header">
                        <h1>Contact me</h1>
                    </div>
                    <div>
                        <a target="_blank" href="https://github.com/erixko"><img class="contact-me-images" src="images/github.png"></a>
                        <a target="_blank" href="https://www.instagram.com/taric.erixko"><img class="contact-me-images" src="images/instagram.png"></a>
                        <a><img class="contact-me-images" src="images/gmail.png" id="email"></a>
                        
                        <script>
                            document.getElementById('email').addEventListener('click', function() {
                              var textToCopy = 'michalvrablic01@gmail.com';

                              var tempTextArea = document.createElement('textarea');
                              tempTextArea.value = textToCopy;
                              document.body.appendChild(tempTextArea);
                        
                              tempTextArea.select();
                              tempTextArea.setSelectionRange(0, 99999); // For mobile devices
                        
                              document.execCommand('copy');
                        

                              document.body.removeChild(tempTextArea);
                        
                              alert('Email copied');
                            });
                        </script>
                        
                        <a><img src="images/discord.png" class="contact-me-images" id="discord"></a>
                        
                        <script>
                            document.getElementById('discord').addEventListener('click', function() {
                              var textToCopy = 'bezdomoveczfilakova';

                              var tempTextArea = document.createElement('textarea');
                              tempTextArea.value = textToCopy;
                              document.body.appendChild(tempTextArea);
                        
                              tempTextArea.select();
                              tempTextArea.setSelectionRange(0, 99999); // For mobile devices
                        
                              document.execCommand('copy');
                        

                              document.body.removeChild(tempTextArea);
                        
                              alert('Discord copied');
                            });
                        </script>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>