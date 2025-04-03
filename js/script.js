particlesJS('particles-js', {
    "particles": {
      "number": {
        "value": 80, // Densidade das partículas
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff" // Cor das partículas
      },
      "shape": {
        "type": "circle", // Formato (circle, edge, triangle, polygon, star, image)
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        }
      },
      "opacity": {
        "value": 0.5, // Opacidade
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3, // Tamanho
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150, // Distância para criar linhas
        "color": "#ffffff", // Cor das linhas
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 4, // Velocidade do movimento
        "direction": "none", // Direção (none, top, top-right, right, bottom-right, bottom, bottom-left, left, top-left)
        "random": false,
        "straight": false,
        "out_mode": "out", // Comportamento ao sair da tela (out, bounce)
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
          "enable": true, // Habilita interação ao passar o mouse
          "mode": "repulse" // Efeito (grab, bubble, repulse)
        },
        "onclick": {
          "enable": true, // Habilita interação ao clicar
          "mode": "push" // Efeito (push, remove, bubble, repulse)
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
          "distance": 100, // Distância da repulsão
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4 // Quantidade de partículas adicionadas ao clicar
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true // Melhora a resolução em telas retina
  });