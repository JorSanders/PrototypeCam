$(window).load(function () {

    $(".IncidentTitle").click(function () {

        $IncidentTitle = $(this);

        $IncidentDescription = $IncidentTitle.next();

        $IncidentDescription.slideToggle(500, function () {

            $IncidentTitle.text(function () {

               
            });
        });
    });

}); // Closes window.load