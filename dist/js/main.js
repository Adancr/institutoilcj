// // Smooth 
// // Select all links with hashes
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
//   });

let toggle_menu = document.querySelector('.toggle-menu');
let nav = document.querySelector('nav');



toggle_menu.onclick = function () {
  nav.classList.toggle('show-menu');

}



// back color header
$(window).on("scroll", function () {
  if ($(window).scrollTop() > 50) {
    $(".header2").addClass("active");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".logo-navegation").removeClass("active");
  }
});

// ACORDION
class Accordion {
  constructor(element) {
    this.element = document.querySelector(element);
    this.groups = [];
    this.element.querySelectorAll(".accordion__group").forEach(value => {
      let group = new accordionGroup(value, this);
      this.groups.push(group);
    });
  }

  hideElse(e) {
    this.groups.forEach(value => {
      (value != e) ? value.hideGroup() : "";
    })
  }
}

class accordionGroup {
  constructor(element, parent) {
    this.element = element;
    this.parent = parent;
    this.status = false;
    this.body = element.querySelector(".accordion__body");
    this.header = element.querySelector(".accordion__header");
    this.header.addEventListener("click", () => {
      if (this.status) this.hideGroup();
      else {
        this.parent.hideElse(this);
        this.showGroup();
      }
    });
  }

  showGroup() {
    this.status = true;
    this.body.classList.replace("is-inactive", "is-active");
  }

  hideGroup() {
    this.status = false;
    this.body.classList.replace("is-active", "is-inactive");
  }
}

let a = new Accordion(".accordion");