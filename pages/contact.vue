<template>
  <div>
    <entete />
    <header>
      <div class="conteneur">
        <h1>Contactez-nous</h1>
      </div>
    </header>
    <main>
      <div class="conteneur">
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
