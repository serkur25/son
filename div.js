var slides = document.querySelector(".slides");

for (var i = 1; i <= 10; i++) {
  var slide = document.createElement("div");
  slide.classList.add("slide");
  
  var link = document.createElement('a');
  link.href = 'resim' + i + '-linki';
  
  var img = document.createElement('img');
  img.src = 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/artistic-album-cover-design-template-d12ef0296af80b58363dc0deef077ecc_screen.jpg?ts=1561488440';
  img.alt = 'resim' + i + '-altyazı';
  
  var p = document.createElement('p');
  p.textContent = 'Resim ' + i;
  
  link.appendChild(img);
  slide.appendChild(link);
  slide.appendChild(p);
  
  slides.appendChild(slide);
}
