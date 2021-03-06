<footer>
    <div class="footer-columns">
        <div class="row">
            <div class="eight columns">
                <h5><a href="index.php">Family Giving Tree  &nbsp;&nbsp;&nbsp;<span class="handwritten">fulfilling children’s wishes</span></a></h5>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <div class="row">
                    <div class="six columns">
                        <dl>
                            <dt>Contact Us</dt>
                            <dd>606 Valley Way<br>
                            Milpitas, CA 95035</dd>
                            <dd>(408) 946-3111</dd>
                        </dl>
                        <h6>Follow Us</h6>
                        <ul class="glyph social link-list">
                            <li><a href="http://facebook.com/familygivingtree"><img src="images/icons/facebook.png"></a></li>
                            <li><a href="http://twitter.com/fgttweets"><img src="images/icons/twitter.png"></a></a></li>
                            <li><a href="http://www.youtube.com/user/FamilyGivingTree"><img src="images/icons/youtube.png"></a></a></li>
                        </ul>
                    </div>
                    <div class="six columns">
                        <h6>Upcoming Events</h6>
                        <ul class="upcoming-events">
                            <li>
                                <h6>12/10 Holiday Warehouse Ribbon Cutting</h6>
                                <p>Come celebrate your inner elf at the Millionth Child campaign kickoff and ribbon cutting ceremony. Details coming soon.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="six columns">
                <div class="row">
                    <div class="six columns elf hide-for-small">
                        <img src="images/elf.png" alt="Family Giving Tree ELf">
                    </div>
                    <div class="six columns">
                        <h6>Sign up for our newsletter</h6>
                        <form action="http://visitor.constantcontact.com/d.jsp" method="post" target="_blank" id="ccoptin" style="margin-bottom:3;">
                            <input type="hidden" name="m" value="1100352066583">
                            <input type="hidden" name="p" value="oi">
                            <div class="row collapse">
                                <div class="nine mobile-three columns">
                                    <input type="text" name="ea "/>
                                </div>
                                <div class="three mobile-one columns">
                                    <button class="postfix button purple small">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-nav">
        <div class="row">
            <div class="nine columns">
                <ul class="link-list">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="who-we-help.php">Who We Help</a></li>
                    <li><a href="lead-a-drive.php">Lead a Drive</a></li>
                    <li><a href="sponsor.php">Sponsors</a></li>
                    <li><a href="volunteer.php">Volunteer</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="three columns">
                <p class="right">&copy; <?php echo date('Y'); ?> Family Giving Tree</p>
            </div>
        </div>
    </div>
</footer>
  
<!-- Included JS Files (Compressed) -->
<script src="javascripts/jquery.min.js"></script>
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/spin.min.js"></script>

<!-- Application Javascript, safe to override -->
<script src="javascripts/app.js"></script>

<?php yield('footer')?>

<script>
  var _gaq = _gaq || [];
  _gaq.push(
    ['_setAccount', 'ACCOUNT_ID'],
    ['_trackPageview'],
    ['b._setAccount', 'ACCOUNT_ID'],
    ['b._trackPageview']
  );

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>