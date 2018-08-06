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
