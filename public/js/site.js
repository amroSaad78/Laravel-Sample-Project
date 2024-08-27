const sr = ScrollReveal({
    distance: "2em",
    duration: 2500,
    reset: true,
});

sr.reveal(".spec", { delay: 200, origin: "bottom" });
sr.reveal(".partsSec h1", { delay: 200, origin: "top" });
sr.reveal(".partsSec h2", { delay: 200, origin: "top" });
sr.reveal(".reasonsSec h2", { delay: 150, origin: "top" });
sr.reveal(".reasonsSec ul", { delay: 200, origin: "right" });
sr.reveal(".spec", { delay: 200, origin: "bottom" });
sr.reveal(".viewBtn", { delay: 200, origin: "bottom" });
sr.reveal(".excellenceSec h2", { delay: 175, origin: "top" });
sr.reveal(".excellenceSec h3", { delay: 200, origin: "top" });
sr.reveal(".excellenceSec p", { delay: 200, origin: "bottom" });
sr.reveal(".whyUs", { delay: 200, origin: "left" });
sr.reveal("footer h2", { delay: 200, origin: "top" });
sr.reveal("footer p", { delay: 200, origin: "bottom" });
sr.reveal(".logoImg", { delay: 200, origin: "left" });
sr.reveal(".services h1", { delay: 200, origin: "bottom" });
sr.reveal(".lemozine h1", { delay: 200, origin: "bottom" });
sr.reveal(".conditions h1", { delay: 200, origin: "bottom" });

const select = document.getElementById("cartype");
select.addEventListener("change", function handleChange(event) {
    const cartype = JSON.parse(
        event.target.options[event.target.selectedIndex].dataset.type
    );
    document.getElementById("carthump").src =
        "/images/" + cartype.image + ".png";
    document.getElementById("seats").innerText = cartype.seat;
    document.getElementById("bags").innerText = cartype.bag;
});
