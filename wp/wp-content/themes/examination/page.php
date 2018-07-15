<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examination
 */

get_header();
?>

    <div class="page">
      <section class="search">
        <div class="wrapper container">
          <div class="text-block">
            <h3 class="title">Find A Franchise Near You</h3>
            <p class="description">Want to speak to us in person? Enter 	your zip code to find the nearest 	franchise.</p>
          </div>
          <form class="input-block">
            <input placeholder="Enter Zip Code"/><a class="search-btn">Submit</a>
          </form>
        </div>
      </section>
      <section class="services">
        <div class="text-block">
          <h3 class="title">What We Offer</h3>
          <h4 class="description">
            From home upgrades to storm restoration, Storm Guard offers 
            a range of services to help you with your home.
          </h4>
        </div>
        <div class="wrapper container">
          <div class="services__item"><a class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/siding.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Roofing</div>
              <div class="description">Your roof protects your home and family. Turn to a professional when it needs replacement – turn to Storm Guard.</div>
            </div>
          </div>
          <div class="services__item"><a class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/paint.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Gutters</div>
              <div class="description">
                Gutters don’t just handle rain – they also 
                catch leaves, twigs, snow and, depending on 
                where you live, ice.
              </div>
            </div>
          </div>
          <div class="services__item"><a class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/siding.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Siding</div>
              <div class="description">We specialize in residential siding installation and commit ourselves to providing the highest quality siding products to our customers.</div>
            </div>
          </div>
          <div class="services__item"><a class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/paint.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Paint</div>
              <div class="description">Painting is the important “finishing touch” on a job well done. Storm Guard’s team of professional painting experts provides a variety of painting services.</div>
            </div>
          </div>
          <div class="services__item"><a class="avatar" href="./windows"><img src="<?php bloginfo('template_directory') ?>/./img/siding.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Windows</div>
              <div class="description">The right windows can make your home – helping frame your home’s overall look and determine your level of energy efficiency.</div>
            </div>
          </div>
          <div class="services__item"><a class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/paint.png"/></a>
            <div class="services__item-textblock">
              <div class="title">Emergency Tarping</div>
              <div class="description">Storm Guard offers emergency tarping services that have helped give homeowners the peace of mind they need until their damage is fully restored.</div>
            </div>
          </div>
          <div class="line container"></div>
        </div><a class="btn">View All Services	</a>
      </section>
      <section class="works">
        <div class="text-block">
          <h3 class="title">Ready To Get Started?</h3>
          <h4 class="description">
            Damage to your home or business from a storm? 
            Looking to replace your old roof or siding? Get Started below!
          </h4>
        </div>
        <div class="wrapper container">
          <div class="works__item">
            <div class="works__item-avatar"><img src="<?php bloginfo('template_directory') ?>/./img/service1.png"/></div>
            <div class="works__item-link">
              <p>Residential Repair</p>
            </div>
          </div>
          <div class="works__item">
            <div class="works__item-avatar"><img src="<?php bloginfo('template_directory') ?>/./img/service2.png"/></div>
            <div class="works__item-link">
              <p>Commercial Repair</p>
            </div>
          </div>
          <div class="works__item">
            <div class="works__item-avatar"><img src="<?php bloginfo('template_directory') ?>/./img/service3.png"/></div>
            <div class="works__item-link">
              <p>Insurance Claims</p>
            </div>
          </div>
        </div>
      </section>
      <section class="feedback">
        <div class="text-block">
          <h3 class="title">See What Clients Have To Say</h3>
        </div>
        <div class="wrapper container">
          <div class="feedback-slider">
            <div class="slide">
              <div class="description">Storm Guard was with us from beginning to end. They found that there was damage to my roof from wind and hail, and Storm Guard worked with the insurance adjuster to verify the claim. They helped us select replacement shingles and closely supervised the actual replacement to assure that the work was done properly. Storm Guard even trimmed tree branches that encroached on the roof. When the job was completed they left our property with no mess and looking great.</div>
              <p class="author">Arthur M.</p>
              <p class="place">Durham-Chapel Hill, NC</p>
            </div>
            <div class="slide">
              <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus gravida neque. Morbi tincidunt quam vel ligula dapibus, quis accumsan dolor consequat. Quisque quis nibh posuere, lobortis odio ut, auctor erat. Morbi et felis id mi rutrum egestas. Etiam tempus justo tellus, quis congue mi convallis dapibus. Maecenas vitae pharetra eros. Praesent placerat dapibus laoreet. Nunc eu semper magna, et aliquet elit. Pellentesque nisl sapien, gravida vitae ipsum eu, scelerisque elementum massa. Cras venenatis vitae odio in pretium. Quisque lacinia eros blandit velit congue, id tincidunt quam ullamcorper.</div>
              <p class="author">John Smith</p>
              <p class="place">Homeowner</p>
            </div>
            <div class="slide">
              <div class="description">They were very professional and knowledgeable. That was an asset in dealing with the insurance adjuster. That part went smoothly as well. The finished product was noticeably appealing from the street view, so to speak. This was actually a pleasant experience, particularly with the personalities involved - particularly Marshall and the owner Carl.</div>
              <p class="author">Michael S.</p>
              <p class="place">New Orleans, LA</p>
            </div>
            <div class="slide">
              <div class="description">I own a small business and I am glad I was able to work with another local company. Storm Guard did a great job and they helped my uncle as well.</div>
              <p class="author">V. Patel</p>
              <p class="place">Appalachia, NC</p>
            </div>
            <div class="slide">
              <div class="description">We had a pleasant experience throughout the entire process of having our roof replaced. Storm Guard made selecting the perfect roof and color easy and the work was not only done quickly but it was done with such great care. They covered and protected all of the landscaping around our home and the crew had a project manager that stayed in contact with me throughout the entire install. I couldn’t be happier with our experience and I would highly recommend Chris, Tim, and their team at Storm Guard.</div>
              <p class="author">Felicia H.</p>
              <p class="place">Apex, NC</p>
            </div>
          </div>
        </div>
      </section>
      <section class="news">
        <div class="text-block">
          <h3 class="title">Latest News</h3>
        </div>
        <div class="wrapper container">
          <div class="news__item">
            <div class="date">
              <p class="month">oct</p>
              <p class="day">19</p>
            </div>
            <div class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/news.png"/></div>
            <div class="news__item-text">
              <div class="title">
                How to Prep 
                Your Home for Fall
              </div>
              <div class="description">
                <p>Well, summer has long since passed and we’re officially in fall. It’s the perfect time to refresh your home and give it a good once over in advance of autumn winds and wintry weather. As the seasons change, so do the needs of our homes, as well as the activities we do in and around them. It’s a good time to perform any necessary or desired maintenance in order to keep your home running smoothly. </p><a class="link">Read More</a>
              </div>
            </div>
            <div class="author">By Author</div>
          </div>
          <div class="news__item">
            <div class="date">
              <p class="month">oct</p>
              <p class="day">19</p>
            </div>
            <div class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/news.png"/></div>
            <div class="news__item-text">
              <div class="title">
                How to Prep 
                Your Home for Fall
              </div>
              <div class="description">
                <p>Well, summer has long since passed and we’re officially in fall. It’s the perfect time to refresh your home and give it a good once over in advance of autumn winds and wintry weather. As the seasons change, so do the needs of our homes, as well as the activities we do in and around them. It’s a good time to perform any necessary or desired maintenance in order to keep your home running smoothly. </p><a class="link">Read More</a>
              </div>
            </div>
            <div class="author">By Author</div>
          </div>
          <div class="news__item">
            <div class="date">
              <p class="month">oct</p>
              <p class="day">19</p>
            </div>
            <div class="avatar"><img src="<?php bloginfo('template_directory') ?>/./img/news.png"/></div>
            <div class="news__item-text">
              <div class="title">
                How to Prep 
                Your Home for Fall
              </div>
              <div class="description">
                <p>Well, summer has long since passed and we’re officially in fall. It’s the perfect time to refresh your home and give it a good once over in advance of autumn winds and wintry weather. As the seasons change, so do the needs of our homes, as well as the activities we do in and around them. It’s a good time to perform any necessary or desired maintenance in order to keep your home running smoothly. </p><a class="link">Read More</a>
              </div>
            </div>
            <div class="author">By Author</div>
          </div>
        </div><a class="btn">View More News</a>
      </section>
      <section class="contact-block">
        <div class="wrapper container">
          <div class="contact">
            <div class="text">
              <div class="title">Contact Us Today</div>
              <div class="description">Need more information about our services or insurance claims? Fill out the form below and representitive will be in touch!</div>
            </div>
            <form>
              <input placeholder="Name"/>
              <input placeholder="Phone Number"/>
              <input placeholder="Zipcode"/>
              <input placeholder="Email"/>
              <label class="selectGeneral" placeholder="What are you contacting us about?">
                <input type="radio" name="OS"/>
                <div>
                  <input type="radio" name="OS" value="Linux" id="list[0]"/>
                  <label for="list[0]">choise 1</label>
                  <input type="radio" name="OS" value="Windows" id="list[1]"/>
                  <label for="list[1]">choise 2</label>
                  <input type="radio" name="OS" value="Other" id="list[2]"/>
                  <label for="list[2]">choise 3</label>
                </div>
              </label>
              <textarea class="comments" placeholder="Comments"></textarea><a class="footer-btn">Submit</a>
            </form>
          </div>
          <div class="gallery">
            <div class="text">
              <div class="title">Check Out Our Past Projects</div>
              <div class="description">Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past.</div>
            </div>
            <div class="box">
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div><a class="footer-btn">View More Photos</a>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php

get_footer();
