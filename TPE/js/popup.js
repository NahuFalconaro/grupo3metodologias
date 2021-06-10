document.addEventListener("DOMContentLoaded", () => {
    let buttons = document.querySelectorAll(".edit_btn");

    buttons.forEach(button => {
        button.addEventListener("click", open_edit_menu);
    });
});

//Abre y prepara el pop up
function open_edit_menu() {
    let info = transfer_info(this);

    document.querySelector("#popup_form").action += info[0];
    document.querySelector("#popup_name").value = info[1];
    document.querySelector("#popup_accepted").value = info[2];
    document.querySelector("#popup_description").value = info[3];

    let popup_html = document.querySelector(".edit_popup");
    open_popup(popup_html);

    let closers = document.querySelectorAll(".popup_close");

    closers.forEach(closer => {
        closer.addEventListener("click", () => {
            close_popup(popup_html);
        })
    });

}

//Transfiere la info de la seccion seleccionada de la tabla al Pop up
function transfer_info(td) {
    let info = [];

    info[0] = td.id;

    let father_td = td.parentElement;
    let tr = father_td.parentElement;

    info[1] = tr.childNodes[1].innerHTML;
    info[2] = tr.childNodes[3].id;
    info[3] = tr.childNodes[5].innerHTML;

    return info;
}

//Abre el pop up
function open_popup(popup) {
    popup.classList.add("shown");
    popup.classList.remove("hidden");
}

//Cierra el pop up
function close_popup(popup) {
    popup.classList.remove("shown");
    popup.classList.add("hidden");
}