document.addEventListener("DOMContentLoaded", () => {
    let DarkThemsText = document.querySelectorAll(".light_text");
    let DarkThemsBlock = document.querySelectorAll(".light_block");
    let DarkThemsSwiper = document.querySelectorAll(".light_swiper");
    let DarkThemsHF = document.querySelectorAll(".light_HF");
    let DarkThemsSelectOptions = document.querySelectorAll(".light_SO");
    let ButtonDarkSwitchOn = document.querySelector(".DarkSwitchOn");



    const DarkBody = localStorage.getItem("theme");
    const DarkText = localStorage.getItem("theme_text");
    const DarkBlock = localStorage.getItem("theme_block");
    const DarkSwiper = localStorage.getItem("theme_block");
    const DarkHF = localStorage.getItem("theme_block");
    const DarkSO = localStorage.getItem("theme_SO");

    // 
    if (DarkBody == "dark") {
        document.body.classList.add("dark");
    }

    // 
    DarkThemsText.forEach(function(e) {
        if (DarkText == "dark_text") {
            e.classList.add("dark_text");
        }
    })

    // 
    DarkThemsBlock.forEach(function(e) {
        if (DarkBlock == "dark_block") {
            e.classList.add("dark_block");
        }
    })

    DarkThemsSwiper.forEach(function(e) {
        if (DarkSwiper == "dark_block") {
            e.classList.add("dark_block");
        }
    })

    DarkThemsHF.forEach(function(e) {
        if (DarkHF == "dark_block") {
            e.classList.add("dark_block");
        }
    })

    DarkThemsSelectOptions.forEach(function(e) {
        if (DarkSO == "dark_SO") {
            e.classList.add("dark_SO");
        }
    })


    ButtonDarkSwitchOn.addEventListener("click", function() {
        //Темная тема боди
        document.body.classList.toggle("dark");

        // Темная тема текста
        DarkThemsText.forEach(function(e) {
            e.classList.toggle("dark_text");
        })

        // Темная тема блоков
        DarkThemsBlock.forEach(function(e) {
            e.classList.toggle("dark_block");
        })

        // Темная тема слайдера
        DarkThemsSwiper.forEach(function(e) {
            e.classList.toggle("dark_block");
        })

        // Темная тема шапки и подвала
        DarkThemsHF.forEach(function(e) {
            e.classList.toggle("dark_block");
        })

        // Темная тема селекта и его опций
        DarkThemsSelectOptions.forEach(function(e) {
            e.classList.toggle("dark_SO");
        })


        let theme = "light";
        let theme_text = "light_text";
        let theme_block = "light_block";
        let theme_SO = "light_SO";

        // Улосвие для тела
        if (document.body.classList.contains("dark")) {
            theme = "dark";
        }

        // Условие для текста
        DarkThemsText.forEach(function(e) {
            if (e.classList.contains("dark_text")) {
                theme_text = "dark_text";
            }
        })

        // Условие для блока
        DarkThemsBlock.forEach(function(e) {
            if (e.classList.contains("dark_block")) {
                theme_block = "dark_block";
            }
        })

        // Условие для слайдера
        DarkThemsSwiper.forEach(function(e) {
            if (e.classList.contains("dark_block")) {
                theme_block = "dark_block";
            }
        })

        // Условие для шапки и подвала
        DarkThemsHF.forEach(function(e) {
                if (e.classList.contains("dark_block")) {
                    theme_block = "dark_block";
                }
            })
            // Условие для селекта и опций
        DarkThemsSelectOptions.forEach(function(e) {
            if (e.classList.contains("dark_SO")) {
                theme_SO = "dark_SO";
            }
        })

        localStorage.setItem("theme", theme);
        localStorage.setItem("theme_text", theme_text);
        localStorage.setItem("theme_block", theme_block);
        localStorage.setItem("theme_SO", theme_SO);
    })

});