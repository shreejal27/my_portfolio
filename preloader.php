<style>
    .loader {
  position: relative;
  font-size: 16px;
  width: 100%;
  height: 100%;
  background-color: black;
}

.loader:before {
  content: '';
  position: absolute;
  transform: translate(-50%, -50%) rotate(45deg);
  height: 100%;
  width: 4px;
  background: #fff;
  left: 50%;
  top: 50%;
}

.loader:after {
  content: '';
  position: absolute;
  left: 0.2em;
  bottom: 0.18em;
  width: 1em;
  height: 1em;
  background-color: orange;
  border-radius: 15%;
  animation: rollingRock 2.5s cubic-bezier(.79, 0, .47, .97) infinite;
}

@keyframes rollingRock {
  0% {
    transform: translate(0, -1em) rotate(-45deg)
  }

  5% {
    transform: translate(0, -1em) rotate(-50deg)
  }

  20% {
    transform: translate(1em, -2em) rotate(47deg)
  }

  25% {
    transform: translate(1em, -2em) rotate(45deg)
  }

  30% {
    transform: translate(1em, -2em) rotate(40deg)
  }

  45% {
    transform: translate(2em, -3em) rotate(137deg)
  }

  50% {
    transform: translate(2em, -3em) rotate(135deg)
  }

  55% {
    transform: translate(2em, -3em) rotate(130deg)
  }

  70% {
    transform: translate(3em, -4em) rotate(217deg)
  }

  75% {
    transform: translate(3em, -4em) rotate(220deg)
  }

  100% {
    transform: translate(0, -1em) rotate(-225deg)
  }
}
    </style>
    <div class="loader" id="loader"></div>

    <script>
        var loader = document.getElementById("loader");
        window.addEventListener("load", function(){
            loader.style.display="none";
        })
        </script>