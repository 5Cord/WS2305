document.addEventListener("DOMContentLoaded", () => {


    let massages = document.querySelectorAll('.block_feedBack');

    const divMassage = localStorage.getItem("divMassage");

    if (divMassage == "checkin") {
        document.body.classList.add("checkin");
    }


    massages.forEach((e) => {
        e.addEventListener('click', () => {
            console.log(e);

            e.classList.toggle("checkin");


            let divMassage = "checkin";

            if (e.classList.contains("checkin")) {
                theme_block = "checkin";
            }

            localStorage.setItem("divMassage", divMassageNul);


        });




    })




})