<template>
    <div>
        <mu-container>
            <router-link to="/login" class="nav-link">login</router-link>
            <router-link to="/register" class="nav-link">register</router-link>
            <router-link to="/logout" class="nav-link">logout</router-link>
            <mu-bottom-nav :value.sync="shift" shift>
                <router-link to="/">
                    <mu-bottom-nav-item value="movies" title="Home" icon="ondemand_video"></mu-bottom-nav-item>
                </router-link>
                <router-link to="/food/create">
                    <mu-bottom-nav-item value="books" title="Books" icon="books"></mu-bottom-nav-item>
                </router-link>
                <mu-bottom-nav-item value="music" title="Music" icon="music_note" href="https://twitter.com/basabasa8770"></mu-bottom-nav-item>
                <mu-bottom-nav-item value="pictures" title="Pictures" icon="photo"></mu-bottom-nav-item>
            </mu-bottom-nav>
        </mu-container>
        <router-view></router-view>
    </div>
</template>

<script>
    export default{
        data () {
            return {
                shift: 'movies'
            }
        }
    }
</script>