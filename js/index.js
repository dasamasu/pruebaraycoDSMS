
const sending = (e) => {
  e.preventDefault();
  let numero1 = document.getElementById("firstNum").value
  let numero2 = document.getElementById("secNum").value
  let option = document.getElementById("option").value
  
  let params = `num1=${numero1}&num2=${numero2}&option=${option}`;
  const url = "php/calculus.php";
  const xhr = new XMLHttpRequest();
  xhr.open("post", url, true)
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let response = xhr.responseText;
      console.log(response + "yes");
      document.getElementById("resultado").value = response;
      console.log(response + "yes");
    }
  }

  xhr.send(params);
}