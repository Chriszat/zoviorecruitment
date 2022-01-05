    
    
    <div id="direct_wideFooter">
        

        <footer role="contentinfo">
        <!-- <section id="connect">
            <div class="container">
                <div class="inner-container">
                    <div class="center-vertical">
                    <h2 class="h1">Connect to Others</h2>
    
                    <p class="little-p">Your voice is needed at Zovio. There are many opportunities to be heard and to make a difference. Make your mark.</p>
                    <p><a class="btn" href="careers/index.html">View Careers</a></p>
                </div>
                </div>
            </div>
        </section> -->
        <div id="footer" class="container">
            <section class="cp-row">
                <div class="row flex-row">
                    <div class="grid grid-50 clearfix">
                    <div class="menu-title"><img src="dn9tckvz2rpxv.cloudfront.net/zovio/img/logo2.png" alt=""></div>
                    <ul class="footer-nav">
                        <li>
                            <a class="bold" href="locations/index.html">Locations</a>
                        </li>
                        <li>
                            <a class="bold" href="careers/index.html">Careers</a>
                        </li>
                        <li>
                            <a class="bold" href="community/index.html">Community</a>
                        </li>
                        <li>
                            <a class="bold" href="benefits/index.html">Benefits</a>
                        </li>
                        <li>
                            <a class="bold" href="career-development/index.html">Career Development</a>
                        </li>
                    </ul>
                </div>
                    <div class="grid grid-50 flex-row">
                        <div class="grid2 grid-100">
                            <h3 class="bold h4">Find Us</h3>
                            <p>
                                Zovio<br>
                                1811 East Northrop Boulevard<br>
                                Chandler, Arizona 85286<br><br>
                                <a href="https://www.facebook.com/ZovioSolutions" class="bold">Facebook</a> <span aria-hidden="true">/</span> <a class="bold" href="https://twitter.com/ZovioSolutions">Twitter</a> <span aria-hidden="true">/</span> <a class="bold" href="https://www.linkedin.com/company/zovio">LinkedIn</a> <span aria-hidden="true">/</span> <a class="bold" href="https://www.instagram.com/ZovioSolutions">Instagram</a> <span aria-hidden="true">/</span> <a class="bold" href="https://www.youtube.com/channel/UC6nyI_Yl5WbhK74a32UiDUw">YouTube</a>
    
                            </p>
                        </div>
    
    
    
    
    
                        <div class="grid2 grid-100">
                            <h3 class="bold h4">Get in Touch</h3>
                            <p>
                                Toll Free: 866.475.0317<br>
                                P: 858.668.2586<br>
                                F: 858.408.2903<br>
                                <a href="mailto:info@zovio.com">info@zovio.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cp-row"> 
                <div class="flex-row">
                    <div class="grid grid-50">
                        <p class="copyright">&copy; <span id="current-year"></span><script type="text/javascript">$('#current-year').html(new Date().getFullYear())</script> Zovio, Inc.<a href="http://zovio.com/privacy-policy/">Privacy</a><a href="http://zovio.com/">Corporate Site</a></p>
                    </div>
    
                                    <div class="grid grid-50">
                        <p><a href="https://www1.eeoc.gov/employers/poster.cfm" target="_blank">EEO is the Law</a></p>
                                            <p>Zovio will provide reasonable accommodations for qualified individuals with disabilities.</p>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    
    <script defer src="dn9tckvz2rpxv.cloudfront.net/bridgepointeducation.jobs/js/flexslider-min.js"></script>
    
    <script defer>
    
    $('.cookie-consent__link').attr('href','https://recruitrooster.com/privacy-terms/');
    
        $(function() {
            $("#location2").on("focus", function() {
                $("#location2").attr("placeholder", "");
            });
            $("#q2").on("focus", function() {
                $("#q2").attr("placeholder", "");
            });
            $("#moc2").on("focus", function() {
                $("#moc2").attr("placeholder", "");
            });
            $("#location2").on("blur", function() {
                $("#location2").attr("placeholder", "city, state, country");
            });
            $("#q2").on("blur", function() {
                $("#q2").attr("placeholder", "job title, keywords");
            });
            $("#moc2").on("blur", function() {
                $("#moc2").attr("placeholder", "military job title or code");
            });
            $("#q2").val($("#q").val());
            $("#location2").val($("#location").val());
            $("#moc2").val($("#moc").val());
            $("#r2").val($("#r").val());
    
        // ------------------------------------ Mobile Filters ------------------------------------
    
    
            $('#direct_disambiguationDiv.direct_rightColBox h3').wrap('<span class="filter-btn" tabindex="0" aria-expanded="false" role="button"></span>');
            $('#direct_disambiguationDiv .filter-btn').click(function() {
                $(this).attr('aria-expanded', 'false');
                $(this).nextUntil('#direct_disambiguationDiv .filter-btn').fadeOut('fast');
                $(this).children('h3').removeClass('minus-icon').addClass('plus-icon');
                if($(this).next().is(':hidden') == true) {
                    $(this).nextUntil('#direct_disambiguationDiv .filter-btn').fadeIn('fast');
                    $(this).children('h3').addClass('minus-icon');
                    $(this).attr('aria-expanded', 'true');
                }
            });
            $('#direct_disambiguationDiv h3#direct_searchCriteriaHeader').off();
            $("#direct_disambiguationDiv .filter-btn").on("keydown", function (e) {
                var keyCode = e.keyCode || e.which; 
                if (keyCode == 13) { 
                    e.preventDefault();
                    $(this).attr('aria-expanded', 'false');
                    $(this).nextUntil('#direct_disambiguationDiv .filter-btn').fadeOut('fast');
                    $(this).children('h3').removeClass('minus-icon').addClass('plus-icon');
                    if($(this).next().is(':hidden') == true) {
                        $(this).nextUntil('#direct_disambiguationDiv .filter-btn').fadeIn('fast');
                        $(this).children('h3').addClass('minus-icon');
                        $(this).attr('aria-expanded', 'true');
                    }
                }
            });
    
    
    
    
        // ------------------------------------ FlexSlider ------------------------------------
    
            $('.flexslider-primary').flexslider({
                animation: "fade",
                slideshow: true,
                slideshowSpeed: 7000,
                animationSpeed: 600,
    
                controlNav: true,
                directionNav: true,
                controlsContainer: $('.custom-paging1'),
                customDirectionNav: $('.custom-direction1 button'),
                
                pausePlay: true,               //Boolean: Create pause/play dynamic element
                pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
                playText: 'Play',  
    
                pauseOnAction: true,
                pauseOnHover: true,
                touch: true,
                start: function(slider){
                    $('.slider').css({'height':'auto','overflow':'visible'});
                }
    
            });
    
                    $('.flex-direction-nav a').attr('role', 'button');
            $('.flex-pauseplay a').attr('role', 'button').attr('tabindex','0');
            $('.flex-control-paging a').attr('role', 'button').attr('tabindex','0');
        
    
    
        // ------------------------------------ NAVIGATION ------------------------------------
    
    
            $('.nav ul').setup_navigation();
        });
    
        $.fn.setup_navigation = function(settings) {
            settings = jQuery.extend({
                menuHoverClass: 'show-menu',
            }, settings);
    
            $(this).find('> li > a').hover(function(){
                $(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass);
                $(this).next('ul').attr('aria-hidden', 'false');
            });
            $(this).find('.dropdown').mouseover(function(){
                $(this).attr('aria-hidden', 'false');
            });
            $(this).find('> li > a').focus(function(){
                $(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass);
                $(this).next('ul').addClass(settings.menuHoverClass);
                $(this).next('ul').attr('aria-hidden', 'false');
            });
    
            // Change aria-hidden on focusout when entering/leaving top nav items on tab
            $(this).find('> li > a').focusout(function(){
                if(!$('> li > a').is(":focus")){
                    $(this).next('ul').attr('aria-hidden', 'true');
                }
            });
    
            // Change aria-hidden on focus/focusout when entering/leaving dropdown on tab
            $(this).find('.dropdown li a').focus(function(){
                $(this).parents('.dropdown').attr('aria-hidden', 'false');
            });
            $(this).find('.dropdown li a').focusout(function(){
                $(this).parents('.dropdown').attr('aria-hidden', 'true');
            });
    
            // Hide menu if click occurs outside of navigation
            // Hide menu if click or focus occurs outside of navigation
            $(this).find('a').last().keydown(function(e){ 
                if(e.keyCode == 9) {
                    // If the user tabs out of the navigation hide all menus
                    $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass);
                    $('.dropdown').attr('aria-hidden', 'true');
                }
            });
    
            // Reset aria-hidden to true when leaving dropdown on mouseout
            $(this).mouseout(function(){ 
                $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass); 
                $('.dropdown').attr('aria-hidden', 'true');
            });
    
            // Remove show-menu class when clicking outside nav after tabbing
            $(document).click(function(){ 
                $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass); 
            });
    
            $(this).click(function(e){
                e.stopPropagation();
            }); 
        }
    
    
    
        $('.hamburger').click(function(){
            $('.hamburger').attr('aria-expanded', 'false');
            if($('#main-nav').is(':hidden') == true) {
                $('.hamburger').attr('aria-expanded', 'true');
            }
            $('nav').toggleClass('show-nav');
            $('.overlay-mobile').fadeToggle('fast');
            $('.hamburger').toggleClass('close');
            $('.dropdown').hide();
        });
        $('.focusKeeper').on('focusout', function(event) {
            event.preventDefault();
            $('.hamburger').focus();
        });
    
        if ($('#direct_applyDiv').length) {
            $('.direct_highlightedText').contents().filter(function() {
                return this.nodeType == 3;
            }).each(function() {
                this.textContent = this.textContent.replace(' in', '');
            });
        };
        if ($('.direct-action-btn').length) {
            $('#direct_listingDiv').css( {
                'width': '100%',
                'float': 'none'
            });
        };
            $link = $('#direct_applyButton a').attr('href');
            applyBtn = '<div id="top-apply"><div id="direct_applyButtonBottom" class="direct-action-btn"><a onclick="goalClick(\'/G/apply-click\', this.href); return false;" href="">Apply Now</a></div></div>';
    
            $('#direct_jobListingTitle .direct_highlightedText').after(applyBtn);
            $('#top-apply .direct-action-btn a').attr('href',$link);
    
    
    if ($('#main-content').length) {
    $('#direct_container').removeAttr('role');
    }
    
    
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb9eab3afc31468"></script>
    <script type="text/javascript">
    var addthis_config =
    {
       ui_tabindex: 0
    }
    </script>
    
    
    
    <script>
    if (error_page){
        ga('send', 'event', 'Error', error_page, 'page: ' + document.location.pathname + document.location.search + ' ref: ' + document.referrer)
    }else{
        ga('send', 'pageview')
        
        ga('g1910.send', 'pageview')
        
    }
    </script>
    
    
        </div>
        
    
        <script src="prod-static.dejobs.org/files/def.ui.microsite.analytics.151-15.js" type="text/javascript"></script>
        <img style="display: none;" border="0" height="1" width="1" alt="DirectEmployers">
    
        <script>
            $(document).ready(function () {
                var coords = "";
                /**
                 * If coords is an existing parameter,
                 * make sure we persist it across page
                 * searches, the back end will ignore invalid
                 * values.
                 */
                if (coords) {
    
                    $("<input>")
                        .attr({
                            type: "hidden",
                            id: "coords",
                            name: "coords",
                            value: coords
                        })
                        .appendTo("#standardSearch");
                }
            });
        </script>
    
        
    
    
        
        
        <script id="detrack" defer src="d2e48ltfsb5exy.cloudfront.net/p/ta0db.js?i=0,6"></script>
    
    </body>
    
    
    <!-- Mirrored from zovio.careers/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 14:41:57 GMT -->
    </html>
    