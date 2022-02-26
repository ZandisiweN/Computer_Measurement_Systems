<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script>
window.onload = function() {
  const address = document.querySelectorAll('.address');
  address.forEach((entry) => {
    let count = 0;
    if (entry.innerText == 'Out of order') {
      count = 0;
      id = entry.previousElementSibling.previousElementSibling;
      let colEntry = entry.innerText;
      const timer = setInterval(function() {
        count++;
        entry.nextElementSibling.innerText = count;

      }, 10000);
    } else {
      count = 0;
      clearInterval()
    }

  });
}
</script>
</body>

</html>