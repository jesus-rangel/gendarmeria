
<template>
  <form class="form-inline my-2 my-lg-0">
    <input
      class="form-control mr-sm-2"
      type="text"
      placeholder="Buscar Afiliado por DNI"
      v-model="value"
    />
    <button
      class="btn btn-secondary my-2 my-sm-0"
      @click.prevent="submit"
      id="search-btn"
    >
      Buscar
    </button>
  </form>
</template>
<script>
export default {
  data: () => {
    return {
      value: "",
    };
  },
  methods: {
    submit() {
      document.location.href = `clientes/${this.value}`;
    },
  },
};
</script>