fetch('https://tripzetta.com/api/login.php', {
  method: 'POST',
  body: new URLSearchParams({
    username: 'admin',
    password: 'nehruplace@'
  })
})
.then(res => res.json())
.then(data => console.log(data));
