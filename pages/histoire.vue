<template>
  <div class="histoire">
    <header>
      <entete />
      <div class="container">
        <h1>Notre histoire</h1>
      </div>
    </header>
    <main>
      <div class="container texte max-width-1250">
        <h2>Ajoutez un titre accrocheur qui peut aller sur 2 ligne</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque in voluptates optio nobis eum earum porro suscipit, minima unde tenetur iusto consequuntur, ipsum rem odit molestiae commodi molestias, assumenda tempora.</p>
        <p>Architecto totam perspiciatis aperiam laborum natus fugit aut minima, aliquid odio incidunt consequatur est? Ea laudantium provident voluptatem debitis voluptatibus facere quisquam ab totam sint officia mollitia nemo, delectus amet!</p>
        <p>Maxime, a. Voluptatum, eius, veritatis magnam nam, quo explicabo tempore autem unde distinctio adipisci earum cumque porro voluptatem recusandae nobis molestiae accusantium corporis repellat sit. Odio amet unde laborum molestiae.</p>
        <p>Quos ipsa, debitis ad voluptate rerum quasi facilis libero quia numquam temporibus aspernatur facere labore fuga natus distinctio accusamus soluta in optio minus dolore pariatur quisquam est officia aliquid! Accusamus.</p>
        <p>Atque totam quae laudantium quod necessitatibus ab temporibus obcaecati, sed odio voluptatum quibusdam excepturi aut tempore ducimus fuga at doloremque sequi corrupti commodi voluptate pariatur debitis dolores! Itaque, cum ut.</p>
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
