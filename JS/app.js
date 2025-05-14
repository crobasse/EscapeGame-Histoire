var els = document.getElementsByClassName("code-part-input")
Array.from(els).forEach((el) => {
    el.addEventListener("input", function (e) {
        // e.target.value = e.target.value.replace(/[^0-9.]/, '').replace(/(\..*?)\..*/g, '$1');

        e.target.value = String.prototype.toUpperCase.call(e.target.value);

        var target = e.target;
        if (target.hasAttribute("next") && target.value.length == 1) {
            var next = target.getAttribute("next");
            var nextEl = document.getElementById(next);
            if (nextEl) {
                nextEl.focus();

            }
        }
    });
})