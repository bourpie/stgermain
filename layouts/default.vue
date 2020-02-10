<template>
  <div>
    <nuxt />
    <button id="myBtn" title="Retour en haut"><img class="up" src="../static/Dimensions_finales/up.png" alt=""></button>
  </div>
</template>

<style>

@import url('https://fonts.googleapis.com/css?family=Hepta+Slab:700,800|Muli:400,700&display=swap');

body {
  font-family: 'Muli', sans-serif;
}

h1, h2, h3, h4, h5 {
  font-family: 'Hepta Slab', serif;
}

h2, h3, h4, h5 {
  color: #AB4847;
}

p {
  color: #D7944B;
}

.up {
  position: fixed;
  display: none;
  position: fixed;
  bottom: 270px;
  left: 100px;
  z-index: 99;
}

</style>
