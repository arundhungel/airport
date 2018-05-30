<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include 'includes/head.php'; ?>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


        <!-- Nav Starts -->
        <section>
            <?php include 'includes/nav.php'; ?>
        </section>
        <!-- Nav Ends -->


        <!-- Slider Starts -->
        <section>
            <div class="banner-section">
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                      <li>
                        <img src="img/slider/plane.png" alt="" />


                      </li>
                      <!-- <li>
                        <img src="img/slider/plane2.jpg" alt="" />
                        

                        
                      </li> -->
                      <li>
                        <img src="img/slider/plane3.jpg" alt="" />
                        
                        
                      </li>
                      <li>

                        <img src="img/slider/plane4.jpg" alt="" />


                        
                      </li>
                    </ul>

                    <div class="weather-show">
                        <div>
                            <h3>Weather Report</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsam possimus suscipit officiis quaerat maxime doloremque, accusamus vel explicabo,
                            </p>
                        </div>
                        <div>
                            <h3>Flight Report</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsam possimus suscipit officiis quaerat maxime doloremque, accusamus vel explicabo, atque natus ullam consectetur neque dicta iure et fuga quia nostrum.

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsum, ratione amet veniam modi ipsam, iure qui
                            </p>
                        </div>
                    </div>

                    <div class="logo">
                        <a href="#">Logo</a>
                    </div>

                </div>       
            </div>
        </section>
        
        <!-- Slider ends -->
        <section>
            <div class="main-section">
                <div class="container">
                   <div class="row">
                       <div class="col-md-6 left-content">
                           <h1>WELCOME TO NEPALGUNJ AIRPORT</h1>
                       </div>
                       <div class="col-md-6 right-content">
                           <p>
                               Nepalgunj Airport is an airport serving Nepalgunj, a municipality in Banke District in Nepal. The airport has been in service since March 15, 1961. In land area it is the second largest airport in Nepal, after TIA. It also has the second greatest number of aircraft and passenger movements.
                           </p>

                           <p>
                                Location : H 12, Manikapur 21900 , Nepalgunj <br>
                                Elevation: 540ft / 165m. <br>
                                Coordinates :  28°06′13″N 081°40′01″E. <br>
                                Runway : 5,007ft / 1,553m <br>
                                Surface : Asphalt
                           </p>
                       </div>
                   </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flight-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">
                                <p class="nb">Time Format in 24-hr</p>

                            <p class="date-today">Date : <?php echo date("d M Y");?></p>
                            <p class="time-now">Time : <?php  date_default_timezone_set("Asia/Kathmandu"); echo date("H:i");?> (Local) / <?php date_default_timezone_set("UTC"); echo date("H:i");?> (UTC)</p>

                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 arrival clearfix">
                                    <h3>
                                        ARRIVALS
                                        <a href="flightinfo.php" class="btn btn-more">View More</a>
                                    </h3>

                                    
                                    <table>
                                        <tr>
                                            <th>Local / UTC Time</th>
                                            <th>Flights</th>
                                            <th>Origin</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>10:45:00 / 02:00:00</td>
                                            <td>CA437</td>
                                            <td>Kathmandu</td>
                                            <td>Landed</td>
                                        </tr>
                                        <tr>
                                            <td>10:55:00</td>
                                            <td>RA240</td>
                                            <td>Biratnagar</td>
                                            <td>Landed</td>
                                        </tr>
                                        <tr>
                                            <td>11:00:00</td>
                                            <td>T7F8JS2</td>
                                            <td>Pokhara</td>
                                            <td>Onway</td>
                                        </tr>
                                        <tr>
                                            <td>11:10:00</td>
                                            <td>F1D52Y5</td>
                                            <td>Lumbini</td>
                                            <td>----</td>
                                        </tr>
                                        <tr>
                                            <td>11:10:00</td>
                                            <td>F1D52Y5</td>
                                            <td>Lumbini</td>
                                            <td>----</td>
                                        </tr>
                                        <tr>
                                            <td>11:10:00</td>
                                            <td>F1D52Y5</td>
                                            <td>Lumbini</td>
                                            <td>----</td>
                                        </tr>
                                    </table>
                                    <!-- <div class="more-btn clearfix"><a href="#" class="btn btn-more">View More</a></div> -->
                                </div>
                                <div class="col-md-6 departure clearfix">
                                    <h3>DEPARTURES
                                        <a href="flightinfo.php" class="btn btn-more">View More</a>
                                        
                                    </h3>
                                    <table>
                                        <tr>
                                            <th>Local / UTC Time</th>
                                            
                                            <th>Flights</th>
                                            <th>Origin</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>10:45:00 / 02:00:00</td>
                                            <td>CA437</td>
                                            <td>Kathmandu</td>
                                            <td>Landed</td>
                                        </tr>
                                        <tr>
                                            <td>10:55:00</td>
                                            <td>RA240</td>
                                            <td>Biratnagar</td>
                                            <td>Landed</td>
                                        </tr>
                                        <tr>
                                            <td>11:00:00</td>
                                            <td>T7F8JS2</td>
                                            <td>Pokhara</td>
                                            <td>Onway</td>
                                        </tr>
                                        <tr>
                                            <td>11:10:00</td>
                                            <td>F1D52Y5</td>
                                            <td>Lumbini</td>
                                            <td>----</td>
                                        </tr><tr>
                                            <td>11:00:00</td>
                                            <td>T7F8JS2</td>
                                            <td>Pokhara</td>
                                            <td>Onway</td>
                                        </tr>
                                        <tr>
                                            <td>11:10:00</td>
                                            <td>F1D52Y5</td>
                                            <td>Lumbini</td>
                                            <td>----</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="news-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 list-section clearfix">
                            <h3>News / Notices
                            </h3>
                            <ul class="listing">
                                <li>
                                    <span>01</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Readmore</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>02</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Readmore</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>03</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Readmore</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>04</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Readmore</a>
                                    </p>
                                </li>
                            </ul>
                            <a href="notice.php" class="btn btn-more">More</a>

                        </div>
                        <!-- <div class="col-md-4 info">
                            <h3>Informations
                            </h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, autem in illo quia ex ut aliquam voluptatem molestias. Aut, culpa vero magnam, iste consequuntur molestias ipsa reprehenderit ad officia at.
                                <a href="#" class="btn btn-more">More</a>

                        </div> -->
                        <div class="col-md-6 list-section blue-section clearfix">
                            <h3>Downloads
                                
                            </h3>

                            <ul class="listing">
                                <li>
                                    <span>01</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Download</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>02</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Download</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>03</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Download</a>
                                    </p>
                                </li>
                                 <li>
                                    <span>04</span>
                                    <p class="clearfix">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore obcaecati dolore saepe voluptatibus, odio incidunt explicabo</a>
                                        <a href="#" class="list-command">Download</a>
                                    </p>
                                </li>
                            </ul>
                            <a href="download.php" class="btn btn-more">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28155.259889991805!2d81.666944!3d28.103611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA2JzEzLjAiTiA4McKwNDAnMDEuMCJF!5e0!3m2!1sen!2s!4v1482471739876" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
        
        <section>   
            <?php include 'includes/footer.php'; ?>
        </section>
        
        

       <?php include 'includes/end-script.php'; ?>
    </body>
</html>
