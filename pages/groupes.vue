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
        <h2>L'Érablière St-Germain se veut un lieu de rassemblement accueillant dans un décor bucolique</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos vero provident excepturi explicabo inventore velit sed itaque quidem possimus mollitia!</p>
        <p>Odit repudiandae dolorem accusantium doloremque labore sunt iure aliquam explicabo iste totam. Fugit amet illo magni labore! Vitae, maiores facere.</p>
        <p>Tenetur laborum unde officia repellendus earum asperiores, nesciunt corporis tempora aut, repudiandae quo deserunt quod voluptatum saepe aliquid, beatae ratione!</p>
        <p>Officia natus odio dolorum veniam laudantium magni, eum sed corrupti doloremque. Porro iure eos quae iusto, vel distinctio sed eligendi?</p>
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
