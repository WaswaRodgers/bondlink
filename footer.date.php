<!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                    &copy;
                    <?php 
                        $first_copy_year = 2020;
                        $current_copy_year = date('Y');
                        echo $first_copy_year . (($first_copy_year != $current_copy_year) ? '-' . $current_copy_year : ''); ?> 
                        Copyright. All Rights Reserved.

                        Designed by 
                    <a target="_blank" href="https://waswarodgers.wordpress.com">Waswa Rodgers</a> 
                </p>
            </div>
<!-- Footer bottom end -->