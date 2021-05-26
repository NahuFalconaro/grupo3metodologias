document.addEventListener("DOMContentLoaded", () => {
    let buttons = document.querySelectorAll(".edit_btn");

    buttons.forEach(button => {
        button.addEventListener("click", open_edit_menu);
    });
});

function open_edit_menu() {
    let id = this.id;

    let father_td = this.parentElement;
    let tr = father_td.parentElement;


    let name = tr.childNodes[1].innerHTML;
    let accepted = tr.childNodes[3].id;
    let description = tr.childNodes[5].innerHTML;

    document.querySelector("#popup_form").action += id;
    document.querySelector("#popup_name").value = name;
    document.querySelector("#popup_accepted").value = accepted;
    document.querySelector("#popup_description").value = description;

    let popup_html = document.querySelector(".edit_popup");
    popup_html.classList.remove("hidden");
    popup_html.classList.add("shown");

    let closers = document.querySelectorAll(".popup_close");

    closers.forEach(closer => {
        closer.addEventListener("click", () => {
            close_popup(popup_html);
        })
    });

}

function close_popup(popup) {
    popup.classList.remove("shown");
    popup.classList.add("hidden");
}