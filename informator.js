function not_available()
{
    alert('Not available now!');
}

function set_listeners()
{
document.getElementById("cms_button_register").addEventListener("click", not_available);
}

set_listeners()