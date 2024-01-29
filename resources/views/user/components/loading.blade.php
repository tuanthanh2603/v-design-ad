<div class="loading-container">
    <div class="loading-background"></div>
    <div class="loading-text">VDesignAds</div>
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
        font-family: 'Cursive', cursive;
        font-size: 60px;
        color: #FFF;
        opacity: 0;
        animation: fadeIn 2s ease-in-out forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>

<script>
    setTimeout(() => {
        document.querySelector('.loading-container').style.display = 'none';
    }, 3000);
</script>
