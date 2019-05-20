/*carousel*/
slideIndex = -2;
thisSlide(slideIndex)
moveSlides(slideIndex);

function moveSlides(n) {
    slides(slideIndex += n);
}

function thisSlide(n) {
    slides(slideIndex = n);
}

function slides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

/*scale up*/
var size = $("#details").css("fontSize")
$("#details").hover(
    function () {
        $(this).css("fontSize", "30px");
    },
    function () {
        $(this).css("fontSize", size);
    })
/*hover table*/
window.onload = function f() {
    var tfrow = document.getElementById('artab').rows.length;
    var color = $("#artab").css("background-color")
    var tbRow = [];
    for (var i = 1; i < tfrow; i++) {
        tbRow[i] = document.getElementById('artab').rows[i];
        var tfcell = tbRow[i].cells.length;
        for (var j = 0; j < tfcell; j++) {
            var _tbCell = tbRow[i].cells[j];
            _tbCell.onmouseover = function () {
                this.style.backgroundColor = 'white';
                this.style.color = 'black';
            }
            _tbCell.onmouseout = function () {
                this.style.backgroundColor = color;
                this.style.color = 'white';
            }
        }
    }
}

/*form*/
function form() {
    var letters = /^[A-Za-z- ]+$/;
    var nums = /^[0-9]+$/;
    var name = document.forms["formi"]["fullname"];
    var phone = document.forms["formi"]["Phone"];
    var email = document.forms["formi"]["mail"];
    var guests = document.forms["formi"]["numOfGuests"];
    var comments = document.forms["formi"]["addComment"];

    if (!name.value.match(letters) || name == "") {
        window.alert("The name can only include letters and spaces");
        name.focus();
        return false;
    }
    if (!phone.value.match(nums) || phone.value.length < 9 || phone.value.length > 10 || phone == "") {
        if (!phone.value.match(nums))
            window.alert("The Phone number can only include Numbers");
        else
            window.alert("The Phone number can only include 9 or 10 digits");
        phone.focus();
        return false;
    }

    if (email.value == "" || email.value.indexOf("@", 0) < 0 || email.value.indexOf(".", 0) < 0) {
        window.alert("The email must must contain at least one time @ and .");
        email.focus();
        return false;
    }
    if (guests.value == "" || guests.value <= 0) {
        window.alert("Number of guest must be greater than 0");
        guests.focus();
        return false;
    }
    if (comments.value.length > 200) {
        window.alert("The additional info can contain up to 200 chars");
        comments.focus();
        return false;
    }

    return true;

}

/*char counter*/
var maxChar = 200;
$('textarea').keyup(function () {
    var length = $(this).val().length;
    var length = maxChar - length;
    $('#chars').text(length);
});
/*modal*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//send mail
function sendMail() {
    var link = "mailto:dorrrrrrr@gmail.com"
        + "&subject=MemeCon!"
        + "&body=Meowth! I%20can%20has%20a%20few%20answers?"
    ;

    window.location.href = link;
}

//goodbye message - once
$(document).one("mouseleave", function () {
    alert("You're out, come back in, I will tell you this ONLY ONCE!");
});

//goodbye message - every time
/*
$(document).on("mouseleave", function () {
    alert("You're out, come back in, I will tell you this ONLY ONCE!");
});
*/
