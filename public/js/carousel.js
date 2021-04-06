/* Carousels images fetch and slides creation */

var wrapper1 = document.getElementById('carousel-inner-1'),
    buttons1 = document.getElementById('carousel-indicators-1'),
    wrapper2 = document.getElementById('carousel-inner-2'),
    buttons2 = document.getElementById('carousel-indicators-2'),
    wrapper3 = document.getElementById('carousel-inner-3'),
    buttons3 = document.getElementById('carousel-indicators-3'),
    wrapper4 = document.getElementById('carousel-inner-4'),
    buttons4 = document.getElementById('carousel-indicators-4'),
    wrapper5 = document.getElementById('carousel-inner-5'),
    buttons5 = document.getElementById('carousel-indicators-5'),
    i = 0;

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Load data
        var path = window.location.pathname;
        if (path !== '/components/gallery.php') {
            fetch('https://jsonplaceholder.typicode.com/photos')
            .then(response => response.json())
            .then(data => {
                if ($('#carousels').length) {
                    if (data[0].id) {
                        for (var index = 0; index < 5; index++) {
                            // console.log(data);
                            // Create indicators
                            var li = document.createElement('li');
                            li.setAttribute('data-target', '#carouselIndicators-1');
                            li.setAttribute('data-slide-to', data[i].id-1);
                            // Create carousel elements
                            var div = document.createElement('div');
                            div.classList.add('carousel-item');
                            div.innerHTML =`<img class="d-block w-100" src="https://picsum.photos/1200/400?random=${data[i].id}" alt="Slide ${data[i].id}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Image ${data[i].id}</h5>
                                                    <p>${data[i].title}</p>
                                            </div>
                                            `
                            i=i+1;
                            // Add active class to the first slide and to first indicator
                            if (i == 1) {
                                div.classList.add('active');
                                li.classList.add('active');
                            }
                            // Append slides to the wrapper
                            wrapper1.appendChild(div);
                            buttons1.appendChild(li);
                        }
                    }
                    if (data[1].id) {
                        for (var index = 0; index < 5; index++) {
                            // console.log(data);
                            // Create indicators
                            var li = document.createElement('li');
                            li.setAttribute('data-target', '#carouselIndicators-2');
                            li.setAttribute('data-slide-to', data[i].id-6);
                            // Create carousel elements
                            var div = document.createElement('div');
                            div.classList.add('carousel-item');
                            div.innerHTML =`<img class="d-block w-100" src="https://picsum.photos/1200/400?random=${data[i].id}" alt="Slide ${data[i].id-5}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Image ${data[i].id-5}</h5>
                                                    <p>${data[i].title}</p>
                                            </div>
                                            `
                            i=i+1;
                            // Add active class to the first slide and to first indicator
                            if (i == 6) {
                                div.classList.add('active');
                                li.classList.add('active');
                            }
                            // Append slides to the wrapper
                            wrapper2.appendChild(div);
                            buttons2.appendChild(li);
                        }
                    }
                    if (data[2].id) {
                        for (var index = 0; index < 5; index++) {
                            // console.log(data);
                            // Create indicators
                            var li = document.createElement('li');
                            li.setAttribute('data-target', '#carouselIndicators-3');
                            li.setAttribute('data-slide-to', data[i].id-11);
                            // Create carousel elements
                            var div = document.createElement('div');
                            div.classList.add('carousel-item');
                            div.innerHTML =`<img class="d-block w-100" src="https://picsum.photos/1200/400?random=${data[i].id}" alt="Slide ${data[i].id-10}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Image ${data[i].id-10}</h5>
                                                    <p>${data[i].title}</p>
                                            </div>
                                            `
                            i=i+1;
                            // Add active class to the first slide and to first indicator
                            if (i == 11) {
                                div.classList.add('active');
                                li.classList.add('active');
                            }
                            // Append slides to the wrapper
                            wrapper3.appendChild(div);
                            buttons3.appendChild(li);
                        }
                    }
                    if (data[3].id) {
                        for (var index = 0; index < 5; index++) {
                            // console.log(data);
                            // Create indicators
                            var li = document.createElement('li');
                            li.setAttribute('data-target', '#carouselIndicators-4');
                            li.setAttribute('data-slide-to', data[i].id-16);
                            // Create carousel elements
                            var div = document.createElement('div');
                            div.classList.add('carousel-item');
                            div.innerHTML =`<img class="d-block w-100" src="https://picsum.photos/1200/400?random=${data[i].id}" alt="Slide ${data[i].id-15}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Image ${data[i].id-15}</h5>
                                                    <p>${data[i].title}</p>
                                            </div>
                                            `
                            i=i+1;
                            // Add active class to the first slide and to first indicator
                            if (i == 16) {
                                div.classList.add('active');
                                li.classList.add('active');
                            }
                            // Append slides to the wrapper
                            wrapper4.appendChild(div);
                            buttons4.appendChild(li);
                        }
                    }
                    if (data[4].id) {
                        for (var index = 0; index < 5; index++) {
                            // console.log(data);
                            // Create indicators
                            var li = document.createElement('li');
                            li.setAttribute('data-target', '#carouselIndicators-5');
                            li.setAttribute('data-slide-to', data[i].id-21);
                            // Create carousel elements
                            var div = document.createElement('div');
                            div.classList.add('carousel-item');
                            div.innerHTML =`<img class="d-block w-100" src="https://picsum.photos/1200/400?random=${data[i].id}" alt="Slide ${data[i].id-20}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Image ${data[i].id-20}</h5>
                                                    <p>${data[i].title}</p>
                                            </div>
                                            `
                            i=i+1;
                            // Add active class to the first slide and to first indicator
                            if (i == 21) {
                                div.classList.add('active');
                                li.classList.add('active');
                            }
                            // Append slides to the wrapper
                            wrapper5.appendChild(div);
                            buttons5.appendChild(li);
                        }
                    }
                }
            })
            .catch((error) => {
                console.log(error);
            });
        }
    }, false);
})();
