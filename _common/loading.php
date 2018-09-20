<style type="text/css" media="screen">
    .loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }

    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #fff;
        font-family: 'font-Oswald-M';
    }
    .loading-text span:nth-child(1) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 0s infinite linear alternate;
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    .loading-text span:nth-child(2) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 0.2s infinite linear alternate;
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    .loading-text span:nth-child(3) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 0.4s infinite linear alternate;
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    .loading-text span:nth-child(4) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 0.6s infinite linear alternate;
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    .loading-text span:nth-child(5) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 0.8s infinite linear alternate;
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    .loading-text span:nth-child(6) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 1s infinite linear alternate;
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    .loading-text span:nth-child(7) {
        -webkit-filter: blur(0px);
        filter: blur(0px);
        -webkit-animation: blur-text 1.5s 1.2s infinite linear alternate;
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }

    @-webkit-keyframes blur-text {
        0% {
            -webkit-filter: blur(0px);
            filter: blur(0px);
        }
        100% {
            -webkit-filter: blur(4px);
            filter: blur(4px);
        }
    }

    @keyframes blur-text {
        0% {
            -webkit-filter: blur(0px);
            filter: blur(0px);
        }
        100% {
            -webkit-filter: blur(4px);
            filter: blur(4px);
        }
    }
</style>
<div id="loading" class="loading">
    <div class="loading-text">
        <span class="loading-text-words">L</span>
        <span class="loading-text-words">O</span>
        <span class="loading-text-words">A</span>
        <span class="loading-text-words">D</span>
        <span class="loading-text-words">I</span>
        <span class="loading-text-words">N</span>
        <span class="loading-text-words">G</span>
    </div>
</div>
