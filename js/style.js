let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidebar');
let searchBtn = document.querySelector('.bx-search');

btn.onclick = function () {
  sidebar.classList.toggle('active');
};
searchBtn.onclick = function () {
  sidebar.classList.toggle('active');
};

var counter = 1;
setInterval(function () {
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 5000);

const productList = document.querySelector('.box-container');

eventListeners();

// all event listeners
function eventListeners() {
  window.addEventListener('DOMContentLoaded', () => {
    loadJSON();
  });
}

// load product items content form JSON file
function loadJSON() {
  fetch('produk.json')
    .then((Response) => Response.json())
    .then((data) => {
      let html = '';
      data.forEach((product) => {
        html += `
            <div class="box">
              <div class="gambar">
                <img src="${product.gambar}" />
              </div>
              <a href="${product.link}"><h1>${product.nama}</h1></a>
            </div>`;
      });
      productList.innerHTML = html;
    });
}
