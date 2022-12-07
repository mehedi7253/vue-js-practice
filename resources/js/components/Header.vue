<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Shombhob</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="">Add Member</router-link>
                        </li>
                        <li class="nav-item">
                             <router-link class="nav-link" to="">Add Meal</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="">Add To Cart</router-link>
                        </li>
                        <li class="nav-item">
                             <router-link class="nav-link" to="">Report</router-link>
                        </li>
                    </ul>
                </div>
        </div>
          
    </nav>
</template>