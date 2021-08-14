var ngoInfo = document.querySelector(".NGOinfo-container");
var userInfo = document.querySelector(".userinfo-container");
var user = document.getElementById("user");
var ngo = document.getElementById("ngo");
document.getElementById("ngo")
ngo.addEventListener("click", function() {
    // console.log("you click");
    ngoInfo.style = "display:block";
    userInfo.style = "display:none";
});
user.addEventListener("click", function() {
    // console.log("you click");
    ngoInfo.style = "display:none";
    userInfo.style = "display:block";
});

// disable enable user
function state(state, statenow) {
    var req = new XMLHttpRequest();
    req.open("get", "http://localhost/myproject/Page/state.php?state=" + state + "&statenow=" +
        statenow, true);
    req.send();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            // document.getElementById('cities').innerHTML = req.responseText;
            alert("run");
        }
    };
}