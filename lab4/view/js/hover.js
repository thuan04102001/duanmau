//GetLink
function getlink() {
    alert("Link Facebook tui nè mlemmm <3\nhttps://www.facebook.com/100038192733422");
}
//lăn chuột
window.onscroll = function() { Demo() };

function Demo() {
    document.getElementById("shop").style.display = (pageYOffset > 635 && pageYOffset < 2450) ? 'block' : '';
    // document.getElementById("header").style.backgroundColor = (pageYOffset > 10) ? 'black' : 'transparent';
    document.getElementById("home").className =
        (window.scrollY < 634) ? "bgmenutop" : "";
    document.getElementById("product").className =
        (window.scrollY > 635 && window.scrollY < 1475) ? "bgmenutop" : "";
    document.getElementById("service").className =
        (window.scrollY > 1987 && window.scrollY < 2452) ? "bgmenutop" : "";
    document.getElementById("project").className =
        (window.scrollY > 2452 && window.scrollY < 3085) ? "bgmenutop" : "";
    // document.getElementById("help").className =
    //     (window.scrollY > 3085 && window.scrollY < 3772) ? "bgmenutop" : "";
}

//function back_home() { window.scrollTo(0, 0); } // Di chuyển về HOME
//function to_product() { window.scrollTo(0, 636); } // Di chuyển tới VIP
//function to_service() { window.scrollTo(0, 1988); } // Di chuyển tới TOOL
//function to_project() { window.scrollTo(0, 2453); } // Di chuyển tới PROJECT
// function to_help() { window.scrollTo(0, 3086); } // Di chuyển tới HELP