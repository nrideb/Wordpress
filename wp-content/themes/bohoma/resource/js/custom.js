/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let bohoMaurl = window.location.href;
const bohoMacatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
bohoMacatLink.forEach((item) => {
  if (item.href === bohoMaurl) {
    item.classList.add("active");
  }
});

/*
    Add class in body when search clicked
*/
let bohoMasearchBtn = document.querySelector(".search-controller svg.search");

if (bohoMasearchBtn !== null) {
  bohoMasearchBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let bohoMasearchContainer = document.querySelector(".search-container");
    bohoMasearchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var bohoMasearchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => bohoMasearchInput.focus(), 0);
  });
}

var bohoMasearchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (bohoMasearchBtnClose !== null) {
  bohoMasearchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}


/*
    Add class in body when social clicked
*/
let bohoMasocialBtn = document.querySelector(".social-controller svg.social");

if (bohoMasocialBtn !== null) {
  bohoMasocialBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");
    document.body.classList.add("open-social");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-social");
    });

    let bohoMasocialContainer = document.querySelector(".social-container");
    bohoMasocialContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var bohoMasocialInput = document.querySelector(".wp-block-social__input");
    window.setTimeout(() => bohoMasocialInput.focus(), 0);
  });
}

var bohoMasocialBtnClose = document.querySelector(
  ".social-controller svg.cross"
);

if (bohoMasocialBtnClose !== null) {
  bohoMasocialBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");

  });
}

/*
    Add blinker on input field when active
*/
let bohoMablinkerField = document.querySelector(".social-controller svg.search");

if (bohoMablinkerField !== null) {
  bohoMablinkerField.addEventListener("click", function () {
    var bohoMasearchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => bohoMasearchInput.focus(), 0);
  });
}