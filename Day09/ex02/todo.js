var index = 0;
function message() {
    var to_do = prompt("Please, enter the new TO DO:");
    if (to_do) {
        var new_elem = document.createElement('div');
        new_elem.innerHTML = to_do;

        var old_elem = document.getElementById('ft_list');
        old_elem.appendChild(new_elem);

        var list = document.getElementById("ft_list");
        list.insertBefore(new_elem, list.childNodes[0]);
        new_elem.setAttribute('onclick', 'delete_obj(this);');
        new_elem.setAttribute("index", index);
        index++;

        function delete_obj(obj)
        {
            if (confirm("Do You want to delete this?") === true)
            {
                old_elem.removeChild(new_elem);
                deleteCookie(new_elem.getAttribute('name'));
            }
        }
    }

}