<template>
  <div class="groupes">
    <header>
      <entete />
      <div class="container">
        <h1>Groupes et événements</h1>
      </div>
    </header>
    <main>
      <div class="container texte max-width-1250">
        <h2>Titre h2</h2>
      </div>
    </main>
    <div class="photos-page">
       <div class="container max-width-1250">
          <img src="../static/Dimensions_finales/photo-generique.png" alt="Photo de la cabane à sucre">
       </div>
    </div>
    <pied />
  </div>
</template>

<script>

import entete from '@/components/Entete'
import pied from '@/components/Footer'

export default {
  components: {
    entete,
    pied
  }
}
</script>

<style>

</style>
