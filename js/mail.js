<script>
function entra(){
  const element = document.getElementById("scopri_di_piu");
  element.addEventListener('animationend', () => {
    element.classList.remove('animate__animated', 'animate__fadeInUp', 'animate__delay-1s');
    element.classList.add('animate__animated', 'animate__bounce');
    element.addEventListener('animationend', () => {
      element.classList.remove('animate__animated', 'animate__bounce');
    });
  });
}

</script>
