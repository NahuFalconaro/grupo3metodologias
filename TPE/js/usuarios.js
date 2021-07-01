document.addEventListener("DOMContentLoaded", () => {

    let open = false;
    let popup = document.querySelector("#popup");

    let popup_title = popup.querySelector("#user_title");
    let popup_dni = popup.querySelector("#user_dni");
    let popup_name = popup.querySelector("#user_name");
    let popup_role = popup.querySelector("#user_role");
    let btn_popup_close = popup.querySelector("#popup_close");
    let btn_popup_save = popup.querySelector("#popup_save");
    let popup_form = popup.querySelector("#popup_form");


    document.querySelector("#btn_add_user").addEventListener("click", toggle_add_popup);
    btn_popup_close.addEventListener("click", () => {
        popup_form.action = "";
        popup_dni.value = "";
        popup_name.value = "";
        popup_role.value = "";
        toggle_popup();
    });

    let btns_modify = document.querySelectorAll(".modify");

    for (let index = 0; index < btns_modify.length; index++) {
        let btn = btns_modify[index];
        btn.addEventListener("click", toggle_edit_popup)
    }



    function toggle_edit_popup() {
        popup_title.innerHTML = "Modificar usuario";
        let info = extractInfo(this.parentElement.parentElement);
        popup_dni.value = info["dni"];
        popup_name.value = info["nombre"];
        popup_role.value = info["rol"];

        popup_form.action = "modifyUser/" + info["dni"] + "";

        toggle_popup();
    }

    function extractInfo(tr) {
        let info = [];
        info["dni"] = tr.children[0].innerHTML;
        info["nombre"] = tr.children[1].innerHTML;
        info["rol"] = tr.children[2].innerHTML;
        return info;
    }

    function toggle_add_popup() {
        popup_title.innerHTML = "Añadir usuario";
        popup_dni.value = "";
        popup_name.value = "";
        popup_role.value = "";

        btn_popup_save.addEventListener("click", modify_form_add);
        toggle_popup();
    }

    function modify_form_add() {
        popup_form.action = "addUser";
        btn_popup_save.removeEventListener("click", modify_form_add);
    }

    function toggle_popup() {
        if (!open) {
            popup.classList.add("shown");
            popup.classList.remove("hidden");
            open = true;
        } else {
            popup.classList.add("hidden");
            popup.classList.remove("shown");
            open = false;
        }
    }

});