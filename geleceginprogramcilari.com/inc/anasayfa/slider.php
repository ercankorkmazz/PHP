        <div id="wrapper">
            <div class="slideshow" id="flavor_1"></div>
        </div>
                
		<script src="js/agile_carousel.a1.1.min.js"></script>
        <script>
            $.getJSON("inc/slider.php", function (data) {
                $(document).ready(function () {
                    $("#flavor_1").agile_carousel({
                        carousel_data: data,
                        carousel_outer_height: 250,
                        carousel_height: 250,
                        slide_height: 250,
                        carousel_outer_width: 630,
                        slide_width: 630,
                        transition_time: 300,
                        timer: 4000,
                        continuous_scrolling: true,
                        control_set_1: "numbered_buttons",
                        no_control_set: "hover_previous_button,hover_next_button"
                    });
                })
            });
        </script>
