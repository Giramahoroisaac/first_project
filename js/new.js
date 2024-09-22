document.querySelector(".login-form").addEventListener("submit", function (e) {
  const username = document.querySelector('input[name="username"]').value;
  const password = document.querySelector('input[name="password"]').value;

  if (username === "" || password === "") {
    alert("Please fill in all fields");
    e.preventDefault(); // Prevents form submission if fields are empty
  }
});
