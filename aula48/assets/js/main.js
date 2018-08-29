
window.onload = function() {
    document.getElementById("titular").style.display = 'none';

    document.querySelector("#lechuza").style.filter = "grayscale(100%)";

    document.querySelectorAll("input").forEach(
      function(element){
        element.style.background = 'red';
      });

      let copyright = document.getElementById("copyright");
      console.log(copyright.attributes);

      let twitter = document.querySelector(".twitter");
      console.log(twitter.getAttribute("href"));

      let facebook = document.querySelector(".facebook");
      console.log(facebook.getAttribute("href"));

      let youtube = document.querySelector(".youtube");
      console.log(youtube.setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA"));

      let form = document.querySelector("form");
      console.log(form.hasAttribute("action"));

      let editform = document.querySelector("form");
      console.log(editform.removeAttribute("url"));
      console.log(editform.setAttribute("url", "https://br.digitalhouse.com/?gclid=EAIaIQobChMInOa50IKR3QIVDgaRCh2L3gm5EAAYASAAEgIwr_D_BwE"));

      document.querySelectorAll("h2").forEach(
        function(element){
          element.style.color = 'red';
      });

      document.querySelectorAll(".icon").forEach(
        function(element){
          element.style.color = 'green';
      });

      // ELEMENTOS
      // 1
      let a = document.createElement("A");
      let btn = document.createElement("BUTTON");
      a.appendChild(btn);
      document.querySelector(".botao").appendChild(btn);

      btn.onclick = function() {
        document.getElementById("lechuza").style.display = 'none';
      }

      //2
      let editartop = document.querySelector("#top");
      editartop.textContent = 'Topo';
      let editarwork = document.querySelector("#work");
      editarwork.textContent = 'Trabalho';
      let editarportfolio = document.querySelector("#portfolio");
      editarportfolio.textContent = 'Portfolio';
      let editarcontact = document.querySelector("#contact");
      editarcontact.textContent = 'Contato';

      //3
      let pai = document.getElementById("pai");
      let filho = document.getElementById("filho");
      pai.removeChild(filho);





      };
