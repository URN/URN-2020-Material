<?php

/**
* Template Name: schedule
* Description: Displays schedule page
*/
 get_header(); ?>

 

<div class="main-page-content">
<?php
                // Start the loop.                </div>
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                

            ?> 
            <div class="row">
                <div class="col">

                <?php 
      $user = wp_get_current_user();
      if ( in_array( 'Administrator', $user->roles ) ) { ?>
          <!-- Any HTML what you need to hide from "Customers" and show for "Vendor" -->
      	<div>
      	  <?php edit_post_link(__('Edit Page')); ?>
    	</div>
      <?php  } ?>

            <article id="post-<?php the_ID();?>" <?php post_class();?>>
                <header class="entry-header">
                 
                        <?php the_title('    <div class="text-center"> <h1 class="entry-title">','</h1> </div>');?>
                    </div>
            </div>
    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">      
                </div>
                <div class="col-sm-10">      
                    
           
             
                </header>
               <!-- <div class="text-left"> CHANGE THIS FOR TEXT ALLIGNMENT-->

                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'URN-2020Redesign' ),
                            'after' => '</div',
                        ));
                    ?>   
                </div>
                <footer class="entry-footer">
                    <?php
                        edit_post_link(
                            sprintf(
                                esc_html__('Edit %s', 'URN-2020Redesign'),
                                the_title('<span class="screen-reader-text">"','"
                                </span>', false)
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                    ?>



                    
                </footer>
            </article>
            <?php    // End the loop.
                endwhile;
            ?>
            </div>
                <div class="col-sm-1">      
                </div>
            </div>
        </div>
    </div>
    <div class="page-section2">
        
    </div>
</div>
<div class="main-content">

    <div class="row schedule-category-images">
        <?php
            $show_categories = array();
            $show_categories[] = array('name' => 'After Dark', 'slug' => 'shows', 'anchor' => '#afterdark', 'link' => 'afterdark.jpg');
            $show_categories[] = array('name' => 'Culture', 'slug' => 'shows', 'anchor' => '#culture', 'link' => 'culture.jpg');
            $show_categories[] = array('name' => 'Daytime', 'slug' => 'shows', 'anchor' => '#daytime', 'link' => 'daytime.jpg');
            $show_categories[] = array('name' => 'News', 'slug' => 'shows', 'anchor' => '#news', 'link' => 'news.jpg');
            $show_categories[] = array('name' => 'Sport', 'slug' => 'shows', 'anchor' => '#sport', 'link' => 'sport.jpg');

            foreach($show_categories as $show) {
                echo "<div class='show-photo'>";
                echo "  <a href=" . get_permalink( get_page_by_path( $show['slug'] ) ) . $show['anchor'] . ">";
                echo "  <img src='" . get_template_directory_uri() . "/images/schedule/" . $show['link'] . "'>";
                echo "  </a>";
                echo "</div>";
            }
        ?>
    </div>

    <div class="entry-content">
        <?php the_title( '<h1>', '</h1>' ); ?>

        <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                // Include the page content template.
                the_content();

            // End the loop.
            endwhile;
        ?>

        <div class="filter-container">
            <h2>Filter</h2>
            <label for="schedule-category-select">Show Category</label>
            <select autocomplete="off" name="schedule-category-select" class="select schedule-category-select">
                <option value="all">All</option>
                <option value="after-dark">After Dark</option>
                <option value="culture">Culture</option>
                <option value="daytime">Daytime</option>
                <option value="news">News</option>
                <option value="sport">Sport</option>
            </select>

            <div class="search-filter-container">
                <label for="schedule-category-filter-search">Search</label>
                <input autocomplete="off" type="text" name="schedule-category-filter-search" class="txt schedule-category-filter-search">
            </div>
        </div>
    </div>

    <script> 
    (function($) {
    "use strict";

    var $schedule = $(".schedule");
    var $categorySelect = $(".schedule-category-select");
    var $searchFilterTxt = $(".schedule-category-filter-search");
    var dayNames = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
    var singleDay = $schedule.hasClass("mini-schedule");

    // Automatically scroll to the live point in the schedule
    var autoscroll = true;

    // Number of hours that schedule starts at
    var hoursOffset = 0;

    (function refreshSchedule() {
        var request = $.ajax({
            url: "/api/schedule/week",
            type: "get",
            dataType: "json"
        });

        request.done(function(data) {
            populateSchedule(data);

            if (autoscroll) {
                scrollToLive();
            }
        });

        request.always(function() {
            setTimeout(refreshSchedule, 120000);
        });
    })();

    $categorySelect.val("all");

    $categorySelect.change(function() {
        var category = $(this).val();
        var $shows = $schedule.find(".show");

        if (category === "all") {
            $shows.removeClass("dim");
        } else {
            $shows.each(function(i, show) {
                var $show = $(show);
                if (!$show.hasClass("live") && !$show.hasClass(category)) {
                    $show.addClass("dim");
                } else {
                    $show.removeClass("dim");
                }
            });
        }

        // Fire the change event for the search filter so that any changes in categorya
        // are reflected in currently visible show slots
        if ($searchFilterTxt.val().trim() !== "") {
            $searchFilterTxt.trigger("input");
        }
    });

    $searchFilterTxt.on("input", function(e) {
        var query = $(e.target).val().toLowerCase().trim();

        if (query === "") {
            $categorySelect.trigger("change");
        }

        $schedule.find(".show").each(function(i, show) {
            var $show = $(show);

            var title = $show.find(".title").text().toLowerCase();
            var hosts = $show.find(".hosts").text().toLowerCase();

            var currentCategory = $categorySelect.val();

            // Keep the show slot visible if the current show is a part of the currently
            // select category and there's a match for the query in the show's title or
            // host names
            if ((currentCategory === "all" || $show.hasClass(currentCategory)) &&
                title.indexOf(query) !== -1 || hosts.indexOf(query) !== -1) {
                $show.removeClass("dim");
            } else if (!$show.hasClass("live")) {
                $show.addClass("dim");
            }
        });
    });

    function scrollToLive() {
        var d = new Date();
        var currentTimeMins = d.getHours() * 60 + d.getMinutes();

        var $scrollBox = $schedule.find(".timetable");

        if (d.getHours() < Math.abs(hoursOffset)) {
            currentTimeMins += 24 * 60;
        }

        var live = currentTimeMins * calculateMinuteWidth() + (hoursOffset * 60 * calculateMinuteWidth());

        live = live - $scrollBox.width() / 2;

        $scrollBox.animate({
            scrollLeft: live
        }, 500);
    }

    function createSlot(slotData) {
        var $slot = $("<li>").addClass("show");

        var $title = $("<h1>").addClass("title").text(slotData.name);

        var $times = $("<h3>").addClass("times").text(slotData.from + " - " + slotData.to);

        var $hosts = $("<h2>").addClass("hosts").text(slotData.hosts.map(function(el) { return el.name; }).join(", "));

        var $desc = $("<p>").addClass("description").text(slotData.description);

        var $a = $("<a>").attr({
            href: "/show/" + slotData.slug,
            title: slotData.name
        });

        if (slotData.override) {
            $a.attr("href", "#");
            $a.click(function(e) {
                e.preventDefault();
            });
        }

        if (slotData.live) {
            $slot.addClass("live");

            // Stop autoscroll if the current slot is live and lasts all day
            // this stops the title of the long slot scrolling off-screen
            if (slotData.from === "00:00" && slotData.to === "24:00") {
                autoscroll = false;
            }
        }

        // The 'long-slot' class will the slot rectangle from scaling up when it's live
        // For very wide slots it affects the positioning too much
        if (slotData.duration > 300) {
            $slot.addClass("long-slot");
        }

        slotData.category = slotData.category.replace(/\s+/g, '-').toLowerCase();
        switch (slotData.category) {
            case "after-dark":
            case "culture":
            case "daytime":
            case "news":
            case "sport":
            case "automation":
            case "varsity":
                $slot.addClass(slotData.category);
                break;
            default:
                break;
        }

        $a.append($title);
        $a.append($times);

        if (slotData.hosts.length > 0) {
            $a.append($hosts);
        }

        // Only show the description on schedule override items
        if (slotData.override) {
            $a.append($desc);
        }

        $slot.append($a);

        var durationWidth = slotData.duration;

        $slot.css({
            width: calculateSlotWidth(durationWidth) + "px",
            left: calculateSlotLeftOffset(slotData.from) + "px"
        });

        return $slot;
    }

    function calculateMinuteWidth() {
        return $schedule.find(".times li:nth-child(2)").outerWidth() / 60;
    }

    function calculateSlotWidth(length) {
        return calculateMinuteWidth() * length;
    }

    function calculateSlotLeftOffset(startTime) {
        var minuteWidth = calculateMinuteWidth();

        var minsOffset = hoursOffset * 60;

        var offset = minsOffset * minuteWidth;

        var startTimeMins = convertTimeToMinutes(startTime);

        // Move shows that start before the offset to the end of the schedule
        // I HAVE NO IDEA WHY THE ADJUSTED startTimeMins WORKS BUT IT DOES
        // sorry anyone who ends up needing to tweak this
        if (startTimeMins < Math.abs(hoursOffset) * 60) {
            startTimeMins += 10 * 60;
            return startTimeMins * minuteWidth - offset;
        }

        return startTimeMins * minuteWidth + offset;
    }

    // HH:MM
    function convertTimeToMinutes(time) {
        var hours = parseInt(time.substring(0, 2));
        var minutes = parseInt(time.substring(3, 5));
        var totalMinutes = (hours * 60) + minutes;
        return totalMinutes;
    }

    function getNextDayName(dayName) {
        var i = dayNames.indexOf(dayName) + 1;
        i = i > (dayNames.length - 1) ? i - dayNames.length : i;
        return dayNames[i];
    }

    function populateSchedule(shows) {
        // Empty all of the slots of existing shows
        $schedule.find(".slots").empty();

        if (singleDay) {
            var slots = shows[dayNames[new Date().getDay()]];
            var $slotList = $schedule.find("li.day .slots");

            $.each(slots, function(j, slotData) {
                var from = parseInt(slotData.from);

                var fromDateTime = new Date();
                fromDateTime.setHours(parseInt(slotData.from.substring(0, 2)));
                fromDateTime.setMinutes(parseInt(slotData.from.substring(3, 5)));

                var toDateTime = new Date();
                toDateTime.setHours(parseInt(slotData.to.substring(0, 2)));
                toDateTime.setMinutes(parseInt(slotData.to.substring(3, 5)));

                var midnightDateTime = new Date();
                midnightDateTime.setHours(0);
                midnightDateTime.setMinutes(0);

                // If the show ends before it starts, it must end after midnight,
                // so truncate it at midnight
                if (fromDateTime > toDateTime) {
                    var minsAfterMidnight = Math.abs(toDateTime.getTime() - midnightDateTime.getTime());
                    minsAfterMidnight = minsAfterMidnight / 60000;

                    // slotData.to = "00:00";
                    slotData.duration = slotData.duration - minsAfterMidnight;
                    var $slot = createSlot(slotData);
                    $slotList.append($slot);
                } else {
                    var $slot = createSlot(slotData);
                    $slotList.append($slot);
                }
            });
        } else {
            $.each(dayNames, function(i, dayName) {
                var slots = shows[dayName];

                var $slotList = $schedule.find("li.day." + dayName + " .slots");

                var nextDayName = getNextDayName(dayName);
                var $nextDaySlotList = $schedule.find("li.day." + nextDayName + " .slots");

                $.each(slots, function(j, slotData) {
                    var from = parseInt(slotData.from);

                    var fromDateTime = new Date();
                    fromDateTime.setHours(parseInt(slotData.from.substring(0, 2)));
                    fromDateTime.setMinutes(parseInt(slotData.from.substring(3, 5)));

                    var toDateTime = new Date();
                    toDateTime.setHours(parseInt(slotData.to.substring(0, 2)));
                    toDateTime.setMinutes(parseInt(slotData.to.substring(3, 5)));

                    var midnightDateTime = new Date();
                    midnightDateTime.setHours(0);
                    midnightDateTime.setMinutes(0);

                    // If the show ends before it starts, it must end after midnight,
                    // so truncate it at midnight and create a new slot for the next day
                    if (fromDateTime > toDateTime) {
                        var nextDaySlotData = JSON.parse(JSON.stringify(slotData));

                        var minsAfterMidnight = Math.abs(toDateTime.getTime() - midnightDateTime.getTime());

                        // If the show doesn't finish at midnight wrap around
                        if (minsAfterMidnight !== 0) {
                            minsAfterMidnight = minsAfterMidnight / 60000;

                            nextDaySlotData.from = "00:00";
                            nextDaySlotData.duration = minsAfterMidnight;
                            var $nextDaySlot = createSlot(nextDaySlotData);
                            $nextDaySlotList.append($nextDaySlot);
                        }

                        slotData.duration = slotData.duration - minsAfterMidnight;
                        var $slot = createSlot(slotData);
                        $slotList.append($slot);
                    } else {
                        var $slot = createSlot(slotData);
                        $slotList.append($slot);
                    }
                });
            });
        }
    }
})(jQuery);
</script>

    <div class="schedule">
        <ul class="day-names">
            <li class="day-name">Monday</li>
            <li class="day-name">Tuesday</li>
            <li class="day-name">Wednesday</li>
            <li class="day-name">Thursday</li>
            <li class="day-name">Friday</li>
            <li class="day-name">Saturday</li>
            <li class="day-name">Sunday</li>
        </ul>
        <div class="timetable">
            <ul class="times">
                <li>Midnight</li>
                <li>1am</li>
                <li>2am</li>
                <li>3am</li>
                <li>4am</li>
                <li>5am</li>
                <li>6am</li>
                <li>7am</li>
                <li>8am</li>
                <li>9am</li>
                <li>10am</li>
                <li>11am</li>
                <li>Noon</li>
                <li>1pm</li>
                <li>2pm</li>
                <li>3pm</li>
                <li>4pm</li>
                <li>5pm</li>
                <li>6pm</li>
                <li>7pm</li>
                <li>8pm</li>
                <li>9pm</li>
                <li>10pm</li>
                <li>11pm</li>
            </ul>
            <ul class="days">
                <li class="day monday">
                    <h1 class="inline-day-name">Monday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day tuesday">
                    <h1 class="inline-day-name">Tuesday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day wednesday">
                    <h1 class="inline-day-name">Wednesday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day thursday">
                    <h1 class="inline-day-name">Thursday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day friday">
                    <h1 class="inline-day-name">Friday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day saturday">
                    <h1 class="inline-day-name">Saturday</h1>
                    <ul class="slots"></ul>
                </li>
                <li class="day sunday">
                    <h1 class="inline-day-name">Sunday</h1>
                    <ul class="slots"></ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
