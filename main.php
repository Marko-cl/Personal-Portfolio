<!doctype html>

<html>

<head>
  <title>Personal Portfolio-Markelo Qosja</title>
  <link rel="icon" href="pics/person.png" />
  <link rel="stylesheet" href="Sections.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<script src="night&day.js"></script>

<body id="body">
  <!-- NAV BAR-->

  <nav id="nav">
    <div class="Name" id="Name"><b>Personal Portfolio</b></div>
    <ul class="nav_links">
      <li>
        <a href="#container1" style="color: darkcyan"><b>Home</b></a>
      </li>
      <li><a href="#container2">Skills</a></li>
      <li><a href="#container3">Projects</a></li>
      <li><a href="#container4">Contact</a></li>
    </ul>
  </nav>
  <!-- SECTION 1-->

  <section class="container1" id="container1">
    <div class="center-main" id="center-main">
      <div class="text-main">
        <h1>Navigating Opportunities with Expertise</h1>
        <br />
        <br />
        <!-- PHP LINE-->
        <p>
          <?php
          $quotes = ["Hello", "Hi", "Welcome"];
          echo $quotes[array_rand($quotes)], "!";

          ?>

        </p>

        <br />
        <p>
          This personal portfolio website highlights my projects, skills, and
          experiences, serving as a professional showcase for potential
          employers or collaborators to review my qualifications and past
          achievements. Explore my journey and connect for opportunities!
        </p>
        <br /><br />
        <p><b>Markelo Qosja</b> - Elbasan, Albania 3001</p>
        <h2 style="text-align: center">
          <b><a href="Aboume.html" style="color: darkcyan; text-decoration: none">More about me</a></b>
        </h2>
      </div>
      <div class="img-main">
        <img src="pics/kelo2.jpg" />
      </div>
    </div>
  </section>

  <!--SEC 2 AND 3 COMBINED-->
  <div class="sec23" id="sec23">
    <!--SECTION 2-->
    <section class="container2" id="container2">
      <div class="main-div">
        <div class="headerdiv">
          <h1 style="
                text-align: center;
                font-size: clamp(0.688rem, 0.001rem + 2.66vw, 2rem);
                color: darkcyan;
                text-shadow: 1px 1px 0px black;
              ">
            SKILLS
          </h1>
        </div>
        <div class="skillsdiv" id="skillsdiv">
          <div class="Proglang">
            <p class="headersk" style="word-spacing: 0px">
              <b>Programming Languages</b>
            </p>
            <p>JavaScript <img src="pics/javascript.png" /></p>
            <p>
              Node.js
              <img src="pics/ndoe.png" style="width: clamp(2.188rem, 0.063rem + 8.25vw, 6.25rem)" />
            </p>
            <p>Git <img src="pics/git.png" /></p>
            <p>C/C++ <img src="pics/c++.png" /></p>
            <p>HTML <img src="pics/html.png" /></p>
            <p>CSS <img src="pics/css.png" /></p>
            <p>GDScript <img src="pics/godot.png" /></p>
            <p>Lua <img src="pics/lua.png" /></p>
          </div>
          <div class="Tech">
            <p class="headersk">
              <b>Technical Skills</b>
            </p>
            <p>Linux-(Ubuntu) <img src="pics/linux.png" /></p>
            <p>Dual-Booting <img src="pics/booting.png" /></p>
            <p>
              Neovim
              <img src="pics/neo.png" style="width: clamp(3.125rem, -0.143rem + 12.69vw, 9.375rem)" />
            </p>
            <p>Virtual-Machines <img src="pics/vmachines.png" /></p>
          </div>
          <div class="Soft">
            <p class="headersk"><b>Soft Skills</b></p>
            <ul>
              <li>Teamwork</li>
              <li>Leadership</li>
              <li>Quick Learner</li>
              <li>Communication</li>
            </ul>
          </div>
          <div class="Others">
            <p class="headersk"><b>Others</b></p>
            <p>
              Highly self-taught and resourceful, skilled at independent
              research and learning new technologies.
            </p>
          </div>
        </div>
      </div>
    </section>
    <hr style="width: 85%; border-color: gray" />
    <!--SECTION 3-->
    <section class="container3" id="container3">
      <div class="Projects">
        <div class="Project">
          <a href="Project1.html">
            <div class="project1"></div>
          </a>

          <h1 style="color: darkcyan">Discord Bot-Economy System</h1>
          <p style="
                font-size: clamp(0.438rem, 0.013rem + 1.65vw, 1.25rem);
                
              ">
            JavaScript, Node.js, discord.js, MongoDB Developed a bot
            implementing a virtual economy with shop, currency, and
            leaderboard. Used AI coding assistants during development
          </p>
        </div>
        <div class="Project">
          <a href="Project2.html">
            <div class="project2"></div>
          </a>

          <h1 style="color: darkcyan">2D Game Prototypes</h1>
          <p style="
                font-size: clamp(0.438rem, 0.013rem + 1.65vw, 1.25rem);
                
              ">
            Experimented with the Godot Engine (GDScript) to create small
            games and learn logic, physics, and UI systems.
          </p>
        </div>
        <div class="Project">
          <a href="Project3.html">
            <div class="project3"></div>
          </a>

          <h1 style="color: darkcyan">Todo app website</h1>
          <p style="
                font-size: clamp(0.438rem, 0.013rem + 1.65vw, 1.25rem);
                
              ">
            Built responsive website using HTML, CSS, and JavaScript.
          </p>
        </div>
      </div>
    </section>
  </div>
  <!--SECTION 4 FOOTER-->
  <section class="container4" id="container4">
    <footer>
      <div class="contactinfo">
        <div class="info1">
          <h1 style="
                color: darkcyan;
                font-size: clamp(0.688rem, 0.001rem + 2.66vw, 2rem);
              ">
            Personal Portfolio
          </h1>
          <p>Markelo Qosja</p>
        </div>
        <div class="info2" id="info2">
          <p>+355 69 373 4331</p>
          <p>markeloqosja20@gmail.com</p>
          <hr />
          <p>Location: Elbasan, Albania</p>
        </div>
        <div class="info3">
          <h1 style="
                color: darkcyan;
                font-size: clamp(0.688rem, 0.001rem + 2.66vw, 2rem);
              ">
            Social Media
          </h1>
          <a href="https://www.instagram.com/markelo_qosja/"><img src="pics/inst.png" /></a>
          <a href="https://github.com/Marko-cl"><img src="pics/github.png" style="
                  height: clamp(0.938rem, -0.043rem + 3.81vw, 2.813rem);
                  width: clamp(0.938rem, -0.043rem + 3.81vw, 2.813rem);
                " /></a>
        </div>
      </div>
      <div class="copyright" style="font-size: clamp(0.313rem, -0.047rem + 1.4vw, 1rem)">
        Copyright &copy;Markelo Qosja
      </div>
    </footer>
  </section>
  <!--LIGHT/DARK TOGGLE ICON-->
  <div id="modes" class="modes" style="display: flex; align-items: center; justify-content: center">
    <img id="toggle" src="pics/moon.png" onclick="toggleModes()" />
  </div>
</body>

</html>