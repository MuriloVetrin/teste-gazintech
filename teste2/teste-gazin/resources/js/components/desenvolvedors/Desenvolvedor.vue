<template>
    <div class="container">
        <h1>Desenvolvedores</h1>
        <hr>

        <router-link to="/desenvolvedores/create" class="btn btn-primary mb-2">
            Novo desenvolvedor
        </router-link>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'Desenvolvedor'
    }
</script>
