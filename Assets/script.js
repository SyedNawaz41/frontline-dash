$('.slideone').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1008,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],
  })




  $('.ujobs-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1008,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],
  })








  $('.slideonet1').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1008,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],
  })







  $('.slideonet2').slick({
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1008,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
    ],
  })





  // Scroll to Top

  //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}