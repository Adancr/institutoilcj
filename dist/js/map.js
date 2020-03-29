let main_body = document.querySelector('head + body');

// date google maps      
let src_map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15606.16914454801!2d-77.04493215219215!3d-12.074981876350655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c91b222884ab%3A0x2720c7b358bab6ec!2sInstituto%20ILCJ%20-%20Diplomados%20Derecho%20Administrativo%2C%20Gesti%C3%B3n%20Publica%2C%20penal%2C%20familia%2C%20civil.!5e0!3m2!1ses!2spe!4v1585455120519!5m2!1ses!2spe";
let containerMapGoogle = document.querySelector('.fyn-add-maps');

let iframe_map = document.createElement('iframe');
iframe_map.src = src_map;
iframe_map.width = '100%';
iframe_map.height = 450;
iframe_map.style.border = "0";
iframe_map.style.display = "block";
iframe_map.frameBorder = 0;
iframe_map.allowFullscreen = true;



main_body.addEventListener('mouseover', function(){
    let mapGoogle = document.querySelector('iframe');
	if (mapGoogle) {
		// alert('hay un mapa')
	} else {
		containerMapGoogle.appendChild(iframe_map);
	}
});

main_body.addEventListener('touchstart', function(){
	let mapGoogle = document.querySelector('iframe');
	if (mapGoogle) {
		// alert('hay un mapa')
	} else {
		containerMapGoogle.appendChild(iframe_map);
	}
});