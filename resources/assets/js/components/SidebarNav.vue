<template>
    <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar text-white pl-2">
        <div class="user-card my-4 clearfix">
            <img class="float-left rounded-circle profile-image-md mr-3 p-0" src="/profile/picture" />
            <h6 class="float-left mt-3 text-dark" >Welcome <br><span class="text-info">Jason</span></h6>
        </div>
        <ul class="nav">
            <li class="nav-item">Analytics
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page Views</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sessions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conversions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Revenue</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">Lists
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sessions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Views</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "sidebar-nav"
    }
</script>

<style scoped>

</style>