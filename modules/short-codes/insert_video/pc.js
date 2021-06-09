let videos = document.getElementsByClassName('video-block');

for (i=0; i<videos.length; i++) {
    videos[i].addEventListener('click', function(){
        let link = this.querySelector('img').getAttribute('data-video');
        let html = '<div class="iframe-shadow"><iframe width="560" height="315" src="'+ link +'"></iframe></div>';
        this.innerHTML = html;
    });
}