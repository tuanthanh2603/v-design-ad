<div class="loading-container">
    <div class="loading-background"></div>
    <div class="loading-text">
        <span>V</span>
        <span>&nbsp;</span>
        <span>D</span>
        <span>e</span>
        <span>s</span>
        <span>i</span>
        <span>g</span>
        <span>n</span>
        <span>&nbsp;</span>
        <span>A</span>
        <span>D</span>
        
    </div>
</div>

<style>
    .loading-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        z-index: 9999999;
    }

    .loading-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        filter: blur(10px);
    }

    .loading-text {
      
        font-size: 60px;
        color: #FFF;
        display: flex;
    }

    .loading-text span {
        display: inline-block;
        overflow: hidden;
        animation: revealText 2s ease-in-out forwards;
    }

    @keyframes revealText {
        0% {
            clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
        }
        100% {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }
</style>

<script>
    setTimeout(() => {
        document.querySelector('.loading-container').style.display = 'none';
    }, 3000);
</script>
