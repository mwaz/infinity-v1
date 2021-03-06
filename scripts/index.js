write = content => {
  document.write(content);
};

getDays = time => {
  return Math.floor(time / 1000 / 60 / 60 / 24);
};
getHours = time => {
  return Math.floor(time / 1000 / 60 / 60);
};
getMinutes = time => {
  return Math.floor(time / 1000 / 60);
};
getSeconds = time => {
  return Math.floor(time / 1000);
};

const timeNow = new Date();
const endDate = new Date("Sun Sep 1 2018 00:00:00 GMT+0300 (East Africa Time)");
const timeDifference = endDate - timeNow;

function timer() {
  //   setInterval(timer, 1000);
  write(
    `${getDays(timeDifference)} days ${getHours(
      timeDifference
    )} hours ${getMinutes(timeDifference)} minutes ${getSeconds(
      timeDifference
    )} seconds`
  );
  //   clearInterval(this);
}

getCoins = () => {
  coinArray = [];
  for (i = 0; i < sessionStorage.length; i++) {
    var key = sessionStorage.key(i);
    const coinList = JSON.parse(sessionStorage.getItem(key));
    coinArray.push(coinList);
  }
  console.log(coinArray);
  return coinArray;
};

getCoinListLength = () => getCoins().length;

submit = () => {
  let coinName = document.getElementById("coinName").value;
  let coinValue = document.getElementById("coinValue").value;
  let coinDescription = document.getElementById("coinDescription").value;
  const coinList = [];

  let data = {
    name: coinName,
    value: coinValue,
    description: coinDescription
  };

  errors = {};

  if (!data.name) {
    errors.coinName = "Coin name not provided";
  }
  if (!data.value) {
    errors.coinValue = "Coin value not provided";
  }
  if (!data.description) {
    errors.coinDescription = "Coin description not provided";
  }

  addCoin = (coinArray = [], data) => {
    const newArray = [];
    if (coinArray.length > 0) {
      newArray.push({ data });
      coinArray.concat(newArray);
    }
    coinArray.push(data);
  };

  addCoin(coinList, data);
  sessionStorage.setItem(data.name, JSON.stringify(data));
  getCoins();
  location.reload();
  console.log(data);
};

populateCard = () => {
  for (let i = 0; i < getCoinListLength(); i++) {
    // console.log(i);
    const description = (document.getElementsByClassName(
      "card-text"
    ).textContent = getCoins()[i].description);
    write(description);
    const name = (document.getElementsByClassName(
      "coin-name"
    ).textContent = getCoins()[i].name);
    write(name);
    const value = (document.getElementsByClassName(
      "coin-value"
    ).textContent = getCoins()[i].value);
    write(value);
  }
};

getImage = () =>
  '<img class="card-img-top " width="100%" src="http://www.coinmarketrankings.com/wp-content/uploads/2018/01/finance-3058329_1280-1600x832.jpg" alt="card1 image">';

deleteCoin = key => {
  if (key === null) {
    console.log("key is null");
    alert(`Cannot delete ${key} coin`);
  }

  if (confirm(`Are you sure you want to delete ${key}? `)) {
    sessionStorage.removeItem(key);
    forceReload();
  }
};

editCoin = (...key) => {
  $("#editCoinModal").modal();
  let coinValue = document.getElementById("editCoinValue").value;
  let coinDescription = document.getElementById("editCoinDescription").value;

  let data = {
    name: key[0],
    value: coinValue,
    description: coinDescription
  };

  errors = {};

  if (!data.name) {
    errors.coinName = "Coin name not provided";
  }
  if (!data.value) {
    errors.coinValue = "Coin value not provided";
  }
  if (!data.description) {
    errors.coinDescription = "Coin description not provided";
  }

  sessionStorage.setItem(data.name, JSON.stringify(data));

  if (errors.length <= 0) {
    forceReload();
  }
  console.log(errors, "these are errors");
  // saveCoin();

  console.log(data.name, "key");
};

forceReload = () => {
  window.location.reload(true);
};
