<script setup>
import IconSearch from "./IconSearch.vue";
</script>

<template>
  <div class="container_header container_header-search">
    <form>
      <input
        type="text"
        name="search"
        id="search"
        class="search"
        placeholder="Search..."
      />
      <button type="submit" class="btn_search">
        <IconSearch />
      </button>

      <div class="container_header container_header-menu">
        <button type="button" class="button">Add employee</button>
      </div>
    </form>
  </div>
</template>

<style scoped>
.container_header {
  display: flex;
  flex-wrap: nowrap;
  height: auto;
  font-size: 10px;
  line-height: 1.6;
  background-color: var(--vt-c-white-mute);
  border-radius: 8px;
  padding: 15px;
}

.container_header-menu {
  padding: 0;
}

form {
  display: flex;
  justify-content: space-between;
  position: relative;
  width: 100%;
}
.search {
  position: relative;
  width: 40%;
  color: var(--vt-c-grey-font);
  border-radius: 17px;
  border: none;
  outline: none;
  padding: 0 10px;
}
.btn_search {
  position: absolute;
  top: 4px;
  left: 37%;
  width: 30px;
  height: 30px;
  border: none;
  border-radius: 0 5px 5px 0;
  background: inherit;
  padding: 0;
}

.btn_search:hover path {
  fill: var(--vt-c-grey-font);
}

.btn_search:active path {
  fill: var(--vt-c-active-btn);
}

.container_header-menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
</style>
