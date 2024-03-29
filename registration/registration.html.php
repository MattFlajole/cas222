<!DOCTYPE html>

<!--
Assignment Name: Forms
File Name: registration\registration.html.php
Date: 02/28/2021
Programmer: Matthew Flajole
-->

<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../styles/reset.css" rel="stylesheet" type="text/css">
        <link href="../styles/helper.css" rel="stylesheet" type="text/css">
        <link href="../styles/grid.css" rel="stylesheet" type="text/css">
        <link href="../styles/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>

            <?php include '../includes/header.inc.html.php'; ?>

            <?php include '../includes/navigation.inc.html.php'; ?>

        <main>
            <section class="top">
                <h2>Register for events</h2>
                <div id="registration">
                    <form method="post" action=" ">
                        <div class="hint">Required fields are marked with an asterisk (*).</div>
                        <input name="honeypot" type="text" value="" id="honeypot" class="honeypot" />
                        <label for="myname">* Name</label>
                        <input type="text" name="myname" id="myname" required>
                        <label for="myage">* Age</label>
                        <input type="number" name="myage" id="myage" min="1" max="80" required>
                        <label for="myrole">* Role</label>
                        <select size="1" name="myrole" id="myrole">
                            <option>Choose role</option>
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                        </select>
                        <label for="myphone">* Phone Number</label>
                        <input type="tel" name="myphone" id="myphone">
                        <label for="myemail">* E-mail Address:</label>
                        <input type="email" name="myemail" id="myemail" required">
                        <label for="myemergname">* Emergency Contact Name</label>
                        <input type="text" name="myemergname" id="myemergname" required>
                        <label for="myemergphone">* Emergency Contact Phone</label>
                        <input type="tel" name="myemergphone" id="myemergphone" required>
                        <label for="mygender">Gender Identification</label>
                        <select size="1" name="mygender" id="mygender">
                            <option>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="myshirtsize">T-shirt Size</label>
                        <select size="1" name="myshirtsize" id="myshirtsize">
                            <option>Select T-shirt Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="x-large">X-Large</option>
                        </select>
                        <label for="mysatevent">Saturday Events</label>
                        <select size="1" name="mysatevent" id="mysatevent">
                            <option>Select Event</option>
                            <option value="long course triathlon">Long Course Triathlon</option>
                            <option value="olympic triathlon">Olympic Triathlon</option>
                            <option value="10k">10 K Race</option>
                            <option value="half marathon">Half Marathon</option>
                        </select>
                        <label for="mysunevent">Sunday Events</label>
                        <select size="1" name="mysunevent" id="mysunevent">
                            <option>Select Event</option>
                            <option value="sprint triathlon">Sprint Triathlon</option>
                            <option value="try-a-tri">Try-a-Tri</option>
                            <option value="splash n dash">Splash n Dash</option>
                        </select>
                        <label for="myaccommodations">Any Special Accommodations Needed?</label>
                        <textarea name="myaccommodations" id="myaccommodations" rows="2" cols="20"></textarea>
                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div>
            </section>
            <aside class="sidebar">
                <div class="fee">
                    <h3>Registration Fees</h3>
                    <ul>
                        <li>Long Course: $240</li>
                        <li>Olympic: $110</li>
                        <li>10K: $50</li>
                        <li>Half Marathon: $75</li>
                        <li>Sprint: $90</li>
                        <li>Try-Tri: $75</li>
                    </ul>
                    <h3>cost includes</h3>
                    <ul>
                        <li>Food & Beer</li>
                        <li>Access to the weekend's live entertainment & Fitness Expo</li>
                        <li>Commemorative Finisher Medal</li>
                        <li>Accurate Chip  Timing for competitive races</li>
                        <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                        <li>Post-event Party & entertainment</li>
                    </ul>
                </div>
                <div>
                    <h3>Starting Times</h3>
                    <h4>Saturday</h4>
                    <ul>
                        <li>Long Course Triathlon: 7:00 AM</li>
                        <li>Olympic Triathlon: 7:30 AM</li>
                        <li>10K: 7:15 AM</li>
                        <li>Half Marathon: 7:15 AM</li>
                    </ul>
                    <h4>Sunday</h4>
                    <ul>
                        <li>Sprint Triathlon: 8:00 AM</li>
                        <li>Try-a-Tri: 8:20 AM</li>
                        <li>Splash n Dash: 12:00 PM</li>
                    </ul>
                </div>
                <div>
                <ul>
                    <h3>Social media feeds</h3>
                    <li><a class="twitter-timeline" data-width="420" data-height="200" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                    <li>
                    <div id="m-booked-weather-bl250-47344"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:250px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-01"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="Booked" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>53</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">F</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>59&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>38&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Portland </div> <div class="booked-wzs-250-175-date">Thursday, 11 March</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/portland-1095"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Fri</td> <td>Sat</td> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>60&deg;</td> <td class="week-day-val"><span class="plus">+</span>61&deg;</td> <td class="week-day-val"><span class="plus">+</span>59&deg;</td> <td class="week-day-val"><span class="plus">+</span>51&deg;</td> <td class="week-day-val"><span class="plus">+</span>50&deg;</td> <td class="week-day-val"><span class="plus">+</span>55&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>40&deg;</td> <td class="week-day-val"><span class="plus">+</span>42&deg;</td> <td class="week-day-val"><span class="plus">+</span>45&deg;</td> <td class="week-day-val"><span class="plus">+</span>42&deg;</td> <td class="week-day-val"><span class="plus">+</span>42&deg;</td> <td class="week-day-val"><span class="plus">+</span>43&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-47344'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=6;cityID=1095;type=3;scode=124;ltid=3457;domid=w209;anc_id=83216;countday=undefined;cmetric=0;wlangID=1;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';wstrackId=255374';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->                         </li>
                    </ul>
                </div>
            </aside>
        </main>
    </body>

    <?php include '../includes/footer.inc.html.php'; ?>

