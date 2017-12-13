



(navLinkActive = () => {
    var whosActive = $('#activeIdentifier').val()
    console.log(whosActive)
    switch (whosActive) {
        case "home":
            $('.nav-item').removeClass('active');
            console.log($('#homeLink'))
            $('#homeLink').addClass('active');
            break;
        case "about":
            $('.nav-item').removeClass('active');
            $('#aboutLink').addClass('active');
            break;
        case "city":
            $('.nav-item').removeClass('active');
            $('#cityLink').addClass('active');
            break;
        case "school":
            $('.nav-item').removeClass('active');
            $('#schoolLink').addClass('active');
            break;
        case "events":
            $('.nav-item').removeClass('active');
            $('#eventsLink').addClass('active');
            break;
        case "contact":
            $('.nav-item').removeClass('active');
            $('#contactLink').addClass('active');
            break;
        case "jobs":
            $('.nav-item').removeClass('active');
            $('#jobLink').addClass('active');
            break;
        case "news":
            $('.nav-item').removeClass('active');
            $('#newsLink').addClass('active');
            break;
    }   
})()



