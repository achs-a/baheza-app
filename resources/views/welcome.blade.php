
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Baheza APP</title>
   @vite('resources/css/app.css')
</head>
<body>
    <div class="bckground">
    <header>
        <div class="container">
           <img src="{{asset('logo.webp')}}" alt=" logo of baheza" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About US</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a href="#" class="btn-connect">SIGN</a>
        </div>
    </header>
    <main>
        <div class="profile">
            {{-- <img src="w.jpeg" alt="consolee"> --}}
            <h2> <span class="highlight-gradient"> BAHEZA General service</span><br>our aim is to  protect our environment.</h2>
            <p>
                At Baheza General Service, we are committed to delivering top-quality waste 
                collection services while fostering a culture of environmental responsibility. 
                Our mission is to make waste management simple and accessible for everyone, 
                helping to reduce pollution and improve the quality of life in our communities.
            </p>
            <div class="buttons">
                <a href="#" class="btn-connect">Sign in</a>
                <a href="{{route('register')}}" class="btn-resume">Sign up</a>
            </div>
        </div>
    </div>
        <section class="about-me">
            <h2>About US</h2>
            </section>
            <div class="about-container">
                <img src="{{ asset('image/download (3).jpeg')}}" alt="Sabo">
                <div class="about-details">
                    <p>Welcome to Baheza General Service, your trusted partner in ensuring a cleaner
                         and healthier community. We are dedicated to providing efficient and reliable 
                         garbage collection services to households and businesses across the region.
                          Our mission is to promote sustainable waste management practices, keeping our 
                          environment clean and safe for future generations.</p>
                    <p>At Baheza General Service, we are committed to delivering top-quality waste collection services while fostering a
                         culture of environmental responsibility. Our mission is to make waste management.</p>
                    <div class="skills">
                        <div class="skill">
                            <span>Recycling </span>
                            <div class="skill-bar">
                                <div class="skill-progress html-css"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span> Street Cleaning </span>
                            <div class="skill-bar">
                                <div class="skill-progress react-js"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Event Cleanup</span>
                            <div class="skill-bar">
                                <div class="skill-progress javascript"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Pest control</span>
                            <div class="skill-bar">
                                <div class="skill-progress next-js"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statistics">
                <div class="stat">
                    <span>10+</span>
                    <p>Years of Experience</p>
                </div>
                {{-- <div class="stat">
                    <span>90+</span>
                    <p>Projects Completed</p>
                </div> --}}
                <div class="stat">
                    <span>15+</span>
                    <p>Happy Clients</p>
                </div>
            </div>
        </section>
        <section class="services">
            <h2>My Services</h2>
            </section>
            <div class="services-container">
                <div class="service-box">
                    <h3>01</h3>
                    <h4> Recycling Services</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
                <div class="service-box">
                    <h3>02</h3>
                    <h4>Street Cleaning and Maintenance</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
                <div class="service-box">
                    <h3>03</h3>
                    <h4>Event Cleanup Services</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
                <div class="service-box">
                    <h3>04</h3>
                    <h4>Pest Control</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
                <div class="service-box">
                    <h3>05</h3>
                    <h4>Tree and Landscape Maintenance</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
                <div class="service-box">
                    <h3>06</h3>
                    <h4>Composting Services</h4>
                    <p>Web development is the process of building, programming...</p>
                    <a href="#">Read more →</a>
                </div>
            </div>
        </section>
        <h2 class="latest-work">My Latest Work</h2>
        <div class="work-gallery">
            <img src="{{ asset('image/download (1).jpeg')}}" alt="Sabo">
            <img src="{{ asset('image/download (2).jpeg')}}" alt="Sabo">
            <img src="{{ asset('image/download (3).jpeg')}}" alt="Sabo">
            <img src="{{ asset('image/download (4).jpeg')}}" alt="Sabo">
            <img src="{{ asset('image/download (5).jpeg')}}" alt="Sabo">
            <img src="{{ asset('image/download.jpeg')}}" alt="Sabo">
        </div>
    </section>

    <section>
        <div class="left">
            <h2>Get in touch</h2>
            <p>Let's talk</p>
            <p>we are currently available clean your house and event, so feel free to send us
                a message about anything that you want me to work on. You can contact 
               or visit us on email anytime .</p>
            <div class="contact-details">
                <p>baheza.g.s@gmail.com</p>
                <p>+250 788 578 878</p>
                <p>Kigali, Gikondo</p>
            </div>
        </div>
        <div class="right">
            <h1>REGISTER HERE &DownArrow;</h1>
            <form id="myForm">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
           <textarea name="text" id="msg" cols="30" rows="10" placeholder="HOW CAN I HELP YOU"></textarea>
                <button type="submit">Submit now</button>
            </form>
        </div>
    </section>
</main>

<footer>
    <div class="footer">
        <p>BAHEZA</p>
        <p>Give some feedback about our service and employee</p>
        <div class="subscribe">
            <input type="text" placeholder="Rate us ">
            <button type="button">Feedback</button>
        </div>
        <hr>
        <div class="footer-links">
            <p>&copy; 2023 Alex Bennett. All rights reserved.</p>
            <p>Terms of Services</p>
            <p>Privacy Policy</p>
            <p>Connect with me</p>
        </div>
    </div>
</footer>

   
</body>