</html>


<!--

<form method="post" action=" ">
    <div class="hint">Required fields are marked with an asterisk (*).</div>
    <input name="honeypot" type="text" value="" id="honeypot" class="honeypot" />
    <label for="myname">* Name</label>
    <input type="text" name="myname" id="myname" required>
    <label for="myage">* Age</label>
    <input type="number" name="myage" id="myage" min="1" max="80" required>
    <label for="myrole">* Role</label>
    <select size="1" name="myrole" id="myrole">
        <option>Choose role</option>
        <option value="athlete">Athlete</option>
        <option value="volunteer">Volunteer</option>
    </select>
    <label for="myphone">* Phone Number</label>
    <input type="tel" name="myphone" id="myphone">
    <label for="myemail">* E-mail Address:</label>
    <input type="email" name="myemail" id="myemail" required">
    <label for="myemergname">* Emergency Contact Name</label>
    <input type="text" name="myemergname" id="myemergname" required>
    <label for="myemergphone">* Emergency Contact Phone</label>
    <input type="tel" name="myemergphone" id="myemergphone" required>
    <label for="mygender">Gender Identification</label>
    <select size="1" name="mygender" id="mygender">
        <option>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <label for="myshirtsize">T-shirt Size</label>
    <select size="1" name="myshirtsize" id="myshirtsize">
        <option>Select T-shirt Size (included)</option>
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
        <option value="x-large">X-Large</option>
    </select>
    <label for="mysatevent">Saturday Events</label>
    <select size="1" name="mysatevent" id="mysatevent">
        <option>Select Event</option>
        <option value="long course triathlon">Long Course Triathlon</option>
        <option value="olympic triathlon">Olympic Triathlon</option>
        <option value="10k">10 K Race</option>
        <option value="half marathon">Half Marathon</option>
    </select>
    <label for="mysunevent">Sunday Events</label>
    <select size="1" name="mysunevent" id="mysunevent">
        <option>Select Event</option>
        <option value="sprint triathlon">Sprint Triathlon</option>
        <option value="try-a-tri">Try-a-Tri</option>
        <option value="splash n dash">Splash n Dash</option>
    </select>
    <label for="myaccommodations">Any Special Accommodations Needed?</label>
    <textarea name="myaccommodations" id="myaccommodations" rows="2" cols="20"></textarea>
    <input id="mysubmit" type="submit" value="Submit">
</form>-->