
//Listener for nav buttons
//Switch to a specific function
$("nav a").click(function(){
    switch(this.id){
        case("home"):
            $("section").hide();
            $("#homesec").show();
            break;
        case("about"):
            $("section").hide();
            $("#aboutsec").show();
            break;
        case("search"):
            $("section").hide();
            $("#searchsec").show();
            break;
        case("calculator"):
            $("section").hide();
            $("#calculatorsec").show();
            break;

    }
});