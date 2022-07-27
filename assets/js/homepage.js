class Homepage {
    constructor(){
        this.videoCloseBtn = document.querySelector(".video-overlay__close");
        this.videoOverlay = document.querySelector(".video-overlay");
        this.videoPlayBtn = document.querySelector(".play-button");
        this.events();
    };
    events(){
        this.videoCloseBtn.addEventListener('click', () => {
            this.hideOverlay();
        });
        this.videoPlayBtn.addEventListener('click', () => {
            this.showOverlay();
        })
    }
    hideOverlay(){
        this.videoOverlay.classList.add("display-none");
    }
    showOverlay(){
        this.videoOverlay.classList.remove("display-none");
    }

}
export default Homepage;