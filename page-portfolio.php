<?php 
/**
 * Template Name: Portfolio
 * 
 * Template to display my portfolio.
 */
get_header()
?>

    <!-- Start Main Section -->
    <main class="main-content__home">


    <!-- Start Div For Portrait, Contact, And About Me Sections -->
    <div class="large-layout">

      <!-- Start Portrait Section -->
      <section id="portrait">
        <div class="portrait">
          <img src="<?php echo get_template_directory_uri() . '/img/portrait-picture.jpg' ?>" alt="Portrait" />
        </div>
      </section>
      <!-- End Portrait Section -->

      <!-- Start Contact Section -->
      <section class="contact-section">
        <h3 class="bar section-heading"><?php _e( 'Contact Me', 'crooked-fall-studios' ) ?></h3>
        <div class="contact-section__contact-info">
          <div class="contact-section__box contact-section__box--box1">
            <?php esc_html_e( 'Email: andrew@crookedfallstudios.com', 'crooked-fall-studios' ); ?>
          </div>
          <div
            class="contact-section__box
      contact-section__box--box2"
          >
            <a href="tel:+9078910303"><?php esc_html_e( 'Phone: (907)-891-0303', 'crooked-fall-studios' ); ?></a>
          </div>
          <div
            class="contact-section__box
      contact-section__box--box3"
          >
            <?php esc_html_e( 'Address: P.O. Box 1024 Moneta, VA 24121', 'crooked-fall-studios' ); ?>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->

      <!-- Start About Section -->
      <section class="about-section">
        <h3 class="bar section-heading"><?php _e( 'About Me', 'crooked-fall-studios' ); ?></h3>
        <div class="about-section__about-info">
          <p>
            <?php esc_html_e( 'Hi, my name is Andrew Duley and I\'m a front end web developer. I currently work with HTML5, CSS3 (including the grid and flex systems), SCSS, WordPress, Javascript, Bootstrap, React.', 'crooked-fall-studios' ); ?>
          </p>
          <br />
          <p>
            <?php _e( 'I am a very laid back person who is just as comfortable working alone as in a group.', 'crooked-fall-studios' ); ?>
          </p>
          <br />
          <p>
            <?php _e( 'At the end of the day, learning is what I ultimately enjoy; and web development offers an environment that allows me to continuously push myself to learn new things', 'crooked-fall-studios.' ); ?>
          </p>
          <br />
          <p>
            <?php _e( 'Apart from web development, I also enjoy 3D modeling and animation, as well as playing the drums and guitar.', 'crooked-fall-studios' ); ?>
          </p>
        </div>
      </section>
      <!-- End About Section -->

      <!-- End Div For Portrait, Contact, And About Me Sections -->
    </div>
    
      <!-- Start Div for Projects Section-->
      <div class="projects-large-layout">

      <!-- Start Projects Section -->
      <section id="projects-section">
        <h3 class="bar section-heading"><?php _e( 'My Projects', 'crooked-fall-studios' ); ?></h3>
        <!-- Project 1 -->
        <div
          class="project-section__project project-section__project--project-1">
          <div class="project-section__info">
            <h3><?php _e( 'Adventure Alaska', 'crooked-fall-studios' ); ?></h3>
            <p>
              <?php _e( 'I made this website for a fictional company set in Homer Alaska. I\'m from Alaska myself and have visited Homer on many occasions. I have implimented the CSS clip-path property for the header and then wrapped it with another div and used filter to add the box-shadow at the bottom of the header. I\'ve also used -webkit-background-clip to add a color gradient to all the h2 elements.', 'crooked-fall-studios' ); ?>
            </p>
            <p>
              <?php _e( 'Very minimal Javascript was used as I wanted to focus mainly on the CSS being used. At the top you can see an animated hamburger button that turns into an X when clicked. The site is fully responsive and the nav bar switches from a horizontal layout at large sized to a vertical layout for small devices.', 'crooked-fall-studios' ); ?>
            </p>
          </div>
          <div class="project-section__btns">
            <div class="project-section__btn project-section__btn--btn1">
              <i class="fab fa-github-square"></i
              ><a
                href="<?php echo esc_url( 'https://github.com/awduley/adventure-alaska', 'crooked-fall-studios' ); ?>"
                target="_blank"
                ><?php _e( 'GitHub code', 'crooked-fall-studios' ); ?></a
              >
            </div>
            <div class="project-section__btn project-section__btn--btn2">
              <i class="fas fa-link"></i
              ><a
                href="<?php echo esc_url( 'https://www.crookedfallstudios.com/dist-adventure-alaska/index.html', 'crooked-fall-studios' ); ?>" target="_blank"
                ><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a
              >
            </div>
          </div>
          <div class="project-section__img">
            <img
              data-tilt
              data-tilt-max="20"
              data-tilt-speed="400"
              data-tilt-gyroscope="true"
              data-tilt-gyroscopeMinAngleX="-20"
              data-tilt-gyroscopeMinAngleX="20"
              data-tilt-gyroscopeMinAngleY="-20"
              data-tilt-gyroscopeMinAngleX="20"
              src="<?php echo get_template_directory_uri() . '/img/adventure-alaska.jpg' ?>"
              alt="Adventure Alaska"
            />
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-section__project project-section__project--project-2">
          <div class="project-section__info">
            <h3><?php _e( 'Random Gradient Generator', 'crooked-fall-studios' ); ?></h3>
            <p>
              <?php _e( 'This is a random background gradient generator that does a couple things. The first line tells you what direction the random gradient is going. The following lines tell the viewer the starting and ending gradient color in hexidecimal format and then converts them to rgb values to be displayed. In addition, the colors of the values themselves match the colors which are being displayed.', 'crooked-fall-studios' ); ?>
            </p>
          </div>
          <div class="project-section__btns">
            <div class="project-section__btn project-section__btn--btn1">
              <i class="fab fa-github-square"></i
              ><a
                href="<?php echo esc_url( 'https://github.com/awduley/background-generator', 'crooked-fall-studios' ); ?>"
                target="_blank"
                ><?php _e( 'GitHub code', 'crooked-fall-studios' ); ?></a
              >
            </div>
            <div class="project-section__btn project-section__btn--btn2">
              <i class="fas fa-link"></i
              ><a
                href="<?php echo esc_url( 'https://www.crookedfallstudios.com/dist-background-generator/index.html', 'crooked-fall-studios' ); ?>"
                target="_blank"
                ><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a
              >
            </div>
          </div>
          <div class="project-section__img">
            <img
              data-tilt
              data-tilt-max="20"
              data-tilt-speed="400"
              data-tilt-gyroscope="true"
              data-tilt-gyroscopeMinAngleX="-20"
              data-tilt-gyroscopeMinAngleX="20"
              data-tilt-gyroscopeMinAngleY="-20"
              data-tilt-gyroscopeMinAngleX="20"
              src="<?php echo get_template_directory_uri() . '/img/background-gradient-generator.jpg' ?>"
              alt="Background Gradient Generator"
            />
          </div>
        </div>

        <!-- Project 3 -->
        <div class="project-section__project project-section__project--project-3">
          <div class="project-section__info">
            <h3><?php esc_html_e( 'Heath\'s Tire And Lube', 'crooked-fall-studios' ); ?></h3>
            <p>
              <?php _e( 'This is a fully responsive website I redid for a client in Moneta, VA. I utilized the BEM methodology in the SCSS. The brushed metal background image in the footer was made using GIMP, and finally, all the files were bundled using the Parcel Bundler.', 'crooked-fall-studios' ); ?>
            </p>
          </div>
          <div class="project-section__btns">
            <div class="project-section__btn project-section__btn--btn2">
              <i class="fas fa-link"></i
              ><a
                href="<?php echo esc_url( 'https://crookedfallstudios.com/dist-heaths-tire-and-lube', 'crooked-fall-studios' ); ?>"
                target="_blank"
                ><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a
              >
            </div>
          </div>
          <div class="project-section__img">
            <img
              data-tilt
              data-tilt-max="20"
              data-tilt-speed="400"
              data-tilt-gyroscope="true"
              data-tilt-gyroscopeMinAngleX="-20"
              data-tilt-gyroscopeMinAngleX="20"
              data-tilt-gyroscopeMinAngleY="-20"
              data-tilt-gyroscopeMinAngleX="20"
              src="<?php echo get_template_directory_uri() . '/img/heaths-tire-and-lube.jpg' ?>"
              alt="Background Gradient Generator"
            />
          </div>
        </div>

        <!-- Project 4 -->
        <div class="project-section__project project-section__project--project-4">
          <div class="project-section__info">
            <h3><?php _e( 'Polyrhythm Drumming Studios', 'crooked-fall-studios' ); ?></h3>
            <p>
              <?php _e( 'This website was built for a fictional company. I used 
              Bootstrap 4 for the design, however I adjusted the \'primary\' and \'secondary\' colors that come default with Bootstrap. It features a carousel towards the bottom of the page as well as a modal for lesson sign up.', 'crooked-fall-studios' ); ?>
            </p>
          </div>
          <div class="project-section__btns">
            <div class="project-section__btn project-section__btn--btn1">
              <i class="fab fa-github-square"></i
              ><a
                href="<?php echo esc_url( 'https://github.com/awduley/polyrhythm-drumming-studios', 'crooked-fall-studios' ); ?>"
                target="_blank"
                ><?php _e( 'GitHub code', 'crooked-fall-studios' ); ?></a
              >
            </div>
            <div class="project-section__btn project-section__btn--btn2">
              <i class="fas fa-link"></i
              ><a
                href="<?php echo esc_url( 'https://www.crookedfallstudios.com/dist-polyrhythm-drumming-studios/index.html', 'crooked-fall-studios' ); ?>" target="_blank"
                ><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a
              >
            </div>
          </div>
          <div class="project-section__img">
            <img
              data-tilt
              data-tilt-max="20"
              data-tilt-speed="400"
              data-tilt-gyroscope="true"
              data-tilt-gyroscopeMinAngleX="-20"
              data-tilt-gyroscopeMinAngleX="20"
              data-tilt-gyroscopeMinAngleY="-20"
              data-tilt-gyroscopeMinAngleX="20"
              src="<?php echo get_template_directory_uri() . '/img/polyrhythm-drumming-studios.jpg' ?>"
              alt="Background Gradient Generator"
            />
          </div>
        </div>

        <!-- Project 5 -->
        <div class="project-section__project project-section__project--project-5">
          <div class="project-section__info">
            <h3><?php _e( 'Mo\'s Silver Lake Charters', 'crooked-fall-studios' ); ?></h3>
            <p>
              <?php _e( 'This website was also built using Bootstrap 4. The header image at the top of the page uses background-attachment: fixed,
              and the navbar at the very top uses Bootstrap\'s scrollspy. In the Silver Lake section I play around with the Flex Box order rules to switch the order depending on the size of the screen.', 'crooked-fall-studios' ); ?>
            </p>
          </div>
          <div class="project-section__btns">
            <!-- <div class="project-section__btn project-section__btn--btn1">
              <i class="fab fa-github-square"></i
              ><a
                href="https://github.com/awduley/mos-silver-lake-charters"
                target="_blank"
                >GitHub code</a
              >
            </div> -->
            <div class="project-section__btn project-section__btn--btn2">
              <i class="fas fa-link"></i
              ><a
                href="<?php echo esc_url( 'https://www.crookedfallstudios.com/dist-mos-silver-lake-charters/index.html', 'crooked-fall-studios' ); ?>" target="_blank"
                ><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a
              >
            </div>
          </div>
          <div class="project-section__img">
            <img
              data-tilt
              data-tilt-max="20"
              data-tilt-speed="400"
              data-tilt-gyroscope="true"
              data-tilt-gyroscopeMinAngleX="-20"
              data-tilt-gyroscopeMinAngleX="20"
              data-tilt-gyroscopeMinAngleY="-20"
              data-tilt-gyroscopeMinAngleX="20"
              src="<?php echo get_template_directory_uri() . '/img/mo\'s-silver-lake-charters.jpg' ?>"
              alt="Background Gradient Generator"
            />
          </div>
        </div>

        <!-- Project 6 -->
        <div class="project-section__project project-section__project--project-6"> 
          <div class="project-section__info"> 
            <h3><?php _e( 'Good Advice Monster', 'crooked-fall-studios' ); ?></h3> 
            <p><?php _e( 'I made this little app with React. Although I would like to start shifting towards using functional components and hooks, I chose to use a couple class based components in this project to manage state.', 'crooked-fall-studios' ); ?>
            </p> 
            <p><?php _e( 'The clock at the top uses state to hold the current time. It is updated every second using setInterval() and then formatted correctly with the toLocaleTimeString() method. In addition, the Advice component uses axios to fetch the advice results from their API. It\'s set to make the API call once with componentDidMount, and then once every minute after with a custom function.', 'crooked-fall-studios' ); ?>
            </p>
          </div> 
          <div class="project-section__btns"> 
            <div class="project-section__btn project-section__btn--btn1"> 
              <i class="fab fa-github-square"></i><a href="<?php echo esc_url( 'https://github.com/awduley/good-advice-monster', 'crooked-fall-studios' ); ?>" 
              target="_blank"><?php _e( 'GitHub code' ); ?></a> 
            </div>
            <div class="project-section__btn project-section__btn--btn2"> 
              <i class="fas fa-link"></i><a href="<?php echo esc_url( 'https://crookedfallstudios.com/build-good-advice-monster', 'crooked-fall-studios' ); ?>" 
            target="_blank"><?php _e( 'Check it out', 'crooked-fall-studios' ); ?></a> 
            </div> 
          </div>
            <div class="project-section__img"> 
              <img data-tilt="" data-tilt-max="20" data-tilt-speed="400" 
              data-tilt-gyroscope="true" data-tilt-gyroscopeMinAngleX="-20" data-tilt-gyroscopeMinAngleY="-20" 
              src="<?php echo get_template_directory_uri() . '/img/good-advice-monster.jpg' ?>" alt="Good Advice Monster"> 
            </div> 
          </div>
        </div>
      </section>
      <!-- End Projects Section -->

      <!-- Credentials Section -->
      <section class="credentials">
        <h3 class="bar section-heading credentials-heading"><?php _e( 'Certificates', 'crooked-fall-studios' ); ?></h2>
        <div class="certificates">
        <div class="certificate certificate-1">
            <a href="<?php echo esc_url( 'https://www.udemy.com/certificate/UC-3279d9d9-e4b5-4cf6-9534-efcae5f24a4d/', 'crooked-fall-studios' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/udemy-cert-wp-theme-development-from-scratch.jpg'; ?>" alt="Udemy WordPress theme development from scratch certificate"></a>
          </div>
          <div class="certificate certificate-2">
            <a href="<?php echo esc_url( 'https://www.freecodecamp.org/certification/fcc21443778-f02b-468f-9848-50b87a9f603a/responsive-web-design', 'crooked-fall-studios' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/fcc-front-end-cert.jpg'; ?>" alt="Free Code Camp front end developer certificate"></a>
          </div>
          <div class="certificate certificate-3">
            <a href="<?php echo esc_url( 'https://www.udemy.com/certificate/UC-063cc418-64cb-489d-883c-0c6cc95c7680/', 'crooked-fall-studios' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/udemy-cert-git-essentials.jpg'; ?>" alt="Udemy Git Essentials certificate"></a>
          </div>
        </div>
        <h3 class="bar section-heading resume-heading">Resume</h3>
        <div class="certificate resume"> 
          <a href="<?php echo esc_url( 'https://crookedfallstudios.com/wp-content/uploads/2021/06/Resume.pdf', 'crooked-fall-studios' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/resume-1.jpg' ?>" alt="Resume for Andrew Duley"></a>
        </div>
      </section>
      <!-- credentials -->

      </div>
      <!-- End Div For Large Wrapper -->

      <!-- Start Footer Section -->
      <!-- <footer class="footer-section">
        <div class="footer-section__footer-info">
          <p>
            Crooked Fall Studios | &copy;
            <span class="footer-section__footer-year"></span> All Rights
            Reserved
          </p>
        </div>
      </footer> -->
      <!-- Start Footer Section -->

    </main>
    <!-- End Main Section -->

    <?php get_footer(); ?>