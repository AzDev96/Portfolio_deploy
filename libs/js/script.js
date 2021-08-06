$(document).ready(function () {
    $(".mdb-select").material_select();
     
    var img = document.querySelectorAll('.sliderHeader__img');
    var btnNext = document.querySelector('.sliderHeader__buttons-next');
    var btnPrev = document.querySelector('.sliderHeader__buttons-prev');
    var i = 0;
    btnNext.addEventListener('click',next)
    btnPrev.addEventListener('click',prev)
    function prev () {
        img[i].classList.remove('sliderHeader__img-active');
        i--;
        if (i < 0) {
            i = img.length - 1;
        }
       
        img[i].classList.add("sliderHeader__img-active");
    }
    function next () {
        img[i].classList.remove('sliderHeader__img-active');
        i++;
        if (i >= img.length) {
            i = 0;
        }
       
        img[i].classList.add("sliderHeader__img-active");
    }
    setInterval(next, 3000)


    /* Particle - JS */
    particlesJS('particle', {
        "particles": {
          "number": {
            "value": 20,
            "density": {
              "enable": true,
              "value_area": 2250.318795162649
            }
          },
          "color": {
            "value": "#1cd7e3"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 4,
              "color": "#375f79"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.31671153413400244,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 12.501771084236939,
            "random": true,
            "anim": {
              "enable": true,
              "speed": 30.405405405405382,
              "size_min": 0.844594594594594,
              "sync": false
            }
          },
          "line_linked": {
            "enable": false,
            "distance": 316.7115341340024,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 0.5000708433694776
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": false,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "repulse"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      })
      
   

});