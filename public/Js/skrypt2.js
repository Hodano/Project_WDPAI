document.addEventListener("DOMContentLoaded", () => {
    const navTitle = document.getElementById("navService")
    const navUl = document.getElementById("formService")

    navTitle.addEventListener("click", () => {
        if(navUl.classList.contains("form-service-hidden"))
        {
            navUl.classList.remove("form-service-hidden")
        }
        else
        {
            navUl.classList.add("form-service-hidden")
        }
    })
})

