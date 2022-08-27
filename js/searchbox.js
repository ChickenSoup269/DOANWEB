// search input menu
const timkiem = () => {
    const searchbox = document.getElementById("searchInputid").value.toUpperCase();
    const storeitems = document.getElementById("searchbox2id")
    const phim = document.querySelectorAll(".movieimg")
    const tenphim = storeitems.getElementsByTagName("h6")

    for (var i = 0; i < tenphim.length; i++) {
        let match = phim[i].getElementsByTagName('h6')[0];
        if (match) {
            let textvalue = match.textContent || match.innerHTML

            if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                phim[i].style.display = "";
            }
            else {
                phim[i].style.display = "none";
            }
        }
    }

}

