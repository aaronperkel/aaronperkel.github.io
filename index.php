<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Aaron Perkel</title>
        <meta name="author" content="Aaron Perkel - Personal Site">
        <meta name="description" content="
            Welcome to the personal site of Aaron Perkel. 
            Find projects, information about me, as well as my resume. 
            Moving to aaronperkel.com by 01/01/26.
        ">

        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0">

        <link href="css/custom.css" 
            rel="stylesheet" 
            type="text/css">

        <link href="css/layout-tablet.css" 
            media="(max-width:900px)" 
            rel="stylesheet" 
            type="text/css">

        <link href="css/layout-phone.css" 
            media="(max-width:600px)" 
            rel="stylesheet" 
            type="text/css">
            
        <link rel="apple-touch-icon" sizes="16x16" href="img/apple-touch-icon.png">
        <link rel="icon" href="img/favicon.ico">
    </head>

    <body class="index">

    <header>
    	<h1>Aaron Perkel</h1>
    </header>
	    
    <nav>
        <a href="/">Home</a>
	<a href="about">About</a>
	<a href="resume">Resume</a>
    </nav>
    <hr>    
        <main>
            <section>
                <h2>Home</h2>
                <p>
                    Hello, I am Aaron Perkel, a Computer Science and Mathematics 
                    Senior at the University of Vermont. I am interested in Programming, 
                    IT, and Enterprise Networking.
                </p>
                <p>
                    I currently work as an Enterprise Technology Services Student 
                    Technician at the <a href="https://www.uvm.edu/it/kb/contact/" 
                    target="_blank">UVM Tech Team</a>.
                </p>
                <p>
                    Some of my hobbies include Music, Photography/Film Making, and Aviation.
                </p>
            </section>

            <hr>

            <section>
                <h2>Projects</h2>
                <div class="projectsBox">
                    <div class="imgWrapper" onclick="openPopup('content1')" data-overlay="Blob Kart">
                        <img src="img/img.gif" alt="Blob Kart">
                    </div>
                    <div class="imgWrapper" onclick="openPopup('content2')" data-overlay="Web Site Dev. Final">
						<img src="img/cs1080final.png" alt="Web Site Dev. Final">
					</div>
					<div class="imgWrapper" onclick="openPopup('content3')" data-overlay="Utility Manager">
						<img src="img/utility.gif" alt="Utility Manager">
					</div>
					<div class="imgWrapper" onclick="openPopup('content4')" data-overlay="DormKit">
						<img src="img/dormkit.JPG" alt="DormKit">
					</div>
					<div class="imgWrapper" onclick="openPopup('content5')" data-overlay="Custom PCB">
						<img src="img/pcb.png" alt="Custom PCB">
					</div>
					<div class="imgWrapper" onclick="openPopup('content6')" data-overlay="Lights Out">
						<img src="img/lightsout.gif" alt="Lights Out">
					</div>
                    <div class="imgWrapper" onclick="openPopup('content7')" data-overlay="Magazine Feature">
                        <img src="img/feature.png" alt="Magazine Feature">
                    </div>
                    <div class="imgWrapper" onclick="openPopup('content8')" data-overlay="Room Status Sign">
                        <img src="img/display.png" alt="Room Status Sign">
                    </div>
                </div>
                <div id="popup" class="popup" onclick="closePopup(event)">
					<div class="popupStack">
						<span class="close" onclick="closePopup()">&times;</span>
						<img id="popup-img" class="popup-img">
						<div id="popup-content" class="popup-content"></div>
					</div>
				</div>
            </section>

            <hr>

            <section>
                <h2>Contact Me</h2>
                <p>
                    Email: <a href="mailto:me@aaronperkel.com">me@aaronperkel.com</a> | 
                    Phone: <a href="tel:4782628935">478.262.8935</a>
                </p>
            </section>

            <hr>

            <section>
                <h2>Socials</h2>
                <div class="socials noUnderline">
                    <a href="https://github.com/aaronperkel" target="_blank">
                        <img src="img/github-mark.png" alt="GitHub" width="45">
                    </a> 
                    <a href="https://linkedin.com/in/aaronperkel" target="_blank">
                        <img src="img/LI-In-Bug.png" alt="LinkedIn" width="50">
                    </a> 
                    <a href="https://youtube.com/@aaronperkel" target="_blank">
                        <img src="img/youtube.png" alt="YouTube" width="45">
                    </a> 
                    <a href="https://facebook.com/aaroncperkel" target="_blank">
                        <img src="img/facebook.svg" alt="Facebook" width="45">
                    </a> 
                    <a href="https://instagram.com/aaronperkel" target="_blank">
                        <img src="img/instagram.svg" alt="Instagram" width="45">
                    </a>
				</div>
            </section>
        </main>
        <?php include 'footer.php'; ?>   
