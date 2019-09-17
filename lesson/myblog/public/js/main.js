(function() {
    'use strict';
    const cmds = document.getElementsByClassName("del");
    for (let cmd of cmds) {
        cmd.addEventListener("click", function(e) {
            e.preventDefault();
            if (!confirm("sure?")) return;
            document.getElementById("form_" + this.dataset.id).submit();
        });
    }
})();
