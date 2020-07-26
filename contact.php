<?php 
///////////////////////////////////////////////////////////////////////////////////
//       **Designed by: Waswa Rodgers**                                          //
//       **Date launched: 30/07/2020**                                          //
//       **Client: Bondlink Experts Co. Ltd.**                                   //
//                                                                               //
//                                                                                //
////////////////////////////////////////////////////////////////////////////////////

    include_once('includes/header.php'); 
    
?>

<!-- Contact form -->
<section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="footer_item">
                            <h4>Contact Us</h4>
                                <ul class="list-unstyled footer_contact">
                                    <li><a href=""><span class="fa fa-map-marker"></span>3rd Flr. Utalii Hse, Utalii Street P.O BOX 1184 - 00100 Nairobi</a></li>
                                    <li><a href=""><span class="fa fa-envelope"></span> finance@bondlinkexperts.co.ke</a></li>
                                    <li><a href=""><span class="fa fa-mobile"></span><p>+254 715877238 <br />+254 716225693</p></a></li>
                                </ul>
                        </div>
                        
                    </div>
                    <form role="form" class="form-inline text-right col-md-6" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="20" id="msg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn submit_btn">Send</button>
                    </form>				
                </div>
                <div class="row">
                    <div class="col-md-12 bg-dark text-white border border-primary">
                        <img src="images/portfolio2.jpg" alt="Google Maps Here" >
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact form end -->

<?php include_once('includes/footer.php'); ?>