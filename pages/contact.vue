<template>
  <div class="contact">
    <header>
      <entete />
      <div class="container">
        <h1>Contactez-nous</h1>
      </div>
    </header>
    <main>
      <div class="container texte max-width-1250">
        <h2>Titre h2</h2>
      </div>
    </main>
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
