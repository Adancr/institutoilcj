document.addEventListener("DOMContentLoaded", function() {
   
  let div, n;
  let v = document.getElementsByClassName("youtube-player");
   
  for (n = 0; n < v.length; n++) {
    div = document.createElement("div");
    div.setAttribute("data-id", v[n].dataset.id);
    div.innerHTML = labnolThumb(v[n].dataset.id);
    // div.onclick = labnolIframe;
    div.onmouseover = labnolIframe;
    v[n].appendChild(div);
  } // end for
   
 }); // end function
 
 function labnolThumb(id) {
  var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
  play = '<div class="play"></div>';
  return thumb.replace("ID", id) + play;
 }
 
 function labnolIframe() {
  var iframe = document.createElement("iframe");
  var embed = "https://www.youtube.com/embed/ID?autoplay=1&amp;start=10";
  iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
  iframe.setAttribute("controls", "0");
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  this.parentNode.replaceChild(iframe, this);
 }