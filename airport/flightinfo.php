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

        <section>
            <div class="flight-info" id="flight-info">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 clearfix">
                             <p class="nb">Time Format in 24-hr</p>
                            
                            <p class="date-today">Date : <?php echo date("d M Y");?></p>

                            <p class="time-now">Time : <?php  date_default_timezone_set("Asia/Kathmandu"); echo date("H:i");?> (Local) / <?php date_default_timezone_set("UTC"); echo date("H:i");?> (UTC)</p>


                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 arrival">
                                    <h3>
                                        ARRIVALS
                                        <!-- <a href="#" class="btn btn-more">View More</a> -->
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
                                        <tr>
                                            <td>10:45:00</td>
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
                                    <!-- <div class="more-btn clearfix"><a href="#" class="btn btn-more">View More</a></div> -->
                                </div>
                                <div class="col-md-6 departure">
                                    <h3>DEPARTURES
                                        
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
                                            <td>CA4375TGHJY</td>
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
                                            <td>Cancelled</td>
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
                                        </tr><tr>
                                            <td>10:45:00</td>
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
            <?php include 'includes/footer.php'; ?>
        </section>
        
        

       <?php include 'includes/end-script.php'; ?>
        
    </body>
</html>
